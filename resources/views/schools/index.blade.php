@extends('layouts.master')

@section('title','Schools ')

@section('content')
	<div class="container">
		<div class="row">
			@if(session('status'))
				<div class="alert alert-success">
					{{session('status')}}
				</div>
			@endif
			<div class="col-md-8 col-md-offset-2">
				<div class="panel panel-primary">
					<div class="panel-heading"><center><h1>LIST OF SCHOOLS
						<a href="{{url('schools/create')}}" class="btn btn-success">ADD SCHOOL?</a>
					</h1></center></div>
					<div class="panel-body">
						<div class="table">
							<table class="table table-hover">
								<thead></thead>
								<tbody>
									<tr>
										<td>
											@if($schools!==null)
												@foreach($schools as $school)
													<h1><a href="{{url('schools/'.$school->id)}}">{{$school->name}}</a>
														<a href="{{url('schools/'.$school->id.'/edit')}}" class="btn btn-warning">EDIT</a>
													</h1>
												@endforeach
											@else
												add school
											@endif
										</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>

	</div>

@endsection