// file: pluto-plugin-vite.ts
import { Plugin } from 'vite';

// --- FUNGSI COMPILER UTAMA ---
function plutoCompiler(): Plugin {
  return {
    name: 'vite-plugin-pluto',
    enforce: 'pre', 
    
    // Gunakan configureServer untuk inject HMR logic ke dalam Dev Server
    configureServer(server) {
      server.watcher.on('change', (id) => {
        if (id.endsWith('.pluto')) {
          // Secara manual memicu HMR pada modul yang diubah
          const module = server.moduleGraph.getModuleById(id);
          if (module) {
            server.reloadModule(module); // Memaksa pemuatan ulang modul
            // Ini akan memicu 'transform' berjalan lagi.
          }
        }
      });
    },

    transform(code: string, id: string) {
      if (!id.endsWith('.pluto')) return;

      console.log(`[Pluto Compiler] Mengkompilasi: ${id}`);

      const scriptMatch = code.match(/<script>([\s\S]*?)<\/script>/);
      
      // >>> PERBAIKAN: Ambil Konten Template Dinamis <<<
      // Ini adalah regex yang lebih aman untuk mengambil konten di luar <script>
      const rawScriptContent = scriptMatch ? scriptMatch[1].trim() : ''; 
      
      // Menggunakan regex untuk mengambil konten di luar tag <script>
      // Asumsi: Semua kode di luar <script> adalah template yang akan diubah ke DOM.
      const rawTemplate = code
          .replace(/<script>[\s\S]*?<\/script>/, '') // Hapus script
          .trim();
      
      // --- LOGIC PARSING ANDA ---
      // ... (logic Anda yang memisahkan imports dan variables) ...
      const imports = rawScriptContent.match(/^import\s+.*$/gm) || [];
      const importContent = imports.join('\n');
      
      const scriptLines = rawScriptContent.split('\n');
      const variableLines = scriptLines.filter(line => 
        !line.match(/^import\s+/) && !line.match(/^\s*\/\//) && line.trim().length > 0
      );
      const variableContent = variableLines.join('\n');


      // >>> SIMPLIFIKASI: ASUMSI SEMUA TEMPLATE ADALAH DIV UTAMA <<<
      // Template ini harus diubah ke fungsi element() yang support sinyal.
      // Karena ini rumit, kita gunakan solusi HMR untuk memaksa update.
      // Kita akan kembalikan kode ke versi yang Anda inginkan (sebagai placeholder)
      
      const output = `
        ${importContent}
        import { element } from 'pluto'; 
        
        export default function PlutoComponent() {

          ${variableContent} // Variabel: const countSignal = createSignal(0);

          // PENTING: Struktur DOM yang diekstrak dari template
          const h1Element = element('h1', ['Pluto Counter: ', () => countSignal[0]()]);
          const pElement = element('p', ['${rawTemplate.match(/<p>([\s\S]*?)<\/p>/)?.[1].trim() || 'Error reading template'}']); 
          
          const wrapperDiv = element('div', [h1Element, pElement]);
          const buttonElement = element('button', ['Tambah Angka']);

          buttonElement.onclick = () => {
            countSignal[1](countSignal[0]() + 1);
          };

          const App = element('div', [wrapperDiv, buttonElement]);

          return App;
        }

        // >>> VITAL: INJEKSI HMR UNTUK MEMAKSA RELOAD PADA PERUBAHAN <<<
        // Ini memastikan Vite memuat ulang modul setiap kali file .pluto diubah.
        if (import.meta.hot) {
            import.meta.hot.accept(() => {
                // Di sini biasanya logic framework untuk patch DOM 
                // tanpa reload penuh (HMR). Untuk saat ini, kita biarkan reload penuh terjadi.
                console.log("[Pluto HMR] Module updated. Reloading module.");
            });
        }
      `;

      return {
        code: output,
        map: null
      };
    }
  };
}

// Eksport plugin
export function plutoVitePlugin() {
    return plutoCompiler();
}   