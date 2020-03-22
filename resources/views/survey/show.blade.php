
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1>{{$poll->name}}</h1>
            <form action="/surveys/{{$poll->id}}-{{Str::slug($poll->title)}}" method="post">
            @csrf
            @foreach($poll->questions as $key => $question)
                    <div class="card mt-2">
                            <div class="card-header"><strong>{{$key + 1}}</strong> - {{$question->question}}</div>
                            <div class="card-body">
                            @error('responses.'.$key.'.answer_id')
                                <small class="text-danger">{{$message}}</small>
                            @enderror                           
                                <ul class="list-group">
                                    @foreach($question->answers as $answer)
                                        <label for="answer{{$answer->id}}">
                                            <li class="list-group-item">
                                                <input type="radio" name="responses[{{$key}}][answer_id]" id="answer{{$answer->id}}"
                                                value="{{$answer->id}}" {{(old('responses.'.$key.'.answer_id') == $answer->id) ? 'checked' : ''}} class="mr-2">
                                                {{$answer->answer}}
                                                <input type="hidden" name="responses[{{$key}}][question_id]" value="{{$question->id}}">
                                            </li>
                                        </label>
                                    @endforeach
                                </ul>
                            </div>
                    </div>        
            @endforeach

                    <div class="card mt-2">
                        <div class="card-header">Your Information</div>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Your Name</label>
                                <input type="text" name="survey[name]" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                                placeholder="Enter Name">
                                <small id="emailHelp" class="form-text text-muted">Enter name here please.</small>
                                @error('name')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror                         
                            </div> 
                            <div class="form-group">
                                <label for="exampleInputEmail1">Your Email</label>
                                <input type="text" name="survey[email]" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                                placeholder="Enter Email">
                                <small id="emailHelp" class="form-text text-muted">Enter email here please.</small>
                                @error('email')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror                       
                            </div>  
                        </div>
                    </div>
                    <button type="submit" class="btn btn-success mt-2">save</button>
            </form>


        </div>
    </div>
</div>
@endsection
