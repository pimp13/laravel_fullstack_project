import laravel from 'laravel-vite-plugin';
import {defineConfig} from 'vite';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/js/app.js',

                'resources/assets/css/style-rtl.css',
                'resources/assets/vendor/apexcharts/css/apexcharts.css',
                'resources/assets/vendor/overlay-scrollbar/css/overlayscrollbars.min.css',

                'resources/assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js',
                'resources/assets/vendor/purecounterjs/dist/purecounter_vanilla.js',
                'resources/assets/vendor/apexcharts/js/apexcharts.min.js',
                'resources/assets/vendor/overlay-scrollbar/js/overlayscrollbars.min.js',
                'resources/assets/js/functions.js',
            ],
            refresh: true,
        }),
    ],
});
