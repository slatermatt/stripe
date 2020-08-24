<section>
	<p>{!! $subTitle !!}</p>
	
	<h1>{!! $title !!}</h1>
	
	@foreach ($content as $para)
		<p>{!! $para['text'] !!}</p>
	@endforeach
	
	@foreach ($ctas as $cta)
		<e-button
			text="{!! $cta['title'] !!}"
			href="{!! $cta['url'] !!}"
		></e-button>
	@endforeach
	
	<placeholder class="pt-9/16">
		<img src="{!! $image['url'] !!}" alt="{!! $image['alt'] !!}">
	</placeholder>
</section>

