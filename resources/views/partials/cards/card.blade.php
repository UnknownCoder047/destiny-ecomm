<div class="product__item">
	<div class="product__item__pic set-bg" data-setbg="{{ $anime->image }}">
		<div class="ep">{{ $anime->episodes }}/{{ $anime->episodes }} </div>
		<div class="comment"><i class="fa fa-comments"></i> 0</div>
		<div class="view"><i class="fa fa-eye"></i> 0</div>
	</div>
	<div class="product__item__text">
		<ul>
			<li>{{ ucwords($anime->category->name) }}</li>
			@foreach ($anime->tags()->take(2)->get() as $tag)
				<li>{{ ucwords($tag->name) }}</li>
			@endforeach
		</ul>
		<h5><a href="{{ route('anime.show', ['anime' => $anime->slug]) }}">{{ $anime->name }}</a></h5>
	</div>
</div>
