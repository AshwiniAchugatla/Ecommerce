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
              <div class="col-lg-8 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title"> Product Stock </h4>
                    <a href="/stock/create"><button class="btn btn-outline-info"> Add </button></a>
                    <p class="card-description"> </code>
                    </p>
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th> Id </th>
                          <th> Product Name </th>
                          <th> Stock </th>
                          {{-- <th> Update </th> --}}
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($stock as $stk)
                        <tr>
                          <td> {{$stk->id}} </td>
                          <td> {{$stk->name}} </td>
                          <td> {{$stk->stock}} </td>
                          {{-- <td><a href="{{route('stock.edit',$stk->id)}}"><button class="btn btn-inverse-success">Update</button></a></td> --}}
                          {{-- <td><a href="{{route('product.show',$p->id)}}"><button class="btn btn-inverse-warning">View</button></a></td>
                          <td>
                            <form method="post" action="{{route('inward.destroy',$i->id)}}">
                              @csrf
                              @method('DELETE')
                              <button class="btn btn-inverse-danger">Delete</button>
                            </form>
                          </td> --}}
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
          