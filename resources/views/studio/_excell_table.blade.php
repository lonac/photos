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
		</tr>
	</thead>
	@if($excel->count()>0)
				@foreach($excel as $data)
	<tbody>
		<tr>
			
				<td>{{$data->idno}}</td>
				<td>{{$data->sex}}</td>
					<td>{{$data->firstname}} {{$data->middlename}} {{$data->surname }}</td>
				<td></td>
			
			
		</tr>
	</tbody>
		@endforeach
			@endif
	</table>
</div>