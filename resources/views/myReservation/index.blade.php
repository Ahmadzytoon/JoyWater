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
@section('contant')

<div class="row container m-auto">
  <div class="col-12">
    <div class="card">
            <div class="card-body table-responsive p-0" style="height: 300px;">
        <table class="table table-head-fixed text-nowrap">
          <thead>
            <tr>
              <th>#</th>
              <th>Activity Name</th>
              <th>NO.Guest</th>
              <th>Price</th>
              <th>Status</th>
              <th>Edit</th>
            </tr>
          </thead>
          <tbody>
              @foreach ($data as $value)

              <tr>
                  <td>{{$value['id']}}</td>
                  <td>{{$value['first_name'].$value['last_name']}}</td>
                  {{-- <td>{{$value['last_name']	}}</td> --}}
                  <td>{{$value['phoneNumber']	}}</td>
                  <td>{{$value['email']	}}</td>
                  <td>{{$value['res_date']	}}</td>
                  <td>{{$value['number_of_guest']	}}</td>
                  <td>{{$value['price']	}}</td>
                  @if ($value['status']=="Pending")
                  <td><span class="badge bg-warning">Pending</span></td>
                  @endif

                  @if ($value['status']	=="Accepted")
                  <td><span class="badge bg-success">Accepted</span></td>

                  @endif     
                  @if ($value['status']	=="Rejected")
                  <td><span class="badge bg-danger">Rejected</span></td>

                  @endif
                  <td>{{$value['activity']}}</td>
                  <td>{{$value['user']}}</td>

                  <td>
                      <form action="{{Route('admin.reservation.update',$value['id'])}}" method="POST">
                          @method('PUT')
                          {{-- Pending --}}
                          @csrf
                          <button type="submit" class="btn btn-block  bg-success btn-sm">Accept</button>
                      </form>
                  </td>
              
                <td>
                <form action="{{Route('admin.reservation.destroy',$value['id'])}}" method="POST">
                  @method('delete')
                  {{-- Pending --}}
                  @csrf
                  <button type="submit" class="btn btn-block bg-gradient-danger btn-sm">Rejected</button>
              </form>
                </td>
              </tr>
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