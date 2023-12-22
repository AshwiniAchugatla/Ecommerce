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
                    <h4 class="card-title">Update Inward</h4>
                    <p class="card-description"></p>
                    <form class="forms-sample" method="post" action="{{route('inward.update',$edit->id)}}" >
                    @csrf
                    @method('PATCH')
                      <div class="form-group">
                        <label for="exampleInputName1">Product Id</label>
                        <input type="text" class="form-control" id="exampleInputName1" name="pid" value="{{$edit->pid}}">
                        {{-- @error('pid') <p>{{'message'}}</p> @enderror --}}
                      </div>
                      <div class="form-group">
                        <label for="exampleInputstock1">Stock</label>
                        <input type="text" class="form-control" id="exampleInputstock1" name="stock" value="{{$edit->stock}}">
                        {{-- @error('stock') <p>{{'message'}}</p> @enderror --}}
                      </div>
                      <div class="form-group">
                        <label for="exampleInputdate1">Date</label>
                        <input type="date" class="form-control" id="exampleInputdate1" name="date" value="{{$edit->date}}"> 
                        {{-- @error('date') <p>{{'message'}}</p> @enderror --}}
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
          