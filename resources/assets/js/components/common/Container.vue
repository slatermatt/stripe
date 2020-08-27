<template>
	<div class="relative flex justify-center">
		<div class="w-full max-w-container mx-4">
			<div
				v-if="$props.spacing"
				:class="$props.spacing"
			>
				<slot />
			</div>

			<slot v-else />
		</div>
	</div>
</template>

<script>
	export default {
		props: {
			spacing: {
				type: String,
				default: null,
			},
		},
	};
</script>
