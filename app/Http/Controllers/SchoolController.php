<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\School;

use Excel;

use PDF;

use App\Excell;

class SchoolController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $schools = School::all();



        return view('schools.index',compact('schools'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('schools.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'name'=>'required|max:100',
            'center_number'=>'required|max:100',
            'year'=>'required|max:4',
            ]);

        $school = new School;
        $school->name = $request->input('name');
        $school->center_number = $request->input('center_number');
        $school->level = $request->input('level');
        $school->year = $request->input('year');
        $school->save();

        return redirect('schools')->with('status','School Successfully Added');
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

        $excel = Excell::where('school_id', $school->id)->get();

        $photos = $school->school_photos;

        //Check if the school has photos uploade
        if (empty($photos)) {
            
            return redirect('schools/'.$school->id.'/school_photos/add');
        } 
        else
         {
           
           return view('schools.show',compact('school','excel','photos'));
        }


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $school = School::findOrFail($id);

        return view('schools.edit',compact('school'));
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

    public function ImportSheetToDB(Request $request, $id)
    {
 
        $school = School::findOrFail($id);

        if($request->hasFile('imported-file')){
            $path = $request->file('imported-file')->getRealPath();

            $data = \Excel::load($path)->
            select(array('firstname', 'lastname','idno','middlename','sex','surname'))
            ->skipRows(1)->takeRows(36)->get();



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
                    
                    return redirect('schools/'.$school->id)->with('status','Data Were Successfully Uploaded');
                }
            }
        }
        return redirect('schools/'.$school->id)->with('status','No Data selected to be Uploaded');  
}

        public function downloadPDF($id){

              $school = School::findOrFail($id);

               $photos = $school->school_photos;

                $excel = Excell::where('school_id', $school->id)->get();

              $pdf = PDF::loadView('schools.pdf', compact('school','photos','excel'));

              return $pdf->download('schools.pdf');

            }

            public function getPdfView($id)
            {
                 $school = School::findOrFail($id);

        $excel = Excell::where('school_id', $school->id)->get();

        $photos = $school->school_photos;

        return view('schools.pdf-form',compact('school','excel','photos'));
            }

       
}
