<section class="relative overflow-hidden">
	@include('partials/guides', ['bg' => 'bg-brand-blue-dark'])

	<container>
		<div class="grid row-gap-8 sm:grid-cols-2 items-center">
			<div class="grid row-gap-16">
				<div class="grid gap-6">
					<p class="e-h3 text-brand-blue-light px-4">{!! $subTitle !!}</p>
					
					<h1 class="e-h2 text-white px-4">{!! $title !!}</h1>

					<p class="text-off-white px-4">{!! $content !!}</p>

					<div class="grid md:grid-cols-2">
						<div class="px-4">
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
						<div class="grid row-gap-2">
							<icon
								name="{!! $feature['icon'] !!}"
								size="w-6 h-6 lg:w-10 lg:h-10"
								class="pl-4"
							></icon>
		
							<h2 class="relative e-h5 text-white px-4">
								<span class="absolute h-full w-px left-0 bg-brand-blue-light"></span>

								<span>{!! $feature['title'] !!}</span>
							</h2>
					
							<p class="e-body--small text-off-white px-4">{!! $feature['content'] !!}</p>
					
							<e-button
								text="{!! $feature['cta']['title'] !!}"
								href="{!! $feature['cta']['url'] !!}"
								class="text-brand-blue-light px-4"
							></e-button>
						</div>
					@endforeach
				</div>
			</div>
			
			<placeholder class="pt-66/55">
				<img src="{!! $image['url'] !!}" alt="{!! $image['alt'] !!}">
			</placeholder>
		</div>
	</container>
</section>
