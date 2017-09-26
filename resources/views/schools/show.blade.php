@extends('layouts.master')

@section('title',$school->name)

@section('content')
	<div class="container">
		@if(session('status'))
			<div class="alert alert-success">
				{{session('status')}}
			</div>
		@endif
		@if($school!==null)
			@include('studio._general_studio')
		@else
		 No School
		@endif
	</div>

@endsection