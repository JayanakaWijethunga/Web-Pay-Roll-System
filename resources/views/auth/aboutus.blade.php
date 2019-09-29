@extends('layouts.welcome')

@section('headers')

    <li class="">
        <a href="{{route('myhome')}}" class="">Home</a>
    </li>
    <li class="">
        <a href="{{route('login')}}" class="">Login</a>
    </li>
    <li class="">
        <a href="{{route('aboutus')}}" class="active">About Us</a>
    </li>
    <li class="">
        <a href="#" class="">Contact</a>
    </li>


@endsection


@section('body_part')



@endsection