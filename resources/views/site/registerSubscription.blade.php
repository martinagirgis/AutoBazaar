@extends('layouts.app_martina')
@section('content')
    <div class="w-50 m-auto pt-5">
        <div class="text-center mb-5">
            <div class="navbar-brand logo">
                <img src="{{asset('assets/site/images/site/logo.png')}}" width="45" height="45" class="d-inline-block align-top" alt="">
                <br>
                AutoBazar
            </div>
        </div>
        <form class="signform mb-5">
            <h5 class="text-center font-weight-bold mb-4">
                Account / Subscription
            </h5>
            <div class="form-group">
                <label for="exampleInputEmail1"  class="font-weight-bold">Company’s Name</label>
                <input type="text" class="form-control inputform" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1" class="font-weight-bold">Jurisdiction</label>
                <select class="form-control inputform">
                    <option>Default select</option>
                </select>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1" class="font-weight-bold">Registeration Type</label>
                <select class="form-control inputform">
                    <option>Default select</option>
                </select>
            </div>
            <br>

            <div class="form-group">
                <b>Subscription Plan</b>
                <div class="form-check text-center">
                    <div class="row">
                        <div class="col-3 p-2">
                            <div>
                                <label class="form-check-label" for="sub1">
                                    <img src="{{asset('assets/site/images/site/sub1.png')}}" width="70" height="70" class="d-inline-block align-top mb-2" alt="">
                                    <div>FREE Plan</div>
                                    <div><span class="maincolor">$00.00</span><sub>/month</sub></div>
                                </label>
                            </div>
                            <input class="form-check-input" type="radio" id="sub1" name="subcription" >
                        </div>

                        <div class="col-3 p-2">
                            <div>
                                <label class="form-check-label" for="sub2">
                                    <img src="{{asset('assets/site/images/site/sub2.png')}}" width="70" height="70" class="d-inline-block align-top mb-2" alt="">
                                    <div>LITE Plan</div>
                                    <div><span class="maincolor">$18.00</span><sub>/month</sub></div>
                                </label>
                            </div>
                            <input class="form-check-input" type="radio" id="sub2" name="subcription" >
                        </div>

                        <div class="col-3 p-2">
                            <div>
                                <label class="form-check-label" for="sub3">
                                    <img src="{{asset('assets/site/images/site/sub3.png')}}" width="70" height="70" class="d-inline-block align-top mb-2" alt="">
                                    <div>MEDIUM Plan</div>
                                    <div><span class="maincolor">$42.00</span><sub>/month</sub></div>
                                </label>
                            </div>
                            <input class="form-check-input" type="radio" id="sub3" name="subcription" >
                        </div>

                        <div class="col-3 p-2">
                            <div>
                                <label class="form-check-label" for="sub4">
                                    <img src="{{asset('assets/site/images/site/sub4.png')}}" width="70" height="70" class="d-inline-block align-top mb-2" alt="">
                                    <div>ULTIMATE Plan</div>
                                    <div><span class="maincolor">$80.00</span><sub>/month</sub></div>
                                </label>
                            </div>
                            <input class="form-check-input" type="radio" id="sub4" name="subcription" >
                        </div>

                    </div>
                </div>
            </div>
            <br><br>
            <div class="form-group">
                <p class=""><a href="text-decoration-none"> Skip for Now > </a></p>
            </div>
            <a type="submit" class="btn btn-primary w-100 font-weight-bold" href="{{route('register.address')}}">Next</a><br><br>
        </form>

    </div>

@stop
