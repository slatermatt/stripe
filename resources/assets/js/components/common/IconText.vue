<template>
	<div class="flex items-center">
		<icon
			v-if="!iconAfter"
			:name="icon"
		/>

		<span
			:class="iconAfter ? 'mr-2' : 'ml-2'"
			v-html="text"
		/>

		<icon
			v-if="iconAfter"
			:name="icon"
		/>
	</div>
</template>

<script>
	export default {
		props: {
			text: {
				type: String,
				required: true,
			},

			icon: {
				type: String,
				required: true,
			},

			iconAfter: Boolean,

			inline: Boolean,
		},
	};
</script>
