<template>
	<sprite
		:class="[
			'inline-block fill-current align-top',
			$props.size,
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
				default: 'w-em h-em',
			},
		},
	};
</script>
