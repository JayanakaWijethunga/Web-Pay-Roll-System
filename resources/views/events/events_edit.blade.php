@extends('layouts.edit_events')

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

@section('contents')

<div class="container">
    <div class="">
        <div class="row">
           <div class="col-md-8 col-md-offset-2">
              <div class="panel panel-default">
                  <div class="panel-heading" style="background: #2edda4; color: white;">
                Update Events
                </div>
                <div class="panel-body">
                <form method="POST" action="{{action('Calender\EventController@update',$id)}}">
                        {{csrf_field()}}
                        <input type="hidden" name="_method" value="UPDATE" />
                        
                        <div class="form-group row">
                          <label for="inputEmail3" class="col-sm-2 col-form-label">Enter the title</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control" id="title" name="title" value="{{$events->title}}" placeholder="Enter the title">
                          </div>
                        </div>

                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">Enter the Color</label>
                            <div class="col-sm-10">
                              <input type="color" class="form-control" id="color" name="color" value="{{$events->color}}" placeholder="Enter the Color">
                            </div>
                          </div>

                          <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">Enter start Date</label>
                            <div class="col-sm-10">
                              <input type="datetime-local" class="form-control" id="start_date" class="date" name="start_date" value="{{$events->start_date}}" placeholder="Enter start Date">
                            </div>
                          </div>

                          <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">Enter end Date</label>
                            <div class="col-sm-10">
                            <input type="datetime-local" class="form-control" id="end_date" class="date" name="end_date" value="{{$events->end_date}}" placeholder="Enter end Date">
                            </div>
                          </div>
                        
                        <div class="form-group row">
                          <div class="col-sm-10">
                              {{method_field('PUT')}}
                            <button type="submit" class="btn btn-primary">Save Changes</button>
                          </div>
                        </div>
                      </form>
                </div>
                </div> 
            </div> 
        </div>
    </div>
</div>

@endsection

