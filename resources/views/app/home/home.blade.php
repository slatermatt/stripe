@extends('layouts/app')

@section('content')

	@include('partials/page-header', $model['pageHeader'])

	@include('partials/blocks/clients', $model['clients'])

	@include('partials/blocks', ['blocks' => $model['blocks']])

	@include('partials/blocks/start', $model['start'])

@endsection
