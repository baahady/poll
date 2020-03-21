<?php

namespace App\Http\Controllers;
use \App\Poll;
use Illuminate\Http\Request;

class SurveyController extends Controller
{
    public function show(Poll $poll,$slug){
        dd($slug);
    }
}
