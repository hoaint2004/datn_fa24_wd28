import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
<<<<<<< Updated upstream
            input: ['resources/css/app.css', 'resources/js/app.js'],
=======
            input: ['resources/css/app.css', 
                'resources/js/app.js', 
                'resources/js/admin.js', 
                'resources/css/admin/order.scss',
                'resources/css/user/account.scss',
                'resources/js/app.css',

            ],
>>>>>>> Stashed changes
            refresh: true,
        }),
    ],
});
