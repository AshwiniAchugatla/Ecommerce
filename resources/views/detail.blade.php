@extends('header1')
@section('content')

            </div>
        </div>
    </div>
    <!-- Navbar End -->


    <!-- Page Header Start -->
    <div class="container-fluid bg-secondary mb-5">
        <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 300px">
            <h1 class="font-weight-semi-bold text-uppercase mb-3">Shop Detail</h1>
            <div class="d-inline-flex">
                <p class="m-0"><a href="">Home</a></p>
                <p class="m-0 px-2">-</p>
                <p class="m-0">Shop Detail</p>
            </div>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Shop Detail Start -->
    <div class="container-fluid py-5">
        <div class="row px-xl-5">
            <div class="col-lg-5 pb-5" >
                <div id="product-carousel" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner border">
                        <div class="carousel-item active">
                            <img class="w-100 h-100" src="{{asset('frontend/img/product-1.jpg')}}" alt="Image">
                        </div>
                        <div class="carousel-item">
                            <img class="w-100 h-100" src="{{asset('frontend/img/product-2.jpg')}}" alt="Image">
                        </div>
                        <div class="carousel-item">
                            <img class="w-100 h-100" src="{{asset('frontend/img/product-3.jpg')}}" alt="Image">
                        </div>
                        <div class="carousel-item">
                            <img class="w-100 h-100" src="{{asset('frontend/img/product-4.jpg')}}" alt="Image">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#product-carousel" data-slide="prev">
                        <i class="fa fa-2x fa-angle-left text-dark"></i>
                    </a>
                    <a class="carousel-control-next" href="#product-carousel" data-slide="next">
                        <i class="fa fa-2x fa-angle-right text-dark"></i>
                    </a>
                </div>
            </div>
            
            <div class="col-lg-7 pb-5">
                <h3 class="font-weight-semi-bold">{{$detail->name}}</h3>
                <div class="d-flex mb-3">
                    <div class="text-primary mr-2">
                        <small class="fas fa-star"></small>
                        <small class="fas fa-star"></small>
                        <small class="fas fa-star"></small>
                        <small class="fas fa-star-half-alt"></small>
                        <small class="far fa-star"></small>
                    </div>
                    <small class="pt-1">(50 Reviews)</small>
                </div>
                <h3 class="font-weight-semi-bold mb-4">₹{{$detail->price}}/-</h3>
                <p class="mb-4">{{$detail->description}}</p>
                <div class="d-flex align-items-center mb-4 pt-2">
                    <a href="/cart/{{$detail->id}}">  <button class="btn btn-primary px-3"><i class="fa fa-shopping-cart mr-1"></i> Add To Cart</button></a>
                </div>
            </div>
            
        </div>
    </div>
    @endsection
    <!-- Shop Detail End -->

    