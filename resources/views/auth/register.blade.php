@extends('layout.master')

@section('content')

<div>
   
      <div class="brand_color">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="titlepage">
                        <h2>Sign up</h2>
                    </div>
                </div>
            </div>
        </div>

    </div>
   
   <div class="contact">
        <div class="container">
                            <form action=" {{ route('auth.save') }} " method="post">

                                @if(Session::get('success'))
                                <div class="alert alert-success">
                                    {{ Session::get('success') }}
                                </div>
                                @endif

                                @if(Session::get('fail'))
                                <div class="alert alert-danger">
                                {{ Session::get('fail') }}
                                </div>
                                @endif


                            @csrf
                          
<div class="row">
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                <input class="form-control" placeholder="Your name" type="text" name="name" value="{{old('name')}}">
                                <span class="text-danger">@error('name'){{ $message }} @enderror</span>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                <input class="form-control" placeholder="Email" type="email" name="email" value="{{old('email')}}">
                                <span class="text-danger">@error('email'){{ $message }} @enderror</span>
                            </div>
                            <div class=" col-md-12">
                                <input class="form-control" placeholder="Password" type="password" name="password">
                                <span class="text-danger">@error('password'){{ $message }} @enderror</span>
                            </div>
                         
                            <div class=" col-md-12">
                                <button class="send" type="submit">Sign up</button>
                            </div>
                            <div><a href="{{ route('auth.login') }}">Already register? Sign in now.</a> </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
   
</div>

@endsection