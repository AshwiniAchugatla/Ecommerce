@extends('header1')
@section('content')

</div>
</div>
</div>

    <!-- Page Header Start -->
    <div class="container-fluid bg-secondary mb-5">
        <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 300px">
            <h1 class="font-weight-semi-bold text-uppercase mb-3">Shopping Cart</h1>
            <div class="d-inline-flex">
                <p class="m-0"><a href="/index1">Home</a></p>
                <p class="m-0 px-2">-</p>
                <p class="m-0">Shopping Cart</p>
            </div>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Cart Start -->
    <div class="container-fluid pt-5">
        <div class="row px-xl-5">
            <div class="col-lg-8 table-responsive mb-5">
                <table class="table table-bordered text-center mb-0">
                    <thead class="bg-secondary text-dark">
                        <tr>
                            <th>Products</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th>Total</th>
                            <th>Remove</th>
                        </tr>
                    </thead>
                    @php 
                            $total="";
                        @endphp
                        @if(session('cart'))
                    <tbody class="align-middle">
                        @php 
                            $total= 0;
                        @endphp
                        @foreach($view as $v)
                        @php 
                         $total += $v['price'] * $v['quantity'];
                         
                        @endphp
                        <tr>
                            <td class="align-middle"><img src="{{asset('admin/image')}}/{{json_decode($v['image'][0])}}" alt="" style="width:50px"> {{$v['name']}}</td>
                            <td class="align-middle">₹{{$v['price']}}</td>
                            <td class="align-middle">
                                <div class="input-group quantity mx-auto" style="width: 100px;">
                                    <div class="input-group-btn">
                                        <button class="btn btn-sm btn-primary btn-minus" wire:click.prevent="increaseQuantity('{{$v['id']}}')">
                                        <i class="fa fa-minus"></i>
                                        </button>
                                    </div>
                                    <input type="text" class="form-control form-control-sm bg-secondary text-center" value="{{$v['quantity']}}">
                                    <div class="input-group-btn">
                                        <button class="btn btn-sm btn-primary btn-plus" wire:click.prevent="decreaseQuantity('{{$v['id']}}')">
                                            <i class="fa fa-plus"></i>
                                        </button>
                                    </div>
                                </div>
                            </td>
                            <td class="align-middle">₹{{$v['price'] * $v['quantity']}}</td>
                            <td class="align-middle"><a href="/remove/{{$v['id']}}"><i class="fa fa-times"></i></a></td>
                        </tr>
                        @endforeach
                    </tbody>
                    @endif
                </table>
                <a href="/index1"> <button class="btn  btn-primary my-3 py-3"><- Back to Shop</button></a>
            </div>
            <div class="col-lg-4">
                <div class="card border-secondary mb-5">
                    <div class="card-header bg-secondary border-0">
                        <h4 class="font-weight-semi-bold m-0">Cart Summary</h4>
                    </div>
                    <div class="card-body">
                        <div class="d-flex justify-content-between mb-3 pt-1">
                            <h6 class="font-weight-medium">Subtotal</h6>
                            <h6 class="font-weight-medium">₹{{$total}}/-</h6>
                        </div>
                        <div class="d-flex justify-content-between">
                            <h6 class="font-weight-medium">Shipping</h6>
                            <h6 class="font-weight-medium">0</h6>
                        </div>
                    </div>
                    <div class="card-footer border-secondary bg-transparent">
                        <div class="d-flex justify-content-between mt-2">
                            <h5 class="font-weight-bold">Total</h5>
                            <h5 class="font-weight-bold">₹{{$total}}/-</h5>
                        </div>
                       <a href="/checkout"> <button class="btn btn-block btn-primary my-3 py-3">Proceed To Checkout</button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>


    @endsection
    <!-- Cart End -->


    