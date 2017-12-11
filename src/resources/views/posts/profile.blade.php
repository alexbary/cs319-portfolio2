@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="row">
		  	<div class="col-md-4">
		  		<br>
	            <div class="profile-user-image-div">
                    <img id="img-user" src="http://www.mulierchile.com/cool-cat-backgrounds/cool-cat-backgrounds-005.jpg" class="profile-user-image"/>
                </div>
		  	</div>
		  	<div class="col-md-8">
		  		<h1>Username</h1>
		  		<br>
		  		<div class="row">
				  <div class="col-md-2"><b>0</b> posts</div>
				  <div class="col-md-2"><b>0</b> followers</div>
				  <div class="col-md-2"><b>0</b> following</div>
				</div>
				<br>
				<p>Test user for this photo sharing web application. Always #nofilter</p>
		  	</div>
		</div>

		<br><br><br>

		<div class="row">
			<div class="col-md-4">
				Image
			</div>
			<div class="col-md-4">
				Image
			</div>
			<div class="col-md-4">
				Image
			</div>
		</div>
		
	</div>
@endsection