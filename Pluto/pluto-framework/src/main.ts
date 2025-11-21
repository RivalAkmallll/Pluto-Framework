// src/main.ts
// Setelah kompilasi, App.pluto adalah fungsi PlutoComponent()
import PlutoComponent from './App.pluto'; 

const root = document.getElementById('app'); 

if (root) {
    // 1. Panggil fungsi yang dikompilasi (PlutoComponent) untuk mendapatkan elemen DOM.
    const appElement = PlutoComponent(); 
    
    // 2. Pasang elemen DOM ke root (index.html)
    root.appendChild(appElement);
    
    // Hasilnya: Aplikasi Pluto Anda seharusnya sudah terlihat di browser!
}