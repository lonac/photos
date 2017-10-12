<!DOCTYPE html>
<html>
	<head>
		<title>User list - PDF</title>
		<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	</head>
	<body>
	<div class="container-fluid">
		<div class="row">
			@include('studio._school_properties')
		</div>
		<div class="row">
				@if($excel->count()>0)
					@foreach($excel as $data)
						<div class="col-xs-2">
							<div class="panel panel-default">
								<div class="body">
									<center>
								<img src="/home/lonac_rally/Desktop/photos/public/{{$data->school_id}}/pictures/{{$data->idno}}.JPG" width="100" height="100"><br>
								<h4>
									{{$data->schools->center_number}}-{{$data->idno}}- {{$data->firstname}} {{$data->middlename}} {{$data->surname }} <br>
								SEX: {{$data->sex}} <br>
								......................... <br>
								</h4>
								
							</center>
								</div>
							</div>
							
						</div>
					@endforeach
				@endif
		</div>
	</div>
	</body>
</html>





		
