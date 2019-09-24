@extends('layouts.home')

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

@section('title',"Admin")

@section('title',"Admin")

@section('heading',"Admin")

@section('eachraw')
                    @foreach($data as $emp)

					<tr>

					<td >{{$emp->username}}</td>
					<td>{{$emp->email}}</td>
                    
                    <td>
                    <form action="/admin-profile/{{ $emp->user_id }}" method='get' >
                    
                    
                    
                    
                    <button type='submit' class="btn btn-primary">
                    <span class="glyphicon glyphicon-edit"></span>Edit Profile
                    </button>
                    </form>
                    </td>

                    <td>
                    
                    
                    <form action="/canlogadmin/{{ $emp->user_id }}" method='post' >
                    
                    {{ csrf_field() }}
                    
                    
                    
                    <button type='submit' class="btn btn-warning">
                    
                    
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
                    
                    
                    <form action="/deleteadmin/{{ $emp->user_id }}" method='post' >
                    
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

        <a href="{{route('admin.registerform')}}" class="btn btn-success">Add New Admin</a>
        <a href="{{route('sadmin.home')}}" class="btn btn-primary">Back</a>

@endsection


