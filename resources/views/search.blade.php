@extends('layouts.app')

@section('title')
Art's Store | Search
@endsection

@section('body')

<!-- mobiles -->
<div class="mobiles">
		<div class="container">
			<div class="w3ls_mobiles_grids">
				
				<div class="col-md-12 w3ls_mobiles_grid_right">
					<div class="col-md-6 w3ls_mobiles_grid_right_left">
						<div class="w3ls_mobiles_grid_right_grid1">
							<img src="/images/46.jpg" alt=" " class="img-responsive" />
							<div class="w3ls_mobiles_grid_right_grid1_pos1">
								<h3>West<span>Arican's</span> Art</h3>
							</div>
						</div>
					</div>
					<div class="col-md-6 w3ls_mobiles_grid_right_left">
						<div class="w3ls_mobiles_grid_right_grid1">
							<img src="/images/47.jpg" alt=" " class="img-responsive" />
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
                        @foreach($searchs as $search)
						<div class="col-md-4 agileinfo_new_products_grid agileinfo_new_products_grid_mobiles">
							<div class="agile_ecommerce_tab_left mobiles_grid">
								<div class="hs-wrapper hs-wrapper2">
									<img src="/{{ $search->image1 }}" alt=" " class="img-responsive" />
									<img src="/{{ $search->image2 }}" alt=" " class="img-responsive" />
									<img src="/{{ $search->image3 }}" alt=" " class="img-responsive" />
								 
									<div class="w3_hs_bottom w3_hs_bottom_sub1">
										<ul>
											<li>
												<a href="#" data-toggle="modal" data-target="#{{ $search->id }}"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
											</li>
										</ul>
									</div>
								</div>
								<h5><a href="{{ route('product.single', ['id' => $search->id]) }}">{{ $search->title }}</a></h5> 
								<div class="simpleCart_shelfItem">
									<p><span>$250</span> <i class="item_price">${{ $search->price }}</i></p>
									<form action="{{ route('cart.add') }}" method="get">
										{{ csrf_field() }}
										<input type="hidden" name="cmd" value="_cart" />
										<input type="hidden" name="add" value="1" /> 
										<input type="hidden" name="w3ls_item" value="Smart Phone" /> 
										<input type="hidden" name="amount" value="245.00"/>   
										<button type="submit" class="w3ls-cart">Add to cart</button>
									</form>
								</div> 
								<div class="mobiles_grid_pos">
									<h6>New</h6>
								</div>
							</div>
                        </div>
                        @endforeach
						
						<div class="clearfix"> </div>
					</div>
					
					<div  style="color: white; text-align: center" class="col-lg-12">

						{{ $searchs->links() }}

					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
    </div>
	
    @foreach($searchs as $search)  
	<div class="modal video-modal fade" id="{{ $search->id }}" tabindex="-1" role="dialog" aria-labelledby="myModal9">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
				</div>
				<section>
					<div class="modal-body">
						<div class="col-md-5 modal_body_left">
							<img src="/{{ $search->image1 }}" alt=" " class="img-responsive" />
						</div>
						<div class="col-md-7 modal_body_right">
							<h4>{{ $search->title }} </h4>
							<p>{{ $search->description }}.</p>
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
								<p><span>$250</span> <i class="item_price">${{ $search->price }}</i></p>
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
	 

			

@endsection