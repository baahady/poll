@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create new poll</div>

                <div class="card-body">
                    <form action="/poll" method="post">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Title</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter title">
                        <small id="emailHelp" class="form-text text-muted">Enter title here please.</small>
                      </div> 
                      <div class="form-group">
                        <label for="exampleInputEmail1">Purpose</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter purpose">
                        <small id="emailHelp" class="form-text text-muted">Enter purpose here please.</small>
                      </div>  
                      <input type="submit" value="submit">                        
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
