<section>
	<p>{!! $subTitle !!}</p>
	
	<h1>{!! $title !!}</h1>

	<p>{!! $content !!}</p>
	
	@foreach ($stats as $stat)
		<div>
			<h1>{!! $stat['figure'] !!}</h1>
	
			<p>{!! $stat['description'] !!}</p>
		</div>
	@endforeach
</section>
