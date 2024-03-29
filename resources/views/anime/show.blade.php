@extends('layouts.app')
@section('title')
	{{ ucwords($anime->name) }}
@endsection
@section('content')
	{{ Breadcrumbs::render() }}
	<section class="anime-details spad">
		<div class="container">
			<div class="anime__details__content">
				<div class="row">
					<div class="col-lg-3">
						<div class="anime__details__pic set-bg" data-setbg="{{ $anime->image }}">
							<div class="comment"><i class="fa fa-comments"></i> 0</div>
							<div class="view"><i class="fa fa-eye"></i> 0</div>
						</div>
					</div>
					<div class="col-lg-9">
						<div class="anime__details__text">
							<div class="anime__details__title">
								<h3>{{ ucwords($anime->name) }} </h3>
								{{-- <span>フェイト／ステイナイト, Feito／sutei naito</span> --}}
							</div>
							{{-- <div class="anime__details__rating">
								<div class="rating">
									<a href="#"><i class="fa fa-star"></i></a>
									<a href="#"><i class="fa fa-star"></i></a>
									<a href="#"><i class="fa fa-star"></i></a>
									<a href="#"><i class="fa fa-star"></i></a>
									<a href="#"><i class="fa fa-star-half-o"></i></a>
								</div> --}}
							<span>0 Votes</span>
						</div>
						{{-- <p>Every human inhabiting the world of Alcia is branded by a “Count” or a number written on
								their body. For Hina’s mother, her total drops to 0 and she’s pulled into the Abyss,
								never to be seen again. But her mother’s last words send Hina on a quest to find a
								legendary hero from the Waste War - the fabled Ace!</p> --}}
						<div class="anime__details__widget">
							<div class="row">
								<div class="col-lg-6 col-md-6">
									<ul>
										<li><span>Type:</span> {{ ucwords($anime->category->name) }}</li>
										{{-- <li><span>Studios:</span> Lerche</li> --}}
										{{-- <li><span>Date aired:</span> Oct 02, 2019 to ?</li> --}}
										<li><span>Status:</span> {{ ucwords($anime->status) }}</li>
										<li><span>Genre:</span>
											@foreach ($anime->tags()->get() as $tag)
												{{ ucwords($tag->name) }}
											@endforeach
										</li>
									</ul>
								</div>
								<div class="col-lg-6 col-md-6">
									<ul>
										<li><span>Scores:</span> 0 /0</li>
										<li><span>Rating:</span> 0 / 0 times</li>
										{{-- <li><span>Duration:</span> 24 min/ep</li> --}}
										{{-- <li><span>Quality:</span> HD</li> --}}
										<li><span>Views:</span> 0</li>
									</ul>
								</div>
							</div>
						</div>
						<div class="anime__details__btn">
							{{-- <a href="#" class="follow-btn"><i class="fa fa-heart-o"></i> Follow</a> --}}
							<a href="{{ route('anime.watch', ['anime' => $anime->slug]) }}" class="watch-btn"><span>Watch Now</span> <i
									class="fa fa-angle-right"></i></a>
						</div>
					</div>
				</div>
			</div>
		</div>
		</div>
	</section>
@endsection
