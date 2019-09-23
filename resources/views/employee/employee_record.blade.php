@extends('layouts.home')

@section('title'," User")

@section('utypemin',"U")

@section('utype',"User")

@section('avators')
@foreach($propic as $emp)
<img src="/uploads/avatars/{{$emp->avatar}}" class="img-circle" alt="User Image">
@endforeach
@endsection

@section('names')
<p>{{ Auth::user()->username }}</p>
<a href="{{ route('user-myprofile') }}">
@endsection

@section('records')
<a href="{{ route('employee.records') }}">
@endsection

@section('myprofile')
<a href="{{ route('user-myprofile') }}">
@endsection

@section('functions01',"Manage Employees")

@section('title',"Employee")

@section('heading',"Employee")

@section('eachraw')
        @foreach($data as $emp)

        <tr>

        <td >{{$emp->username}}</td>
        <td>{{$emp->email}}</td>

        <td>
        <form action="/emp-profile/{{ $emp->user_id }}" method='get' >




        <button type='submit' class="btn btn-primary">
        <span class="glyphicon glyphicon-remove"></span>Edit Profile
        </button>
        </form>
        </td>


        <td>


        <form action="/deleteemp/{{ $emp->user_id }}" method='post' >

        {{ csrf_field() }}
        {{ method_field('delete') }}


        <button type='submit' class="btn btn-danger">
        <span class="glyphicon glyphicon-remove"></span> Delete
        </button>
        </form>



        </td>


        </tr>
        @endforeach
@endsection

@section('ngv')

                <a href="{{route('emp.registerform')}}" class="btn btn-success">Add New Employee</a>
                <a href="{{route('user.home')}}" class="btn btn-primary">Back</a>

@endsection