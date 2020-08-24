<section>
	<h1 class="sr-only">{!! $title !!}</h1>

	<div class="e-grid">
		@foreach ($items as $item)
			<div class="e-grid__item mt-5 md:w-6/24">
				<h2>{!! $item['title'] !!}</h2>

				<placeholder class="pt-4/14">
					{{-- <icon name="{!! $item['name'] !!}"></icon> --}}
	
					<img src="//placehold.it/140x40" alt="placeholder">
				</placeholder>
			</div>
		@endforeach
	</div>
</section>
