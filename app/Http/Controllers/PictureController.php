<?php

namespace App\Http\Controllers;

use App\Http\Requests\UploadRequest;

use Illuminate\Http\Request;

use App\School;

use App\Picture;

class PictureController extends Controller
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
    
    public function UploadImage(Request $request, $id)
    {
       

       $school = School::findOrFail($id);
        $filenames = count($request->file('filenames'));

         foreach(range(0, $filenames) as $index) {
            $request['filenames.' . $index];
        }
       
        
        foreach ($request->filenames as $photo) {
            

            $filename = $photo->move(base_path(). '/public/'.$school->id.'/photo');
            Picture::create([
                'school_id' => $school->id,
                'filename' => $filename
            ]);
        }
        return 'Upload successful!';
        
        

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
