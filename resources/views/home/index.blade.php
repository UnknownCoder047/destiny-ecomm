@extends('layouts.app')

@section('title')
	Home
@endsection

@section('content')
	@include('home.partials.hero-slider')
	@include('home.partials.products')
@endsection
