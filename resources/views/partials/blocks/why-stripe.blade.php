<section class="relative overflow-hidden -mb-section-offset">
	@include('partials/guides', [
		'bg' => 'bg-white',
		'guideColour' => 'border-off-white border-opacity-25',
		'angle' => 'both',
	])

	<container spacing="py-section">
		<div class="grid row-gap-8 md:row-gap-12 xl:row-gap-16">
			<div class="grid sm:grid-cols-4">
				<div class="grid gap-6 sm:col-span-3">
					<p class="e-h4 text-brand-purple px-4">{!! $subTitle !!}</p>
					
					<h1 class="e-h2 px-4">{!! $title !!}</h1>
				</div>
			</div>

			<div class="grid items-start row-gap-8 md:grid-cols-2 xl:grid-cols-4">
				@foreach ($features as $feature)
					@include('partials/feature', [
						'feature' => $feature,
						'classList' => [
							'accent' => 'brand-purple',
							'title' => 'text-brand-blue-dark',
						],
					])
				@endforeach
			</div>
		</div>
	</container>
</section>
