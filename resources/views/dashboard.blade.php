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
                <div class="form-group ">
                    <label for="tag">Additional tags</label>
                    <input class="form-control" type="text" name="tag" id="tag" value="" placeholder="Add tags to describe your comment">
                </div>
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


                    @if(Auth::user()==$comment->user)
                        <a href="#">Edit</a>
                        <a href="{{route('commentdelete',['comment_id'=>$comment->id])}}">Delete</a>
                        @foreach($tags as $tag)
                        <a href="#">{{$tag->tag}}</a>
                        @endforeach
                        @endif

                    </div>


            </article>
            @endforeach

            </div>
    </section>
    @endsection