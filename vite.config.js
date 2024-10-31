import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
<<<<<<< HEAD
            input: ['resources/css/app.css', 'resources/js/app.js', 'resources/js/admin.js', ],
=======
            input: ['resources/css/app.css','resources/scss/app.scss', 'resources/js/app.js'],
>>>>>>> 15e669c087036e93d69e7953d4971473b4c0bbbf
            refresh: true,
        }),
    ],
});
