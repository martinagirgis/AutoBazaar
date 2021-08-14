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
        <form class="signform m-5">
            <h5 class="text-center font-weight-bold mb-4">
                Sign Up
            </h5>
            <div class="row">
                <div class="form-group col-6">
                    <label for="exampleInputEmail1">First Name</label>
                    <input type="email" class="form-control inputform" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="form-group col-6">
                    <label for="exampleInputEmail1">Last Name</label>
                    <input type="email" class="form-control inputform" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Email</label>
                <input type="email" class="form-control inputform" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control inputform" id="exampleInputPassword1">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Confirm Password</label>
                <input type="password" class="form-control inputform" id="exampleInputPassword1">
            </div>
            <div class="form-group form-check">
                <input type="checkbox" class="form-check-input inputform" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Do you agree for all our rules and conditions,<a href="text-decoration-none"> Click here to Show</a></label>
            </div>
            <a type="submit" class="btn btn-primary w-100 font-weight-bold" href="{{route('register.subscription')}}">Next</a><br><br>
            <a class=" font-weight-bold" href="text-decoration-none">Already have an account? Login here</a><br><br>
        </form>
    </div>

@stop
