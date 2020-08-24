@foreach ($blocks as $block)
	@include('partials/blocks/' . $block['type'], $block['value'])
@endforeach
