<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Subject;

class SubjectController extends Controller
{
    public function add_subject(Request $request){
        $fields = $request->validate([
            'name'=>'required|string',
            'code'=>'required|string'
        ]);
        $subject = Subject::create([
            'name' => $fields['name'],
            'code' => $fields['code']
        ]);
        return response("subject added!",201);
    }
}