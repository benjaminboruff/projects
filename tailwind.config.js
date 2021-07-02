module.exports = {
  purge: {
    content: ["source/**/*.blade.php", "source/**/*.md", "source/**/*.html"],
    safelist: [
      'transition',
      'duration-700',
      'transform',
      'rotate-180',
      'translate-x-full'
    ]
  },
  theme: {
    extend: {},
  },
  variants: {
    extend: {},
  },
  plugins: [require("@tailwindcss/typography")],
};
