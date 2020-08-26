<header class="relative overflow-hidden">
	@include('partials/guides')

	<container>
		<div class="grid sm:grid-cols-2 items-center">
			<div class="grid gap-8">
				<h1 class="e-h1 pl-4 sm:min-w-title">{!! $title !!}</h1>
	
				<p class="pl-4 pr-8">{!! $content !!}</p>
	
				<div class="px-4">
					@foreach ($ctas as $cta)
						<e-button
							text="{!! $cta['title'] !!}"
							href="{!! $cta['url'] !!}"
							@if ($loop->first)
								type="primary"
								class="mr-4"
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
