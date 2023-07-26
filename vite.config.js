import { defineConfig } from 'vite';
const laravelPlugin = require('laravel-vite-plugin'); // Use CommonJS require syntax

export default defineConfig({
    plugins: [
        laravelPlugin({
            input: ['resources/scss/app.scss', 'resources/js/app.js'],
            refresh: true,
        }),
    ],
    resolve: {
        alias: {
            '~bootstrap': path.resolve(__dirname, 'node_modules/bootstrap'),
            '~resources': '/resources/'
        }
    }
});
