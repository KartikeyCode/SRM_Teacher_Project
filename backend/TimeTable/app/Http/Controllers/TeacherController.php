<?php

namespace App\Http\Controllers;

use App\Models\teacher;
use Exception;
use Illuminate\Http\Request;

class TeacherController extends Controller
{

    public function add_teacher(Request $request){
        try{

            $fields = $request->validate([
                'Name'=>'required|string',
                'Subject_code'=>'required|string',
                'Teacher_id'=>'string'
                
        ]);
        $subject = teacher::create([
            'Name' => $fields['Name'],
            'Subject_code' => $fields['Subject_code'],
            'Teacher_id' => uniqid()
        ]);
        return response("teacher added successfully!",201);
    }catch(Exception $e){
        return response($e->getMessage(),500);

    }
    }
    

}