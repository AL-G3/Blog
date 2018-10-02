@include('_head')

@extends('main')

@section('title', '| HomePage')

@section('stylesheets')
    <link rel="stylesheet" type="text/css" href="/public/css/styles.css">
@endsection


@section('content')

<body>

        <div class="row">
            <div class="col-md-12 jumbotron-container">
                <div class="jumbotron ">
                    <h1>Welcome to the blog BOiii</h1>
                    <p class="lead">Thanks for visiting</p>
                    <p><a class="btn btn-primary btn-info" href="#" role="button" >Popular Tracks</a></p>

                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8">
                <div class="post">
                    <h3>Home Post title</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua.</p>
                    <a href="#" class="btn btn-info">Read More</a>

                </div>
                <hr>
                <div class="post">
                    <h3>Post title</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua.</p>
                    <a href="#" class="btn btn-info">Read More</a>

                </div>
                <hr>
                <div class="post">
                    <h3>Post title</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua.</p>
                    <a href="#" class="btn btn-info">Read More</a>

                </div>
                <hr>
            </div>
            <div class="col-md-3 col-md-offset-1 " >
                <h2>Sidbar</h2>
            </div>
        </div>
</body>
@endsection

