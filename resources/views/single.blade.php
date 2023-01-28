@extends('userLayout.master')
@section('title')
    book
@endsection
@section('css')
    <!-- Customized Bootstrap Stylesheet -->
    <link href="UserSide/cssBook/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/singleCSS/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="singleCSS/SINGLEmain.css">
    <!-- Template Stylesheet -->
    <link href="UserSide/cssBook/style.css" rel="stylesheet">
@endsection

{{-- ============= showCase =============== --}}
@section('showCase')
    <div class="container-fluid position-relative p-0">
        <div class="container-fluid  py-5 mb-5 hero-header">
            <div class="container py-5">
                <div class="row justify-content-center py-5">
                    <div class="col-lg-10 pt-lg-5 mt-lg-5 text-center">
                        <h1 class="heading">
                            <span>t</span>
                            <span>i</span>
                            <span>t</span>
                            <span>l</span>
                            <span class="space"></span>
                            <span>h</span>
                            <span>e</span>
                            <span>r</span>
                            <span>e</span>
                        </h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
{{-- ============= contant =============== --}}
@section('contant')
    <!-- contact section starts  -->

    <section class="section-3">
        <div class="container-fluid">
            <div class="row m-0">
                <div class="col-lg-5 col-md-12 p-0 me-5" data-aos="fade-left" data-aos-delay="300">
                    <figure>
                        <img class="out-sideimg " src="images/services-bg.jpg" alt="services">
                    </figure>
                </div>
                <div class="col-lg-6 col-md-12 p-0 ms-5" data-aos="fade-right" data-aos-delay="300">
                    <h2>What is this Our<span> Activity?</span></h2>
                    <div>
                        <ul class="row">
                            <li class="col-3"> <b>Description :</b> </li>
                            <li class="col-9 mt-3">
                                <p style="font-size: 1.4rem;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Id
                                    eligendi corrupti, similique officiis labore optio debitis accusamus corporis
                                    necessitatibus non earum libero quam quae dignissimos cupiditate consectetur aperiam
                                    modi in natus nam exercitationem excepturi ipsa! Officia rerum minima accusamus
                                    asperiores molestiae nemo hic sunt, et ipsa harum blanditiis provident, dolor maiores ut
                                    ratione porro, quasi nisi quidem exercitationem dignissimos cumque?</p>
                            </li>
                        </ul>
                        <ul class="row">
                            <li class="col-3"> <b>Price :</b> </li>
                            <li class="col-1 mt-3">
                                <p class="px-3" style="font-size: 1.4rem; border:1px solid #04448C"><b>50$</b></p>
                            </li>
                        </ul>
                        <ul class="row p-2 mt-5">
                            <a href="#" class="btn" style="font-size: 2rem;">book now</a>
                        </ul>
                        
                    </div>
                </div>

            </div>
        </div>
    </section>


    <!-- contact section ends -->
@endsection
