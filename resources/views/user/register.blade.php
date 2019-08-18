@extends('layouts.register_form')

@section('title',"User")

@section('headers',"User")

@section('form_part')
   <form class="well form-horizontal" action="{{route('user.registers')}}" method="POST">
@endsection

@section('backs')
   <a href="{{route('user.records')}}" class="btn btn-info">Back</a>
@endsection