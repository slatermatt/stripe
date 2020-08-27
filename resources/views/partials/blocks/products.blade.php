<section class="relative overflow-hidden -mb-section-offset">
	@include('partials/guides', [
		'bg' => 'bg-brand-grey',
		'angle' => 'bottom',
	])

	<container spacing="pt-20 pb-42 md:pt-32 md:pb-64">
		<div class="grid row-gap-8">
			<div class="grid md:grid-cols-2">
				<div class="grid gap-6 px-4">
					<p class="e-h4 text-brand-purple">{!! $subTitle !!}</p>
					
					<h1 class="e-h2">{!! $title !!}</h1>
				</div>
			</div>

			<div class="grid row-gap-8 md:grid-cols-2">
				@foreach ($content as $para)
					<p class="px-4 @if ($loop->last) md:pr-24 @else md:pr-8 @endif">{!! $para['text'] !!}</p>
				@endforeach
			</div>
	
			<div class="grid md:grid-cols-2">
				<div class="space-x-4 px-4">
					@foreach ($ctas as $cta)
						<e-button
							text="{!! $cta['title'] !!}"
							href="{!! $cta['url'] !!}"
							type="secondary"
						></e-button>
					@endforeach
				</div>
			</div>

			<div class="relative h-92 xs:h-118 md:h-191">
				<div
					class="
						absolute -top-8
						grid items-start gap-4
						grid-rows-products grid-cols-products
						xs:grid-rows-products-xs xs:grid-cols-products-xs xs:gap-6
						md:grid-rows-products-md md:grid-cols-products-md md:gap-10 md:-top-24
					"
				>
					<div
						class="
							col-start-2 row-start-2
							xs:col-start-1 xs:row-start-2
						"
					>
						<placeholder class="pt-card">
							<img
								src="{!! $gallery['card']['url'] !!}"
								alt="{!! $gallery['card']['alt'] !!}"
							>
						</placeholder>
					</div>

					<div
						class="
							row-start-3 col-start-2 row-end-3 col-end-4
							xs:row-start-2 xs:row-end-2 xs:col-end-auto
						"
					>
						<placeholder class="pt-invoice">
							<img
								src="{!! $gallery['invoice']['url'] !!}"
								alt="{!! $gallery['invoice']['alt'] !!}"
							>
						</placeholder>
					</div>

					<div
						class="
							row-start-2 col-start-1
							xs:row-start-3 xs:col-start-1
						"
					>
						<placeholder class="pt-phone max-w-phone ml-auto">
							<img
								src="{!! $gallery['phone']['url'] !!}"
								alt="{!! $gallery['phone']['alt'] !!}"
							>
						</placeholder>
					</div>

					<div
						class="
							row-start-4 col-start-1 row-end-4 col-end-4'
							xs:col-start-2
						"
					>
						<placeholder class="pt-web">
							<img
								src="{!! $gallery['web']['url'] !!}"
								alt="{!! $gallery['web']['alt'] !!}"
							>
						</placeholder>
					</div>
	
					<div
						class="
							row-start-1 col-start-3 row-end-2 col-end-5
							xs:row-start-2 xs:row-end-auto xs:col-end-auto
							md:row-start-1
						"
					>
						<placeholder class="pt-calculator">
							<img
								src="{!! $gallery['calculator']['url'] !!}"
								alt="{!! $gallery['calculator']['alt'] !!}"
							>
						</placeholder>
					</div>
				</div>
			</div>
		</div>
	</container>
</section>

