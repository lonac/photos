<div class="table-responsive">
	<table class="table table-hover">
	<thead>
		<tr>
			<th>S/NO</th>
			<th>SEX</th>
			<th>NAME OF STUDENTS</th>
			<th>PHOTO</th>
		</tr>
	</thead>
	@if($excel->count()>0)
				@foreach($excel as $data)
	<tbody>
		<tr>
			
				<td>{{$data->idno}}</td>
				<td>{{$data->sex}}</td>
					<td>{{$data->firstname}}</td>
				<td></td>
			
			
		</tr>
	</tbody>
		@endforeach
			@endif
	</table>
</div>