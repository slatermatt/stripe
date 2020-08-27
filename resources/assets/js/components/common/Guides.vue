<template>
	<div class="absolute w-full h-full overflow-visible">
		<div
			:class="[
				'relative w-full h-full top-0 left-0 overflow-hidden',
				$props.bg,
				$data.classList[$props.angle],
			]"
		>
			<div class="absolute w-full h-full top-0 left-0 px-4 pointer-events-none xl:max-w-screen">
				<div class="grid md:grid-cols-2 relative max-w-container h-full mx-auto lg:grid-cols-4">
					<span
						v-for="(guide, index) in $data.guides"
						:key="index"
						:class="[
							'w-px border-l border-dashed border-off-white opacity-25',
							{
								'hidden xs:block': index === 1 || index === 3,
								'absolute top-0 right-0 h-full': index === 4,
							},
						]"
					/>
				</div>
			</div>
		</div>
	</div>
</template>

<script>
	export default {
		props: {
			bg: {
				type: String,
				default: null,
			},

			angle: {
				type: String,
				default: null,
			},
		},

		data() {
			return {
				classList: {
					top: 'transform -skew-y-6 origin-top-right',
					both: 'transform -skew-y-6 origin-top-right',
					bottom: 'transform -skey-y-6 origin-bottom-left',
				},
				guides: 5,
			};
		},
	};
</script>
