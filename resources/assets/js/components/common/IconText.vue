<template>
	<div
		:class="[
			'items-center',
			$props.inline ? 'inline-flex' : 'flex',
		]"
	>
		<icon
			v-if="!$props.iconAfter"
			:size="$props.iconSize"
			:name="$props.icon"
		/>

		<span
			v-if="$props.text"
			:class="$props.iconAfter ? 'mr-2' : 'ml-2'"
			v-html="$props.text"
		/>

		<icon
			v-if="$props.iconAfter"
			:size="$props.iconSize"
			:name="$props.icon"
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
