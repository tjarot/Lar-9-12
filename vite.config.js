import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import tailwindcss from '@tailwindcss/vite';
import path from 'path';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                // MENGGABUNGKAN FILE ASSETS
                // Memproses Semua File Assets
                // 'resources/css/style1.css',
                // 'resources/css/style2.css',
                // 'resources/js/script1.js',
                // 'resources/js/script2.js',

                // Import ke file master
                // 'resources/css/app.css',
                // 'resources/js/app.js'

                // Import Semua File ke app.js
                // 'resources/js/app.js'

                // Menggunakan scss
                // 'resources/scss/style.scss',

                // Bundling File Bootstrap
                'resources/scss/app.scss',
                'resources/js/app.js'
            ],
            refresh: true,
        }),
        tailwindcss(),
    ],
    resolve: {
        alias: {
            '~bootstrap': path.resolve(__dirname, 'node_modules/bootstrap')
        }
    }
});
