@extends('layouts.master')

@section('title','Edit School')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<div class="panel panel-primary">
					<div class="panel-heading"><h1>School Details</h1></div>
					<div class="panel-body">
						<form method="POST" action="{{ url('schools/'.$school->id.'/edit') }}">
								{{ csrf_field() }}

								 <div class="form-group">
		                            <label for="name" class="col-md-4 control-label">School Name</label>
		                                <input id="name" type="text" class="form-control" name="name" value="{{$school->name}}">
								</div>
								<div class="form-group">
		                            <label for="center_number" class="col-md-4 control-label">Center Number</label>
		                                <input id="center_number" type="text" class="form-control" name="center_number" value="{{$school->center_number}}">
								</div>

								<div class="form-group">
		                            <label for="level" class="col-md-4 control-label">Level(Form)</label>
									 <select class="form-control" name="level" value="{{$school->level}}">
									 	<option value="{{$school->level}}">{{$school->level}}</option>
                                        <option value="I"> I</option>
                                         <option value="II"> II</option>
                                         <option value="IV"> IV</option>
                                      </select>								
                                 </div>

								<div class="form-group">
		                            <label for="year" class="col-md-4 control-label">Year</label>
		                                <input id="year" type="number" class="form-control" name="year" value="{{$school->year}}">
								</div>
								
								<div class="form-group">
		                   			<button type="submit" class="btn btn-success btn-lg btn-block">Update</button>
								</div>
							</form>
						</div>
				</div>
			</div>

		</div>

	</div>

@endsection