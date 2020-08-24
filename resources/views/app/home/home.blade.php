@extends('layouts/app')

@section('content')

	@include('partials/blocks', ['blocks' => $model['blocks']])

@endsection
