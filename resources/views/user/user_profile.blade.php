@extends('layouts.profile')
@section('title')
	@foreach($data4 as $emp)
	<title>{{$emp->first_name}}'s  Profile</title>
    @endforeach
@endsection

@section('navg')
	<div class="col-md-8 text-md-right header-buttons">
		<a href="{{route('user.records')}}" class="site-btn">BACK</a>
		<a href="#" class="site-btn">LOGOUT</a>
	</div>
@endsection

@section('basic')
			@foreach($data4 as $emp)
				<h2>{{$emp->first_name}} {{$emp->last_name}}</h2>
				
			</div>
			<div class="hero-info">
				<h2>General Information</h2>
				<ul>
					<li><span>SSN : </span>{{$emp->ssn}}</li>
					<li><span>Name : </span>{{$emp->first_name}} {{$emp->last_name}}</li>
					<li><span>Date of Birth : </span>{{$emp->dob}}</li>
					<li><span>Address : </span>{{$emp->address_line_1}},{{$emp->address_line_2}}</li>
					<li><span>Phone Number : </span>{{$emp->phoneNumber}}</li>
				</ul>
				<br/>
				<div>
				<form action="/user-basic-edit/{{ $emp->id }}" method='get'>
				<button type='submit' class="btn btn-success btn-block"><span class="fa fa-edit"></span> Edit Basic Info </button>
				</form>
				</div>
				@endforeach
@endsection

@section('office')
				@foreach($data5 as $emp2)
				<h2>Official information</h2>
				<ul>
					<li><span>Current Branch : </span>{{$emp2->obranch}}</li>
					<li><span>Department : </span>{{$emp2->dept}}</li>
					<li><span>Designation : </span>{{$emp2->des}}</li>
					
				</ul>
				<br/>
				<div>
				<form action="/user-office-edit/{{ $emp2->id }}" method='get'>
				<button type='submit' class="btn btn-success btn-block"><span class="fa fa-edit"></span> Edit Official Info </button>
				</form>
				</div>
				@endforeach
@endsection

@section('avtr')
                @foreach($data4 as $emp)
				<img src="/uploads/avatars/{{$emp->avatar}}" style="border-radius:50%;" alt="5" >
                @endforeach
 @endsection

 @section('fi')
			@foreach($data6 as $emp3)
			<h2>Financial Information</h2>
			<ul>
				<li><span>Fixed Allowances : </span>{{$emp3->fixed_allowances}}</li>
				<li><span>Fixed Deductions : </span>{{$emp3->fixed_deductions}}</li>
				<li><span>Bank             : </span>{{$emp3->bank}}</li>
				<li><span>Branch           : </span>{{$emp3->bbranch}}</li>
				<li><span>Account Number   : </span>{{$emp3->acc}}</li>
			</ul>
			<br/>
			<div>
			<form action="/user-finance-edit/{{ $emp3->id }}" method='get'>
			<button type='submit' class="btn btn-success btn-block"><span class="fa fa-edit"></span> Edit Financial Info </button>
			</form>
			</div>
			@endforeach
 @endsection