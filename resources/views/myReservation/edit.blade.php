@extends('userLayout.master')
@section('title')
   
@endsection
@section('css')
    
    <!-- Customized Bootstrap Stylesheet -->
    <link href="/UserSide/cssBook/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/singleCSS/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.css">
    <link rel="stylesheet" href="/css/animate.css">
    <link rel="stylesheet" href="/singleCSS/SINGLEmain.css">
    <!-- Template Stylesheet -->
    <link href="/UserSide/cssBook/style.css" rel="stylesheet">
   @endsection


{{--============= showCase ===============--}}
@section('showCase')
<div class="container-fluid position-relative p-0">
    <div class="container-fluid  py-5 mb-5 hero-header">
        <div class="container py-5">
            <div class="row justify-content-center py-5">
                <div class="col-lg-10 pt-lg-5 mt-lg-5 text-center">
                    <h1 class="heading">
                        {{-- {{ $activitydata->name}}  --}}
                    </h1>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

{{--============= contant ===============--}}
{{--============= contant ===============--}}
{{--============= contant ===============--}}
{{--============= contant ===============--}}
{{--============= contant ===============--}}
@section('contant')

<div class="row container m-auto">
  <div class="col-12">
    <div class="card">
            <div class="card-body table-responsive p-0" style="height: 300px;">
        <table class="table table-head-fixed text-nowrap">
          <thead>
         
          </thead>
          <tbody>
            {{-- reservation --}}
                  @foreach ($reservation as $data)
                      
                 
                      <form action="{{Route('user.myreserve.update',$value['id'])}}" method="POST">
                          @method('PUT')
                          @csrf
                          <input type="text" name="first_name" class="form-control" id="" placeholder="" >
                          <input type="text" name="last_name" class="form-control" id="" placeholder="" >
                          <input type="number" name="phoneNumber" class="form-control" id="" placeholder="">
                          <input type="email" name="email" class="form-control" id="" placeholder="" >
                          <input type="number" name="number_of_guest" class="form-control" id="" placeholder="">
                          <input type="date" name="res_date" class="form-control" id="" placeholder="" >

                          <div class="inputBox">
                            <h3>Hour</h3>
                            <select name="time" id="cars">
                               <option value="10">10:00:am</option>
                                <option value="11">11:00:am</option>
                                <option value="12">12:00:am</option>
                                <option value="13">1:00:pm</option>
                                <option value="14">2:00:pm</option>
                                <option value="15">3:00:pm</option>
                                <option value="16">4:00:pm</option>
                                <option value="13">5:00:pm</option>
                              </select>
                        </div>

                          {{-- <input type="text" name="activity" class="form-control" id="" placeholder="" > --}}
                          {{-- <input type="text" name="user" class="form-control" id="" placeholder="" value="{{$data->name}}"> --}}
                          
                          <button type="submit" class="btn btn-block  bg-success btn-sm">Save</button>
                      </form>
                  
              @endforeach

          </tbody>
        </table>
      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->
  </div>
</div>

@endsection