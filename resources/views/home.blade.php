@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <a href="/polls/create" class="btn btn-dark">create new poll</a>
                </div>
            </div>

            <div class="card mt-4">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    <ul class="list-group">
                        @foreach($polls as $poll)
                            <li class="list-group-item">
                            <a href="{{$poll->path()}}">{{$poll->title}}</a>
                            
                            <div class="mt-2">
                                <small class="font-weight-bold">Public Url</small>
                                <p><a href="{{$poll->publicPath()}}">{{$poll->publicPath()}}</a></p>
                            </div>

                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>        
        
        </div>
    </div>
</div>
@endsection
