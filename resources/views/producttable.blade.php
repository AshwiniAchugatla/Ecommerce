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
                    <h4 class="card-title">Product </h4>
                    <a href="/product/create"><button class="btn btn-outline-info">Add Products</button></a>
                    <p class="card-description"> </code>
                    </p>
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th> Id </th>
                          <th> Category Name </th>
                          <th> Name </th>
                          <th> Images </th>
                          <th> Description </th>
                          <th> Price </th>
                          <th> Update </th>
                          <th> Show </th>
                          <th> Delete </th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($product as $p)
                        <tr>
                          <td> {{$p->id}} </td>
                          <td> {{$p->cid}} </td>
                          <td> {{$p->name}} </td>
                          <td><?php
                            foreach(json_decode($p->image)as $img)
                            {
                            ?>
                            <img src="{{asset('admin/image')}}/{{$img}}">
                            <?php
                            }
                            ?>
                          </td>
                          {{-- <td> <img src="{{asset('admin/image')}}/{{$p->image}}"> </td> --}}
                          <td> {{$p->description}} </td>
                          <td> {{$p->price}} </td>
                          <td><a href="{{route('product.edit',$p->id)}}"><button class="btn btn-inverse-success">Update</button></a></td>
                          <td><a href="{{route('product.show',$p->id)}}"><button class="btn btn-inverse-warning">View</button></a></td>
                          <td>
                            <form method="post" action="{{route('product.destroy',$p->id)}}">
                              @csrf
                              @method('DELETE')
                              <button class="btn btn-inverse-danger">Delete</button>
                            </form>
                          </td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                    <center>
                      <div class="mt-5">
                        {{$product->links()}}
                      </div>
                    </center>
                  </div>
                </div>
              </div>
            </div>
          </div>
          @endsection
          <!-- content-wrapper ends -->
          