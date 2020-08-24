<placeholder class="pt-logo">
	<icon
		name="logo"
		class="w-full h-full"
	></icon>
</placeholder>

<ul>
	@foreach ($features as $feature)
		<li>
			<icon name="check"></icon>

			<h1>{!! $feature['title'] !!}</h1>

			<p>{!! $feature['content'] !!}</p>
		</li>
	@endforeach
</ul>

<ul>
	@foreach ($links as $link)
		<li>
			<a href="{!! $link['url'] !!}">{!! $link['title'] !!}</a>
		</li>
	@endforeach
</ul>
