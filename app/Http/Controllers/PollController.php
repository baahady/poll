<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PollController extends Controller
{
	public function __construct(){
		$this->middleware('auth');
	}

    public function create(){
    	return view('poll.create');
    }

    public function store(){

    	$data = request()->validate([
    		'title'=>'required',
    		'purpose'=>'required'
    	]);

    	// $data['user_id'] = auth()->user()->id;

    	// $poll = \App\Poll::create($data);

    	$poll = auth()->user()->polls()->create($data);

    	return redirect('/polls/'.$poll->id);
    }

    public function show(\App\poll $poll){
		$poll->load('questions.answers');
		// dd($poll);
    	return view('poll.show',compact('poll'));
    }
}
