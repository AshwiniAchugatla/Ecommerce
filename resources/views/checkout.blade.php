@extends('header1')
@section('content')

            </div>
        </div>
    </div>
    <!-- Navbar End -->


    <!-- Page Header Start -->
    <div class="container-fluid bg-secondary mb-5">
        <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 300px">
            <h1 class="font-weight-semi-bold text-uppercase mb-3">Checkout</h1>
            <div class="d-inline-flex">
                <p class="m-0"><a href="/index1">Home</a></p>
                <p class="m-0 px-2">-</p>
                <p class="m-0">Checkout</p>
            </div>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Checkout Start -->
    <div class="container-fluid pt-5">
        <form method="post" action="{{route('shipping')}}">
            @csrf
        <div class="row px-xl-5">
            <div class="col-lg-8">
                <div class="mb-4">
                    <h4 class="font-weight-semi-bold mb-4">Shipping Address</h4>
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <label>Full Name</label>
                            <input class="form-control" type="text" Placeholder="Your Name" name="name" value="{{old('name')}}">
                            <span class="text-danger">@error('name'){{$message}}@enderror</span>
                        </div>
                        <div class="col-md-6 form-group">
                            <label>E-mail</label>
                            <input class="form-control" type="email" Placeholder="Your Mail Id" name="email" value="{{old('email')}}">
                            <span class="text-danger">@error('email'){{$message}}@enderror</span>
                        </div>
                        <div class="col-md-6 form-group">
                            <label>Mobile No</label>
                            <input class="form-control" type="number" Placeholder="Your Mobile Number" name="mobileno" value="{{old('mobileno')}}">
                            <span class="text-danger">@error('mobileno'){{$message}}@enderror</span>
                        </div>
                        <div class="col-md-6 form-group">
                            <label>Address</label>
                            <input class="form-control" type="text" Placeholder="Street Address" name="address" value="{{old('address')}}">
                            <span class="text-danger">@error('address'){{$message}}@enderror</span> 
                        </div>
                        <div class="col-md-6 form-group">
                            <label>Country</label>
                            <input class="form-control" type="text" Placeholder="Country" name="country" value="{{old('country')}}">
                            <span class="text-danger">@error('country'){{$message}}@enderror</span>
                        </div>
                        <div class="col-md-6 form-group">
                            <label>City</label>
                            <input class="form-control" type="text" Placeholder="City" name="city" value="{{old('city')}}">
                            <span class="text-danger">@error('city'){{$message}}@enderror</span>
                        </div>
                        <div class="col-md-6 form-group">
                            <label>State</label>
                            <input class="form-control" type="text" Placeholder="State" name="state" value="{{old('state')}}">
                            <span class="text-danger">@error('state'){{$message}}@enderror</span>
                        </div>
                        <div class="col-md-6 form-group">
                            <label>Pin Code</label>
                            <input class="form-control" type="number" Placeholder="Zip Code" name="pincode" value="{{old('pincode')}}">
                            <span class="text-danger">@error('pincode'){{$message}}@enderror</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                @php
                    $total="";
                @endphp
                @if(session('cart'))
                @php
                    $total=0;
                @endphp
                <div class="card border-secondary mb-5">
                    <div class="card-header bg-secondary border-0">
                        <h4 class="font-weight-semi-bold m-0">Order Total</h4>
                    </div>
                    <div class="card-body">
                        <h5 class="font-weight-medium mb-3">Products</h5>
                        @foreach($viewcart as $v)
                        @php
                            $total +=$v['price'] * $v['quantity'];
                        @endphp
                        <div class="d-flex justify-content-between">
                            <p>{{$v['name']}}</p>
                            <p>₹{{$v['price']}}/-</p>
                        </div>
                        @endforeach
                    </div>
                    <div class="card-footer border-secondary bg-transparent">
                        <div class="d-flex justify-content-between mt-2">
                            <h5 class="font-weight-bold">Total</h5>
                            <h5 class="font-weight-bold">₹{{$total}}</h5>
                        </div>
                    </div>
                </div>
                @endif
                <div class="card border-secondary mb-5">
                    <div class="card-header bg-secondary border-0">
                        <h4 class="font-weight-semi-bold m-0">Payment</h4>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <div class="custom-control custom-radio">
                                <input type="radio" class="custom-control-input" name="paymentmode" value="cash" id="cash">
                                <label class="custom-control-label" for="cash">Cash On Delivery</label>
                            </div><br>
                            <div class="custom-control custom-radio">
                                <input type="radio" class="custom-control-input" name="paymentmode" value="check" id="check">
                                <label class="custom-control-label" for="check">Check Payment</label>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer border-secondary bg-transparent">
                        <button class="btn btn-lg btn-block btn-primary font-weight-bold my-3 py-3">Place Order</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
    </div>

    @endsection
    <!-- Checkout End -->


    