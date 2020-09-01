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
			v-if="$props.icon"
			:text="$props.text"
			:icon="$props.icon"
			:icon-size="$props.iconSize"
			icon-after
			inline
		/>

		<span
			v-else
			v-text="$props.text"
		/>
	</component>
</template>

<script>
	export default {
		props: {
			text: {
				type: String,
				default: null,
			},

			href: {
				type: String,
				default: null,
			},

			icon: {
				type: String,
				default: null,
			},

			iconSize: {
				type: String,
				default: null,
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
