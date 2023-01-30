@extends('userLayout.master')
@section('title')
    profile
@endsection
@section('css')
   {{-- <link href="UserSide/cssprofile/profile.css" rel="stylesheet">   --}}
  <link href="UserSide/cssProfil/cssprofile/style.css" rel="stylesheet"> 

@endsection
@section('showCase')  
<div class="container-fluid position-relative p-0">
    <div class="container-fluid py-5 mb-5 hero-header">
        <div class="container py-5">
            <div class="row justify-content-center py-5">
                <div class="col-lg-10 pt-lg-5 mt-lg-5 text-center">
                    <section class="contact" id="contact">
                        <h1   style="margin-top:30px;"class="heading">
                            <span>P</span>
                            <span>r</span>
                            <span>o</span>
                            <span>f</span>
                            <span>i</span>
                            <span>l</span>
                            <span>e</span>

                        </h1>                
                      </div>
            </div>
        </div>
    </div>
</div> 
@endsection

@section('contant')

<div id="home">

<div  style="margin-bottom:100px !important;" class="container profile">
    <div class="main-body">
          <div class="row gutters-sm align-items-center justify-content-center">
            <div class="col-md-4 mb-3">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex flex-column align-items-center text-center">
                    <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Admin" class="rounded-circle" width="150">
                        
          
                    <div class="mt-3">
                      <h4> </h4>
                      <p class="text-secondary mb-1 mb-0 fw-bold fs-2"> {{auth()->user()->name}} </p>
                      {{-- <p class="text-muted font-size-sm">Bay Area, San Francisco, CA</p> --}}
                    </div>
                  </div>
                </div>
                
            </div>
            </div>
            <div  class="col-md-6">
              <div class="card mb-3">
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0 fw-bold fs-2" >Full Name</h6>
                    </div>
                    <div class="col-sm-9 text-secondary fs-3">
                      {{auth()->user()->name}}
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0 fw-bold fs-2">Email</h6>
                    </div>
                    <div class="col-sm-9 text-secondary fs-3">
                      {{auth()->user()->email}}
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0 fw-bold fs-2">Phone</h6>
                    </div>
                    <div class="col-sm-9 text-secondary fs-3">
                      {{auth()->user()->phone}}
                    </div>
                  </div>
                  <hr>
                
                  <div class="row">
                    <div class="col-sm-12">
                      <a class="btn btn-primary " target="__blank" href="{{route('user.profile.edit',auth()->user()->id)}}">Edit</a>
                      <a class="btn btn-primary " target="__blank" href="{{route('user.myreserve.index')}}">My Reservation </a>

                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>
</div>
@endsection