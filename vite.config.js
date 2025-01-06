import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import react from '@vitejs/plugin-react';

export default defineConfig({
    base: '/',
    plugins: [
        laravel({
            input: ['resources/ts/app.tsx'],
            refresh: true,
        }),
        react(),
    ],
    server: {
        host: true,
        port: 5173,
        strictPort: true,
        hmr: {
            host: 'localhost',
        },
    },
    assetsInclude: ['resources/**/*.png']
});
