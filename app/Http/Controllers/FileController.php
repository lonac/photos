<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Excell;
use Excel;
class FileController extends Controller {
    public function importExportExcelORCSV(){
        return view('file_import_export');
    }
    public function importFileIntoDB(Request $request){
        if($request->hasFile('sample_file')){
            $path = $request->file('sample_file')->getRealPath();
            $data = \Excel::load($path)->get();
            if($data->count()){
                foreach ($data as $key => $value) {
                    $arr[] = ['firstname' => $value->firstname, 'surname' => $value->surname,
                    'identity' => $value->identity, 'middlename'=> $value->middlename, 'sex'=> $value->sex];
                }
                if(!empty($arr)){
                    \DB::table('excells')->insert($arr);
                    dd('Insert Record successfully.');
                }
            }
        }
        dd('Request data does not have any files to import.');      
    } 
    public function downloadExcelFile($type){
        $excells = Excell::get()->toArray();
        return \Excel::create('expertphp_demo', function($excel) use ($excells) {
            $excel->sheet('sheet name', function($sheet) use ($excells)
            {
                $sheet->fromArray($excells);
            });
        })->download($type);
    }      
}
