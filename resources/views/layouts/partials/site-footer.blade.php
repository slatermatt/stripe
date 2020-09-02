<footer class="relative overflow-hidden z-site-footer">
	@include('partials/guides', [
		'bg' => 'bg-brand-grey',
		'guideColour' => 'border-grey-500 border-opacity-25',
		'angle' => 'top',
	])

	<container spacing="pb-20 pt-section md:pb-32">
		<div class="grid grid-cols-2 md:grid-cols-4">
			<div class="flex flex-col px-4 e-body e-body--small">
				<div class="space-y-2">
					@include('partials/logo')
	
					<icon-text
						icon="chevron-right"
						text="United Kingdom"
					></icon-text>
	
					<icon-text
						class="mt-1"
						icon="chevron-left"
						text="English (United Kingdom)"
					></icon-text>
				</div>

				<p class="mt-auto">
					&copy; <span v-text="$options.filters.trans('global.brand')"></span>
				</p>
			</div>

			<div class="col-span-2 md:col-span-3">
				<nav class="grid grid-cols-2 e-body e-body--small md:grid-cols-3">
					<section class="px-4">
						<h1 class="font-medium">{!! $footer['products']['title'] !!}</h1>

						<ul class="mt-3 space-y-1">
							@foreach ($footer['products']['items'] as $item)
								<li>
									<a href="{!! $item['url'] !!}" class="no-underline">{!! $item['title'] !!}</a>
								</li>
							@endforeach
						</ul>
					</section>

					<div class="px-4">
						<section>
							<h1 class="font-medium">{!! $footer['developers']['title'] !!}</h1>
	
							<ul class="mt-3 space-y-1">
								@foreach ($footer['developers']['items'] as $item)
									<li>
										<a href="{!! $item['url'] !!}" class="no-underline">{!! $item['title'] !!}</a>
									</li>
								@endforeach
							</ul>
						</section>
	
						<section class="mt-4">
							<h1 class="font-medium">{!! $footer['company']['title'] !!}</h1>
	
							<ul class="mt-3 space-y-1">
								@foreach ($footer['company']['items'] as $item)
									<li>
										<a href="{!! $item['url'] !!}" class="no-underline">{!! $item['title'] !!}</a>
									</li>
								@endforeach
							</ul>
						</section>
					</div>

					<div class="px-4">
						<section>
							<h1 class="font-medium">{!! $footer['use-cases']['title'] !!}</h1>
	
							<ul class="mt-3 space-y-1">
								@foreach ($footer['use-cases']['items'] as $item)
									<li>
										<a href="{!! $item['url'] !!}" class="no-underline">{!! $item['title'] !!}</a>
									</li>
								@endforeach
							</ul>
						</section>
	
						<section class="mt-4">
							<h1 class="font-medium">{!! $footer['resources']['title'] !!}</h1>
	
							<ul class="mt-3 space-y-1">
								@foreach ($footer['resources']['items'] as $item)
									<li>
										<a href="{!! $item['url'] !!}" class="no-underline">{!! $item['title'] !!}</a>
									</li>
								@endforeach
							</ul>
						</section>
					</div>
				</nav>
			</div>
		</div>
	</container>
</footer>
