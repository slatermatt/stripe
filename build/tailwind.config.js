const mapKeys = require('lodash/mapKeys');
const mapValues = require('lodash/mapValues');
const range = require('lodash/range');
const variables = require('../resources/assets/variables.json');

// converters and calculators
const relative = (px, unit = 'rem', base = variables['browser-default-font-size']) => `${px / base}${unit}`;
const letterSpacing = value => `${value / 1000}em`;
const ratio = (x, y) => `${y / x * 100}%`;

// values
const colors = variables['colors'];

const easing = mapValues(variables.easing, val => `cubic-bezier(${val[0]}, ${val[1]}, ${val[2]}, ${val[3]})`);

const screens = mapValues(variables.breakpoints, px => relative(px, 'em'));

const c = variables.columns;
const widths = mapKeys(mapValues(range(0, c), (v) => ratio(c, v + 1)), (v, k) => `${parseInt(k, 10) + 1}/${c}`);

const z = variables['z-indexes'];
const zIndex = z.reduce((v, name, i) => ({ ...v, [name]: z.length - i }), {});

// tailwind settings
module.exports = {
	purge: false,
	target: 'relaxed',
	theme: {
		screens,
		colors: {
			transparent: 'transparent',
			current: 'currentColor',
			inherit: 'inherit',
			...colors,
		},
		fontFamily: {
			body: ['Helvetica Neue', 'Helvetica', 'sans-serif'],
			heading: ['Helvetica Neue', 'Georgia', 'serif'],
			system: ['system-ui', 'sans-serif'],
		},
		boxShadow: {
			none: 'none',
			focus: `0 0 5px ${colors.blue}`,
			outline: `0 0 3px ${colors.blue}, 0 0 6px ${colors.blue}, 0 0 9px ${colors.blue}`,
			card: '0 30px 60px -12px rgba(50,50,93,0.25),0 18px 36px -18px rgba(0,0,0,0.3)',
		},
		fontSize: {
			xs: relative(15),
			sm: relative(16),
			base: relative(18),
			lg: relative(20),
			xl: relative(24),
			'2xl': relative(34),
			'3xl': relative(38),
			'4xl': relative(43),
			'5xl': relative(50),
			'6xl': relative(71),
			'7xl': relative(94),
			full: '100%',
		},
		fontWeight: {
			light: 300,
			normal: 425,
			medium: 500,
			bold: 700,
		},
		letterSpacing: {
			normal: '-0.2px',
			tight: '-0.04em',
			wide: letterSpacing(50),
		},
		lineHeight: {
			none: 1,
			tight: 1.0425,
			snug: 1.2,
			normal: 1.6,
			relaxed: 1.75,
			loose: 2,
		},
		transitionTimingFunction: easing,
		zIndex,
		extend: {
			inset: (theme, { negative }) => ({
				'1/2': '50%',
				...widths,
				...theme('spacing'),
				...(negative(theme('spacing'))),
				...(negative(widths)),
			}),
			gridTemplateColumns: {
				'products-md': '323px 501px 256px',
				'products-xs': '253px 392px 201px',
				'products': '112px 141px 58px 38px',
			},
			gridTemplateRows: {
				'products-md': '86px 201px 126px 425px',
				'products-xs': '70px 157px 97px 333px',
				'products': '107px 87px 125px 185px',
			},
			borderRadius: {
				button: '16.5px',
			},
			minWidth: {
				title: 'calc(100% + 100px)',
			},
			maxWidth: {
				container: relative(1080),
				copy: '35em',
				screen: '100vw',
				phone: relative(300),
				'logo-xl': relative(60),
			},
			padding: {
				full: '100%',
				logo: ratio(60, 25),
				'9/16': ratio(16, 9),
				'4/14': ratio(14, 4),
				'3/4': ratio(4, 3),
				'4/3': ratio(3, 4),
				'66/55': ratio(55, 66),
				'card': ratio(383, 237),
				'invoice': ratio(590, 424),
				'phone': ratio(302, 618),
				'web': ratio(1024, 540),
				'calculator': ratio(304, 566),
			},
			spacing: {
				em: '1em',
				'1/2em': '.5em',
				'191': relative(764),
				'118': relative(472),
				'28': relative(112),
				'42': relative(168),
				'92': relative(368),
				'section-offset': 'calc(calc(100vw - 0px) * 0.106)',
				'section': 'calc(calc(calc(100vw - 0px) * 0.106) + calc(128 * 1px) - 0.106 * calc((calc(100vw - 0px) - 1080px)/2))',
			},
			width: {
				...widths,
			},
		},
	},
	variants: {},
	corePlugins: {
		container: false,
		rotate: false,
		scale: false,
		translate: false,
	},
};
