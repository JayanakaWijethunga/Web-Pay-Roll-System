@extends('layouts.edit_finance_info')

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

@section('forms')
<form class="well form-horizontal" action="/admin-finance-update/{{$finance->id}}" method="POST">
@endsection

@section('backs')
<a href="#" class="btn btn-info">Back</a>
@endsection