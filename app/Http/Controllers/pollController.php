<?php

namespace App\Http\Controllers;

use App\Models\poll;
use Illuminate\Http\Request;

class pollController extends Controller
{
public function index(){
    $questions = poll::all();
    return view('polls', compact('questions'));
}

    public function create( ){
        $questions = poll::all();
        return view('polls', compact('questions'));
    }

    public function store(Request $request){
        $data=[
            'question' => $request->input('question')
        ];
        $question =poll::create($data);
//        return redirect()->route('polls');
        return redirect()->route('option.create',['questionId'=>$question->id]);
    }

}
