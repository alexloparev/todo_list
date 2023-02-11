import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/sass/app.scss',
                'resources/js/app.js',
                'resources/js/fontawesome.js',
                'resources/js/jquery-3.6.3.js',
                'resources/js/jquery-3.6.3.min.js',
                'resources/js/script.js',
            ],
            refresh: true,
        }),
    ],
});
