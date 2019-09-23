@extends('layouts.records')

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
                    <span class="glyphicon glyphicon-remove"></span>Edit Profile
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