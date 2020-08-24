<section>
	<p>{!! $subTitle !!}</p>
	
	<h1>{!! $title !!}</h1>
	
	@foreach ($features as $feature)
		<div>
			<icon name="{!! $feature['icon'] !!}" ></icon>
	
			<h1>{!! $feature['title'] !!}</h1>
	
			<p>{!! $feature['content'] !!}</p>
		</div>
	@endforeach
</section>
