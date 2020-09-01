<template>
	<sprite
		:class="[
			'inline-block fill-current align-top',
			cSize,
		]"
		:name="$props.name"
	/>
</template>

<script>
	import Sprite from './Sprite';

	export default {
		components: {
			Sprite,
		},

		props: {
			name: {
				type: String,
				required: true,
			},

			size: {
				type: String,
				default: null,
			},
		},

		computed: {
			cSize() {
				const { size } = this.$props;

				if (size && size != null) return size;

				return 'w-em h-em';
			},
		},
	};
</script>
