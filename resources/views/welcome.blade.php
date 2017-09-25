@extends('layouts.master')
@section('title','Welcome')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-primary">
                <div class="panel-heading"><center><h2>Photo Magic Studio</h2></center></div>
                <div class="panel-body">
                    <form>
                        <div class="form-group">
                            <label for="key">Key</label>
                            <input type="text" class="form-control" placeholder="XS67563873UYB">
                        </div>
                        <div class="form-group">
                            <a href="{{url('/studio')}}"  class="btn btn-success btn-lg btn-block">PROCEED</a>
                        </div>
                    </form>
                 </div>            
            </div>
        </div>
    </div>    
</div>
@endsection