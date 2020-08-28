<button @click="$root.$data.navOpen = true">🍔</button>

<nav
	v-if="$root.$data.navOpen"
	class="absolute top-0 left-0 bg-white w-full mt-4 rounded-lg overflow-hidden shadow-card"
>
	<div class="flex items-center justify-between px-6 pt-6">
		<h1>{!! $nav['title'] !!}</h1>

		<button @click="$root.$data.navOpen = false">❌</button>
	</div>

	<div class="border-b border-dashed border-brand-grey pb-6 mt-2">
		<ul class="grid grid-cols-2 px-6">
			@foreach ($nav['primary'] as $item)
				<li>
					<a href="{!! $item['url'] !!}">
						<icon-text
							icon="{!! $item['icon'] !!}"
							text="{!! $item['title'] !!}"
							inline
						></icon-text>
					</a>
				</li>
			@endforeach
		</ul>
	</div>

	<div class="my-6">
		<ul class="grid grid-cols-2 px-6">
			@foreach ($nav['secondary'] as $item)
				<li>
					<a href="{!! $item['url'] !!}">
						<icon-text
							icon="{!! $item['icon'] !!}"
							text="{!! $item['title'] !!}"
							inline
						></icon-text>
					</a>
				</li>
			@endforeach
		</ul>
	</div>

	<div class="flex justify-center m-1 bg-brand-grey rounded-md p-5">
		<e-button
			text="{!! $nav['cta']['title'] !!}"
			href="{!! $nav['cta']['url'] !!}"
			type="secondary"
		></e-button>
	</div>
</nav>
