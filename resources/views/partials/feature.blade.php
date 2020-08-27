<div class="grid row-gap-2 px-4 sm:pr-8">
	<icon
		name="{!! $feature['icon'] !!}"
		size="w-6 h-6 lg:w-10 lg:h-10"
		class="text-{!! $classList['accent'] !!} mb-2"
	></icon>

	<h2 class="relative e-h5 leading-normal">
		<span class="absolute h-full w-px -left-4 bg-{!! $classList['accent'] !!}"></span>

		<span class="{!! $classList['title'] !!}">{!! $feature['title'] !!}</span>
	</h2>

	<p class="e-body--small {!! $classList['content'] ?? null !!}">{!! $feature['content'] !!}</p>

	@if (isset($feature['cta']))
		<e-button
			text="{!! $feature['cta']['title'] !!}"
			href="{!! $feature['cta']['url'] !!}"
			class="text-{!! $classList['accent'] !!}"
		></e-button>
	@endif
</div>
