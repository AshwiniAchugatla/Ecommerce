@extends('header')
@section('content')
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title"> Update Forms </h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Forms</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Form elements</li>
                </ol>
              </nav>
            </div>
            <div class="row">
              <div class="col-10 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Update Product</h4>
                    <p class="card-description"></p>
                    <form class="forms-sample" method="post" action="{{route('product.update',$edit->id)}}" enctype="multipart/form-data">
                    @csrf
                    @method('PATCH')
                      <div class="form-group">
                        <label for="exampleInputName1">Category Name</label>
                        <input type="text" class="form-control" id="exampleInputName1" name="cid" value="{{$edit->cid}}">
                        @error('cid') <p>{{'message'}}</p> @enderror
                      </div>
                      <div class="form-group">
                        <label for="exampleInputName1">Name</label>
                        <input type="text" class="form-control" id="exampleInputName1" name="name" value="{{$edit->name}}">
                        @error('name') <p>{{'message'}}</p> @enderror
                      </div>
                      <div class="form-group">
                        <label>Image</label>
                        <div class="input-group col-xs-12">
                          <input type="file" class="form-control file-upload-info" name="image[]" multiple="multiple">
                          @error('image') <p>{{'message'}}</p> @enderror
                        </div><br>
                        <?php
                        foreach(json_decode($edit->image)as $img)
                        {
                        ?>
                        <img src="{{asset('admin/image')}}/{{$img}}"style="height:100px;width:10%">
                        <?php
                        }
                        ?>
                        {{-- <img src="{{asset('admin/image')}}/{{$edit->image}}" style="height:100px;width:10%"> --}}
                      </div>
                      <div class="form-group">
                        <label for="exampleInputdescription1">Description</label>
                        <input type="text" class="form-control" id="exampleInputdescription1" name="description" value="{{$edit->description}}"> 
                        @error('description') <p>{{'message'}}</p> @enderror
                      </div>
                      <div class="form-group">
                        <label for="exampleInputprice1">Price</label>
                        <input type="text" class="form-control" id="exampleInputprice1" name="price" value="{{$edit->price}}">
                        @error('price') <p>{{'message'}}</p> @enderror
                      </div>
                      <button type="submit" class="btn btn-gradient-primary me-2">Update</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
          @endsection
          <!-- content-wrapper ends -->
          