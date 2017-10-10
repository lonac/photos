<!DOCTYPE html>
<html>
	<div class="row">
		@include('studio._school_properties')
	</div>
	@if($excel->count()>0)
		@foreach($excel as $data)

			<figure>
					<img src="{{$data->school_id}}/pictures/{{$data->idno}}.jpg" width="140" height="120"><br>
				<figcaption>
					{{$data->schools->center_number}}-{{$data->idno}}- {{$data->firstname}} {{$data->middlename}} {{$data->surname }} <br>
					SEX: {{$data->sex}} <br>
					................................... <br>
				</figcaption>
			</figure>
		</td>	
		</tr>
		@endforeach
	@endif	
</html>




		
