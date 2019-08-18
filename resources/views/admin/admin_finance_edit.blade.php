@extends('layouts.edit_finance_info')


@section('forms')
<form class="well form-horizontal" action="/admin-finance-update/{{$finance->id}}" method="POST">
@endsection

@section('backs')
<a href="#" class="btn btn-info">Back</a>
@endsection