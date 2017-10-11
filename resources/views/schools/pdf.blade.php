
<div class="container">
	<div class="row">
		@include('studio._school_properties')
	</div>
	<div class="row">

			@if($excel->count()>0)
				@foreach($excel as $data)
					<div class="col-xs-2">
						<center>
								<img src="{{$data->school_id}}/pictures/{{$data->idno}}.jpg" width="80" height="135"><br>
							{{$data->schools->center_number}}-{{$data->idno}}- {{$data->firstname}} {{$data->middlename}} {{$data->surname }} <br>
							SEX: {{$data->sex}} <br>
							................................... <br>
						</center>
					</div>
				@endforeach
			@endif
	</div>
</div>




		
