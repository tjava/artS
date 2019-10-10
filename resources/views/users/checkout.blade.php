@extends('layouts.app')

@section('title')
Art's Store | Checkout
@endsection

@section('body')

    <link rel="stylesheet" type="text/css" href="/app/css/styles.css">
    <link rel="stylesheet" type="text/css" href="/app/css/crumina-fonts.css">
    <link rel="stylesheet" type="text/css" href="/app/app/css/fonts.css">

    <!--Plugins styles-->





<div class="container-fluid">
	<div class="row medium-padding120 bg-border-color">
		<div class="container">

			<div class="row">

				<div class="col-lg-12">
			<div class="order">
				<h2 class="h1 order-title text-center">Your Order</h2>
				<form action="#" method="post" class="cart-main">
					<table class="shop_table cart">
						<thead class="cart-product-wrap-title-main">
						<tr>
							<th class="product-thumbnail">Product</th>
							<th class="product-quantity">Quantity</th>
							<th class="product-subtotal">Total</th>
						</tr>
						</thead>
						<tbody>

                        @foreach(Cart::content() as $item)
						<tr class="cart_item">

							<td class="product-thumbnail">

								<div class="cart-product__item">
									<div class="cart-product-content">
										<h5 class="cart-product-title">{{ $item->name }}</h5>
									</div>
								</div>
							</td>

							<td class="product-quantity">

								<div class="quantity">
									x {{ $item->qty }}
								</div>

							</td>

							<td class="product-subtotal">
								<h5 class="total amount">${{ $item->total }}</h5>
							</td>

						</tr>
                        @endforeach

				

						<tr class="cart_item total">

							<td class="product-thumbnail">


								<div class="cart-product-content">
									<h5 class="cart-product-title">Total:</h5>
								</div>


							</td>

							<td class="product-quantity">

							</td>

							<td class="product-subtotal">
								<h5 class="total amount">${{ Cart::total()}}</h5>
							</td>
						</tr>

						</tbody>
					</table>

					<div class="cheque">

						<div class="logos">
							<a href="#" class="logos-item">
								<img src="/app/img/visa.png" alt="Visa">
							</a>
							<a href="#" class="logos-item">
								<img src="/app/img/mastercard.png" alt="MasterCard">
							</a>
							<a href="#" class="logos-item">
								<img src="/app/img/discover.png" alt="DISCOVER">
							</a>
							<a href="#" class="logos-item">
								<img src="/app/img/amex.png" alt="Amex">
							</a>
							
						
						</div>
					</div>

				</form>
			</div>
		</div>

			</div>
		</div>
	</div>
</div>

@endsection