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
					<td><img src="{{asset('/'.$data->school_id.'/pictures/'.$data->idno.'.jpg')}}" width="20" height="20"></td>
					<td><a href="{{url('schools/'.$data->school_id.'/students/'.$data->idno)}}"><strong>Edit</strong></a></td>
				</tr>
			</tbody>
			@endforeach
		@endif
	</table>
</div>