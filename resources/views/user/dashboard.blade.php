
@extends('layout.master')

@section('content-logout')

<a href="{{ route('auth.logout') }}"><button class="signin">Logout</button></a>
 
@stop

@section('content')
   <!--  <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
               
                <table class="table table-hover">
                <thead>
                    <th>Name</th>
                    <th>Email</th>
                    <th></th>
                </thead>
                <tbody>
                    <tr>
                        <td>{{ $LoggedUserInfo['name'] }}</td>
                        <td>{{ $LoggedUserInfo['email'] }}</td>
                        <td><a href="{{ route('auth.logout') }}">Logout</a></td>
                    </tr>
                </tbody>
                </table>
            </div>
        </div>
    </div> -->
  <br>
  <br>
  
  	<div class="container">
		<br><br>
		<div class="row">
		@foreach($posts as $post)
			<div class="col-md-12" style="width:100%">
				<a href="/post/{{ $post->slug }}">
					<img src="{{ Voyager::image( $post->image ) }}" style="width:100%">
					<span>{{ $post->title }}</span>
				</a>
			</div>
		@endforeach
		</div>
	</div>



@endsection