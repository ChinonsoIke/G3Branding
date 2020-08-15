@extends('layouts.printshop')

@section('content')

<div class="row">
    <div class="col-md-8 col-md-offset-2">
        <h1 class= "post_title">{{$post->title}}</h1>
        <h5 class="pub">Published: {{ date('M j, Y', strtotime($post->created_at)) }}</h5>
        <img src="{{asset('uploads/posts/' . $post->image)}}" class='featured_image' alt="featured_image" width= 800 height= 400>
        <p class="post_body">{!!$post->p_content!!}</p>
        <hr>
    </div>
</div>

@endsection