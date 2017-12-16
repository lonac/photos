@extends('layouts.master')

@section('title','Edit Photos')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">						
				<div class="panel panel-primary">
					<div class="panel-heading">
						<center><h3>{{$school->name}}</h3></center>		
					</div>
					<div class="panel panel-default">
						<div class="panel-body">
							<div class="col-md-4 col-md-offset-0">
								<strong><h3>Photo Details:</h3></strong><br>
								<strong>ID: </strong><br>				
								<p><a href="" class="btn btn-warning">UPDATE</a></p>
								<p><a href="" class="btn btn-info">CHANGE PHOTO</a></p>
								<p><a href="" class="btn btn-danger">DELETE PHOTO</a><br></p>
							</div>

							<div class="col-md-4 col-md-offset-0">
                                     <a href=""><img src="{{asset('school_photos/500/.jpg')}}" height="400" width="400"><br> 
                                     </a><br>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection