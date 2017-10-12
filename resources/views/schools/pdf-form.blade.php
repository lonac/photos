@extends('layouts.master')

@section('title', $school->name)

@section('content')
	<div class="container">
		<div class="row">
			@include('studio._school_properties')
		</div>

		<div class="row">
		@if($excel->count()>0)
			@foreach($excel as $data)
			<div class="col-xs-2 col-xs-offset-0">
				<center>
					<img src="{{asset('/'.$data->school_id.'/pictures/'.$data->idno.'.JPG')}}" width="120" height="140">
					{{$data->schools->center_number}}-{{$data->idno}}- {{$data->firstname}} {{$data->middlename}} {{$data->surname }} <br>
					SEX: {{$data->sex}} <br>
					................................... <br>
				</center>	
			</div>			
			@endforeach
		@endif
		</div>

		<div class="row">
			<div class="col-md-4">
				<center>
					<a href="{{action('SchoolController@downloadPDF', $school->id)}}" class="btn btn-info btn-sm btn-block">CREATE PDF</a
				</center>
			</div>
		</div>
	</div>
@endsection

