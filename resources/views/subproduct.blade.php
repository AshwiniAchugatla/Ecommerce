@extends('header1')
@section('content')

</div>
</div>
</div>

    <!-- Shop Start -->
    <div class="container-fluid pt-5">
        <div class="row px-xl-5">



            <!-- Shop Product Start -->
            <div class="col-lg-12 col-md-12">
                <div class="row pb-3">
                    
                    @foreach($subproduct as $sp)
                    <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                        <div class="card product-item border-0 mb-4">
                            <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0" style="height:400px;">
                                <img class="img-fluid w-100" src="{{asset('admin/image')}}/{{json_decode($sp->image)[0]}}" alt="">
                            </div>
                            <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                                <h6 class="text-truncate mb-3">{{$sp->name}}</h6>
                                <div class="d-flex justify-content-center">
                                    <h6>₹{{$sp->price}}/-</h6><h6 class="text-muted ml-2"><del></del></h6>
                                </div>
                            </div>
                            <div class="card-footer d-flex justify-content-between bg-light border">
                                <a href="/detail/{{$sp->id}}" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i>View Detail</a>
                            <button style="border:none;"><a href="/cart/{{$sp->id}}" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>Add To Cart</a></button>
                            </div>
                        </div>
                    </div>
                    @endforeach

                </div>
            </div>
            <!-- Shop Product End -->
        </div>
    </div>
    @endsection
    <!-- Shop End -->