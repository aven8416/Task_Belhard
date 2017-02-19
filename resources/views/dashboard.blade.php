@extends('layouts.master')

@section('content')
    @include('includes.message-block')
    <section class="row new-post">
        <div class ="col-md-6 col-md-offset-3">
            <header><h3>Do you have some new?</h3></header>
            <form action="{{route('createcomment')}}" method="post">
                <div class="form-group">

                    <textarea class="form-control" name="text" id="new-comment" cols ="30" rows="10" placeholder="Your comment"></textarea>
                </div>
                in
                <button type="submit" class="btn btn-primary">Create Comment</button>
                <input type="hidden" name="_token" value="{{Session::token()}}">
                </form>
            </div>

    </section>

    <section class="row posts">
        <div class="col-md-6 col-md-offset-3">
            <header> <h3>What other people say</h3></header>
            @foreach($comments as $comment)
            <article class="post">
                <p>{{$comment->text}}</p>
                <div class="info">
                    Posted by {{$comment->user->first_name}} on {{$comment->created_at}}
                </div>
                <div class="interaction">
                    <a href="#">Like</a>
                    <a href="#">Dislike</a>

                    @if(Auth::user()==$comment->user)
                        <a href="#">Edit</a>
                        <a href="{{route('commentdelete',['comment_id'=>$comment->id])}}">Delete</a>
                        @endif

                    </div>
                <div class="info">
                    <a href="#">#tag</a>
                    </div>
                </article>
            @endforeach

            </div>
    </section>
    @endsection