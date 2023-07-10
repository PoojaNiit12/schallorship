<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\documentdet;
class StudentController extends Controller
{
  public  function home (){

    $mergedData = Student::latest()
    ->join('documentdets', 'students.id', '=', 'documentdets.id')
    ->select('students.*', 'documentdets.*')
    ->orderBy('students.created_at', 'desc')
    ->first();
    // echo "<pre>";
    // print_r($mergedata);
    // echo "</pre>";
    return view('index')->with('data', $mergedData);


  }
   public function store(Request $request){

    $stu = new Student();

    $stu->nameofscholarship = $request->input('nameofscholarship');
    $stu->name = $request->input('name');
    $stu->fathername = $request->input('fathername');
    $stu->mothername = $request->input('mothername');
    $stu->examcentre = $request->input('examcentre');
    $stu->caddress = $request->input('caddress');
    $stu->mobilen0 = $request->input('mobilen0');
    $stu->paddress = $request->input('paddress');
    $stu->email = $request->input('email');
    $stu->dob = $request->input('dob');
    $stu->adharno = $request->input('adharno');
    $stu->hsmarksheetmatric = $request->input('hsmarksheetmatric');
    $stu->hsmarksheet = $request->input('hsmarksheet');
    $stu->nationality = $request->input('nationality');
    $stu->gender = $request->input('gender');
    $stu->singlegirlchild = $request->input('singlegirlchild');
    $stu->applyingfor = $request->input('applyingfor');
    $stu->physicallychallenged = $request->input('physicallychallenged');
    $stu->myfile=$request->input('myfile');
    $stu->category = $request->input('category');
    $stu->save();
    // dd($request->all());


   }

   public function index(Request $request)

   {
    $stu = students::find($student_id);
    if ($stu->physicallychallenged == "yes") {
        $upload = time() . '.' . $stu->myfile->getClientOriginalExtension();
        $stu->myfile->move(public_path('imagefolder'), $upload);
    } else {
        $stu->myfile = null;
    }
    $stu->save();

    return redirect('/save-data')->back()->with('success', 'Image uploaded successfully.');
}







}




