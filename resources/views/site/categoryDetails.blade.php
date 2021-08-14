@extends('layouts.app')
<link rel="stylesheet" href="{{asset('assets/site/mohamed/css/index.css')}}">
<link rel="stylesheet" href="{{asset('assets/site/mohamed/css/style.css')}}">

@section('content')
    <section>
        <div class="container mt-5">
            <div class="checkRadioContainer d-flex justify-content-around text-center" >
                <label id="radio11" class="col-2 m-1" >
                    <input type="radio" name="radioGroup" id="radio1" />
                    <span>Cars</span>
                </label>
                <label id="radio21" class="col-2 m-1">
                    <input type="radio" name="radioGroup" id="radio2" />
                    <span>Trucks</span>
                </label>
                <label id="radio31" class="col-2 m-1">
                    <input type="radio" name="radioGroup" id="radio3" />
                    <span>Equipment</span>
                </label>
                <label id="radio41" class="col-2 m-1">
                    <input type="radio" name="radioGroup" id="radio4" />
                    <span>Buses & Vans</span>
                </label>
                <label id="radio51" class="col-2 m-1">
                    <input type="radio" name="radioGroup" id="radio5" />
                    <span>Trailers</span>
                </label>
                <label id="radio61" class="col-2 m-1">
                    <input type="radio" name="radioGroup" id="radio6" />
                    <span>Trailers</span>
                </label>
            </div>

            <div class="row mt-4">
                <div class="form-group col-2">
                    <label for="exampleInputEmail1" >City</label>
                    <select class="form-control catDrop" id="sell_type" name="" >
                        <option>Default select</option>
                    </select>
                </div>
                <div class="form-group col-2">
                    <label for="exampleInputEmail1">Area</label>
                    <select class="form-control catDrop">
                        <option>Default select</option>
                    </select>
                </div>
                <div class="form-group col-2">
                    <label for="exampleInputEmail1" >State</label>
                    <select class="form-control catDrop">
                        <option>Default select</option>
                    </select>
                </div>
                <div class="form-group col-5">
                    <label for="exampleInputEmail1" >Price Range</label>
                    <div class="row">
                        <div class="col-3">
                            <input type="text" class="form-control catDrop" placeholder="From">
                        </div>
                        <div class="col-3">
                            <input type="text" class="form-control catDrop" placeholder="To">
                        </div>
                        <div class="col-3">
                            <select class="form-control catDrop">
                                <option>$</option>
                            </select>
                        </div>
                    </div>

                </div>
            </div>

            <div class="row mt-4">
                <div class="form-group col-2">
                    <label for="exampleInputEmail1" >Make</label>
                    <select class="form-control catDrop" id="sell_type" name="" >
                        <option>Default select</option>
                    </select>
                </div>
                <div class="form-group col-4">
                    <label for="exampleInputEmail1">Year</label>
                    <div class="row">
                        <div class="col-6">
                            <input type="text" class="form-control catDrop" placeholder="From">
                        </div>
                        <div class="col-6">
                            <input type="text" class="form-control catDrop" placeholder="To">
                        </div>
                    </div>
                </div>
                <div class="form-group col-2">
                    <label for="exampleInputEmail1" >Gearbox</label>
                    <select class="form-control catDrop">
                        <option>Default select</option>
                    </select>
                </div>
                <div class="form-group col-2">
                    <label for="exampleInputEmail1" >Payment Method</label>
                    <select class="form-control catDrop">
                        <option>Default select</option>
                    </select>
                </div>
            </div>
            <button type="submit" class="btn w-25 mt-5 backgroundColor" style=" color: #fff;">Apply Changes</button><br><br>
        </div>


        <div class="container mt-5">
            <div class="mt-5">
                <div class="d-flex justify-content-between">
                    <h5 class="hsec ">Cars</h5>
                    <!-- <h6>Sort by: New Comings</h6> -->
                    <div class="tdropdown">
                        <span>Sort by <i class="fas fa-caret-down"></i></span>
                        <div class="tdropdown-content" style="width: max-content !important;">
                            <a class="text-decoration-none" style="color: black !important;" href="#">New Comings</a><hr>
                            <a class="text-decoration-none" style="color: black !important;" href="#">Price: Low-High</a><hr>
                            <a class="text-decoration-none" style="color: black !important;" href="#">Price: High-Low</a>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row mt-5">
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
                    </div>
                </div>
            </div>
            <br>
        </div>


    </section>

@stop
