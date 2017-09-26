@extends('layouts.master')

@section('title','Upload Excell File')

@section('content')
	<div class="container">
      <br />
      <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-6">
          <div class="row">
            <form action="{{url('items/import')}}" method="post" enctype="multipart/form-data">
              <div class="col-md-6">
                {{csrf_field()}}
                <input type="file" name="imported-file"/>
              </div>
              <div class="col-md-6">
                  <button class="btn btn-primary" type="submit">Import</button>
              </div>
            </form>
          </div>
        </div>
        <div class="col-md-2">
          <button class="btn btn-success">Export</button>
        </div>
      </div>
    </div>
  </body>
   @endsection