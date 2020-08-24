@extends('layouts/app')

@section('content')

	<e-form v-bind='@json($model['form'])'></e-form>

@endsection
