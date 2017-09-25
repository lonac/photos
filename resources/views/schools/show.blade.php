@extends('layouts.master')

@section('title','My Details')

@section('content')
	<div class="container">
		@if($school!==null)
			@include('studio._general_studio')
		@else
		 No School
		@endif
	</div>

@endsection