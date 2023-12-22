@extends('header')
@section('content')
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title"> Forms </h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Forms</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Form elements</li>
                </ol>
              </nav>
            </div>
            <div class="row">
              <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Product</h4>
                    <p class="card-description"></p>
                    <form class="forms-sample" method="post" action="{{route('product.store')}}" enctype="multipart/form-data">
                    @csrf
                      <div class="form-group">
                        <label for="exampleInputcname1">Category Name</label>
                        <select class="form-control" name="cid">
                            <option> Select Category </option>
                            @foreach($product as $p)
                            <option value="{{$p->id}}">{{$p->name}}</option>
                            @endforeach
                        </select>
                        @error('cid') <p>{{'message'}}</p> @enderror
                      </div>
                      <div class="form-group">
                        <label for="exampleInputName1">Name</label>
                        <input type="text" class="form-control" id="exampleInputName1" placeholder="Product Name" name="name">
                        @error('name') <p>{{'message'}}</p> @enderror
                      </div>
                      <div class="form-group">
                        <label>Image</label>
                        <div class="input-group col-xs-12">
                          <input type="file" class="form-control file-upload-info" placeholder="Upload Image" name="image[]" multiple="multiple">
                          @error('image') <p>{{'message'}}</p> @enderror
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputdescription1">Description</label>
                        <textarea class="form-control" id="exampleInputdescription1" placeholder="Product Description" name="description"></textarea>
                        @error('description') <p>{{'message'}}</p> @enderror
                      </div>
                      <div class="form-group">
                        <label for="exampleInputprice1">Price</label>
                        <input type="text" class="form-control" id="exampleInputprice1" placeholder="Amount" name="price">
                        @error('price') <p>{{'message'}}</p> @enderror
                      </div>
                      <button type="submit" class="btn btn-gradient-primary me-2">Submit</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
          @endsection
          <!-- content-wrapper ends -->
          