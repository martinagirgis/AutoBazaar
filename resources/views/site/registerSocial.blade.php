@extends('layouts.app_martina')
@section('content')
    <div class="w-50 m-auto pt-5">
        <div class="text-center mb-5">
            <div class="navbar-brand logo">
                <img src="{{asset('assets/sire/images/site/logo.png')}}" width="45" height="45" class="d-inline-block align-top" alt="">
                <br>
                AutoBazar
            </div>
        </div>
        <form class="signform m-5" method="get" action="{{route('login')}}">
            @csrf
            <h5 class="text-center font-weight-bold mb-4">
                Social Media
            </h5>

            <div class="form-group">
                <label for="exampleInputEmail1">Facebook</label>
                <input type="text" class="form-control inputform" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Twitter</label>
                <input type="text" class="form-control inputform" id="exampleInputPassword1">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Instagram</label>
                <input type="text" class="form-control inputform" id="exampleInputPassword1">
            </div>

            <div class="form-group">
                <p class=""><a href="text-decoration-none"> Skip for Now > </a></p>
            </div>
            <button type="submit" class="btn btn-primary w-100 font-weight-bold">Done!</button><br><br>
        </form>
    </div>

@stop
