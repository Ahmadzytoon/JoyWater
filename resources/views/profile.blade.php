@extends('userLayout.master')
@section('title')
    profile
@endsection
@section('css')
<link href="UserSide/cssprofile/profile.css" rel="stylesheet">

@endsection

@section('contant')
<section  id="home">

    <div class="container_profile">


    <div class="box">
        <img src="images/people3.jpeg" alt="">
        {{-- <ul>
            <li>your name</li>
            <li>your age</li>
        </ul> --}}
    </div>


    <div class="about">
        <ul>
            <h1>Welcom </h1>
        </ul>
        <ul>
            <h3>Name</h3>
            <li>orange academy</li>
        </ul>
        {{-- <ul>
            <h3>Gender</h3>
            <li>Male</li>
        </ul>
        <ul> --}}
            {{-- <h3>Age</h3>
            <li>Male</li>
        </ul>
        <ul>
            <h3>Country</h3>
            <li>Aqaba -Jordan</li>
        </ul>
        <ul>
            <h3> Your Reservation</h3>
            <p>Jet Ski Parasailing on Wednesday 20-2-2023 at 11am</p>
        </ul>
        <ul> --}}
            <h3>Phone</h3>
            <li>0777222777</li>
        </ul>
        <ul>
            <h3>Email</h3>
            <li>watergame@gmail.com</li>
        </ul>
    </div>
</div>
<hr>
</section>

<div class="container" style="height: 1000px; width:1000px;">
   
        <ul>
            <h1>My Resrvation </h1>
            <br>
            
    <table class="table table-dark" style="backgroung-color:blue !important;" >
        <thead>
          
            <tr>
                <th scope="col">#</th>
                <th scope="col">First</th>
                <th scope="col">Last</th>
                <th scope="col">Handle</th>
              </tr>
              <tr>
                <th scope="col">#</th>
                <th scope="col">First</th>
                <th scope="col">Last</th>
                <th scope="col">Handle</th>
              </tr>
              <tr>
                <th scope="col">#</th>
                <th scope="col">First</th>
                <th scope="col">Last</th>
                <th scope="col">Handle</th>
              </tr>
              <tr>
                <th scope="col">#</th>
                <th scope="col">First</th>
                <th scope="col">Last</th>
                <th scope="col">Handle</th>
              </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
          </tr>
          <tr>
            <th scope="row">2</th>
            <td>Jacob</td>
            <td>Thornton</td>
            <td>@fat</td>
          </tr>
          <tr>
            <th scope="row">3</th>
            <td>Larry</td>
            <td>the Bird</td>
            <td>@twitter</td>
          </tr>
        </tbody>
      </table>
</div>
@endsection