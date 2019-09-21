@extends('layouts.register')

@section('title',"Admin")

@section('utypemin',"A")

@section('utype',"Admin")

@section('avators')
@foreach($propic as $emp)
<img src="/uploads/avatars/{{$emp->avatar}}" class="img-circle" alt="User Image">
@endforeach
@endsection

@section('names')
<p>{{ Auth::user()->username }}</p>
<a href="{{ route('admin-myprofile') }}">
@endsection

@section('records')
<a href="{{ route('user.records') }}">
@endsection

@section('myprofile')
<a href="{{ route('admin-myprofile') }}">
@endsection

@section('functions01',"Manage Users")

@section('title',"Admin")

@section('headers',"Admin")

@section('form_part')
   <form class="well form-horizontal" action="{{route('admin.registers')}}" method="POST">
@endsection

@section('backs')
   <a href="{{route('admin.records')}}" class="btn btn-info">Back</a>
@endsection