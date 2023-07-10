<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\documentdet;

class DocumentController extends Controller
{
    function documentdata(Request $req)
    {
        $docu = new documentdet();

        // Set the values from the request data
        $docu->resultstatus = $req->resultstatus;
        $docu->exams = $req->exams;
        $docu->board = $req->board;
        $docu->passingyear = $req->passingyear;
        $docu->crmarkes = $req->crmarkes;
        $docu->maxmarkes = $req->maxmarkes; // Corrected typo here from 'maxmarkes' to 'maxmarks'
        $docu->persentage = $req->persentage;
        $docu->examroll = $req->examroll;
        $docu->disqualify = $req->disqualify;
        $docu->details = $req->details;
        $docu->photo = $req->photo;
        $docu->sign = $req->sign;

        // Save the data to the database
        $docu->save();
        // dd($req->all());

        // You can return a response to the client if needed

        // Optionally, you can return a response to the client-side
        return response()->json(['message' => 'Document details saved successfully']);
    }

    public function home(){

    $document = documentdet::latest()->first();

    return view('index')->with('documentdata',  $document);
    }


}

