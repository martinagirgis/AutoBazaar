@extends('layouts.app')


@section('content')
    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-12">
                    <div id="carouselExampleCaptions" class="carousel slide m-5" data-ride="carousel">
                        <ol class="carousel-indicators" style="bottom: -50px;">
                            <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active backgroundColor" style="border-radius: 100%;
                          height: 9px;
                          width: 9px;
                          "></li>
                            <li data-target="#carouselExampleCaptions" data-slide-to="1" class="backgroundColor" style="border-radius: 100%;
                          height: 9px;
                          width: 9px;"></li>
                        </ol>
                        <div class="carousel-inner w-100 m-auto">
                            <div class="carousel-item active">
                                <img src="{{asset('assets/site/images/site/product3.png')}}" height="350" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="{{asset('assets/site/images/site/product2.png')}}" height="350" class="d-block w-100" alt="...">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-7 col-md-12">
                    <div class="m-5">
                        <div class="mb-4">
                            <a href="#" class="smallColor text-decoration-none">Car Showrooms</a> >
                            <a href="#" class="smallColor text-decoration-none"> Category Name</a>
                        </div>
                        <div class="mb-3">
                            <h3>BMW x6 2020</h3>
                            <h5 class="maincolor">$12.00</h5>
                            <div class="smallColor mt-3">This is just a descriptive text for the Product .. This is just a descriptive text for the Product  .. This is just a descriptive text for the Product</div>
                        </div>
                        <div class="row d-flex mb-3 justify-content-around d-flex align-items-center">
                            <div class="wishBtn m-1 p-1 pr-2 pl-2">
                                <a href="#" class=" text-white text-decoration-none"> <i class="far fa-heart"> </i> Add to Wishlist</a>
                            </div>
                            <div class="wishBtn m-1 p-1 pr-2 pl-2">
                                <a href="#" class=" text-white text-decoration-none">  <img src="{{asset('assets/site/images/site/whatapp.png')}}" height="20" width="20" alt="..."> Contact whatsapp</a>
                            </div>
                            <div class="wishBtn m-1 p-1 pr-2 pl-2">
                                <a href="#" class=" text-white text-decoration-none"> <i class="fa fa-phone"> </i> Direct connection</a>
                            </div>

                        </div>
                        <div class="row d-flex justify-content-around d-flex align-items-center">

                            <div>
                                <div style="width: 15px;
                                height: 15px;
                                border-radius:50%;
                                background: #FF9B40;
                                display: inline-block;"></div> New Item
                            </div>
                            <div>
                                <i class="fas fa-map-marker-alt smallColor"></i> Wasit
                            </div>
                        </div>
                        <div class="smallColor mt-3">Sold by</div>
                        <h5 class="mt-2">Mostafa Abbas</h5>
                        <div>
                            <a href="#">
                                <img src="{{asset('assets/site/images/site/whatapp.png')}}" height="30" width="30" alt="...">
                            </a>
                            <a href="#">
                                <img src="{{asset('assets/site/images/site/face.png')}}" height="30" width="30" alt="...">
                            </a>
                            <a href="#">
                                <img src="{{asset('assets/site/images/site/insta.png')}}" height="30" width="30" alt="...">
                            </a>
                            <a href="#">
                                <img src="{{asset('assets/site/images/site/twitter.png')}}" height="30" width="30" alt="...">
                            </a>
                        </div>

                    </div>

                </div>
            </div>

            <div class="row">
                <div class="col-2 col-lg-2 col-md-4 mb-3">
                    <div class="p-4 text-center rounded-circle" style="border-width:2px ; border-style: solid; border-color: rgb(247, 150, 70); height: 120px; width: 120px;">
                        <img src="{{asset('assets/site/images/site/fuel-station1.png')}}" width="45" height="45" class="d-inline-block align-top" alt="">
                        <br>
                        petrol
                    </div>
                </div>
                <div class="col-2 col-lg-2 col-md-4 mb-3">
                    <div class="p-4 text-center rounded-circle" style="border-width:2px ; border-style: solid; border-color: rgb(247, 150, 70); height: 120px; width: 120px;">
                        <img src="{{asset('assets/site/images/site/calendar.png')}}" width="45" height="45" class="d-inline-block align-top" alt="">
                        <br>
                        2021
                    </div>
                </div>
                <div class="col-2 col-lg-2 col-md-4 mb-3">
                    <div class="p-4 text-center rounded-circle" style="border-width:2px ; border-style: solid; border-color: rgb(247, 150, 70); height: 120px; width: 120px;">
                        <img src="{{asset('assets/site/images/site/gearshift.png')}}" width="45" height="45" class="d-inline-block align-top" alt="">
                        <br>
                        automatic
                    </div>
                </div>
                <div class="col-2 col-lg-2 col-md-4 mb-3">
                    <div class="p-2 text-center rounded-circle" style="border-width:2px ; border-style: solid; border-color: rgb(247, 150, 70); height: 120px; width: 120px;">
                        <img src="{{asset('assets/site/images/site/carlogo.png')}}" width="105" height="75" class="d-inline-block align-top" alt="">
                        <br>
                        petrol
                    </div>
                </div>
                <div class="col-2 col-lg-2 col-md-4 mb-3">
                    <div class="p-4 text-center rounded-circle" style="border-width:2px ; border-style: solid; border-color: rgb(247, 150, 70); height: 120px; width: 120px;">
                        <img src="{{asset('assets/site/images/site/type.png')}}" width="55" height="45" class="d-inline-block align-top" alt="">
                        <br>
                        petrol
                    </div>
                </div>

                <div class="col-2 col-lg-2 col-md-4 mb-3">
                    <div class="p-4 text-center rounded-circle" style="border-width:2px ; border-style: solid; border-color: rgb(247, 150, 70); height: 120px; width: 120px; display: table;">
                        <!-- <img src="images/site/fuel-station1.png" width="45" height="45" class="d-inline-block align-top" alt="">
                        <br> -->
                        <h3 class="" style="vertical-align: middle; display: table-cell; color: green;">New</h3>

                    </div>
                </div>
            </div>
            <div class="row m-4 ">
                <div class="col-12 mt-4">
                    <ul class="nav nav-tabs " id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <a class="nav-link active maincolor" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Overview</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link maincolor" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Specifications</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link maincolor" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Detailed Specifications</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link maincolor" id="seller-tab" data-toggle="tab" href="#seller" role="tab" aria-controls="seller" aria-selected="false">Seller Information</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link maincolor" id="seller-tab" data-toggle="tab" href="#adv" role="tab" aria-controls="adv" aria-selected="false">Advantages</a>
                        </li>
                    </ul>
                </div>
                <div class="col-12 mt-4">
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <div class="m-4 d-flex align-items-center">
                                <img src="{{asset('assets/site/images/site/img1.png')}}" height="70" width="70" class="rounded-circle" alt="...">
                                <div class="p-2">
                                    <div class="font-weight-bold">BMW </div>
                                    <div class="smallColor">X6 2020</div>
                                </div>
                            </div>
                            <div class="m-4">
                                This is just a descriptive text for the Product .. This is just a descriptive text for the Product  .. This is just a descriptive text for the Product
                            </div>
                        </div>
                        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                            <div class="m-4 d-flex justify-content-around">
                                <div>
                                    <div class="smallColor">Sell Type:</div>
                                    <div>Cars - For Sale</div>
                                </div>
                                <div>
                                    <div class="smallColor">Make:</div>
                                    <div>BMW</div>
                                </div>
                                <div>
                                    <div class="smallColor">Category:</div>
                                    <div>SUV</div>
                                </div>
                                <div>
                                    <div class="smallColor">Model:</div>
                                    <div>X6 (G06)</div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                            <div class="m-4 row">
                                <div class="col-3">
                                    <div class="smallColor">Status:</div>
                                    <div>USED</div>
                                </div>
                                <div class="col-3">
                                    <div class="smallColor">MileAge</div>
                                    <div>300.000 KM</div>
                                </div>
                                <div class="col-3">
                                    <div class="smallColor">City</div>
                                    <div>SUV</div>
                                </div>
                                <div class="col-3">
                                    <div class="smallColor">Interior Brushes</div>
                                    <div>Leather</div>
                                </div>
                            </div>
                            <div class="m-4 row">
                                <div class="col-3">
                                    <div class="smallColor">Year</div>
                                    <div>2020</div>
                                </div>
                                <div class="col-3">
                                    <div class="smallColor">Colors</div>
                                    <div><div style="width: 15px;
                                        height: 15px;
                                        border-radius:50%;
                                        background: #002A60;
                                        box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
                                        display: inline-block;"></div> BMW</div>
                                </div>
                                <div class="col-3">
                                    <div class="smallColor">District</div>
                                    <div>Utafiyah</div>
                                </div>
                                <div class="col-3">
                                    <div class="smallColor">Interior Colors</div>
                                    <div><div style="width: 15px;
                                        height: 15px;
                                        border-radius:50%;
                                        background: #fff;
                                        box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
                                        display: inline-block;"></div> White</div>
                                </div>
                            </div>
                            <div class="m-4 row">
                                <div class="col-3">
                                    <div class="smallColor">GearBox</div>
                                    <div>Automatic</div>
                                </div>
                                <div class="col-3">
                                    <div class="smallColor">Payment Methods</div>
                                    <div>Cash</div>
                                </div>
                            </div>
                            <div class="m-4 row">
                                <div class="col-3">
                                    <div class="smallColor">Fuel Type</div>
                                    <div>Benzine</div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="seller" role="tabpanel" aria-labelledby="seller-tab">
                            <div class="m-4 d-flex align-items-center">
                                <img src="{{asset('assets/site/images/site/profile3.png')}}" height="90" width="90" class="rounded-circle" alt="...">
                                <div class="p-2">
                                    <div class="font-weight-bold"> Mostafa Abbas </div>
                                    <div class="smallColor"><i class="fas fa-map-marker-alt smallColor"></i> Wasit, Iraq</div>
                                </div>
                            </div>
                            <div class="d-flex justify-content-between w-75 m-auto">
                                <div>
                                    <div class="mt-4">
                                        <div class="smallColor">Company Name:</div>
                                        <div>Type Company name here</div>
                                    </div>
                                    <div class="mt-4">
                                        <div class="smallColor">Jurisdiction</div>
                                        <div>Type Jurisdiction here</div>
                                    </div>
                                    <div class="mt-4">
                                        <div class="smallColor">Registration Type</div>
                                        <div>Type Registration type here</div>
                                    </div>

                                </div>
                                <div>
                                    <div class="mt-4">
                                        <div class="smallColor">Social Media Links</div>
                                        <div>
                                            <a href="#">
                                                <img src="{{asset('assets/site/images/site/whatapp.png')}}" height="30" width="30" alt="...">
                                            </a>
                                            <a href="#">
                                                <img src="{{asset('assets/site/images/site/face.png')}}" height="30" width="30" alt="...">
                                            </a>
                                            <a href="#">
                                                <img src="{{asset('assets/site/images/site/insta.png')}}" height="30" width="30" alt="...">
                                            </a>
                                            <a href="#">
                                                <img src="{{asset('assets/site/images/site/twitter.png')}}" height="30" width="30" alt="...">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="mt-4">
                                        <div class="smallColor">Call Him Now!</div>
                                        <div>+20 010 2xx xxx xx</div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="adv" role="tabpanel" aria-labelledby="adv-tab">
                            <div class="m-4 row">
                                <div class="col-4 mb-3">
                                    <div><i class="fa fa-phone"> </i> Direct connection</div>
                                </div>
                                <div class="col-4 mb-3">
                                    <div><i class="fa fa-phone"> </i> Direct connection</div>
                                </div>
                                <div class="col-4 mb-3">
                                    <div><i class="fa fa-phone"> </i> Direct connection</div>
                                </div>
                                <div class="col-4 mb-3">
                                    <div><i class="fa fa-phone"> </i> Direct connection</div>
                                </div>
                                <div class="col-4 mb-3">
                                    <div><i class="fa fa-phone"> </i> Direct connection</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@stop
