@extends('layouts.master')

@section('content')
    <section class="row new-post">
        <div class ="col-md-6 col-md-offset-3">
            <header><h3>What do you have to say?</h3></header>
            <form action="">
                <div class="form-group">

                    <textarea class="form-control" name="new-post" id="new-post" cols ="30" rows="10" placeholder="Your comment"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Create Comment</button>
                </form>
            </div>

    </section>

    <section class="row posts">
        <div class="col-md-6 col-md-offset-3">
            <header> <h3>What other people say</h3></header>
            <article class="post">
                <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. </p>
                <div class="info">
                    Posted by Max on 19 Feb 2017
                </div>
                <div class="interaction">
                    <a href="#">Like</a>
                    <a href="#">Dislike</a>
                    <a href="#">Edit</a>
                    <a href="#">Delete</a>
                    </div>
                </article>
            <article class="post">
                <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. </p>
                <div class="info">
                    Posted by Max on 19 Feb 2017
                </div>
                <div class="interaction">
                    <a href="#">Like</a>
                    <a href="#">Dislike</a>
                    <a href="#">Edit</a>
                    <a href="#">Delete</a>
                </div>
            </article>
            </div>



    </section>
    @endsection