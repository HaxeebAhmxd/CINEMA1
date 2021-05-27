@extends('layout.master')

@section('content')

      <div class="brand_color">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="titlepage">
                        <h2>Sign in</h2>
                    </div>
                </div>
            </div>
        </div>

    </div>
   
   <div class="contact">
        <div class="container">
        <form action="{{ route('auth.check') }}" method="post">
                                @if(Session::get('fail'))
                                <div class="alert alert-danger">
                                {{ Session::get('fail') }}
                                </div>                
                                @endif


                            @csrf
            <div class="row">
                <div class="col-md-12">

                    <form class="main_form">
                        <div class="row">
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                <input class="form-control" placeholder="Enter email here" type="text" name="email" value="{{ old('email') }}">
                                <span class="text-danger">@error('email'){{ $message }} @enderror</span>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                <input class="form-control" placeholder="Enter password" type="password" name="password">
                                <span class="text-danger">@error('password'){{ $message }} @enderror</span>
                            </div>
                            
                            <div class=" col-md-12">
                                <button type="submit" class="send">Login</button>
                                 <a href="{{ route('auth.register') }}">I don't have an account, create new</a> 
                            </div>
                           
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
   
@endsection

