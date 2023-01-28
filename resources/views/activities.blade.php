@extends('userLayout.master')
@section('title')
    home
@endsection
@section('css')
    
@endsection

@section('contant')


<!-- home section ends -->
<!-- packages section starts  -->

<section class="packages" id="packages">

    <h1 class="heading">
        <span>A</span>
        <span>c</span>
        <span>t</span>
        <span>i</span>
        <span>v</span>
        <span>i</span>
        <span>t</span>
        <span>i</span>
        <span>e</span>
        <span>s</span>
    </h1>

    <div class="box-container">


        @foreach ($data as $activitydata)
            
        <div class="box">

            <img src="{{URL::asset("storage/image/".$activitydata->image1)}}" alt="">
            <div class="content">
                <h3> <i class="fas fa-map-marker-alt"></i> {{ $activitydata->name}}  </h3>
                <p> {{ $activitydata->short_description}} </p>
                <p> {{ $activitydata->long_description}} </p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <div class="price"> {{ $activitydata->price}} <span>$120.00</span> </div>
                <a href="#" class="btn">book now</a>
            </div>

        </div>

        @endforeach



    </div>

</section>














@endsection