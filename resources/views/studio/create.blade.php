@extends('layouts.master')
@section('title','Studio')

@section('content')
	<div class="container">
		<!-- The first row with Name-->
		<div class="row">
			@include('studio._school_properties')
		</div>
		<!-- The second row with Excell shit and photos-->
		<div class="row">
			<!-- The first colomn with Image properties-->
			<div class="col-md-2">
				@include('studio._image_properties')
			</div>
			<!-- The second colomn with Excell shit and photos-->
			<div class="col-md-8">
				
			</div>
			<!-- The third photo and other functionality-->
			<div class="col-md-2">
				@include('studio._myphoto')
			</div>
		</div>
		<!-- The third row with functionalities-->
		<div class="row">
		</div>
	</div>
@endsection