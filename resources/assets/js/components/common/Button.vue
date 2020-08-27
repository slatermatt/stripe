<template>
	<component
		:is="cElement"
		:class="[
			'e-button e-h5',
			cType,
		]"
		:href="$props.href"
	>
		<icon-text
			:text="$props.text"
			:icon="$props.icon"
			icon-after
			inline
		/>
	</component>
</template>

<script>
	export default {
		props: {
			text: {
				type: String,
				required: true,
			},

			href: {
				type: String,
				default: null,
			},

			icon: {
				type: String,
				default: 'chevron-right',
			},

			type: {
				type: String,
				default: null,
			},
		},

		computed: {
			cElement() {
				return this.$props.href ? 'a' : 'button';
			},

			cType() {
				return this.$props.type
					? `e-button--${this.$props.type}`
					: null;
			},
		},
	};
</script>
