<section class="relative overflow-hidden">
	@include('partials/guides')

	<container spacing="pb-16 md:pb-28">
		<h1 class="sr-only">{!! $title !!}</h1>
	
		<div class="grid grid-cols-2 row-gap-16 md:grid-cols-4">
			@foreach ($items as $item)
				<div class="flex items-center justify-center">
					<h2 class="sr-only">{!! $item['title'] !!}</h2>

					<icon
						name="{!! $item['name'] !!}"
						size="w-auto h-8 md:h-10"
					></icon>
				</div>
			@endforeach
		</div>
	</container>
</section>
