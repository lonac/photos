@extends('layouts.master')

@section('title','Add School')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<div class="panel panel-primary">
					<div class="panel-heading">
						<h3>ADD SCHOOL PHOTOS</h3>
					</div>
						<div class="panel-body">
						<form action="{{url('schools/'.$school->id.'/school_photos/add')}}" method="post" enctype="multipart/form-data">
							{{ csrf_field() }}
				              <div class="col-md-6">
				                  <input type="file" name="photos[]" multiple />
				              </div>
				              <div class="col-md-6">
				                  <button class="btn btn-success btn-sm btn-block" type="submit">UPLOAD PHOTOS</button>
				              </div>
				         </form>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection