<section>
	<p>{!! $subTitle !!}</p>
	
	<h1>{!! $title !!}</h1>

	<p>{!! $content !!}</p>
	
	@foreach ($stats as $stat)
		<div>
			<h2>{!! $stat['figure'] !!}</h2>
	
			<p>{!! $stat['description'] !!}</p>
		</div>
	@endforeach
</section>
