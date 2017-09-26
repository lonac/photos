@extends('layouts.master')

@section('title','Upload Excell File')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<div class="panel panel-default">
					<div class="panel-heading"><h2>Choose File</h2></div>
					<div class="panel-body">
						<form method="POST" action="{{ url('schools/'.$school->id.'/excell/create')}}" enctype="multipart/form-data">
								{{ csrf_field() }}
								<div class="form-group">
									<input type="file" id="choosen-file" name="choosen-file">
								</div>
								
								<div class="form-group">
		                   			<button type="submit" class="btn btn-success btn-lg btn-block">UPLOAD FILE</button>
								</div>
							</form>
						</div>
				</div>
			</div>

		</div>

	</div>

@endsection