@unless ($breadcrumbs->isEmpty())
	<div class="breadcrumb-option">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="breadcrumb__links">
						@foreach ($breadcrumbs as $breadcrumb)
							@if (!is_null($breadcrumb->url) && !$loop->last)
								<a href="{{ $breadcrumb->url }}"> {{ $breadcrumb->title }}</a>
							@else
								@if (request()->route()->getName() == 'anime.watch')
									<a href="{{ str_replace('/watch/', '/', $breadcrumb->url) }}"> {{ $breadcrumb->title }}</a>
									<span>watch</span>
								@else
									<span>{{ $breadcrumb->title }}</span>
								@endif
							@endif
						@endforeach
					</div>
				</div>
			</div>
		</div>
	</div>
@endunless
