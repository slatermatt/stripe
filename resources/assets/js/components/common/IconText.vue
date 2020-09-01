<template>
	<div
		:class="[
			'items-center',
			$props.inline ? 'inline-flex' : 'flex',
		]"
	>
		<icon
			v-if="!iconAfter"
			:size="iconSize"
			:name="icon"
		/>

		<span
			v-if="text"
			:class="iconAfter ? 'mr-2' : 'ml-2'"
			v-html="text"
		/>

		<icon
			v-if="iconAfter"
			:size="iconSize"
			:name="icon"
		/>
	</div>
</template>

<script>
	export default {
		props: {
			text: {
				type: String,
				default: null,
			},

			icon: {
				type: String,
				required: true,
			},

			iconSize: {
				type: String,
				default: null,
			},

			iconAfter: Boolean,

			inline: Boolean,
		},
	};
</script>
