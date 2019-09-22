@extends('layouts.edit_my_profile_pic')

@section('title',"Super-Admin")

@section('utypemin',"SA")

@section('utype',"S-Admin")

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

@section('functions01',"Manage Admins")

@section('prop_imgs')   
    @foreach($data as $emp)
    <center><img src="/uploads/avatars/{{$emp->avatar}}" style="border-radius:50%;" alt="5" ></center>
    @endforeach
 @endsection

 @section('forms')   
    <form enctype="multipart/form-data" action="{{route('sadmin-myprofile_edit')}}" method="post">
 @endsection

 @section('backbtn')   
 <a class="pull-left btn  btn-danger btn-block" href="{{route('sadmin-myprofile')}}">Back</a>
 @endsection
