const colors = {
  black: '#102A43',
  white: '#ffffff',
  transparent: 'transparent',
  grey: {
    '100': '#F0F4F8',
    '200': '#D9E2EC',
    '300': '#BCCCDC',
    '400': '#9FB3C8',
    '500': '#829AB1',
    '600': '#627D98',
    '700': '#486581',
    '800': '#334E68',
    '900': '#243B53',
  },
};

module.exports = {
  theme: {
    colors,
    fontFamily: {
      serif: [
        'ff-meta-serif-web-pro',
        'Georgia',
        'Cambria',
        'Times New Roman',
        'Times',
        'serif',
      ],
      sans: [
        'ff-meta-web-pro',
        '-apple-system',
        'BlinkMacSystemFont',
        'Segoe UI',
        'Roboto',
        'Oxygen',
        'Ubuntu',
        'Cantarell',
        'Fira Sans',
        'Droid Sans',
        'Helvetica Neue',
        'sans-serif',
      ],
    },
    fill: colors,
    extend: {
      height: {
        hero: '750px',
        '1px': '1px',
      },
      fill: {
        'primary-med': '#64929D',
      },
      width: {
        '9/10': '90%',
      },
    },
  },
  variants: {
    // Some useful comment
  },
  plugins: [
    // Some useful comment
  ],
};
