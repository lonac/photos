<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Excel;
use App\Sheet;

class SheetController extends Controller
{
    public function getSheet(){
        return view('school-sheet');
    }
    public function importToDB(Request $request){
        if($request->hasFile('sample_file')){
            $path = $request->file('sample_file')->getRealPath();
            $data = \Excel::load($path)->get();
            if($data->count()){
                foreach ($data as $key => $value) {
                    $arr[] = [
                    'firstname' => $value->firstname, 
                    'middlename' => $value->middlename,
                    'surname'=> $value->surname,
                     'sex'=> $value->sex
                     ];
                }
                if(!empty($arr)){
                    \DB::table('sheets')->insert($arr);
                    dd('Insert Record successfully.');
                }
            }
        }
        dd('Request data does not have any files to import.');      
    } 
     
}

