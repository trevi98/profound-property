/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            screens: {
                sm: "200px",
                // => @media (min-width: 576px) { ... }

                csm: "924px",

                smd: "600px",
                md: "960px",
                // => @media (min-width: 960px) { ... }

                lg: "1400px",
                // => @media (min-width: 1440px) { ... }
            },
            colors: {
                "primary-color": "var(--primary-color)",
                "black-color": "#000000",
            },
            boxShadow: {
                primary: "0px 4px 4px rgba(0, 0, 0, 0.25)",
            },
            fontSize: {
                "primary-font": ["41px", "62px"],
                "secondary-font": ["25px", "38px"],
            },
            keyframes: {
                move: {
                    to: {
                        top: "0",
                    },
                },
                move: {
                    to: {
                        top: "0",
                    },
                },
                show1: {
                    from: {
                        width: "100%",
                    },
                    to: {
                        height: "100%",
                        width: "100%",
                        opacity: "1",
                    },
                },
                show2: {
                    from: {
                        width: "36%",
                    },
                    to: {
                        height: "100%",
                        width: "36%",
                        opacity: "1",
                    },
                },
            },
            animation: {
                move: "move 0.3s linear forwards",
                show1: "show1 0.3s linear 0.3s forwards",
                show1: "show1 0.3s linear forwards",
            },
        },
        screens: {
            mdMid: "1100px",
        },
    },
    plugins: [],
};
