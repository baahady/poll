@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create new question</div>

                <div class="card-body">
                    <form action="/polls/{{$poll->id}}/questions" method="post">
                      <div class="form-group">
                        <label for="exampleInputQuestion1">question</label>
                        <input type="text" name="question[question]" class="form-control" id="exampleInputQuestion1" aria-describedby="QuestionHelp"
                         value="{{old('question.question')}}" placeholder="Enter question">
                        <small id="QuestionHelp" class="form-text text-muted">Enter question here please.</small>
                        @error('question.question')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror                         
                      </div> 

                      <div class="form-group">
                        <fieldset>
                            <legend>choices</legend>
                            <small id="choiceHelp" class="form-text text-muted">some choices here.</small>

                            <div>
                                <div class="form-group">
                                <label for="answer1">choice 1</label>
                                <input type="text" name="answers[][answer]" class="form-control" id="exampleInputEmail1"
                                 aria-describedby="choiceHelp" value="{{old('answers.0.answer')}}" placeholder="Enter choice 1">
                                @error('answers.0.answer')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror                       
                                </div> 
                            </div>


                            <div>
                                <div class="form-group">
                                <label for="answer2">choice 2</label>
                                <input type="text" name="answers[][answer]" class="form-control" id="exampleInputEmail1"
                                 aria-describedby="choiceHelp" value="{{old('answers.1.answer')}}" placeholder="Enter choice 2">
                                @error('answers.1.answer')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror                       
                                </div> 
                            </div>

                            <div>
                                <div class="form-group">
                                <label for="answer3">choice 3</label>
                                <input type="text" name="answers[][answer]" class="form-control" id="exampleInputEmail1"
                                 aria-describedby="choiceHelp" value="{{old('answers.2.answer')}}" placeholder="Enter choice 3">
                                @error('answers.2.answer')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror                       
                                </div> 
                            </div>


                            <div>
                                <div class="form-group">
                                <label for="answer4">choice 4</label>
                                <input type="text" name="answers[][answer]" class="form-control" id="exampleInputEmail1"
                                 aria-describedby="choiceHelp" value="{{old('answers.3.answer')}}" placeholder="Enter choice 4">
                                @error('answers.3.answer')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror                       
                                </div> 
                            </div>


                        </fieldset>
                      </div>

                      <button type="submit" class="btn btn-success">Add Question</button>   
                      @csrf                     
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
