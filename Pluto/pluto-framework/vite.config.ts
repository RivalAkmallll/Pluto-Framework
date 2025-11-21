import { defineConfig } from 'vite';
import { plutoVitePlugin } from './pluto-plugin-vite';

export default defineConfig({
  plugins: [
    plutoVitePlugin() // Aktifkan plugin Pluto Anda
  ],
  // --- HAPUS resolve.alias ---
  // Kita akan menggunakan alias yang lebih aman di bawah
});