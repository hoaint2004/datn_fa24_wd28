import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/js/app.js'],
            refresh: true,
        }),
    ],
    define: {
        'process.env': {
            MIX_PUSHER_APP_KEY: process.env.MIX_PUSHER_APP_KEY,
            MIX_PUSHER_APP_CLUSTER: process.env.MIX_PUSHER_APP_CLUSTER,
            VITE_PUSHER_APP_KEY: process.env.VITE_PUSHER_APP_KEY,  // Đảm bảo key này được khai báo
            VITE_PUSHER_APP_CLUSTER: process.env.VITE_PUSHER_APP_CLUSTER,  // Đảm bảo cluster được khai báo
        },
    },
});
