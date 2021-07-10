const colors = require("tailwindcss/colors");

module.exports = {
  purge: {
    content: ["source/**/*.blade.php", "source/**/*.md", "source/**/*.html"],
    safelist: [
      "transition",
      "duration-700",
      "transform",
      "rotate-180",
      "translate-x-full",
      "invisible",
    ],
  },
  theme: {
    extend: {
      colors: {
        orange: colors.orange,
        lime: colors.lime,
        "pale-violet-red": "#DB7093",
      },
      fontFamily: {
        sans: ["Work Sans", "sans-serif"],
      },
    },
  },
  variants: {
    extend: {},
  },
  plugins: [require("@tailwindcss/typography")],
};
