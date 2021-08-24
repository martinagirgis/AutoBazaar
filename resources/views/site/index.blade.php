@extends('layouts.app')
<link rel="stylesheet" href="{{asset('assets/site/mohamed/css/index.css')}}">
<link rel="stylesheet" href="{{asset('assets/site/mohamed/css/style.css')}}">

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
<section id="categories">
    <div class="row">
        <div class="col-sm-12">
            <center>
                @foreach($categories as $category)
                    <div class="col-sm-2" style="display:inline-block;height:200px">
                        <div class="card bg-white" >
                            <a href="{{route('subcategory',['name'=>$category->id])}}">
                                <div class="card-body moka-body text-center">
                                    <img  class="card-img-top col-sm-12" src="{{asset('assets/site/images/car-icon-1.png')}}" alt="Card image cap" style="width:150px;height:100px">
                                    <br>
                                    {{$category->Title_en}}
                                </div>
                            </a>
                        </div>
                    </div>
                @endforeach
            </center>
        </div>
    </div>
</section>
<section id="how_to_use">
    <br><br>
    <h4 class=" text-center pt-5 mt-d-5">
        How to Use AutoBazar
        <center>
            <div class=" text_how_to_use">
            </div>
        </center>

    </h4>
    <!-- End of text -->
    <!-- How To be Auto Bazar -->
    <div class="row text-center justify-content-center" style="background:whitesmoke;padding-top: 50px">
            <div class="card card_redo text-center col-sm-3 mr-3 mb-5" >
                <div class="card-body" >
                    <center>
                        <div class="circle">1</div>
                        <img src="{{asset('assets/site/images/how-1.png')}}">
                    </center>
                    <h5 class="card-title pt-5">The standard Lorem Ipsum passage, used</h5>
                    <p class="card-text  text-justify pt-3">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud eu fugiat nulla pariatur

                    </p>
                </div>
            </div>
            <div class="card card_redo text-center col-sm-3 mr-3 mb-5">
                <div class="card-body">
                    <center>
                        <div class="circle">2</div>
                        <img src="{{asset('assets/site/images/how-2.png')}}">
                    </center>
                    <h5 class="card-title pt-5">The standard Lorem Ipsum passage, used</h5>
                    <p class="card-text  text-justify pt-3">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud eu fugiat nulla pariatur            </p>
                </div>
            </div>
            <div class="card card_redo text-center col-sm-3 mr-3 mb-5">
                <div class="card-body">
                    <center>
                        <div class="circle">3</div>
                        <img src="{{asset('assets/site/images/how-3.png')}}">
                    </center>
                    <h5 class="card-title pt-5">The standard Lorem Ipsum passage, used</h5>
                    <p class="card-text  text-justify pt-3">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud eu fugiat nulla pariatur            </p>
                </div>
            </div>


    </div>
</section>
<section id="auto_shops">
    <h4 class=" text-center pt-5 mt-d-5">
        Auto Shops
        <center>
            <div class=" text_how_to_use">
            </div>
        </center>

    </h4>
    <!-- End of text -->

    <!-- Slider Auto Shops -->
    <div class="container my-4">
        <section>

            <div id="carousel-example-multi" class="carousel slide carousel-multi-item v-2 product-carousel" data-ride="carousel">
                <!--/.Controls-->
                <div class="carousel-inner" role="listbox">
                    

                    <div class="carousel-item active mx-auto">
                        <div class="col-12 col-md-4 col-lg-4 mx-auto">
                            <div class="card mb-2">
                                <div class="view overlay">
                                    <img class="card-img-top" src="{{asset('assets/images/autoShops')}}/{{$autoShops[0]->cover}}" alt="Card image cap" style="height: 250px">
                                    <a href="#!">
                                        <div class="mask rgba-white-slight"></div>
                                    </a>
                                </div>
                                <div class="card-body p-3">
                                    <h5 class="card-title font-weight-bold  mb-0" style="color:black;font-weight: normal">{{$autoShops[0]->name}}</h5>
                                    <p class="chili-pepper-text mb-0" style="color:black">
                                        {{$autoShops[0]->description}}
                                    </p>

                                    <a class="chili-pepper-text mb-0" href="" style="font-size:20px;color:#2771D1">Show ></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    @for($i = 1; $i < count($autoShops); $i++)
                    <div class="carousel-item">
                        <div class="col-12 col-md-4 col-lg-4 mx-auto">
                            <div class="card mb-2">
                                <div class="view overlay">
                                    <img class="card-img-top" src="{{asset('assets/images/autoShops')}}/{{$autoShops[$i]->cover}}" alt="Card image cap" style="height: 250px">
                                    <a href="#!">
                                        <div class="mask rgba-white-slight"></div>
                                    </a>
                                </div>
                                <div class="card-body p-3">
                                    <h5 class="card-title font-weight-bold  mb-0" style="color:black;font-weight: normal">{{$autoShops[$i]->name}}</h5>
                                    <p class="chili-pepper-text mb-0" style="color:black">
                                        {{$autoShops[$i]->description}}
                                    </p>

                                    <a class="chili-pepper-text mb-0" href="" style="font-size:20px;color:#2771D1">Show ></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endfor
                  

                </div>
                <!--Controls-->
                <center>
                    <div class="controls-top my-3">
                        <a class="btn-floating btn-sm" href="#carousel-example-multi" data-slide="prev" style="background:none"><i class="fas fa-chevron-left"></i></a>
                        <a class="btn-floating btn-sm" href="#carousel-example-multi" data-slide="next" style="background:none"><i class="fas fa-chevron-right"></i></a>
                    </div>
                </center>
            </div>

        </section>
    </div>
</section>
<section id="Subscriptions">
    <div class="container">
        <h4 class=" text-center pt-5 mt-d-5">
            Subscriptions / Pricing
            <center>
                <div class=" text_how_to_use">
                </div>
            </center>
        </h4>
        <!-- End of text -->
        <!-- Slider Auto Shops -->
        
        <div class=" text-center row" style="background:whitesmoke;padding-top: 50px">
            @foreach($subscriptions as $subscription)
                <div class="card mr-4 mb-3">
                    <div class="card-header redo_pricing_header" style="font-size:22px;background:#007bff">
                        {{$subscription->Title_en}}
                    </div>
                    <div class="card-body">
                        <h5 class="card-title redo_pricing_title">
                            <img src="{{asset('assets/site/images/how-2.png')}}" class="redo_pricing_img">
                            <div class="price">
                                {{$subscription->price}}
                            </div>
                        </h5>
                        <div class="card-text col-sm-12 text-left">
                            {{$subscription->Details_en}}
                        </div>
                    </div>

                </div>
            @endforeach
            <br>
        </div>
            
        
        <center>
            <a href="{{route('subscription')}}" class="h5">View full page > </a>
        </center>
    </div>
</section>

<br><br><br><br>
<!-- End of text -->

<section id="filter">
    <div class="container">
        <!-- Tabs navs -->
        <ul class="nav nav-tabs mb-3 row" id="ex1" role="tablist">
            <li class="nav-item col-sm-3" role="presentation">
                <a
                    class="nav-link active"
                    id="ex1-tab-{{$categories[0]->id}}"
                    data-mdb-toggle="tab"
                    href="#ex1-tabs-{{$categories[0]->id}}"
                    role="tab"
                    aria-controls="ex1-tabs-{{$categories[0]->id}}"
                    aria-selected="true"
                >{{$categories[0]->Title_en}}</a
                >
            </li>
            @for($i = 1; $i < count($categories); $i++)
                <li class="nav-item col-sm-3" role="presentation">
                    <a
                        class="nav-link "
                        id="ex1-tab-{{$categories[$i]->id}}"
                        data-mdb-toggle="tab"
                        href="#ex1-tabs-{{$categories[$i]->id}}"
                        role="tab"
                        aria-controls="ex1-tabs-{{$categories[$i]->id}}"
                        aria-selected="true"
                    >{{$categories[$i]->Title_en}}</a>
                </li>
            @endfor

        </ul>
        <!-- Tabs navs -->
        <!-- Tabs content -->
        <div class="tab-content" id="ex1-content">
            <div class="tab-pane fade show active" id="ex1-tabs-{{$categories[0]->id}}" role="tabpanel" aria-labelledby="ex1-tab-{{$categories[0]->id}}">
                <div class="container ">
                    <div class="container">
                        <div class="row ">
                            @foreach($categories[0]->products as $product)
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
                <br>
            </div>
            </div>

            <div class="tab-pane fade" id="ex1-tabs-{{$categories[1]->id}}" role="tabpanel" aria-labelledby="ex1-tab-{{$categories[1]->id}}">
                @foreach($categories[1]->products as $product)
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
        <!-- Tabs content -->
    </div>
</section>
@stop
