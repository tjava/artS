@extends('layouts.app')

@section('title')
Art's Store | Edit
@endsection

@section('body')

<link rel="icon" type="image/png" href="/create/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="create/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="create/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/create/vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/create/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/create/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/create/vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/create/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/create/css/util.css">
	<link rel="stylesheet" type="text/css" href="/create/css/main.css">

    <!-- breadcrumbs -->
<div class="breadcrumb_dress">
		<div class="container">
			<ul>
				<li><a href="{{ route('home') }}"><span class="glyphicon glyphicon-home" aria-hidden="true"></span> Home</a> <i>/</i></li>
				<li>Edit Existing Art</li>
			</ul>
		</div>
	</div>
	<!-- //breadcrumbs --> 
<div class="container-contact100">

    <div class="wrap-contact100">
        <form class="contact100-form validate-form" method="post" action="{{ route('product.update', ['id' => $edit->id]) }}" enctype="multipart/form-data">
            <span class="contact100-form-title">
            Edit Existing Art
            </span>
            
            

            {{ csrf_field() }}

            <div class="wrap-input100 validate-input" data-validate="Please enter product title">
                <input class="input100" type="text" name="title" value="{{ $edit->title }}" placeholder="Title">
                <span class="focus-input100"></span>
            </div>

            <div class="wrap-input100 validate-input" data-validate = "Please enter product price">
                <input class="input100" type="number" name="price" value="{{ $edit->price }}" placeholder="Price">
                <span class="focus-input100"></span>
            </div>

            <div class="wrap-input100 validate-input" data-validate = "Please enter product image1">
                <input class="input100" type="file" name="image1" value="{{ $edit->image1 }}" placeholder="Image1">
                <span class="focus-input100"></span>
            </div>

            <div class="wrap-input100 validate-input" data-validate = "Please enter product image2">
                <input class="input100" type="file" name="image2" value="{{ $edit->image2 }}" placeholder="Image2">
                <span class="focus-input100"></span>
            </div>

            <div class="wrap-input100 validate-input" data-validate = "Please enter product image3">
                <input class="input100" type="file" name="image3" value="{{ $edit->image3 }}" placeholder="Image3">
                <span class="focus-input100"></span>
            </div>

            <div class="wrap-input100 validate-input" data-validate = "Please enter product description">
                <textarea class="input100" name="description" value="" placeholder="Description">{{ $edit->description }}</textarea>
                <span class="focus-input100"></span>
            </div>

            <div class="container-contact100-form-btn">
                <button class="contact100-form-btn" type="submit">
                    <span>
                        <i class="fa fa-paper-plane-o m-r-6" aria-hidden="true"></i>
                        Send
                    </span>
                </button>
            </div>
        </form>
    </div>
</div>





<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>

@endsection