@extends('layouts.edit_office_info')


@section('forms')
<form class="well form-horizontal" action="/admin-office-update/{{$office->id}}" method="POST">
@endsection

@section('backs')
<a href="#" class="btn btn-info">Back</a>
@endsection