<section class="relative overflow-hidden -mb-section-offset pb-section-offset">
	@include('partials/guides', [
		'bg' => 'bg-white',
		'guideColour' => 'border-off-white border-opacity-25',
		'angle' => 'bottom',
	])

	<container spacing="pt-20 pb-32 md:pt-32">
		<div class="grid row-gap-8 md:grid-cols-4">
			<div class="grid col-span-2 row-gap-6 px-4 sm:pr-24">
				<h1 class="e-h3">{!! $title !!}</h1>
			
				<p>{!! $content !!}</p>

				<div class="space-x-4">
					@foreach ($ctas as $cta)
						<e-button
							text="{!! $cta['title'] !!}"
							href="{!! $cta['url'] !!}"
							icon="chevron-right"
							@if ($loop->first)
								type="secondary"
							@else
								class="text-brand-purple"
							@endif
						></e-button>
					@endforeach
				</div>
			</div>

			<div class="grid items-start row-gap-8 col-span-2 md:grid-cols-2">
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
