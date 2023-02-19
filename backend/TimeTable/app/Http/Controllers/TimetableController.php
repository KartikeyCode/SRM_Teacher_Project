<?php

namespace App\Http\Controllers;

use App\Models\timetable;
use Exception;
use Illuminate\Http\Request;

class TimetableController extends Controller
{

    public function add_period(Request $request){
        try{

            $fields = $request->validate([
                'teacher' =>  'required|string',
                'day_order' => 'integer',
                'subject' => 'required|string',
                'section' => 'required|string',
                'class_start' => 'required|date_format:H:i',
                'class_end' => 'required|date_format:H:i|after:class_start'
                
        ]);
        $subject = timetable::create([
            'teacher' =>  $fields['teacher'],
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