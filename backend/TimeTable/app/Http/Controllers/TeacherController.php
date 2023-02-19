<?php

namespace App\Http\Controllers;

use App\Models\teacher;
use Exception;
use Illuminate\Http\Request;

class TeacherController extends Controller
{

    public function get_all_teachers(Request $request){
        return response()->json(['teachers'=>teacher::all()]);
    }


    public function add_teacher(Request $request){
        try{

            $fields = $request->validate([
                'Name'=>'required|string',
                'Subject'=>'required|string',
                'Teacher_id'=>'string'
                
        ]);
        $subject = teacher::create([
            'Name' => $fields['Name'],
            'Subject' => $fields['Subject'],
            'Teacher_id' => uniqid()
        ]);
        return response("teacher added successfully!",201);
    }catch(Exception $e){
        return response($e->getMessage(),500);

    }
    }
    

}