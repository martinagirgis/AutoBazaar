@extends('layouts.app')
<link rel="stylesheet" href="{{asset('assets/site/mohamed/css/index.css')}}">
<link rel="stylesheet" href="{{asset('assets/site/mohamed/css/style.css')}}">
<style>
    .subcat-d7k{
        margin-left:75px
    }
    @media only screen and (max-width: 420px) {
        .subcat-d7k{
            margin-left:0
        }
    }
</style>
@section('content')
    <section id="slider_1">
        <div id="demo" class="carousel slide" data-ride="carousel">



            <!-- The slideshow -->
            <div class="row ">
                <div class="carousel-inner" >
                    <!-- Item -->
                    <div class="carousel-item active">
                        <div class="row">
                            <div class="col-sm-1"></div>
                            <div class="col-sm-6">
                                <img class="col-sm-12 " src="{{asset('assets/site/images/car.png')}}" alt="Los Angeles"  >
                            </div>
                            <div class="col-sm-5 pt-lg-5 pb-lg-5" >
                                <div class="row">
                                    <p class="h2 col-sm-12">
                                        Title
                                    </p>
                                    <p class="col-sm-5 pr-lg-2 h5">
                                        TitleTitleTitleTitleTitleTitleTitleTitleTitle
                                        TitleTitleTitleTitleTitleTitleTitleTitleTitle
                                        TitleTitleTitleTitleTitleTitleTitleTitleTitle TitleTitleTitleTitleTitleTitle
                                    </p>

                                    <div class="col-sm-12 pt-lg-5">
                                        <div class="row ">
                                            <div class="col-sm-5">
                                                sad sad  sad sad  sad sad
                                                sad sad  sad sad  sad sad
                                                <br>
                                                <a href="" class="h5">
                                                    Deal
                                                </a>
                                            </div>

                                            <div class="col-sm-4">
                                                <input type="button" class="btn btn-primary" value="Click Me">
                                            </div>

                                        </div>

                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End of Item -->

                    <div class="carousel-item">
                        <div class="row">
                            <div class="col-sm-1"></div>
                            <div class="col-sm-6">
                                <img class="col-sm-12 " src="{{asset('assets/site/images/car.png')}}" alt="Los Angeles"  >
                            </div>
                            <div class="col-sm-5 pt-lg-5 pb-lg-5" >
                                <div class="row">
                                    <p class="h2 col-sm-12">
                                        Title
                                    </p>
                                    <p class="col-sm-5 pr-lg-2 h5">
                                        TitleTitleTitleTitleTitleTitleTitleTitleTitle
                                        TitleTitleTitleTitleTitleTitleTitleTitleTitle
                                        TitleTitleTitleTitleTitleTitleTitleTitleTitle TitleTitleTitleTitleTitleTitle
                                    </p>

                                    <div class="col-sm-12 pt-lg-5">
                                        <div class="row ">
                                            <div class="col-sm-5">
                                                sad sad  sad sad  sad sad
                                                sad sad  sad sad  sad sad
                                                <br>
                                                <a href="" class="h5">
                                                    Deal
                                                </a>
                                            </div>

                                            <div class="col-sm-4">
                                                <input type="button" class="btn btn-primary" value="Click Me">
                                            </div>

                                        </div>

                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="carousel-item">
                        <div class="row">
                            <div class="col-sm-1"></div>
                            <div class="col-sm-6">
                                <img class="col-sm-12 " src="{{asset('assets/site/images/car.png')}}" alt="Los Angeles"  >
                            </div>
                            <div class="col-sm-5 pt-lg-5 pb-lg-5" >
                                <div class="row">
                                    <p class="h2 col-sm-12">
                                        Title
                                    </p>
                                    <p class="col-sm-5 pr-lg-2 h5">
                                        TitleTitleTitleTitleTitleTitleTitleTitleTitle
                                        TitleTitleTitleTitleTitleTitleTitleTitleTitle
                                        TitleTitleTitleTitleTitleTitleTitleTitleTitle TitleTitleTitleTitleTitleTitle
                                    </p>

                                    <div class="col-sm-12 pt-lg-5">
                                        <div class="row ">
                                            <div class="col-sm-5">
                                                sad sad  sad sad  sad sad
                                                sad sad  sad sad  sad sad
                                                <br>
                                                <a href="" class="h5">
                                                    Deal
                                                </a>
                                            </div>

                                            <div class="col-sm-4">
                                                <input type="button" class="btn btn-primary" value="Click Me">
                                            </div>

                                        </div>

                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <!-- Left and right controls -->
            <a class="carousel-control-prev" href="#demo" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#demo" data-slide="next">
                <span class="carousel-control-next-icon"></span>
            </a>
        </div>
    </section>
    <section id="subcats">
        <div class="container my-4 mt-sm-3 ">
                <div id="carousel-example-multi" class="carousel slide carousel-multi-item v-2 product-carousel col-sm-12" data-ride="carousel">
                        <!--/.Controls-->
                        <div class="carousel-inner subcat-d7k" role="listbox" >
                            <center>
                            <div class="carousel-item active ">
                                <div class="col-sm-2" style="display:inline-block;">
                                    <div class="card bg-white" >
                                        <a href="{{route('subcategory.details')}}">
                                            <div class="card-body moka-body  col-sm-12" >
                                                <img  class="card-img-top col-sm-12 " src="{{asset('assets/site/images/car-icon-1.png')}}" alt="Card image cap" style="width:150px;height:100px;">
                                                <br>
                                                Go somewhere
                                            </div>
                                        </a>

                                    </div>

                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="col-sm-2" style="display:inline-block;">
                                    <div class="card bg-white" >
                                        <a href="{{route('subcategory.details')}}">
                                            <div class="card-body moka-body  col-sm-12" >
                                                <img  class="card-img-top col-sm-12 " src="{{asset('assets/site/images/car-icon-1.png')}}" alt="Card image cap" style="width:150px;height:100px;">
                                                <br>
                                                Go somewhere
                                            </div>
                                        </a>

                                    </div>

                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="col-sm-2" style="display:inline-block;">
                                    <div class="card bg-white" >
                                        <a href="{{route('subcategory.details')}}">
                                            <div class="card-body moka-body  col-sm-12" >
                                                <img  class="card-img-top col-sm-12 " src="{{asset('assets/site/images/car-icon-1.png')}}" alt="Card image cap" style="width:150px;height:100px;">
                                                <br>
                                                Go somewhere
                                            </div>
                                        </a>

                                    </div>

                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="col-sm-2" style="display:inline-block;">
                                    <div class="card bg-white" >
                                        <a href="{{route('subcategory.details')}}">
                                            <div class="card-body moka-body  col-sm-12" >
                                                <img  class="card-img-top col-sm-12 " src="{{asset('assets/site/images/car-icon-1.png')}}" alt="Card image cap" style="width:150px;height:100px;">
                                                <br>
                                                Go somewhere
                                            </div>
                                        </a>

                                    </div>

                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="col-sm-2" style="display:inline-block;">
                                    <div class="card bg-white" >
                                        <a href="{{route('subcategory.details')}}">
                                            <div class="card-body moka-body  col-sm-12" >
                                                <img  class="card-img-top col-sm-12 " src="{{asset('assets/site/images/car-icon-1.png')}}" alt="Card image cap" style="width:150px;height:100px;">
                                                <br>
                                                Go somewhere
                                            </div>
                                        </a>

                                    </div>

                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="col-sm-2" style="display:inline-block;">
                                    <div class="card bg-white" >
                                        <a href="{{route('subcategory.details')}}">
                                            <div class="card-body moka-body  col-sm-12" >
                                                <img  class="card-img-top col-sm-12 " src="{{asset('assets/site/images/car-icon-1.png')}}" alt="Card image cap" style="width:150px;height:100px;">
                                                <br>
                                                Go somewhere
                                            </div>
                                        </a>

                                    </div>

                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="col-sm-2" style="display:inline-block;">
                                    <div class="card bg-white" >
                                        <a href="{{route('subcategory.details')}}">
                                            <div class="card-body moka-body  col-sm-12" >
                                                <img  class="card-img-top col-sm-12 " src="{{asset('assets/site/images/car-icon-1.png')}}" alt="Card image cap" style="width:150px;height:100px;">
                                                <br>
                                                Go somewhere
                                            </div>
                                        </a>

                                    </div>

                                </div>
                            </div>
                            </center>

                        </div>




                    <!--Controls-->
                    <center>
                        <div class="controls-top my-3">
                            <a class="btn-floating btn-sm" href="#carousel-example-multi" data-slide="prev" style="background:none"><i class="fas fa-chevron-left"></i></a>
                            <a class="btn-floating btn-sm" href="#carousel-example-multi" data-slide="next" style="background:none"><i class="fas fa-chevron-right"></i></a>
                        </div>
                    </center>

        </div>
        </div>
    </section>

    <!-- Text -->
    <h4 class=" text-center pt-5 mt-d-2">
        SubCategory Products
        <center>
            <div class=" text_how_to_use">
            </div>
        </center>
    </h4>
    <!-- End of text -->
    <div class="container ">
        <div class="mt-3">
            <div class="container">
                <div class="row mt-5">
                    <div class="col-sm-6 col-lg-3 mb-4" >
                        <div class="procard">
                            <div class="d-flex justify-content-around">
                                <a class="m-1" href="#"><i class="far fa-heart"></i></a>
                                <p class="m-1 maincolor"></p>
                                <p class="m-1">New</p>
                            </div>
                            <div>
                                <img src="{{asset('assets/site/images/site/product1.png')}}" width="100%" height="120" class="card-img"/>
                            </div>
                            <div>
                                <a href="#" class="nav-link color-dark pl-0" style="color: black !important;"><h5 class="font-weight-bold mt-2">Product Name</h5></a>
                                <p class="">Description description des description description .....</p>
                                <p class="font-weight-bold mt-2 maincolor">$12.99</p>
                            </div>
                            <div class="d-flex justify-content-around">
                                <div>
                                    <a href="#">
                                        <img src="{{asset('assets/site/images/site/whatapp.png')}}" height="20" width="20" alt="...">
                                    </a>
                                    <a href="#">
                                        <img src="{{asset('assets/site/images/site/face.png')}}" height="20" width="20" alt="...">
                                    </a>
                                    <a href="#">
                                        <img src="{{asset('assets/site/images/site/insta.png')}}" height="20" width="20" alt="...">
                                    </a>
                                    <a href="#">
                                        <img src="{{asset('assets/site/images/site/twitter.png')}}" height="20" width="20" alt="...">
                                    </a>
                                </div>

                                <div>
                                    <i class="fas fa-map-marker-alt smallColor"></i> Wasit, Iraq
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3 mb-4">
                        <div class="procard">
                            <div class="d-flex justify-content-around">
                                <a class="m-1" href="#"><i class="far fa-heart"></i></a>
                                <p class="m-1 maincolor">%Discount</p>
                                <p class="m-1">New</p>
                            </div>
                            <div>
                                <img src="{{asset('assets/site/images/site/product2.png')}}" width="100%" height="120" class="card-img"/>
                            </div>
                            <div>
                                <a href="#" class="nav-link color-dark pl-0" style="color: black !important;"><h5 class="font-weight-bold mt-2">Product Name</h5></a>
                                <p class="">Description description des description description .....</p>
                                <p class="font-weight-bold mt-2 maincolor">$12.99</p>
                            </div>
                            <div class="d-flex justify-content-around">
                                <div>
                                    <a href="#">
                                        <img src="{{asset('assets/site/images/site/whatapp.png')}}" height="20" width="20" alt="...">
                                    </a>
                                    <a href="#">
                                        <img src="{{asset('assets/site/images/site/face.png')}}" height="20" width="20" alt="...">
                                    </a>
                                    <a href="#">
                                        <img src="{{asset('assets/site/images/site/insta.png')}}" height="20" width="20" alt="...">
                                    </a>
                                    <a href="#">
                                        <img src="{{asset('assets/site/images/site/twitter.png')}}" height="20" width="20" alt="...">
                                    </a>
                                </div>
                                <div>
                                    <i class="fas fa-map-marker-alt smallColor"></i> Wasit, Iraq
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3 mb-4">
                        <div class="procard">
                            <div class="d-flex justify-content-around">
                                <a class="m-1" href="#"><i class="far fa-heart"></i></a>
                                <p class="m-1 maincolor"></p>
                                <p class="m-1">New</p>
                            </div>
                            <div>
                                <img src="{{asset('assets/site/images/site/product1.png')}}" width="100%" height="120" class="card-img"/>
                            </div>
                            <div>
                                <a href="#" class="nav-link color-dark pl-0" style="color: black !important;"><h5 class="font-weight-bold mt-2">Product Name</h5></a>
                                <p class="">Description description des description description .....</p>
                                <p class="font-weight-bold mt-2 maincolor">$12.99</p>
                            </div>
                            <div class="d-flex justify-content-around">
                                <div>
                                    <a href="#">
                                        <img src="{{asset('assets/site/images/site/whatapp.png')}}" height="20" width="20" alt="...">
                                    </a>
                                    <a href="#">
                                        <img src="{{asset('assets/site/images/site/face.png')}}" height="20" width="20" alt="...">
                                    </a>
                                    <a href="#">
                                        <img src="{{asset('assets/site/images/site/insta.png')}}" height="20" width="20" alt="...">
                                    </a>
                                    <a href="#">
                                        <img src="{{asset('assets/site/images/site/twitter.png')}}" height="20" width="20" alt="...">
                                    </a>
                                </div>
                                <div>
                                    <i class="fas fa-map-marker-alt smallColor"></i> Wasit, Iraq
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3 mb-4" >
                        <div class="procard">
                            <div class="d-flex justify-content-around">
                                <a class="m-1" href="#"><i class="far fa-heart"></i></a>
                                <p class="m-1 maincolor"></p>
                                <p class="m-1">New</p>
                            </div>
                            <div>
                                <img src="{{asset('assets/site/images/site/product1.png')}}" width="100%" height="120" class="card-img"/>
                            </div>
                            <div>
                                <a href="#" class="nav-link color-dark pl-0" style="color: black !important;"><h5 class="font-weight-bold mt-2">Product Name</h5></a>
                                <p class="">Description description des description description .....</p>
                                <p class="font-weight-bold mt-2 maincolor">$12.99</p>
                            </div>
                            <div class="d-flex justify-content-around">
                                <div>
                                    <a href="#">
                                        <img src="{{asset('assets/site/images/site/whatapp.png')}}" height="20" width="20" alt="...">
                                    </a>
                                    <a href="#">
                                        <img src="{{asset('assets/site/images/site/face.png')}}" height="20" width="20" alt="...">
                                    </a>
                                    <a href="#">
                                        <img src="{{asset('assets/site/images/site/insta.png')}}" height="20" width="20" alt="...">
                                    </a>
                                    <a href="#">
                                        <img src="{{asset('assets/site/images/site/twitter.png')}}" height="20" width="20" alt="...">
                                    </a>
                                </div>

                                <div>
                                    <i class="fas fa-map-marker-alt smallColor"></i> Wasit, Iraq
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3 mb-4">
                        <div class="procard">
                            <div class="d-flex justify-content-around">
                                <a class="m-1" href="#"><i class="far fa-heart"></i></a>
                                <p class="m-1 maincolor">%Discount</p>
                                <p class="m-1">New</p>
                            </div>
                            <div>
                                <img src="{{asset('assets/site/images/site/product2.png')}}" width="100%" height="120" class="card-img"/>
                            </div>
                            <div>
                                <a href="#" class="nav-link color-dark pl-0" style="color: black !important;"><h5 class="font-weight-bold mt-2">Product Name</h5></a>
                                <p class="">Description description des description description .....</p>
                                <p class="font-weight-bold mt-2 maincolor">$12.99</p>
                            </div>
                            <div class="d-flex justify-content-around">
                                <div>
                                    <a href="#">
                                        <img src="{{asset('assets/site/images/site/whatapp.png')}}" height="20" width="20" alt="...">
                                    </a>
                                    <a href="#">
                                        <img src="{{asset('assets/site/images/site/face.png')}}" height="20" width="20" alt="...">
                                    </a>
                                    <a href="#">
                                        <img src="{{asset('assets/site/images/site/insta.png')}}" height="20" width="20" alt="...">
                                    </a>
                                    <a href="#">
                                        <img src="{{asset('assets/site/images/site/twitter.png')}}" height="20" width="20" alt="...">
                                    </a>
                                </div>
                                <div>
                                    <i class="fas fa-map-marker-alt smallColor"></i> Wasit, Iraq
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3 mb-4">
                        <div class="procard">
                            <div class="d-flex justify-content-around">
                                <a class="m-1" href="#"><i class="far fa-heart"></i></a>
                                <p class="m-1 maincolor"></p>
                                <p class="m-1">New</p>
                            </div>
                            <div>
                                <img src="{{asset('assets/site/images/site/product1.png')}}" width="100%" height="120" class="card-img"/>
                            </div>
                            <div>
                                <a href="#" class="nav-link color-dark pl-0" style="color: black !important;"><h5 class="font-weight-bold mt-2">Product Name</h5></a>
                                <p class="">Description description des description description .....</p>
                                <p class="font-weight-bold mt-2 maincolor">$12.99</p>
                            </div>
                            <div class="d-flex justify-content-around">
                                <div>
                                    <a href="#">
                                        <img src="{{asset('assets/site/images/site/whatapp.png')}}" height="20" width="20" alt="...">
                                    </a>
                                    <a href="#">
                                        <img src="{{asset('assets/site/images/site/face.png')}}" height="20" width="20" alt="...">
                                    </a>
                                    <a href="#">
                                        <img src="{{asset('assets/site/images/site/insta.png')}}" height="20" width="20" alt="...">
                                    </a>
                                    <a href="#">
                                        <img src="{{asset('assets/site/images/site/twitter.png')}}" height="20" width="20" alt="...">
                                    </a>
                                </div>
                                <div>
                                    <i class="fas fa-map-marker-alt smallColor"></i> Wasit, Iraq
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3 mb-4" >
                        <div class="procard">
                            <div class="d-flex justify-content-around">
                                <a class="m-1" href="#"><i class="far fa-heart"></i></a>
                                <p class="m-1 maincolor"></p>
                                <p class="m-1">New</p>
                            </div>
                            <div>
                                <img src="{{asset('assets/site/images/site/product1.png')}}" width="100%" height="120" class="card-img"/>
                            </div>
                            <div>
                                <a href="#" class="nav-link color-dark pl-0" style="color: black !important;"><h5 class="font-weight-bold mt-2">Product Name</h5></a>
                                <p class="">Description description des description description .....</p>
                                <p class="font-weight-bold mt-2 maincolor">$12.99</p>
                            </div>
                            <div class="d-flex justify-content-around">
                                <div>
                                    <a href="#">
                                        <img src="{{asset('assets/site/images/site/whatapp.png')}}" height="20" width="20" alt="...">
                                    </a>
                                    <a href="#">
                                        <img src="{{asset('assets/site/images/site/face.png')}}" height="20" width="20" alt="...">
                                    </a>
                                    <a href="#">
                                        <img src="{{asset('assets/site/images/site/insta.png')}}" height="20" width="20" alt="...">
                                    </a>
                                    <a href="#">
                                        <img src="{{asset('assets/site/images/site/twitter.png')}}" height="20" width="20" alt="...">
                                    </a>
                                </div>

                                <div>
                                    <i class="fas fa-map-marker-alt smallColor"></i> Wasit, Iraq
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3 mb-4">
                        <div class="procard">
                            <div class="d-flex justify-content-around">
                                <a class="m-1" href="#"><i class="far fa-heart"></i></a>
                                <p class="m-1 maincolor">%Discount</p>
                                <p class="m-1">New</p>
                            </div>
                            <div>
                                <img src="{{asset('assets/site/images/site/product2.png')}}" width="100%" height="120" class="card-img"/>
                            </div>
                            <div>
                                <a href="#" class="nav-link color-dark pl-0" style="color: black !important;"><h5 class="font-weight-bold mt-2">Product Name</h5></a>
                                <p class="">Description description des description description .....</p>
                                <p class="font-weight-bold mt-2 maincolor">$12.99</p>
                            </div>
                            <div class="d-flex justify-content-around">
                                <div>
                                    <a href="#">
                                        <img src="{{asset('assets/site/images/site/whatapp.png')}}" height="20" width="20" alt="...">
                                    </a>
                                    <a href="#">
                                        <img src="{{asset('assets/site/images/site/face.png')}}" height="20" width="20" alt="...">
                                    </a>
                                    <a href="#">
                                        <img src="{{asset('assets/site/images/site/insta.png')}}" height="20" width="20" alt="...">
                                    </a>
                                    <a href="#">
                                        <img src="{{asset('assets/site/images/site/twitter.png')}}" height="20" width="20" alt="...">
                                    </a>
                                </div>
                                <div>
                                    <i class="fas fa-map-marker-alt smallColor"></i> Wasit, Iraq
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3 mb-4">
                        <div class="procard">
                            <div class="d-flex justify-content-around">
                                <a class="m-1" href="#"><i class="far fa-heart"></i></a>
                                <p class="m-1 maincolor"></p>
                                <p class="m-1">New</p>
                            </div>
                            <div>
                                <img src="{{asset('assets/site/images/site/product1.png')}}" width="100%" height="120" class="card-img"/>
                            </div>
                            <div>
                                <a href="#" class="nav-link color-dark pl-0" style="color: black !important;"><h5 class="font-weight-bold mt-2">Product Name</h5></a>
                                <p class="">Description description des description description .....</p>
                                <p class="font-weight-bold mt-2 maincolor">$12.99</p>
                            </div>
                            <div class="d-flex justify-content-around">
                                <div>
                                    <a href="#">
                                        <img src="{{asset('assets/site/images/site/whatapp.png')}}" height="20" width="20" alt="...">
                                    </a>
                                    <a href="#">
                                        <img src="{{asset('assets/site/images/site/face.png')}}" height="20" width="20" alt="...">
                                    </a>
                                    <a href="#">
                                        <img src="{{asset('assets/site/images/site/insta.png')}}" height="20" width="20" alt="...">
                                    </a>
                                    <a href="#">
                                        <img src="{{asset('assets/site/images/site/twitter.png')}}" height="20" width="20" alt="...">
                                    </a>
                                </div>
                                <div>
                                    <i class="fas fa-map-marker-alt smallColor"></i> Wasit, Iraq
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3 mb-4" >
                        <div class="procard">
                            <div class="d-flex justify-content-around">
                                <a class="m-1" href="#"><i class="far fa-heart"></i></a>
                                <p class="m-1 maincolor"></p>
                                <p class="m-1">New</p>
                            </div>
                            <div>
                                <img src="{{asset('assets/site/images/site/product1.png')}}" width="100%" height="120" class="card-img"/>
                            </div>
                            <div>
                                <a href="#" class="nav-link color-dark pl-0" style="color: black !important;"><h5 class="font-weight-bold mt-2">Product Name</h5></a>
                                <p class="">Description description des description description .....</p>
                                <p class="font-weight-bold mt-2 maincolor">$12.99</p>
                            </div>
                            <div class="d-flex justify-content-around">
                                <div>
                                    <a href="#">
                                        <img src="{{asset('assets/site/images/site/whatapp.png')}}" height="20" width="20" alt="...">
                                    </a>
                                    <a href="#">
                                        <img src="{{asset('assets/site/images/site/face.png')}}" height="20" width="20" alt="...">
                                    </a>
                                    <a href="#">
                                        <img src="{{asset('assets/site/images/site/insta.png')}}" height="20" width="20" alt="...">
                                    </a>
                                    <a href="#">
                                        <img src="{{asset('assets/site/images/site/twitter.png')}}" height="20" width="20" alt="...">
                                    </a>
                                </div>

                                <div>
                                    <i class="fas fa-map-marker-alt smallColor"></i> Wasit, Iraq
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3 mb-4">
                        <div class="procard">
                            <div class="d-flex justify-content-around">
                                <a class="m-1" href="#"><i class="far fa-heart"></i></a>
                                <p class="m-1 maincolor">%Discount</p>
                                <p class="m-1">New</p>
                            </div>
                            <div>
                                <img src="{{asset('assets/site/images/site/product2.png')}}" width="100%" height="120" class="card-img"/>
                            </div>
                            <div>
                                <a href="#" class="nav-link color-dark pl-0" style="color: black !important;"><h5 class="font-weight-bold mt-2">Product Name</h5></a>
                                <p class="">Description description des description description .....</p>
                                <p class="font-weight-bold mt-2 maincolor">$12.99</p>
                            </div>
                            <div class="d-flex justify-content-around">
                                <div>
                                    <a href="#">
                                        <img src="{{asset('assets/site/images/site/whatapp.png')}}" height="20" width="20" alt="...">
                                    </a>
                                    <a href="#">
                                        <img src="{{asset('assets/site/images/site/face.png')}}" height="20" width="20" alt="...">
                                    </a>
                                    <a href="#">
                                        <img src="{{asset('assets/site/images/site/insta.png')}}" height="20" width="20" alt="...">
                                    </a>
                                    <a href="#">
                                        <img src="{{asset('assets/site/images/site/twitter.png')}}" height="20" width="20" alt="...">
                                    </a>
                                </div>
                                <div>
                                    <i class="fas fa-map-marker-alt smallColor"></i> Wasit, Iraq
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3 mb-4">
                        <div class="procard">
                            <div class="d-flex justify-content-around">
                                <a class="m-1" href="#"><i class="far fa-heart"></i></a>
                                <p class="m-1 maincolor"></p>
                                <p class="m-1">New</p>
                            </div>
                            <div>
                                <img src="{{asset('assets/site/images/site/product1.png')}}" width="100%" height="120" class="card-img"/>
                            </div>
                            <div>
                                <a href="#" class="nav-link color-dark pl-0" style="color: black !important;"><h5 class="font-weight-bold mt-2">Product Name</h5></a>
                                <p class="">Description description des description description .....</p>
                                <p class="font-weight-bold mt-2 maincolor">$12.99</p>
                            </div>
                            <div class="d-flex justify-content-around">
                                <div>
                                    <a href="#">
                                        <img src="{{asset('assets/site/images/site/whatapp.png')}}" height="20" width="20" alt="...">
                                    </a>
                                    <a href="#">
                                        <img src="{{asset('assets/site/images/site/face.png')}}" height="20" width="20" alt="...">
                                    </a>
                                    <a href="#">
                                        <img src="{{asset('assets/site/images/site/insta.png')}}" height="20" width="20" alt="...">
                                    </a>
                                    <a href="#">
                                        <img src="{{asset('assets/site/images/site/twitter.png')}}" height="20" width="20" alt="...">
                                    </a>
                                </div>
                                <div>
                                    <i class="fas fa-map-marker-alt smallColor"></i> Wasit, Iraq
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>
    </div>
@stop
