<header class="relative overflow-hidden">
	@include('partials/guides', [
		'bg' => 'bg-white',
		'guideColour' => 'border-off-white border-opacity-25',
	])

	<container spacing="pb-28 md:pb-32">
		<div class="grid sm:grid-cols-2 items-center">
			<div class="grid gap-8">
				<h1 class="e-h1 pl-4 sm:min-w-title">{!! $title !!}</h1>
	
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
