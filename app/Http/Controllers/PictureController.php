<?php

namespace App\Http\Controllers;

use App\Http\Requests\UploadRequest;

use Illuminate\Http\Request;

use Image;

use App\SchoolPhoto;

use App\School;

use App\Picture;

use App\Excell;

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
       
        $this->validate($request,[
        'image' => 'mimes:jpeg|required|max:500'
            ]);

        $school = School::findOrFail($id);

        //get the image
        $image = $request->file('image');

        //get_image original name
        $imgname = $image->getClientOriginalName();

        //give image name as its ID

        //get the image to intenvention manipulation

        $get_img = Image::make($image);

        //create  image pathc
        $image_path = base_path().'/public/'.$school->id.'/pictures/'.$imgname;

        //resize to 
        $img = $get_img->resize(132,185)->save($image_path);

        //get the file name  
        $schoolpicture = new SchoolPhoto;
        $schoolpicture->school_id = $school->id;
        $schoolpicture->image = $image_path;

        $schoolpicture->save();

         return redirect('schools/'.$school->id)->with('status','Photo Successfully Uploaded');  

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
