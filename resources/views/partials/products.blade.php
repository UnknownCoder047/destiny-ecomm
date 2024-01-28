<div class="trending__product">
	<div class="row">
		<div class="col-lg-8 col-md-8 col-sm-8">
			<div class="section-title">
				<h4>Trending Now</h4>
			</div>
		</div>
		<div class="col-lg-4 col-md-4 col-sm-4">
			<div class="btn__all">
				<a href="#" class="primary-btn">View All <span class="arrow_right"></span></a>
			</div>
		</div>
	</div>
	<div class="row">
		@foreach ($animes as $anime)
			<div class="col-lg-4 col-md-6 col-sm-6">
				@include('partials.cards.card', ['anime' => $anime])
			</div>
		@endforeach
	</div>
</div>
