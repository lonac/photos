<div class="panel panel-default">
	<center>
		<div class="col-md-3">
			<div class="panel-heading">
				<form action="{{url('schools/'.$school->id)}}" method="post" enctype="multipart/form-data">
					{{ csrf_field() }}
		              <div class="col-md-6">
		                  <input type="file" name="imported-file"/>
		              </div>
		              <div class="col-md-6">
		                  <button class="btn btn-primary btn-sm btn-block" type="submit">UPLOAD EXCELL</button>
		              </div>
		         </form>
			</div>
		</div>
		<div class="col-md-3">
			<div class="panel-heading">
				<form action="{{url('schools/'.$school->id.'/pictures/Upload')}}" method="post" enctype="multipart/form-data">
					{{ csrf_field() }}
		              <div class="col-md-6">
		                  <input type="file" name="image" />
		              </div>
		              <div class="col-md-6">
		                  <button class="btn btn-primary btn-sm btn-block" type="submit">UPLOAD PHOTOS</button>
		              </div>
		         </form>
			</div>
		</div>
		<div class="col-md-3">
			<div class="panel-heading">
				<button class="btn btn-info btn-sm btn-block">CREATE PDF</button>
			</div>
		</div>
		<div class="col-md-3">
			<div class="panel-heading">
				<a href="" class="btn btn-warning btn-sm btn-block">CONVERT&RENAME</a>
			</div>
		</div>
	</center>
</div>