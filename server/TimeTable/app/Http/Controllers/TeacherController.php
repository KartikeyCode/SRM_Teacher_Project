<?php

namespace App\Http\Controllers;

use App\Models\teacher;
use Exception;
use Illuminate\Http\Request;

class TeacherController extends Controller
{

    public function get_all_teachers(Request $request){
        return response()->json(teacher::select("Name","Subject","Teacher_id")->get());
    }


    public function get_teacher_name(Request $request){
        $fields = $request->validate([
            'teacher_id' =>  'required|string',
    ]);
    if($teacher = teacher::where('teacher_id',$fields['teacher_id'])){
        $teacher = teacher::where('teacher_id',$fields['teacher_id'])->get('Name')->first();
        return response()->json($teacher,200);

    }else{
        return response("teacher not found",404);
    }
    }

    public function index(Request $request){
        return response("hi",200);
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