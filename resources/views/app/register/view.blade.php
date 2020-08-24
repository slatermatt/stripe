@extends('layouts/app')

@section('content')

	@include('partials/blocks/register-info', $model['info'])

	@include('partials/blocks/register-form', $model['register'])

@endsection
