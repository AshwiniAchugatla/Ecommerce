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
              <div class="col-8 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Inward</h4>
                    <p class="card-description"></p>
                    <form class="forms-sample" method="post" action="{{route('inward.store')}}" >
                    @csrf
                      <div class="form-group">
                        <label for="exampleInputcname1">Product Name</label>
                        <select class="form-control" name="pid">
                            <option> Select Product </option>
                            @foreach($product as $p)
                            <option value="{{$p->id}}">{{$p->name}}</option>
                            @endforeach
                        </select>
                        {{-- @error('pid') <p>{{'message'}}</p> @enderror --}}
                      </div>
                      <div class="form-group">
                        <label for="exampleInputstock1">Stock</label>
                        <input type="text" class="form-control" id="exampleInputstock1" placeholder="Stock" name="stock">
                        {{-- @error('stock') <p>{{'message'}}</p> @enderror --}}
                      </div>
                      <div class="form-group">
                        <label for="exampleInputdate1">Date</label>
                        <input type="date" class="form-control" id="exampleInputdate1" placeholder="date" name="date">
                        {{-- @error('date') <p>{{'message'}}</p> @enderror --}}
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
          