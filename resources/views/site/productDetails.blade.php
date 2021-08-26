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
                            <?php $images = explode('|', $product->images) ;?>
                            <div class="carousel-item active">
                                <img src="{{asset('assets/images/products')}}/{{$images[0]}}" height="350" class="d-block w-100" alt="...">
                            </div>
                            @for($i = 1; $i < count($images); $i++)
                            <div class="carousel-item">
                                <img src="{{asset('assets/images/products')}}/{{$images[$i]}}" height="350" class="d-block w-100" alt="...">
                            </div>
                            @endfor
                        </div>
                    </div>
                </div>

                <div class="col-lg-7 col-md-12">
                    <div class="m-5">
                        <div class="mb-4">
                            <a href="#" class="smallColor text-decoration-none">Car Showrooms</a> >
                            <a href="#" class="smallColor text-decoration-none">{{$product->category->Title_en}}</a>
                        </div>
                        <div class="mb-3">
                            <h3>{{$product->make->Title_en}} {{$product->model}} {{$product->year}}</h3>
                            <h5 class="maincolor">${{$product->price}}</h5>
                            <div class="smallColor mt-3">
                                {{$product->description}}
                            </div>
                        </div>
                        <div class="row d-flex mb-3 justify-content-around d-flex align-items-center">
                            <div class="wishBtn m-1 p-1 pr-2 pl-2">
                                <a href="#" class=" text-white text-decoration-none"> <i class="far fa-heart"> </i> Add to Wishlist</a>
                            </div>
                            <div class="wishBtn m-1 p-1 pr-2 pl-2">
                                <a href="https://wa.me/{{$product->user->phone}}?text=product%20link%20:%20http://127.0.0.1:8000/product/details/{{$product->id}}" data-action="share/whatsapp/share" target="_blank" class=" text-white text-decoration-none">  <img src="{{asset('assets/site/images/site/whatapp.png')}}" height="20" width="20" alt="..."> Contact whatsapp</a>
                                {{-- <a href="https://wa.me/{{$product->user->phone}}?text=http://127.0.0.1:8000/product/details/{{$product->id}}" data-action="share/whatsapp/share" height="20" width="20" alt="...">Share Contact whatsapp</a> --}}

                            </div>
                            <div class="wishBtn m-1 p-1 pr-2 pl-2">
                                <a href="tel:+{{$product->user->phone}}" target="_blank" class=" text-white text-decoration-none"> <i class="fa fa-phone"> </i> Direct connection</a>
                                {{-- <a href="tel:+900300400">Phone: 900 300 400</a> --}}
                            </div>

                        </div>
                        <div class="row d-flex justify-content-around d-flex align-items-center">

                            <div>
                                <div style="width: 15px;
                                height: 15px;
                                border-radius:50%;
                                background: #FF9B40;
                                display: inline-block;"></div> {{$product->status->Title_en}}
                            </div>
                            <div>
                                <i class="fas fa-map-marker-alt smallColor"></i> {{$product->user->city->Title_en}}
                            </div>
                        </div>
                        <div class="smallColor mt-3">Sold by</div>
                        <h5 class="mt-2">{{$product->user->fname}} {{$product->user->lname}}</h5>
                        <div>
                            <a href="{{$product->user->phone}}">
                                <img src="{{asset('assets/site/images/site/whatapp.png')}}" height="30" width="30" alt="...">
                            </a>
                            <a href="{{$product->user->facebook}}">
                                <img src="{{asset('assets/site/images/site/face.png')}}" height="30" width="30" alt="...">
                            </a>
                            <a href="{{$product->user->instgram}}">
                                <img src="{{asset('assets/site/images/site/insta.png')}}" height="30" width="30" alt="...">
                            </a>
                            <a href="{{$product->user->twitter}}">
                                <img src="{{asset('assets/site/images/site/twitter.png')}}" height="30" width="30" alt="...">
                            </a>
                        </div>

                    </div>

                </div>
            </div>

            <div class="row">
                <div class="col-1 col-lg-1 col-md-2 mb-3">
                </div>
                <div class="col-2 col-lg-2 col-md-4 mb-3">
                    <div class="p-4 text-center rounded-circle" style="border-width:2px ; border-style: solid; border-color: rgb(247, 150, 70); height: 120px; width: 120px;">
                        <img src="{{asset('assets/site/images/site/fuel-station1.png')}}" width="45" height="45" class="d-inline-block align-top" alt="">
                        <br>
                        {{$product->fuelType->Title_en}}
                    </div>
                </div>
                <div class="col-2 col-lg-2 col-md-4 mb-3">
                    <div class="p-4 text-center rounded-circle" style="border-width:2px ; border-style: solid; border-color: rgb(247, 150, 70); height: 120px; width: 120px;">
                        <img src="{{asset('assets/site/images/site/calendar.png')}}" width="45" height="45" class="d-inline-block align-top" alt="">
                        <br>
                        {{$product->year}}
                    </div>
                </div>
                <div class="col-2 col-lg-2 col-md-4 mb-3">
                    <div class="p-4 text-center rounded-circle" style="border-width:2px ; border-style: solid; border-color: rgb(247, 150, 70); height: 120px; width: 120px;">
                        <img src="{{asset('assets/site/images/site/gearshift.png')}}" width="45" height="45" class="d-inline-block align-top" alt="">
                        <br>
                        {{$product->GearBox->Title_en}}
                    </div>
                </div>
                <div class="col-2 col-lg-2 col-md-4 mb-3">
                    <div class="p-2 text-center rounded-circle" style="border-width:2px ; border-style: solid; border-color: rgb(247, 150, 70); height: 120px; width: 120px;">
                        <img src="{{asset('assets/images/makes')}}/{{$product->make->image}}" width="60" height="60" class="d-inline-block align-top" alt="">
                        <br>
                        {{$product->make->Title_en}}
                    </div>
                </div>
                {{-- <div class="col-2 col-lg-2 col-md-4 mb-3">
                    <div class="p-4 text-center rounded-circle" style="border-width:2px ; border-style: solid; border-color: rgb(247, 150, 70); height: 120px; width: 120px;">
                        <img src="{{asset('assets/site/images/site/type.png')}}" width="55" height="45" class="d-inline-block align-top" alt="">
                        <br>
                        petrol
                    </div>
                </div> --}}

                <div class="col-2 col-lg-2 col-md-4 mb-3">
                    <div class="p-4 text-center rounded-circle" style="border-width:2px ; border-style: solid; border-color: rgb(247, 150, 70); height: 120px; width: 120px; display: table;">
                        <!-- <img src="images/site/fuel-station1.png" width="45" height="45" class="d-inline-block align-top" alt="">
                        <br> -->
                        <h3 class="" style="vertical-align: middle; display: table-cell; color: green;">{{$product->status->Title_en}}</h3>

                    </div>
                </div>
                <div class="col-1 col-lg-1 col-md-2 mb-3">
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
                                <img src="{{asset('assets/images/makes')}}/{{$product->make->image}}" height="70" width="70" class="rounded-circle" alt="...">
                                <div class="p-2">
                                    <div class="font-weight-bold">{{$product->make->Title_en}}</div>
                                    <div class="smallColor">{{$product->model}} {{$product->year}}</div>
                                </div>
                            </div>
                            <div class="m-4">
                                {{$product->description}}
                            </div>
                        </div>
                        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                            <div class="m-4 d-flex justify-content-around">
                                <div>
                                    <div class="smallColor">Sell Type:</div>
                                    <div>{{$product->sellType->Title_en}}</div>
                                </div>
                                <div>
                                    <div class="smallColor">Make:</div>
                                    <div>{{$product->make->Title_en}}</div>
                                </div>
                                <div>
                                    <div class="smallColor">Category:</div>
                                    <div>{{$product->category->Title_en}}</div>
                                </div>
                                <div>
                                    <div class="smallColor">Model:</div>
                                    <div>{{$product->model}}</div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                            <div class="m-4 row">
                                <div class="col-3">
                                    <div class="smallColor">Status:</div>
                                    <div>{{$product->status->Title_en}}</div>
                                </div>
                                <div class="col-3">
                                    <div class="smallColor">MileAge</div>
                                    <div>{{$product->distance}} KM</div>
                                </div>
                                <div class="col-3">
                                    <div class="smallColor">City</div>
                                    <div>{{$product->city->Title_en}}</div>
                                </div>
                                <div class="col-3">
                                    <div class="smallColor">Interior Brushes</div>
                                    <div>{{$product->interior_brush}}</div>
                                </div>
                            </div>
                            <div class="m-4 row">
                                <div class="col-3">
                                    <div class="smallColor">Year</div>
                                    <div>{{$product->year}}</div>
                                </div>
                                <div class="col-3">
                                    <div class="smallColor">Colors</div>
                                    <div><div style="width: 15px;
                                        height: 15px;
                                        border-radius:50%;
                                        background: {{$product->color}};
                                        box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
                                        display: inline-block;"></div></div>
                                </div>
                                <div class="col-3">
                                    <div class="smallColor">District</div>
                                    <div>{{$product->district->Title_en}}</div>
                                </div>
                                <div class="col-3">
                                    <div class="smallColor">Interior Colors</div>
                                    <div><div style="width: 15px;
                                        height: 15px;
                                        border-radius:50%;
                                        background: {{$product->interior_color}};
                                        box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
                                        display: inline-block;"></div> </div>
                                </div>
                            </div>
                            <div class="m-4 row">
                                <div class="col-3">
                                    <div class="smallColor">GearBox</div>
                                    <div>{{$product->gearbox->Title_en}}</div>
                                </div>
                                <div class="col-3">
                                    <div class="smallColor">Payment Methods</div>
                                    <div>{{$product->payment_method}}</div>
                                </div>
                            </div>
                            <div class="m-4 row">
                                <div class="col-3">
                                    <div class="smallColor">Fuel Type</div>
                                    <div>{{$product->fuelType->Title_en}}</div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="seller" role="tabpanel" aria-labelledby="seller-tab">
                            <div class="m-4 d-flex align-items-center">
                                <img src="{{asset('assets/images/users')}}/{{$product->user->photo}}" height="90" width="90" class="rounded-circle" alt="...">
                                <div class="p-2">
                                    <div class="font-weight-bold">{{$product->user->fname}} {{$product->user->lname}} </div>
                                    <div class="smallColor"><i class="fas fa-map-marker-alt smallColor"></i> {{$product->user->city->Title_en}}</div>
                                </div>
                            </div>
                            <div class="d-flex justify-content-between w-75 m-auto">
                                <div>
                                    <div class="mt-4">
                                        <div class="smallColor">Company Name:</div>
                                        <div>{{$product->user->company_name}}</div>
                                    </div>
                                    <div class="mt-4">
                                        <div class="smallColor">Jurisdiction</div>
                                        <div>{{$product->user->jurisdiction}}</div>
                                    </div>
                                    <div class="mt-4">
                                        <div class="smallColor">Registration Type</div>
                                        <div>{{$product->user->register_type}}</div>
                                    </div>

                                </div>
                                <div>
                                    <div class="mt-4">
                                        <div class="smallColor">Social Media Links</div>
                                        <div>
                                            <a href="{{$product->user->phone}}">
                                                <img src="{{asset('assets/site/images/site/whatapp.png')}}" height="30" width="30" alt="...">
                                            </a>
                                            <a href="{{$product->user->facebook}}">
                                                <img src="{{asset('assets/site/images/site/face.png')}}" height="30" width="30" alt="...">
                                            </a>
                                            <a href="{{$product->user->instgram}}">
                                                <img src="{{asset('assets/site/images/site/insta.png')}}" height="30" width="30" alt="...">
                                            </a>
                                            <a href="{{$product->user->twitter}}">
                                                <img src="{{asset('assets/site/images/site/twitter.png')}}" height="30" width="30" alt="...">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="mt-4">
                                        <div class="smallColor">Call Him Now!</div>
                                        <div>{{$product->user->phone}}</div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="adv" role="tabpanel" aria-labelledby="adv-tab">
                            <div class="m-4 row">
                                <?php $advs = explode('|', $product->advandage_id) ;?>
                                @foreach($advs as $adv)
                                    <?php  $id = \App\models\Advandage::find($adv);
                                     ?>
                                     <div class="col-4 mb-3">
                                        <div>                                                
                                            <img src="{{asset('assets/images/advandages')}}/{{$id->image}}" height="30" width="30" alt="...">
                                            {{$id->Title_en}}
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@stop
