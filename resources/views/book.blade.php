@extends('userLayout.master')
@section('title')
   book
@endsection
@section('css')
<!-- Customized Bootstrap Stylesheet -->
<link href="UserSide/cssBook/bootstrap.min.css" rel="stylesheet">

<!-- Template Stylesheet -->
<link href="UserSide/cssBook/style.css" rel="stylesheet">
@endsection

{{--============= showCase ===============--}}
@section('showCase')
<div class="container-fluid position-relative p-0">
    <div class="container-fluid  py-5 mb-5 hero-header">
        <div class="container py-5">
            <div class="row justify-content-center py-5">
                <div class="col-lg-10 pt-lg-5 mt-lg-5 text-center">
                    <h1 class="heading">
                        <span>b</span>
                        <span>o</span>
                        <span>o</span>
                        <span>k</span>
                        <span class="space"></span>
                        <span>n</span>
                        <span>o</span>
                        <span>w</span>
                    </h1>
                </div>
            </div>
        </div>
    </div>
</div> 
@endsection
{{--============= contant ===============--}}
@section('contant')
<!-- contact section starts  -->

<section class="book" id="book">

    {{-- <h1 class="heading">
        <span>b</span>
        <span>o</span>
        <span>o</span>
        <span>k</span>
        <span class="space"></span>
        <span>n</span>
        <span>o</span>
        <span>w</span>
    </h1> --}}

    <div class="row">

        <div class="image">
            <img src="images/Waterscooter.gif" alt="">
        </div>

        <form action="">
            <div class="inputBox">
                <h3>where to</h3>
                <input type="text" placeholder="place name">
            </div>
            <div class="inputBox">
                <h3>how many</h3>
                <input type="number" placeholder="number of guests">
            </div>
            <div class="inputBox">
                <h3>arrivals</h3>
                <input type="date">
            </div>
            <div class="inputBox">
                <h3>leaving</h3>
                <input type="date">
            </div>
            <input type="submit" class="btn" value="book now">
        </form>

    </div>

</section>


<!-- contact section ends -->

@endsection