<div class="table-responsive">
	<table class="table table-hover">
	<thead>
		<tr>
			<th>S/NO</th>
			<th>CENTRE No</th>
			<th>SEX</th>
			<th>FIRSTNAME</th>
			<th>MIDDLENAME</th>
			<th>SURNAME</th>
			<th>PHOTO</th>
			<th>Action</th>
		</tr>
	</thead>
		@if($excel->count()>0)
			@foreach($excel as $data)
			<tbody>
				<tr>
					<td>{{$data->idno}}</td>
					<td>{{$data->schools->center_number}}</td>
					<td>{{$data->sex}}</td>
					<td>{{$data->firstname}}</td>
					<td>{{$data->middlename}}</td>	
					<td>{{$data->surname }}</td>		
					<td></td>
					<td><a href=""><strong>Edit</strong></a></td>
				</tr>
			</tbody>
			@endforeach
		@endif
	</table>
</div>