@extends('layouts.app')

@section('title')
Art's Store | Admin
@endsection

@section('body')

	<!-- mobiles -->
	<div class="mobiles">
		<div class="container">
			<div class="w3ls_mobiles_grids">
            <div class="col-md-4 w3ls_mobiles_grid_left">
                <div class="w3ls_mobiles_grid_left_grid">
                    <h3>Home</h3>
                    <div class="w3ls_mobiles_grid_left_grid_sub">
                        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                            <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingOne">
                                <h4 class="panel-title asd">
                                <a class="pa_italic" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    <span class="glyphicon glyphicon-plus" aria-hidden="true"></span><i class="glyphicon glyphicon-minus" aria-hidden="true"></i><a href="{{ route('home') }}">Home</a>
                                </a>
                                </h4>
                            </div>
                            
                            </div>
                            <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingTwo">
                                <h4 class="panel-title asd">
                                <a class="pa_italic collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    <span class="glyphicon glyphicon-plus" aria-hidden="true"></span><i class="glyphicon glyphicon-minus" aria-hidden="true"></i><a href="{{ route('product.create') }}">Upload Art</a>
                                </a>
                                </h4>
                            </div>
                            
                            </div>
                        </div>
                        
					</div>
                </div>
                </div>
				<div class="col-md-8 w3ls_mobiles_grid_right">
					
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
								<h5><a href="#">{{ $product->title }}</a></h5> 
								<div class="simpleCart_shelfItem">
									<p><span>$250</span> <i class="item_price">${{ $product->price }}</i></p>
									<form action="#" method="post">
										<input type="hidden" name="cmd" value="_cart" />
										<input type="hidden" name="add" value="1" /> 
										<input type="hidden" name="w3ls_item" value="Smart Phone" /> 
										<input type="hidden" name="amount" value="245.00"/>   
									
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

						{{ $products->links() }}

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
								
									<input type="hidden" name="cmd" value="_cart" />
									<input type="hidden" name="add" value="1" /> 
									<input type="hidden" name="w3ls_item" value="Smart Phone" /> 
									<input type="hidden" name="amount" value="245.00"/>   
                                    <a href="{{ route('product.edit', ['id' => $product->id]) }}"><button type="submit" class="w3ls-cart">Edit</button></a>
                                    <a href="{{ route('product.delete', ['id' => $product->id]) }}" style="color: red"><button type="submit" class="w3ls-cart">Delete</button></a>
								
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