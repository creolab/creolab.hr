import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";
import { viteStaticCopy } from "vite-plugin-static-copy";

export default defineConfig({
    plugins: [
        laravel({
            input: ["resources/css/site.css", "resources/js/site.js"],
            refresh: true,
        }),
        viteStaticCopy({
            targets: [
                {
                    src: "resources/icons/*.{png,ico,svg,webmanifest}",
                    dest: "icons",
                    flatten: true,
                },
            ],
            structured: false,
        }),
    ],
});
