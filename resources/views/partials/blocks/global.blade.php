<section class="relative overflow-hidden">
	@include('partials/guides', [
		'bg' => 'bg-brand-blue-dark',
		'guideColour' => 'border-grey-700 border-opacity-50',
		'angle' => 'top',
	])

	<container spacing="pb-20 pt-section md:pb-32">
		<div class="grid row-gap-8 md:row-gap-12 xl:row-gap-16">
			<div class="grid sm:grid-cols-2">
				<div class="grid gap-6 px-4 sm:pr-24 sm:col-span-1">
					<p class="e-h4 text-brand-blue-light">{!! $subTitle !!}</p>
					
					<h1 class="e-h2 text-white">{!! $title !!}</h1>

					<p class="text-off-white">{!! $content !!}</p>
				</div>
			</div>

			<div class="grid items-start row-gap-8 md:grid-cols-2 xl:grid-cols-4">
				@foreach ($stats as $stat)
					<div class="px-4 sm:pr-8">
						<p class="grid row-gap-2">
							<div class="relative e-h3 leading-none">
								<span class="absolute h-full w-px -left-4 bg-brand-blue-light"></span>
			
								<span class="text-white">{!! $stat['figure'] !!}</span>
							</div>
					
							<span class="e-body--small text-off-white">{!! $stat['description'] !!}</span>
						</p>
					</div>
				@endforeach
			</div>
		</div>
	</container>
</section>
