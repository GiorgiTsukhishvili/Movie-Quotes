/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            backgroundImage: {
                "gradient-radial":
                    "radial-gradient(50% 50% at 50% 50%, var(--tw-gradient-stops))",
            },
            colors: {
                "neutral-650": "rgba(78, 78, 78)",
            },
            borderRadius: {
                lx: "10px",
            },
            lineHeight: {
                11: "54px",
            },
            width: {
                187.5: "750px",
            },
        },
    },
    plugins: [],
};
