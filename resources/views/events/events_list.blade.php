@extends('layouts.event_lists')

@section('title',"Admin")

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

@section('homes')
<a href="{{ route('admin.home') }}">
@endsection

@section('records')
<a href="{{ route('user.records') }}">
@endsection

@section('myprofile')
<a href="{{ route('admin-myprofile') }}">
@endsection

@section('functions01',"Manage Users")

@section('calander_event')
<a href="/events">
@endsection

@section('cont')
@foreach ($events as $event)

        <tr>
        <td>{{ $event->id}}</td>
          <td>{{ $event->title}}</td>
          <td>{{ $event->color}}</td>
          <td>{{ $event->start_date}}</td>
          <td>{{ $event->end_date}}</td>
        
        
    <td><a href="{{action('Calender\EventController@edit',$event['id'])}}" class="btn btn-success" >
        <i class="glyphicon glyphicon-edit"></i>Edit</a></td>

    <td>
    <form action="{{action('Calender\EventController@destroy',$event['id'])}}" method="post" data-toggle="modal" data-target="#">
         {{ csrf_field() }}
         <input type="hidden" name="_method" value="DELETE" />
         <button type="submit" class="btn btn-danger">
            <i class="glyphicon glyphicon-trash"></i>Delete
         </button>
    </form>
</td>
    </tr>
        
@endforeach
@endsection

