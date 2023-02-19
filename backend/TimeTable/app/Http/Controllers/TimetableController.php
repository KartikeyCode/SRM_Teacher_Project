<?php

namespace App\Http\Controllers;

use App\Models\timetable;
use Exception;
use Illuminate\Http\Request;

class TimetableController extends Controller
{


    public function get_all_periods(Request $request){
        return response()->json(['periods'=>timetable::all()]);
    }

    public function get_time_table(Request $request){
        $fields = $request->validate([
            'teacher_id' =>  'required|string',
    ]);
    if($timetable = timetable::where('teacher_id',$fields['teacher_id'])->get()){
        return response()->json(["timetable"=>$timetable],200);

    }else{
        return response("user/periods not found",404);
    }

        
    }



    public function add_period(Request $request){
        try{
            $fields = $request->validate([
                'teacher' =>  'required|string',
                'teacher_id' =>  'required|string',
                'day_order' => 'integer',
                'subject' => 'required|string',
                'section' => 'required|string',
                'class_start' => 'required|date_format:H:i',
                'class_end' => 'required|date_format:H:i|after:class_start'
        ]);
        $period = timetable::create([
            'teacher' =>  $fields['teacher'],
            'teacher_id' =>  $fields['teacher_id'],
            'day_order' => $fields['day_order'],
            'subject' => $fields['subject'],
            'section' => $fields['section'],
            'class_start' => $fields['class_start'],
            'class_end' => $fields['class_end']
        ]);
        return response("Period added successfully!",201);
    }catch(Exception $e){
        return response($e->getMessage());

    }
    }
}