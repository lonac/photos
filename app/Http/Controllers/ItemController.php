<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Excel;

use App\Item;

class ItemController extends Controller
{
     public function index()
    {
        return view('items');
    }

    public function import(Request $request)
    {
      if($request->file('imported-file'))
      {
                $path = $request->file('imported-file')->getRealPath();
                $data = Excel::load($path, function($reader) {
            })->get();

            if(!empty($data) && $data->count())
      {
        $data = $data->toArray();
        for($i=0;$i<count($data);$i++)
        {
          $dataImported[] = $data[$i];
        }
            }
      Item::insert($dataImported);
        }
        return back();
  }
}
