<section class="hero">
	<div class="container">
		<div class="hero__slider owl-carousel">
			@foreach ($slider as $slide)
				<div class="hero__items set-bg" data-setbg="{{ $slide->image }}">
					<div class="row">
						<div class="col-lg-6">
							<div class="hero__text">
								<div class="label">{{ $slide->name }}</div>
								<a href="{{ route('anime.watch', ['anime' => $slide->slug]) }}"><span>Watch Now</span> <i
										class="fa fa-angle-right"></i></a>
							</div>
						</div>
					</div>
				</div>
			@endforeach
		</div>
	</div>
</section>
