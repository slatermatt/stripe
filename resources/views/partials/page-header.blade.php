<header class="relative overflow-hidden">
	@include('partials/guides', [
		'bg' => 'bg-white',
		'guideColour' => 'border-off-white border-opacity-25',
	])

	<container spacing="py-28 md:pb-32">
		<div class="grid sm:grid-cols-2 items-center">
			<div class="grid gap-8">
				<div class="relative">
					<h1 class="e-h1 mt-25 pl-4 sm:min-w-title">{!! $title !!}</h1>

					<div
						class="
							gradient__offset
							absolute bottom-0 top-auto -left-4
							min-w-gradient w-screen h-gradient-height
							overflow-hidden
							transform -skew-y-12 origin-gradient
							bg-gradient-to-r from-gradient-orange via-gradient-red to-gradient-purple"></div>

					<div class="absolute top-0 left-0 gradient__burn" aria-hidden="true">
						<h1 class="e-h1 mt-25 pl-4 sm:min-w-title">{!! $title !!}</h1>
					</div>

					<div class="absolute top-0 left-0 gradient__burn opacity-25" aria-hidden="true">
						<h1 class="e-h1 mt-25 pl-4 sm:min-w-title">{!! $title !!}</h1>
					</div>
				</div>
	
				<p class="pl-4 pr-8">{!! $content !!}</p>
	
				<div class="space-x-4 px-4">
					@foreach ($ctas as $cta)
						<e-button
							text="{!! $cta['title'] !!}"
							href="{!! $cta['url'] !!}"
							icon="chevron-right"
							@if ($loop->first)
								type="primary"
							@endif
						></e-button>
					@endforeach
				</div>
			</div>

			<div class="hidden left-32 relative sm:block">
				<placeholder class="pt-full">
					<img src="{!! $image['url'] !!}" alt="{!! $image['alt'] !!}">
				</placeholder>
			</div>
		</div>
	</container>
</header>
