@extends('layouts.master')

@section('title','Edit School')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<div class="panel panel-default">
					<div class="panel-heading"><h1>School Details</h1></div>
					<div class="panel-body">
						<form method="POST" action="{{ url('schools/'.$school->id.'/edit') }}">
								{{ csrf_field() }}

								 <div class="form-group">
		                            <label for="name" class="col-md-4 control-label">School Name</label>
		                            <div class="col-md-6">
		                                <input id="name" type="text" class="form-control" name="name" value="{{$school->name}}">
		                        	</div>
								</div>
								<div class="form-group">
		                            <label for="center_number" class="col-md-4 control-label">Center Number</label>
		                            <div class="col-md-6">
		                                <input id="center_number" type="text" class="form-control" name="center_number" value="{{$school->center_number}}">
		                        	</div>
								</div>
								
								<div class="form-group">
		                
		                   			<button type="submit" class="btn btn-success btn-lg btn-block">Save</button>
								</div>
							</form>
						</div>
				</div>
			</div>

		</div>

	</div>

@endsection