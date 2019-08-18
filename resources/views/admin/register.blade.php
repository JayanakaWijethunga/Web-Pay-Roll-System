@extends('layouts.register_form')

@section('title',"Admin")

@section('headers',"Admin")

@section('form_part')
   <form class="well form-horizontal" action="{{route('admin.registers')}}" method="POST">
@endsection

@section('backs')
   <a href="{{route('admin.records')}}" class="btn btn-info">Back</a>
@endsection