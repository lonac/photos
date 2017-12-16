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

        //Store image directory to the database
        foreach ($request->photos as $photo) {
            $imageName = $photo->getClientOriginalName();

            //remove non numbers characters
             $newname = preg_replace('~\D~', '', $imageName);

            $newimagename = $newname . '.' ."jpg";
            


            //save image ImageData to DB
         //   $newimagename = $photo->store('school_photos/'.$school->center_number.'/', $newimagename );
            SchoolPhoto::create([
                'school_id' => $school->id,
                'filename' => $newname
            ]);


        //Save the Image to Public Folder
             $photo->move(
                base_path() . '/public/school_photos/'.$school->center_number.'/', $newimagename
                );
         }



}
        

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $school = School::findOrFail($id);

        $school_photos = $school->school_photos;

        return view('school_photos.show',compact('school','school_photos'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id, $photo)
    {
        $school = School::findOrFail($id);

        $filename = $school->school_photos;

        return view('school_photos.edit',compact('school','filename'));
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
