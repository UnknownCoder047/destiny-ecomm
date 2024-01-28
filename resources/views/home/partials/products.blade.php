<section class="product spad">
 <div class="container">
  <div class="row">
   <div class="col-lg-8">
    @include('partials.products')
   </div>
   {{-- <div class="col-lg-4 col-md-6 col-sm-8">
        <div class="product__sidebar">
        <div class="product__sidebar__view">
          <div class="section-title">
           <h5>Top Views</h5>
          </div>
          <ul class="filter__controls">
           <li class="active" data-filter="*">Day</li>
           <li data-filter=".week">Week</li>
           <li data-filter=".month">Month</li>
           <li data-filter=".years">Years</li>
          </ul>
          <div class="filter__gallery">
          @for ($i = 0; $i < 5; $i++)
            @include('partials.cards.card-simple', ['classes' => 'day years'])
          @endfor
          </div>
        </div>
        <div class="product__sidebar__comment">
          <div class="section-title">
          <h5>New Comment</h5>
          </div>
          @for ($i = 0; $i < 5; $i++)
          @include('partials.cards.card-news')
          @endfor
        </div>
        </div>
      </div> --}}
  </div>
</section>
