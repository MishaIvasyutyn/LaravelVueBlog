@extends('layouts.app')
@section('content')
    <div id="app">
<article-component></article-component>
        <hr>
        <div class="row">
            <form>
                <div class="mb-3">
                    <label for="commentSubject" class="form-label">Comment topic</label>
                    <input type="text" class="form-control" id="commentSubject">
                </div>
                <div class="mb-3">
                    <label for="commentBody" class="form-label">Comment</label>
                    <textarea class="form-control" id="commentBody" rows="3"></textarea>
                </div>
                <button class="btn btn-success" type="submit">Send</button>
            </form>
            <div class="toast-container pb-2 mt-5 mx-auto">
                @foreach($article->comments as $comment)
                        <div class="toast-header">
                            <img src="https://via.placeholder.com/50/5F113B/FFFFFF/?text=User" class="rounded me-2" alt="...">
                            <strong class="me-auto">{{$comment->subject}}</strong>
                            <small class="text-muted">{{$comment->CreatedForHumans()}}</small>
                        </div>
                        <div class="toast-body">
                            {{$comment->body}}
                        </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
@section('vue')
    <script src="{{mix('js/app.js')}}"></script>
@endsection
