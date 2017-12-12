<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\UploadRequest;

use App\School;

use App\SchoolPhoto;

class PhotoController extends Controller
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
    public function add($id)
    {
        $school = School::findOrFail($id);

        return view('school_photos.add',compact('school'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function UploadPhotos(UploadRequest $request, $id)
    {

        $school = School::findOrFail($id);


        //Save Images to the Public Folder
        foreach ($request->photos as $photo)
         {
            $imageName = $school->id . '.' . 
             $photo->getClientOriginalExtension();

                $photo->move(
                base_path() . '/public/school_photos/'.$school->center_number.'/', $imageName
                );
         }

        //save the Images Uploaded
       // $imageName = $school->id . '.' . 
            // $request->file('photos')->getClientOriginalExtension();

        //$request->file('photos')->move(
       // base_path() . '/public/school_photos/'.$school->center_number.'/', $imageName
          //);
  
       /* //Store image directory to the database
        foreach ($request->photos as $photo) {
            $filename = $photo->store('photos');
            SchoolPhoto::create([
                'school_id' => $school->id,
                'filename' => $filename
            ]);
         }

         */

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
