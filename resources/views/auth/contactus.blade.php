@extends('layouts.welcome')

@section('headers')

<li class="">
        <a href="{{route('myhome')}}" class="">Home</a>
    </li>
    <li class="">
        <a href="{{route('login')}}" class="">Login</a>
    </li>
    <li class="">
        <a href="{{route('aboutus')}}" class="">About Us</a>
    </li>
    <li class="">
        <a href="{{route('contactus')}}" class="active">Contact</a>
    </li>


@endsection


@section('body_part')

<div class="text-center icon">
        <span class="fa fa-user"></span>
    </div>
    <div class="content-bottom">
        <form action="" method="post">
        @csrf
                <div class="">
                @if ($errors->first('email'))
                                <span class="showerror align-center" role="alert">
                                <strong>{{ $errors->first('email') }}</strong>
                                </span>
                @endif
                </div>
            <div class="field-group">
                <span class="fa fa-user" aria-hidden="true"></span>
                <div class="wthree-field">
                <input name="email" id="email" class="form-control @error('email') is-invalid @enderror" type="text" value="{{ old('email') }}" placeholder="E-mail">
                
                </div>
            </div>

            <div class="">
                    @if ($errors->first('full_name'))
                                    <span class="showerror align-center" role="alert">
                                    <strong>{{ $errors->first('full_name') }}</strong>
                                    </span>
                    @endif
                    </div>
                <div class="field-group">
                    <span class="fa fa-user" aria-hidden="true"></span>
                    <div class="wthree-field">
                    <input name="full_name" id="full_name" class="form-control @error('full_name') is-invalid @enderror" type="text" value="{{ old('full_name') }}" placeholder="Full Name">
                    
                    </div>
                </div>

                <div class="">
                        @if ($errors->first('Phone_number'))
                                        <span class="showerror align-center" role="alert">
                                        <strong>{{ $errors->first('Phone_number') }}</strong>
                                        </span>
                        @endif
                        </div>
                    <div class="field-group">
                        <span class="fa fa-user" aria-hidden="true"></span>
                        <div class="wthree-field">
                        <input name="Phone_number" id="Phone_number" class="form-control @error('Phone_number') is-invalid @enderror" type="text" value="{{ old('Phone_number') }}" placeholder="Phone number">
                        
                        </div>
                    </div>
               
                    <div class="">
                            @if ($errors->first('message'))
                                            <span class="showerror align-center" role="alert">
                                            <strong>{{ $errors->first('message') }}</strong>
                                            </span>
                            @endif
                            </div>
                        <div class="field-group">
                            <span class="fa fa-user" aria-hidden="true"></span>
                            <div class="wthree-field">
                           >
                            <textarea rows="10" cols="50" name="Phone_number" id="Phone_number" class="form-control @error('message') is-invalid @enderror"  value="{{ old('message') }}" placeholder="Comment Here"></textarea>
                            </div>
                        </div>
            
            <div class="wthree-field">
                <button type="submit" class="btn">Sign in</button>
            </div>
            
        </form>

        
        </div>



@endsection