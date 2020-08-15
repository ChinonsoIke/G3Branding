@extends('layouts.printshop')

@section('content')

<div class="row">
    <div class="block-title-w col-md-8 col-md-offset-2">
        <h2 class="block-title">product news</h2>
    </div>
</div>
@foreach ($posts as $post)
    <div class="col-md-8 col-md-offset-2 blog-list">
        <div class="blog-box row">
            <div class="col-md-4">
                <div class="post-media">
                    <a href="tech-single.html" title="">
                        <img src="images/blog/1.jpg" alt="featured image" width=250 height=250 class="img-fluid">
                        <div class="hovereffect"></div>
                    </a>
                </div><!-- end media -->
            </div><!-- end col -->

            <div class="blog-meta col-md-8">
                <h3><a href="{{route('blog.show', $post->id)}}">{{$post->title}}</a></h3>
                <p>{{substr(strip_tags($post->p_content), 0, 300)}}{{strlen(strip_tags($post->p_content)) > 250 ? "[...]" : ""}}</p>
                <!-- <small class="firstsmall">{{$post->category}}</small> -->
                <small>Published: {{ date('M j, Y', strtotime($post->created_at)) }}</small> <br>
                <a href="{{route('blog.show', $post->id)}}" class="col-md-offset-8 btn-readmore">Read more</a>
            </div><!-- end meta -->
        </div><!-- end blog-box -->
    </div>

    <hr class="invis">
@endforeach

<div class="row">
    <div class="col-md-12">
        <div class="text-center">
            {!! $posts->links() !!}
        </div>
    </div>
</div>

@endsection