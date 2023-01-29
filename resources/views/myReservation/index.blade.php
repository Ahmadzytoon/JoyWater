@extends('userLayout.master')
@section('title')



@endsection
@section('css')
    
@endsection


{{--============= showCase ===============--}}
@section('showCase')

@endsection

{{--============= contant ===============--}}
@section('contant')

<div class="row container m-auto">
    <div class="col-12">
      <div class="card">
        {{-- <div class="card-header">
          <h3 class="card-title"></h3>
  
          <div class="card-tools">
            <div class="input-group input-group-sm" style="width: 150px;">
              <input type="text" name="table_search" class="form-control float-right" placeholder="Search">
  
              <div class="input-group-append">
                <button type="submit" class="btn btn-default">
                  <i class="fas fa-search"></i>
                </button>
              </div>
            </div>
          </div>
        </div> --}}
        <!-- /.card-header -->
        <div class="card-body table-responsive p-0" style="height: 300px;">
          <table class="table table-head-fixed text-nowrap">
            <thead>
              <tr>
                <th>#</th>
                <th>Name</th>
                {{-- <th>last_name</th> --}}
                <th>Phone</th>
                <th>Email</th>
                <th>Date</th>
                <th>NO.Guest</th>
                <th>Price</th>
                <th>Status</th>
                <th>Activity</th>
                <th>User Name</th>
                <th>Accept</th>
                <th>Rejected</th>
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