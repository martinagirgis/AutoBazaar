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
<section id="slider_1" style="width: 100% !important">
    <div id="demo" class="carousel slide" data-ride="carousel">

        <!-- Indicators -->
        <ul class="carousel-indicators">
            <li data-target="#demo" data-slide-to="0" class="active"></li>
            <li data-target="#demo" data-slide-to="1"></li>
            <li data-target="#demo" data-slide-to="2"></li>
        </ul>

        <!-- The slideshow -->
        <div class="row ">
            <div class="carousel-inner" style="width: 100%">
                <!-- Item -->
                <?php $images = explode('|', $products[0]->images) ;?>
                <div class="carousel-item active">
                    <div class="row">
                        <div class="col-sm-1"></div>
                        <div class="col-sm-6">
                            <img class="col-sm-12 " src="{{asset('assets/images/products')}}/{{$images[0]}}" alt="Los Angeles"  >
                        </div>
                        <div class="col-sm-5 pt-lg-5 pb-lg-5" >
                            <div class="row">

                                <p class="h2 col-sm-12 pr-lg-1">
                                    {{$products[0]->title}}
                                </p>

                                <p class="h2 col-sm-12">
                                    {{$products[0]->category->Title_en}} 
                                    <br>
                                    {{$products[0]->sellType->Title_en}}
                                </p>

                                <p class="col-sm-5 pr-lg-1">
                                    {{$products[0]->description}}
                                </p>

                                <div class="col-sm-12 pt-lg-2">                                        
                                    <div class="col-sm-4">
                                        <a class="btn btn-primary col-sm-12"  href="{{route('product.details',['product'=>$products[0]->id])}}">Details</a><br>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
                <!-- End of Item -->
                @for($i = 1; $i < count($products); $i++)
                <?php $images = explode('|', $products[$i]->images) ;?>
                <div class="carousel-item">
                    <div class="row">
                        <div class="col-sm-1"></div>
                        <div class="col-sm-6">
                            <img class="col-sm-12 " src="{{asset('assets/images/products')}}/{{$images[0]}}" alt="Los Angeles"  >
                        </div>
                        <div class="col-sm-5 pt-lg-5 pb-lg-5" >
                            <div class="row">

                                <p class="h2 col-sm-12 pr-lg-1">
                                    {{$products[$i]->title}}
                                </p>

                                <p class="h2 col-sm-12">
                                    {{$products[$i]->category->Title_en}}
                                    <br>
                                    {{$products[$i]->sellType->Title_en}}
                                </p>
                                
                                <p class="col-sm-5 pr-lg-1">
                                    {{$products[$i]->description}}
                                </p>

                                <div class="col-sm-12 pt-lg-2">                                        
                                    <div class="col-sm-4">
                                        <a class="btn btn-primary col-sm-12"  href="{{route('product.details',['product'=>$products[$i]->id])}}">Details</a><br>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
                @endfor
                
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
                                <a href="{{route('subcategory.details',['id'=>$sellTypes[0]->id])}}">
                                    <div class="card-body moka-body  col-sm-12" >
                                        <img  class="card-img-top col-sm-12 " src="{{asset('assets/site/images/car-icon-1.png')}}" alt="Card image cap" style="width:150px;height:100px;">
                                        <br>
                                        {{$sellTypes[0]->Title_en}}
                                    </div>
                                </a>

                            </div>

                        </div>
                    </div>

                    @for($i = 1; $i < count($sellTypes); $i++)
                        <div class="carousel-item ">
                            <div class="col-sm-2" style="display:inline-block;">
                                <div class="card bg-white" >
                                    <a href="{{route('subcategory.details',['id'=>$sellTypes[$i]->id])}}">
                                        <div class="card-body moka-body  col-sm-12" >
                                            <img  class="card-img-top col-sm-12 " src="{{asset('assets/site/images/car-icon-1.png')}}" alt="Card image cap" style="width:150px;height:100px;">
                                            <br>
                                            {{$sellTypes[$i]->Title_en}}
                                        </div>
                                    </a>

                                </div>

                            </div>
                        </div>
                    @endfor
                
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
                    @foreach($allProducts as $product)
                    <?php $images = explode('|', $product->images) ;?>
                    <div class="col-sm-6 col-lg-3 mb-4">
                        <div class="procard">
                            <div class="d-flex justify-content-around">
                                <a class="m-1" href="#"><i class="far fa-heart"></i></a>
                                <p class="m-1 maincolor"></p>
                                <p class="m-1">{{$product->status->Title_en}}</p>
                            </div>
                            <div>
                                <img src="{{asset('assets/images/products')}}/{{$images[0]}}" width="100%" height="120" class="card-img"/>
                            </div>
                            <div>
                                <a href="{{route('product.details',['product'=>$product->id])}}" class="nav-link color-dark pl-0" style="color: black !important;"><h5 class="font-weight-bold mt-2">{{$product->title}}</h5></a>
                                <p class="">{{$product->sellType->Title_en}}<br>
                                    {{$product->description}}
                                </p>
                                <p class="font-weight-bold mt-2 maincolor">{{$product->price}} $</p>
                            </div>
                            <div class="d-flex justify-content-around">
                                <div>
                                    <a href="{{$product->user->phone}}">
                                        <img src="{{asset('assets/site/images/site/whatapp.png')}}" height="20" width="20" alt="...">
                                    </a>
                                    <a href="{{$product->user->facebook}}">
                                        <img src="{{asset('assets/site/images/site/face.png')}}" height="20" width="20" alt="...">
                                    </a>
                                    <a href="{{$product->user->instgram}}">
                                        <img src="{{asset('assets/site/images/site/insta.png')}}" height="20" width="20" alt="...">
                                    </a>
                                    <a href="{{$product->user->twitter}}">
                                        <img src="{{asset('assets/site/images/site/twitter.png')}}" height="20" width="20" alt="...">
                                    </a>
                                </div>
                                <div>
                                    <i class="fas fa-map-marker-alt smallColor"></i> {{$product->user->city->Title_en}}
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                </div>
            </div>
        </div>
        <br>
    </div>
@stop
