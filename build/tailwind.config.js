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
		},
		fontSize: {
			xs: relative(15),
			sm: relative(16),
			base: relative(18),
			lg: relative(20),
			xl: relative(34),
			'2xl': relative(38),
			'3xl': relative(43),
			'4xl': relative(50),
			'5xl': relative(71),
			'6xl': relative(94),
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
				...(negative(widths)),
				'32': relative(128),
			}),
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
			},
			padding: {
				full: '100%',
				logo: ratio(300, 87),
				'9/16': ratio(16, 9),
				'4/14': ratio(14, 4),
				'3/4': ratio(4, 3),
				'4/3': ratio(3, 4),
			},
			spacing: {
				em: '1em',
				'1/2em': '.5em',
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
		skew: false,
		translate: false,
	},
};
