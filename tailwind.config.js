/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            colors: {
                primarybase: "#423c6a",
                sekunderbase: "#4a47a2",
                hoverbase: "#f4b0c7",
                textbase: "#423c6a",
            },
        },
    },
    plugins: [],
};
