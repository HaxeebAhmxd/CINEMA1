@extends('layout.master')

	<title>{{ $post->title }}</title>
@section('content')
	<br>
	<br>

	<div class="container">
		<div class="row">
			<div class=":>

				<!-- <h1>{{ $post->title }}</h1> -->
				<!-- <img src="{{ Voyager::image( $post->image ) }}" style="width:100%"> 
				<p>{!! $post->body !!}</p>

			</div>
		</div>
	</div>
	<br>
	<br>

	@endsection