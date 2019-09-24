@extends('layouts.home')

@section('title'," Admin")

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

@section('functions01',"Manage Admins")

@section('title',"User")

@section('heading',"User")

@section('eachraw')
                    @foreach($data as $emp)

					<tr>

					<td >{{$emp->username}}</td>
					<td>{{$emp->email}}</td>
                    
                    <td>
                    <form action="/user-profile/{{ $emp->user_id }}" method='get' >
                    
                    
                    
                    
                    <button type='submit' class="btn btn-primary">
                    <span class="glyphicon glyphicon-edit"></span>Edit Profile
                    </button>
                    </form>
                    </td>


                    
                    <td>
                    
                    
                    <form action="/canloguser/{{ $emp->user_id }}" method='post' >
                    
                    {{ csrf_field() }}
                    
                    
                    
                    <button type='submit' class="btn btn-warning ">
                    
                    
                    @if ($emp->status == '0')
                    <span class="glyphicon glyphicon-lock"></span> 
                    Block
                    @else
                    <span class="glyphicon glyphicon-eye-open"></span> 
                    Unblock
                    @endif
                    </button>
                    </form>

                    

                    </td>

                    <td>

                    <form action="/deleteuser/{{ $emp->user_id }}" method='post' >
                    
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

        <a href="{{route('user.registerform')}}" class="btn btn-success">Add New User</a>
        <a href="{{route('admin.home')}}" class="btn btn-primary">Back</a>

@endsection