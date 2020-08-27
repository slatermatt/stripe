<section class="relative overflow-hidden -mb-section">
	@include('partials/guides', [
		'bg' => 'bg-brand-blue-dark',
		'angle' => 'both',
	])

	<container spacing="py-32 md:py-64">
		<div class="grid row-gap-8 sm:grid-cols-2 items-center">
			<div class="grid row-gap-16">
				<div class="grid gap-6">
					<p class="e-h4 text-brand-blue-light px-4">{!! $subTitle !!}</p>
					
					<h1 class="e-h2 text-white px-4">{!! $title !!}</h1>

					<p class="text-off-white px-4">{!! $content !!}</p>

					<div class="grid md:grid-cols-2">
						<div class="space-x-4 px-4">
							@foreach ($ctas as $cta)
								<e-button
									text="{!! $cta['title'] !!}"
									href="{!! $cta['url'] !!}"
									type="tertiary"
								></e-button>
							@endforeach
						</div>
					</div>
				</div>

				<div class="grid items-start row-gap-8 lg:grid-cols-2">
					@foreach ($features as $feature)
						@include('partials/feature', [
							'feature' => $feature,
							'classList' => [
								'accent' => 'brand-blue-light',
								'title' => 'text-white',
								'content' => 'text-off-white',
							],
						])
					@endforeach
				</div>
			</div>
			
			<placeholder class="pt-66/55">
				<img src="{!! $image['url'] !!}" alt="{!! $image['alt'] !!}">
			</placeholder>
		</div>
	</container>
</section>
