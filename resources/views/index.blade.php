@extends('layouts.app')

@section('title')
Art's Store
@endsection

@section('body')

<!-- banner -->
<div class="banner">
    <div class="container">
        <h3>African's Art Store, <span>Special Offers</span></h3>
    </div>
</div>
<!-- //banner -->
<!-- banner-bottom -->
<div class="banner-bottom">
		
	<!-- //banner-bottom --> 
	<!-- modal-video -->
	@foreach($news as $new)
	<div class="modal video-modal fade" id="{{ $new->id }}" tabindex="-1" role="dialog" aria-labelledby="myModal">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
				</div>
				<section>
					<div class="modal-body">
						<div class="col-md-5 modal_body_left">
							<img src="{{ $new->image1 }}" alt=" " class="img-responsive" />
						</div>
						<div class="col-md-7 modal_body_right">
							<h4>{{ $new->title }}</h4>
							<p>{{ $new->description }}. </p>
							<div class="rating">
								<div class="rating-left">
									<img src="images/star-.png" alt=" " class="img-responsive" />
								</div>
								<div class="rating-left">
									<img src="images/star-.png" alt=" " class="img-responsive" />
								</div>
								<div class="rating-left">
									<img src="images/star-.png" alt=" " class="img-responsive" />
								</div>
								<div class="rating-left">
									<img src="images/star.png" alt=" " class="img-responsive" />
								</div>
								<div class="rating-left">
									<img src="images/star.png" alt=" " class="img-responsive" />
								</div>
								<div class="clearfix"> </div>
							</div>
							<div class="modal_body_right_cart simpleCart_shelfItem">
								<p><span>$380</span> <i class="item_price">${{ $new->price }}</i></p>
								<form action="#" method="post">
									<input type="hidden" name="cmd" value="_cart">
									<input type="hidden" name="add" value="1"> 
									<input type="hidden" name="w3ls_item" value="Mobile Phone1"> 
									<input type="hidden" name="amount" value="350.00">   
									<button type="submit" class="w3ls-cart">Add to cart</button>
								</form>
							</div>
							<h5>Color</h5>
							<div class="color-quality">
								<ul>
									<li><a href="#"><span></span></a></li>
									<li><a href="#" class="brown"><span></span></a></li>
									<li><a href="#" class="purple"><span></span></a></li>
									<li><a href="#" class="gray"><span></span></a></li>
								</ul>
							</div>
						</div>
						<div class="clearfix"> </div>
					</div>
				</section>
			</div>
		</div>
	</div>
	@endforeach
	<!-- //modal-video -->
	
	<!-- new-products -->
	<div class="new-products">
		<div class="container">
			<h3>New Art's</h3>
			@foreach($news as $new)
			<div class="agileinfo_new_products_grids">
				<div class="col-md-3 agileinfo_new_products_grid">
					<div class="agile_ecommerce_tab_left agileinfo_new_products_grid1">
						<div class="hs-wrapper hs-wrapper1">
							<img src="/{{ $new->image1 }}" alt=" " class="img-responsive" />
							<img src="/{{ $new->image2 }}" alt=" " class="img-responsive" />
							<img src="/{{ $new->image3 }}" alt=" " class="img-responsive" />
							
							<div class="w3_hs_bottom w3_hs_bottom_sub">
								<ul>
									<li>
										<a href="#" data-toggle="modal" data-target="#{{ $new->id }}"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
									</li>
								</ul>
							</div>
						</div>
						<h5><a href="{{ route('product.single', ['id' => $new->id]) }}">{{ $new->title }}</a></h5>
						<div class="simpleCart_shelfItem">
							<p><span>$520</span> <i class="item_price">${{ $new->price }}</i></p>
							<form action="#" method="post">
								<input type="hidden" name="cmd" value="_cart">
								<input type="hidden" name="add" value="1"> 
								<input type="hidden" name="w3ls_item" value="Red Laptop"> 
								<input type="hidden" name="amount" value="500.00">   
								
							</form>
						</div>
					</div>
				</div>
				@endforeach
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- //new-products -->
	<br>
	<br>
	<br>
    @endsection