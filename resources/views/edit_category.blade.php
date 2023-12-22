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
              <div class="col-8 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Update Category</h4>
                    <p class="card-description"></p>
                    <form class="forms-sample" method="post" action="{{route('category.update',$edit->id)}}" enctype="multipart/form-data">
                    @csrf
                    @method('PATCH')
                      <div class="form-group">
                        <label for="exampleInputName1">Name</label>
                        <input type="text" class="form-control" id="exampleInputName1" name="name" value="{{$edit->name}}">
                        @error('name') <p>{{'message'}}</p> @enderror
                      </div>
                      <div class="form-group">
                        <label>Image</label>
                        <div class="input-group col-xs-12">
                          <input type="file" class="form-control file-upload-info" name="image">
                          @error('image') <p>{{'message'}}</p> @enderror
                        </div><br>
                        <img src="{{asset('admin/image')}}/{{$edit->image}}" style="height:100px;width:10%">
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
          