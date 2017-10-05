@extends('layouts.master')

@section('title',$student->surname)

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<div class="panel panel-primary">
					<div class="panel-heading"><h2>School Name : {{$school->name}}<br>
						Center Number : {{$school->center_number}} <br>
					</h2></div>
					<div class="panel-body">
						<form method="POST" action="{{ url('schools/'.$school->id.'/students/'.$student->idno) }}">
								 {{csrf_field()}}

                   				 {{method_field('patch')}}
								 <div class="form-group">
		                            <label for="firstname">First Name</label>
		                                <input id="firstname" type="text" class="form-control" name="firstname" value="{{$student->firstname}}">
								</div>

								<div class="form-group">
		                            <label for="middlename">Middle Name</label>
		                                <input id="middlename" type="text" class="form-control" name="middlename" value="{{$student->middlename}}">
								</div>
								<div class="form-group">
		                            <label for="surname">Surname</label>
		                                <input id="surname" type="text" class="form-control" name="surname" value="{{$student->surname}}">
								</div>
								<div class="form-group">
		                            <label for="idno" >Identification Number</label>
		                                <input id="idno" type="text" class="form-control" name="idno" value="{{$student->idno}}">
								</div>

								<div class="form-group">
		                            <label for="sex" >Sex</label>
		                            <select name="sex" class="form-control">
		                            	<option value="F">F</option>
		                            	<option value="M">M</option>
		                            </select>
								</div>
								
								<div class="form-group">
		                
		                   			<button type="submit" class="btn btn-success btn-lg btn-block">UPDATE</button>
								</div>
							</form>
						</div>
				</div>
			</div>


		<div class="col-md-2 col-md-offset-0">
			@include('students._image')
		</div>

		</div>


	</div>

@endsection