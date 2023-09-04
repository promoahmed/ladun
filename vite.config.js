import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";
import vue from "@vitejs/plugin-vue";
import { resolve, dirname } from 'node:path'
import { fileURLToPath } from "url";
import VueI18nPlugin from '@intlify/unplugin-vue-i18n/vite'

export default defineConfig({
    resolve: {
        alias: {
            "@": resolve(__dirname, "./resources/js"),
        },
    },
    plugins: [
        laravel({
            input: [
                "resources/css/app.css",
                // 'resources/js/app.js',
                "resources/js/main.js",
            ],
        }),
        vue(),
        // added this vueI18nPlugin to define locales
        VueI18nPlugin({
            include: resolve(
                dirname(fileURLToPath(import.meta.url)),
                "./resources/js/locales/**"
            ),
        }),
    ],
});
