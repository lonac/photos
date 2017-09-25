@extends('layouts.master')

@section('title','My Details')

@section('content')
	<div class="container">
		<div class="row">
			@if($school!==null)
				<div class="col-md-8 col-md-offset-2">
					<div class="panel panel-default">
						<div class="panel-heading"><h1>{{$school->name}}
							<a href="{{url('schools/'.$school->id.'/edit')}}" class="btn btn-info btn-sm">Edit</a>
						</h1></div>
					<div class="panel-body">
						<h2>Center Number : {{$school->center_number}}</h2>
					</div>
					</div>
				</div>	
			@endif
		</div>

	</div>

@endsection