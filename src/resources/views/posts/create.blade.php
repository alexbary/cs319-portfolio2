@extends('layouts.app')

@section('content')
	<div class="container">
		@if ($errors->any())
		    <div class="alert alert-danger">
		        <ul>
		            @foreach ($errors->all() as $error)
		                <li>{{ $error }}</li>
		            @endforeach
		        </ul>
		    </div>
		@endif

		<div class="row">
			<div class="col-md-7">
				<h1>New Post</h1>
				<br>
				{!! Form::open(['action' => 'PostsController@store', 'method' => 'POST' ]) !!}
				    <div class="form-group">
				    	{{Form::label('url', 'Image URL')}}
				    	{{Form::text('url', '', ['class' => 'form-control', 'placeholder' => 'https://www.example.com/image.png'])}}
				    </div>
				    <div class="form-group">
				    	{{Form::label('caption', 'Description')}}
				    	{{Form::textarea('caption', '', ['class' => 'form-control', 'placeholder' => 'Add a caption...'])}}
				    </div>
				    <br>
					{{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
				{!! Form::close() !!}
			</div>
		</div>
		
	</div>
@endsection