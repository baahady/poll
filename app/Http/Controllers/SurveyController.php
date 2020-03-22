<?php

namespace App\Http\Controllers;
use \App\Poll;
use Illuminate\Http\Request;

class SurveyController extends Controller
{
    public function show(Poll $poll,$slug){
        
        $poll->load('questions.answers');
        return view('survey.show',compact('poll'));
    }

    public function store(Poll $poll,$slug){
        // dd(request()->all());

        $data = request()->validate([
            'responses.*.answer_id' => 'required',
            'responses.*.question_id' => 'required',
            'survey.name' => 'required',
            'survey.email' => 'required|email',
        ]);

        $survey = $poll->surveys()->create($data['survey']);
        $survey->responses()->createMany($data['responses']);

        return 'thanks you!';


    }
}
