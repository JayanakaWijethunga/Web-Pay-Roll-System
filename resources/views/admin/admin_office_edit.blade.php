@extends('layouts.edit_office_info')

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
<a href="{{ route('sadmin-myprofile') }}">
@endsection

@section('records')
<a href="{{ route('admin.records') }}">
@endsection

@section('myprofile')
<a href="{{ route('sadmin-myprofile') }}">
@endsection

@section('functions01',"Manage Users")

@section('forms')
<form class="well form-horizontal" action="/admin-office-update/{{$office->id}}" method="POST">
@endsection

@section('backs')
<a href="#" class="btn btn-info">Back</a>
@endsection