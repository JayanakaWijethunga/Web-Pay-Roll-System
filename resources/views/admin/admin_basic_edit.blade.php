@extends('layouts.edit_basic_info')


@section('forms')
<form class="well form-horizontal" action="/admin-basic-update/{{$basics->id}}" method="POST">
@endsection

@section('backs')
<a href="#" class="btn btn-info">Back</a>
@endsection