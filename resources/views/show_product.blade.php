@extends('header')
@section('content')
<!-- partial -->
<div class="main-panel">
    <div class="content-wrapper">
      <div class="page-header">
        <h3 class="page-title"> View Product </h3>
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">UI Elements</a></li>
            <li class="breadcrumb-item active" aria-current="page">Typography</li>
          </ol>
        </nav>
      </div>
      <div class="row">
        <div class="col-md-4 grid-margin stretch-card">
            <div class="card">
            <div class="card-body">
                <ul class="list-arrow">
                <li>{{$show->id}}</li>
                <li>{{$show->cid}}</li>
                <li>{{$show->name}}</li><br>
                <li>
                  <?php
                  foreach(json_decode($show->image)as $img)
                  {
                  ?>
                  <img src="{{asset('admin/image')}}/{{$img}}"style="height:100px;width:100px">
                  <?php
                  }
                  ?>
                </li>
                {{-- <li><img src="{{asset('admin/image')}}/{{$show->image}}" style="height:150px;width:30%"></li><br> --}}
                <li>{{$show->description}}</li>
                <li>{{$show->price}}</li>
                </ul>
            </div>
            </div>
        </div>
      </div>
    </div>
    @endsection