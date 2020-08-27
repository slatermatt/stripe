<section class="relative overflow-hidden">
	@include('partials/guides')

	<container>
		<div class="grid row-gap-8 md:grid-cols-4">
			<div class="grid col-span-2 row-gap-6 px-4 sm:pr-24">
				<h1 class="e-h3">{!! $title !!}</h1>
			
				<p>{!! $content !!}</p>

				<div class="space-x-4">
					@foreach ($ctas as $cta)
						<e-button
							text="{!! $cta['title'] !!}"
							href="{!! $cta['url'] !!}"
							@if ($loop->first)
								type="secondary"
							@else
								class="text-brand-purple"
							@endif
						></e-button>
					@endforeach
				</div>
			</div>

			<div class="grid row-gap-8 col-span-2 md:grid-cols-2">
				@foreach ($features as $feature)
					<div class="grid row-gap-2 px-4 sm:pr-8">
						<icon
							name="{!! $feature['icon'] !!}"
							size="w-6 h-6 lg:w-10 lg:h-10"
							class="text-brand-purple"
						></icon>
		
						<h2 class="relative e-h5">
							<span class="absolute h-full w-px -left-4 bg-brand-purple"></span>
		
							<span class="text-brand-blue-dark">{!! $feature['title'] !!}</span>
						</h2>
				
						<p class="e-body--small">{!! $feature['content'] !!}</p>

						<e-button
							text="{!! $feature['cta']['title'] !!}"
							href="{!! $feature['cta']['url'] !!}"
							class="text-brand-purple"
						></e-button>
					</div>
				@endforeach
			</div>
		</div>
	</container>
</section>
