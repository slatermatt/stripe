<section>
	<p>{!! $subTitle !!}</p>
	
	<h1>{!! $title !!}</h1>
	
	<p>{!! $content !!}</p>
	
	@foreach ($ctas as $cta)
		<e-button
			text="{!! $cta['title'] !!}"
			href="{!! $cta['url'] !!}"
		></e-button>
	@endforeach
	
	@foreach ($features as $feature)
		<div>
			<icon name="{!! $feature['icon'] !!}" ></icon>
	
			<h2>{!! $feature['title'] !!}</h2>
	
			<p>{!! $feature['content'] !!}</p>
	
			<e-button
				text="{!! $feature['cta']['title'] !!}"
				href="{!! $feature['cta']['url'] !!}"
			></e-button>
		</div>
	@endforeach
	
	<placeholder class="pt-9/16">
		<img src="{!! $image['url'] !!}" alt="{!! $image['alt'] !!}">
	</placeholder>
</section>
