@extends('layouts.app')

@section('title')
Art's Store | Product
@endsection

@section('body')




	<!-- banner -->
	<div class="banner banner1">
		<div class="container">
			<h2>Great Offers on <span>Arts</span> With <i>Reasonable Price</i></h2> 
		</div>
	</div> 
	<!-- breadcrumbs -->
	<div class="breadcrumb_dress">
		<div class="container">
			<ul>
				<li><a href="/"><span class="glyphicon glyphicon-home" aria-hidden="true"></span> Home</a> <i>/</i></li>
				<li>Products</li>
			</ul>
		</div>
	</div>
	<!-- //breadcrumbs --> 
	<!-- mobiles -->
	<div class="mobiles">
		<div class="container">
			<div class="w3ls_mobiles_grids">
				
				<div class="col-md-12 w3ls_mobiles_grid_right">
					<div class="col-md-6 w3ls_mobiles_grid_right_left">
						<div class="w3ls_mobiles_grid_right_grid1">
							<img src="/images/46.jpg" style="width:600px;height:370px;"  alt=" " class="img-responsive" />
							<div class="w3ls_mobiles_grid_right_grid1_pos1">
								<h3>West<span>Arican's</span> Art</h3>
							</div>
						</div>
					</div>
					<div class="col-md-6 w3ls_mobiles_grid_right_left">
						<div class="w3ls_mobiles_grid_right_grid1">
							<img src="/images/47.jpg" style="width:600px;height:370px;" alt=" " class="img-responsive" />
							<div class="w3ls_mobiles_grid_right_grid1_pos">
								<h3>Top 10 <span>African's </span>& Art</h3>
							</div>
						</div>
					</div>
					<div class="clearfix"> </div>

					<div class="w3ls_mobiles_grid_right_grid2">
						<div class="w3ls_mobiles_grid_right_grid2_left">
							<h3></h3>
						</div>
						<div class="w3ls_mobiles_grid_right_grid2_right">
							<select name="select_item" class="select_item">
								<option selected="selected">Default sorting</option>
								<option>Sort by popularity</option>
								<option>Sort by average rating</option>
								<option>Sort by newest</option>
								<option>Sort by price: low to high</option>
								<option>Sort by price: high to low</option>
							</select>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="w3ls_mobiles_grid_right_grid3">
                        @foreach($products as $product)
						<div class="col-md-4 agileinfo_new_products_grid agileinfo_new_products_grid_mobiles">
							<div class="agile_ecommerce_tab_left mobiles_grid">
								<div class="hs-wrapper hs-wrapper2">
									<img src="/{{ $product->image1 }}" alt=" " class="img-responsive" />
									<img src="/{{ $product->image2 }}" alt=" " class="img-responsive" />
									<img src="/{{ $product->image3 }}" alt=" " class="img-responsive" />
								 
									<div class="w3_hs_bottom w3_hs_bottom_sub1">
										<ul>
											<li>
												<a href="#" data-toggle="modal" data-target="#{{ $product->id }}"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
											</li>
										</ul>
									</div>
								</div>
								<h5><a href="{{ route('product.single', ['id' => $product->id]) }}">{{ $product->title }}</a></h5> 
								<div class="simpleCart_shelfItem">
									<p><span>$250</span> <i class="item_price">${{ $product->price }}</i></p>
									
										<input type="hidden" name="cmd" value="_cart" />
										<input type="hidden" name="add" value="1" /> 
										<input type="hidden" name="w3ls_item" value="{{ $product->title }}" /> 
										<input type="hidden" name="amount" value="{{ $product->price }}"/>   
										<a href="{{ route('cart.rapid.add', ['id' => $product->id]) }}"><button type="submit" class="w3ls-cart">Add to cart</button></a>
									
								</div> 
								<div class="mobiles_grid_pos">
									<h6>New</h6>
								</div>
							</div>
                        </div>
                        @endforeach
						
						<div class="clearfix"> </div>
					</div>
					
					
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
    </div>
    @foreach($products as $product)  
	<div class="modal video-modal fade" id="{{ $product->id }}" tabindex="-1" role="dialog" aria-labelledby="myModal9">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
				</div>
				<section>
					<div class="modal-body">
						<div class="col-md-5 modal_body_left">
							<img src="/{{ $product->image1 }}" alt=" " class="img-responsive" />
						</div>
						<div class="col-md-7 modal_body_right">
							<h4>{{ $product->title }} </h4>
							<p>{{ $product->description }}.</p>
							<div class="rating">
								<div class="rating-left">
									<img src="/images/star-.png" alt=" " class="img-responsive" />
								</div>
								<div class="rating-left">
									<img src="/images/star-.png" alt=" " class="img-responsive" />
								</div>
								<div class="rating-left">
									<img src="/images/star-.png" alt=" " class="img-responsive" />
								</div>
								<div class="rating-left">
									<img src="/images/star.png" alt=" " class="img-responsive" />
								</div>
								<div class="rating-left">
									<img src="/images/star.png" alt=" " class="img-responsive" />
								</div>
								<div class="clearfix"> </div>
							</div>
							<div class="modal_body_right_cart simpleCart_shelfItem">
								<p><span>$250</span> <i class="item_price">${{ $product->price }}</i></p>
								<form action="#" method="post">
									<input type="hidden" name="cmd" value="_cart" />
									<input type="hidden" name="add" value="1" /> 
									<input type="hidden" name="w3ls_item" value="Smart Phone" /> 
									<input type="hidden" name="amount" value="245.00"/>   
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
	 

			<div  style="color: white; text-align: center" class="col-lg-12">

				{{ $products->links() }}

			</div>
				


	  
	<!-- Related Products -->
	<div class="w3l_related_products">
		<div class="container">
			<h3>Trending Art</h3>
			<ul id="flexiselDemo2">	
                
                @foreach($products as $product)
				<li>
					<div class="w3l_related_products_grid">
						<div class="agile_ecommerce_tab_left mobiles_grid">
							<div class="hs-wrapper hs-wrapper3">
								<img src="/{{ $product->image1 }}}" alt=" " class="img-responsive" />
								<img src="/{{ $product->image2 }}" alt=" " class="img-responsive" />
								<img src="/{{ $product->image3 }}" alt=" " class="img-responsive" />
								 
								<div class="w3_hs_bottom">
									<div class="flex_ecommerce">
										<a href="#" data-toggle="modal" data-target="#{{ $product->id }}"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
									</div>
								</div>
							</div>
							<h5><a href="{{ route('product.single', ['id' => $product->id]) }}">{{ $product->title }}</a></h5>
							<div class="simpleCart_shelfItem"> 
								<p class="flexisel_ecommerce_cart"><span>${{ $product->price }}</span> <i class="item_price">${{ $product->price }}</i></p>
								<form action="#" method="post">
									<input type="hidden" name="cmd" value="_cart">
									<input type="hidden" name="add" value="1"> 
									<input type="hidden" name="w3ls_item" value="{{ $product->title }}"> 
									<input type="hidden" name="amount" value="{{ $product->price }}">   
									
								</form> 
							</div>
						</div>
					</div>
				</li>
                @endforeach
			
				
		</div>
	</div>

			

    <script type="text/javascript">
		$(window).load(function() {
			$("#flexiselDemo2").flexisel({
				visibleItems:4,
				animationSpeed: 1000,
				autoPlay: true,
				autoPlaySpeed: 3000,    		
				pauseOnHover: true,
				enableResponsiveBreakpoints: true,
				responsiveBreakpoints: { 
					portrait: { 
						changePoint:568,
						visibleItems: 1
					}, 
					landscape: { 
						changePoint:667,
						visibleItems:2
					},
					tablet: { 
						changePoint:768,
						visibleItems: 3
					}
				}
			});
			
		});
	</script>
    <script type="text/javascript" src="/js/jquery.flexisel.js"></script>
    
@endsection