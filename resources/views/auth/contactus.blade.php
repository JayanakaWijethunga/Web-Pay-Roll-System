@extends('layouts.welcome')

@section('headers')

<li class="">
        <a href="{{route('myhome')}}" class="">Home</a>
    </li>
    <li class="">
        <a href="{{route('login')}}" class="">Login</a>
    </li>

    <li class="">
        <a href="{{route('contactus')}}" class="active">Contact</a>
    </li>


@endsection


@section('body_part')

<section class="banner_part">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-12 col-xl-12">
                <div class="banner_text">
                    <div class="banner_text_iner">
                        <h1>Contact Our <span>System Operators</span></h1>
                        <p>If you have no idea how to use the system contact us</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </section>

@endsection