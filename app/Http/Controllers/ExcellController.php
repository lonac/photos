<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\School;

use App\Excell;

use Excel;

class ExcellController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $school = School::findOrFail($id);

        return view('excell.create',compact('school'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id)
    {
        $school = School::findOrFail($id);

        if($request->hasFile('choosen-file')){
            $path = $request->file('choosen-file')->getRealPath();
            $data = \Excel::load($path)->get();
            if($data->count()){
                foreach ($data as $key => $value) {
                    $arr[] = [
                    'school_id'=>School::findOrFail($id)->id,
                    'idno'=> $value->idno,
                    'firstname' => $value->firstname, 
                    'middlename' => $value->middlename,
                    'surname'=> $value->surname,
                     'sex'=> $value->sex
                     ];
                }
                if(!empty($arr)){
                    \DB::table('excells')->insert($arr);
                    dd('Insert Record successfully.');
                }
            }
        }
        dd('Request data does not have any files to import.');    
}
     

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
