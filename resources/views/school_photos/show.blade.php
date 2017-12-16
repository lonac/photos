@extends('layouts.master')

@section('title','Photos')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-10 col-md-offset-1">
				<div class="panel panel-primary">
					<div class="panel-heading">
						<center><h3>{{$school->name}} PHOTOS</h3></center>		
					</div>
						<div class="panel-body">
							@if($school_photos!==null)
								@foreach($school_photos as $photo)
									<p style="float:left; font-size: 9pt; text-align: center; width:132px; length:185px; margin-right:2%; margin-bottom: 1.5em;">
                                     <a href=""><img src="{{asset('school_photos/500/'.$photo->filename.'.jpg')}}" height="185" width="132"><br> 
                                        </a><br>
                                        <strong>{{$photo->filename}}</strong>  
                                   </p>
								@endforeach
							@else
								<font color="red"><h2>No Photos for this School!</h2></font>
							@endif
						
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection