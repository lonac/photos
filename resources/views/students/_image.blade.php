<div class="panel panel-primary">
	<div class="panel-heading"><strong>PHOTO</strong></div>
	<div class="panel-body">
		<div class="form-group">
			<img src="{{asset('/'.$school->id.'/pictures/'.$student->idno.'.jpg')}}">
		</div>
		<div class="form-group">
			<a href="" class="btn btn-success btn-sm btn-block">CHANGE</a>
		</div>
		<div class="form-group">
			<a href="" class="btn btn-danger btn-sm btn-block">DELETE</a>
		</div>
	</div>
</div>