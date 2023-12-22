@extends('header')
@section('content')
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title">
                <span class="page-title-icon bg-gradient-primary text-white me-2">
                  <i class="mdi mdi-home"></i>
                </span> Dashboard
              </h3>
              <nav aria-label="breadcrumb">
                <ul class="breadcrumb">
                  <li class="breadcrumb-item active" aria-current="page">
                    <span></span>Overview <i class="mdi mdi-alert-circle-outline icon-sm text-primary align-middle"></i>
                  </li>
                </ul>
              </nav>
            </div>
            <div class="row">
              <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <div class="row mt-3">
                      <div class="col-6 pe-1">
                        <img src="{{asset('admin/assets/images/dashboard/img_1.jpg')}}" class="mb-2 mw-100 w-100 rounded" alt="image">
                        <img src="{{asset('admin/assets/images/dashboard/img_4.jpg')}}" class="mw-100 w-100 rounded" alt="image">
                      </div>
                      <div class="col-6 ps-1">
                        <img src="{{asset('admin/assets/images/dashboard/img_2.jpg')}}" class="mb-2 mw-100 w-100 rounded" alt="image">
                        <img src="{{asset('admin/assets/images/dashboard/img_3.jpg')}}" class="mw-100 w-100 rounded" alt="image">
                      </div>
                    </div>
                    <div class="d-flex mt-5 align-items-top">
                      <div class="ms-auto">
                        <i class="mdi mdi-heart-outline text-muted"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          @endsection
          <!-- content-wrapper ends -->
          