export default {
    content: [
        "./resources/**/*.antlers.html",
        "./resources/**/*.blade.php",
        "./content/**/*.md",
    ],
    darkMode: "class",
    theme: {
        fontFamily: {
            sans: ["Inter", "sans"],
            mono: ["Menlo", "monospace"],
        },
        extend: {
            colors: {
                teal: "#008483",
                "teal-light": "#a6d0cf",
            },
        },
    },
    plugins: [],
    important: true,
};
