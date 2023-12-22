@extends('header')
@section('content')
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title">Tables </h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Tables</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Basic tables</li>
                </ol>
              </nav>
            </div>
            <div class="row">
              <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Checkout Details </h4>
                    {{-- <a href="/category/create"><button class="btn btn-outline-info">Add Categories</button></a> --}}
                    <p class="card-description"> </code>
                    </p>
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th> Id </th>
                          <th> Name </th>
                          <th> Email </th>
                          <th> Mobile Number </th>
                          <th> Address </th>
                          <th> Country </th>
                          <th> City </th>
                          <th> State </th>
                          <th> Pin Code </th>
                          <th> Product Name </th>
                          <th> Total Bill </th>
                          <th> Payment Mode </th>
                          <th> Delete </th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($checkout as $chk)
                        <tr>
                          <td> {{$chk->id}} </td>
                          <td> {{$chk->name}} </td>
                          <td> {{$chk->email}}</td>
                          <td> {{$chk->mobileno}}</td>
                          <td> {{$chk->address}}</td>
                          <td> {{$chk->country}}</td>
                          <td> {{$chk->city}}</td>
                          <td> {{$chk->state}}</td>
                          <td> {{$chk->pincode}}</td>
                          <td> {{$chk->productname}}</td>
                          <td> {{$chk->totalbill}}</td>
                          <td> {{$chk->paymentmode}}</td>
                          {{-- <td><a href="{{route('category.edit',$c->id)}}"><button class="btn btn-inverse-success">Update</button></a></td>
                          <td><a href="{{route('category.show',$c->id)}}"><button class="btn btn-inverse-warning">View</button></a></td> --}}
                          <td>
                            <form method="post" action="/checkoutdetails_delete/{{$chk->id}}">
                              @csrf
                              @method('DELETE')
                              <button class="btn btn-inverse-danger">Delete</button>
                            </form>
                          </td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
          @endsection
          <!-- content-wrapper ends -->
          