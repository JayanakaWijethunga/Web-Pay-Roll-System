@extends('layouts.welcome')

@section('headers')

<li class="active">
        <a href="{{route('myhome')}}" class="">Home</a>
    </li>
    <li class="">
        <a href="{{route('login')}}" class="">Login</a>
    </li>
    <li class="">
        <a href="{{route('aboutus')}}" class="">About Us</a>
    </li>
    <li class="">
        <a href="{{route('contactus')}}" class="">Contact</a>
    </li>


@endsection


@section('body_part')

<section class="banner_part">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-xl-6">
                    <div class="banner_text">
                        <div class="banner_text_iner">
                            <h1>Welcome
                                to <span>Treintec</span> Technologies</h1>
                            <p>Provide best software solutions for both web and mobile applications</p>
                            <a href="{{route('aboutus')}}" class="btn_1">More Details </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection