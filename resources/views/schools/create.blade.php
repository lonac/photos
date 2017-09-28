@extends('layouts.master')

@section('title','Add School')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<div class="panel panel-primary">
					<div class="panel-heading"><h2>School Details</h2></div>
					<div class="panel-body">
						<form method="POST" action="{{ url('schools/create') }}">
								{{ csrf_field() }}

								 <div class="form-group">
		                            <label for="name" class="col-md-4 control-label">School Name</label>
		                                <input id="name" type="text" class="form-control" name="name" required autofocus>
								</div>
								<div class="form-group">
		                            <label for="center_number" class="col-md-4 control-label">Center Number</label>
		                                <input id="center_number" type="text" class="form-control" name="center_number">
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