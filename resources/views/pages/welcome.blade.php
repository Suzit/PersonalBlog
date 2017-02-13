@extends('main')
@section('title','|| Homepage')
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="jumbotron">
            <h1>Welcome To My Blog</h1>
            <p>Thank you so much for visiting.This is my test website built with laravel.Please read me my popular post.</p>
            <p><a class="btn btn-primary btn-lg" href="#" role="button">Popular Post</a></p>
        </div>
    </div>
</div><!-- end of header element-->
    <div class="row">
        <div class="col-md-8">
           <div class="post">
             <h3>Post Title</h3>
               <p>
                   The other outbreak was found in a village in the Western district of Rajshahi where about 450 backyard poultry died from the virus, a senior health ministry official, who asked not to be named as he is not authorized to talk to media, told Reuters.
               </p>
               <a href="#" class="btn btn-primary">Read More.. </a>
           </div>
            <hr>
            <div class="post">
                <h3>Post Title</h3>
                <p>
                    The other outbreak was found in a village in the Western district of Rajshahi where about 450 backyard poultry died from the virus, a senior health ministry official, who asked not to be named as he is not authorized to talk to media, told Reuters.
                </p>
                <a href="#" class="btn btn-primary">Read More.. </a>
            </div>
            <hr>
            <div class="post">
                <h3>Post Title</h3>
                <p>
                    The other outbreak was found in a village in the Western district of Rajshahi where about 450 backyard poultry died from the virus, a senior health ministry official, who asked not to be named as he is not authorized to talk to media, told Reuters.
                </p>
                <a href="#" class="btn btn-primary">Read More.. </a>
            </div>
            <hr>
        </div>
        <div class="col-md-3 col-md-offset-1">
            <h2>
                Sidebar
            </h2>
        </div>
    </div>
@endsection