@extends('layouts.app_martina')
@section('content')
    <!-- profile -->
    <section class="profile">
        <div class="card ">
            <img src="{{asset('assets/site/images/site/profile1.png')}}" width="100%" height="320" class="card-img"/>
            <div class="card-img-overlay">
                <div class="" style="margin-top: 230px">
                    <div class="row align-items-center">
                        <img src="{{asset('assets/site/images/site/profile2.png')}}" width="200" height="200" class=""  style="margin-left: 5%;">
                        <div class="col-lg-3 col-sm-6 mt-sm-5">
                            <ul>
                                <li style="font-size: 22px; font-weight: bold;">Sherif El-Sayed</li>
                                <li><i class="fas fa-map-marker-alt maincolor"></i>
                                    Baghdad, Iraq
                                </li>
                            </ul>
                        </div>

                        <div class="col-lg-3 col-sm-12 mt-sm-5 ">
                            <div class="row">
                                <div class="col-1 col-lg-2 col-sm-1">
                                </div>
                                <div class="col-3 col-lg-10 col-sm-3">
                                    <i class="fab fa-facebook-f maincolor"></i>
                                    AutoBazar@gmail.com
                                </div>
                                <div class="col-1 col-lg-2 col-sm-1">
                                </div>
                                <div class="col-3 col-lg-10 col-sm-3">
                                    <i class="fab fa-instagram maincolor"></i>

                                    AutoBazar@gmail.com
                                </div>
                                <div class="col-1 col-lg-2 col-sm-1">
                                </div>
                                <div class="col-3 col-lg-10 col-sm-3">
                                    <i class="fab fa-twitter maincolor"></i>
                                    AutoBazar@gmail.com
                                </div>
                            </div>

                        </div>

                        <div class="col-lg-3 col-sm-12 mt-sm-4 mt-lg-5 ">
                            <div class="row">
                                <div class="col-1 col-lg-2 col-sm-1">
                                </div>
                                <div class="col-3 col-lg-10 col-sm-3">
                                    <i class="fa fa-phone maincolor" aria-hidden="true"></i>
                                    +2001090387401
                                </div>
                                <div class="col-1 col-lg-2 col-sm-1">
                                </div>
                                <div class="col-3 col-lg-10 col-sm-3">
                                    <i class="fa fa-phone maincolor" aria-hidden="true"></i>

                                    +2001090387401
                                </div>
                                <div class="col-1 col-lg-2 col-sm-1">
                                </div>
                                <div class="col-3 col-lg-10 col-sm-3">
                                    <i class="fas fa-envelope maincolor"></i>
                                    AutoBazar@gmail.com
                                </div>
                            </div>

                        </div>

                    </div>
                    <div class="container">
                        <div class="sec2">
                            <h5 class="hsec">Recent Added Products</h5>
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
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>
                    </div>

                    <div class="container">
                        <div class="sec2">
                            <div class="d-flex justify-content-between">
                                <h5 class="hsec ">My-Shop  <span style="font-size: 12px;
								color: #626262;">There is 2 Items</span> </h5>
                                <h6><a class="nav-link " href="#" data-toggle="modal" data-target="#staticBackdrop"><i class="fas fa-plus"></i> Add New Item</a></h6>
                            </div>
                            <div class="container">
                                <div class="mt-4">
                                    <table class="table">
                                        <thead class="thead-light">
                                        <tr>
                                            <th scope="col">Image</th>
                                            <th scope="col">Name</th>
                                            <th scope="col">Details</th>
                                            <th scope="col">Price</th>
                                            <th scope="col">Condition</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr >
                                            <td> <img src="{{asset('assets/site/images/site/product1.png')}}" width="100" height="100" class="card-img"></td>
                                            <td style="vertical-align: middle;" class=""><h6 class="font-weight-bold">Product Name</h6><p style="font-size: 14px;
													line-height: 19px;

													color: #6C6C6C;">Category Name</p></td>
                                            <td style="vertical-align: middle;">SomeLorem ipusim Some Lorem ipusim....</td>
                                            <td class="maincolor" style=" vertical-align: middle;">$12.99</td>
                                            <td style=" vertical-align: middle;" class="font-weight-bold">New</td>
                                            <td style=" vertical-align: middle;">
                                                <div class="tdropdown">
                                                    <span><i class="fas fa-grip-vertical" style="font-size:24px"></i></span>
                                                    <div class="tdropdown-content">
                                                        <a class="text-decoration-none" style="color: black !important;" href="#">Show</a><hr>
                                                        <a class="text-decoration-none" style="color: black !important;" href="#">Edit</a><hr>
                                                        <a class="text-decoration-none" style="color: black !important;" href="#">Delet</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr >
                                            <td> <img src="{{asset('assets/site/images/site/product2.png')}}" width="100" height="100" class="card-img"></td>
                                            <td style="vertical-align: middle;" class=""><h6 class="font-weight-bold">Product Name</h6><p style="font-size: 14px;
												line-height: 19px;

												color: #6C6C6C;">Category Name</p></td>
                                            <td style="vertical-align: middle;">SomeLorem ipusim Some Lorem ipusim....</td>
                                            <td class="maincolor" style=" vertical-align: middle;">$12.99</td>
                                            <td style=" vertical-align: middle;" class="font-weight-bold">New</td>
                                            <td style=" vertical-align: middle;">
                                                <div class="tdropdown">
                                                    <span><i class="fas fa-grip-vertical" style="font-size:24px"></i></span>
                                                    <div class="tdropdown-content">
                                                        <a class="text-decoration-none" style="color: black !important;" href="#">Show</a><hr>
                                                        <a class="text-decoration-none" style="color: black !important;" href="#">Edit</a><hr>
                                                        <a class="text-decoration-none" style="color: black !important;" href="#">Delet</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>


                                </div>
                            </div>
                        </div>
                        <br>
                    </div>


                    <div class="container">
                        <div class="sec2">
                            <div class="">
                                <h5 class="hsec ">Track Your Shared Items</h5>
                            </div>
                            <div class="container">
                                <div class="mt-4">
                                    <p class="font-weight-bold">You have shared 3 Items on social media.<a href="text-decoration-none"> Show in Details ...</a></p>
                                    <p class="font-weight-bold">You have 2 shares left !!!<a href="text-decoration-none"> Upgrade your subscription plan now .. </a></p>
                                </div>
                            </div>
                        </div>
                        <br>
                    </div>

                </div>

            </div>

        </div>

    </section>

    <!-- Modal Add Product categtroy -->
    <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header backgroundColor text-white" style="border:none">
                    <h5 class="modal-title" id="staticBackdropLabel">Select Your Category</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body backgroundColorSec p-5">
                    <div class="row">
                        <div class="col-6 p-4">
                            <button type="button" class="btn backgroundColor w-100" style="height: 170px;" data-dismiss="modal" data-toggle="modal" data-target="#car">
                                <img src="images/site/car1.png" width="100" height="100" class="card-img m-1">
                                <div class="text-white">Cars and Heavy Equipement</div>
                            </button>
                        </div>
                        <div class="col-6 p-4">
                            <button type="button" class="btn backgroundColor w-100" style="height: 170px;" data-dismiss="modal" data-toggle="modal" data-target="#spare">
                                <img src="images/site/cat2.png" width="100" height="100" class="card-img m-1">
                                <div class="text-white">Spare Parts</div>
                            </button>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- Modal Add Product spare -->
    <div class="modal fade" id="spare" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="spspareLabelare" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header backgroundColor text-white" style="border:none">
                    <h5 class="modal-title" id="spareLabel">Select Your Category</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body backgroundColorSec p-5">
                    <div class="row">
                        <div class="col-6 text-center">
                            <button type="button" class="btn backgroundColor p-3" data-dismiss="modal">
                                <div class="text-white">For Sale</div>
                            </button>
                        </div>
                        <div class="col-6 text-center">
                            <button type="button" class="btn backgroundColor p-3" data-dismiss="modal">
                                <div class="text-white">Wanted</div>
                            </button>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- Modal Add Product car -->
    <div class="modal fade" id="car" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="carLabelare" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header backgroundColor text-white" style="border:none">
                    <h5 class="modal-title" id="carLabel">Select Your Category</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body backgroundColorSec p-5">
                    <div class="row">
                        <div class="col-4 text-center">
                            <button type="button" class="btn backgroundColor p-3" data-dismiss="modal">
                                <div class="text-white">For Sale</div>
                            </button>
                        </div>
                        <div class="col-4 text-center">
                            <button type="button" class="btn backgroundColor p-3" data-dismiss="modal">
                                <div class="text-white">For Rent</div>
                            </button>
                        </div>
                        <div class="col-4 text-center">
                            <button type="button" class="btn backgroundColor p-3" data-dismiss="modal">
                                <div class="text-white">Wanted</div>
                            </button>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>
@stop

