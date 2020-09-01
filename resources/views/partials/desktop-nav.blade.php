<nav>
	<ul class="flex items-center">
		@foreach ($nav as $item)
			<li class="px-5 py-2">
				<e-button
					class="py-0"
					text="{!! $item['title'] !!}"
					@if (@isset($item['url']))
						href="{!! $item['url'] !!}"
					@endif
				></e-button>
			</li>
		@endforeach
	</ul>
</nav>
