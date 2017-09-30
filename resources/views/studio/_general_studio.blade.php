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
	<div class="col-md-10">
		@include('studio._excell_table')
		
	</div>
	<!-- The third photo and other functionality-->
</div>
<!-- The third row with functionalities-->
<div class="row">
		@include('studio._studio_tasks')
</div>