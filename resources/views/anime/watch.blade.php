@extends('layouts.app')
@section('title')
	{{ $anime->name }}
@endsection
@section('content')
	{{ Breadcrumbs::render() }}
	<section class="anime-details spad">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="anime__video__player">
						<video id="player" playsinline controls data-poster="{{ asset('assets/videos/anime-watch.jpg') }}">
							<source src="{{ asset('assets/videos/1.mp4') }}" type="video/mp4" />
							<!-- Captions are optional -->
							<track kind="captions" label="English captions" src="#" srclang="en" default />
						</video>
					</div>
					<div class="anime__details__episodes">
						<div class="section-title">
							<h5>List Name</h5>
						</div>
						@for ($i = 1; $i <= $anime->episodes; $i++)
							<a href="#">Ep {{ $i < 10 ? '0' . $i : $i }} </a>
						@endfor
					</div>
				</div>
			</div>
		</div>
	</section>
@endsection
