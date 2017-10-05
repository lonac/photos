@extends('layouts.master')

@section('title','PDF DOWNLOAD')

@section('content')
	<div class="container">
		<div class="row">
			@include('studio._school_properties')
		</div>

		<div class="row">
		@if($excel->count()>0)
			@foreach($excel as $data)
			<div class="col-md-2 col-md-offset-0">
				<center>
					<img src="{{asset('/'.$data->school_id.'/pictures/'.$data->idno.'.jpg')}}" width="140" height="120"><br>
					{{$data->schools->center_number}}-{{$data->idno}}- {{$data->firstname}} {{$data->middlename}} {{$data->surname }} <br>
					SEX: {{$data->sex}} <br>
					................................... <br>
				</center>	
			</div>			
			@endforeach
		@endif
		</div>

	</div>

@endsection