<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Poll;
use \App\Question;
class questionController extends Controller
{
    public function create(Poll $poll){
        return view('question.create',compact('poll'));
    }

    public function store(Poll $poll){

        //dd(request()->all());

        $data = request()->validate([
            'question.question' => 'required',
            'answers.*.answer' => 'required'
        ]);

        $questions = $poll->questions()->create($data['question']);
        $questions->answers()->createMany($data['answers']);
        
        return redirect('/polls/'.$poll->id);
    }

    public function destroy(Poll $poll, Question $question){

        $question->answers()->delete();
        $question->delete();

        return redirect($poll->path());
    }
}
