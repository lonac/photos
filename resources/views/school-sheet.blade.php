 @extends('layouts.master')

 @section('content')
 <div class="container">
   <div class="panel panel-primary">
   <div class="panel-heading">Laravel 5 maatwebsite export into csv and excel and import into DB</div>
    <div class="panel-body"> 
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
          <a href="{{ route('excel-file',['type'=>'xls']) }}">Download Excel xls</a> |
          <a href="{{ route('excel-file',['type'=>'xlsx']) }}">Download Excel xlsx</a> |
          <a href="{{ route('excel-file',['type'=>'csv']) }}">Download CSV</a>
        </div>
     </div>  
     <form action="{{url('school-sheet')}}" method="POST" enctype="multipart/form-data">   
          <div class="row">
             <div class="col-xs-12 col-sm-12 col-md-12">
                  <div class="form-group">
                    <div class="col-md-6">
                        {{csrf_field()}}
                        <label>Select File to Import:</label>
                        <input type="file" name="sample_file"/>
                      </div>
                      
                  </div>
              </div>
              <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">UPLOAD</button>
              </div>
          </div>
         </form>
   </div>
  </div>
</div>
@endsection