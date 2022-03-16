@extends('layouts.main')
@section('content')

    <main class="blog-post">
        <div class="container">
            <h1 class="edica-page-title" data-aos="fade-up">Blog single page</h1>
            <p class="edica-blog-post-meta" data-aos="fade-up" data-aos-delay="200">Written by Richard Searls• {{$date->format('F d')}}, {{$date->format('Y')}}• {{$date->format('H:i')}} pm• Featured • {{$post->comments->count()}} Comments</p>
            <section class="blog-post-featured-img" data-aos="fade-up" data-aos-delay="300">
                <img src="{{url('/storage', $post->main_image)}}" alt="featured image" class="w-100">
            </section>
            <section class="post-content">
                <div class="row">
                    <div class="col-lg-9 mx-auto" data-aos="fade-up">
                        {!! $post->content !!}
                    </div>
                </div>
                <div class="row">
                    <label>
                        Preview image
                    </label>
                </div>
                <div class="row mb-5">
                    <div class="col-md-4 mb-3" data-aos="fade-right">
                        <img src="{{url('/storage', $post->preview_image)}}" alt="blog post" class="img-fluid">
                    </div>
                </div>
            </section>
            <section>
                <form action="{{route('post.like.store', $post->id)}}" method="post">
                    @csrf
                    <button type="submit" class="border-0 bg-transparent">
                        @auth()
                            @if(auth()->user()->likedPosts->contains($post->id))
                                <i class="far fa-heart"></i>
                            @else
                                <i class="fas fa-heart"></i>
                            @endif
                        @endauth
                    </button>
                </form>
            </section>
            <div class="row">
                <div class="col-lg-9 mx-auto">
                    <section class="related-posts">
                        @if($related_posts->count())
                            <h2 class="section-title mb-4" data-aos="fade-up">Related Posts</h2>
                            <div class="row">
                                @foreach($related_posts as $Rpost)
                                    <div class="col-md-4" data-aos="fade-right" data-aos-delay="100">
                                        <img src="{{url('/storage', $Rpost->main_image)}}" alt="related post" class="post-thumbnail">
                                        <p class="post-category">{{$Rpost->category->title}}</p>
                                        <h5 class="post-title"><a href="{{route('posts.show', $Rpost->id)}}">{{$Rpost->title}}</a></h5>
                                    </div>
                                @endforeach
                            </div>
                        @endif
                    </section>
                    <section class="comment-list">
                        @foreach($comments as $comment)
                            <div class="comment-text">
                            <span class="username">
                                <div>
                                  <h5>{{$comment->user->name}}</h5>
                                </div>
                              <span class="text-muted float-right">{{$comment->getDateasCarbon($comment)->diffForHumans()}}</span>
                            </span><!-- /.username -->
                                {{$comment->comment}}
                            </div>
                        @endforeach
                    </section>
                    <section class="comment-section">
                        <h2 class="section-title mb-5" data-aos="fade-up">Leave a Reply</h2>
                        <form action="{{route('post.comment.store', $post->id)}}" method="post">
                            @csrf
                            <div class="row">
                                <div class="form-group col-12" data-aos="fade-up">
                                    <label for="comment" class="sr-only">Comment</label>
                                    <textarea name="comment" id="comment" class="form-control" placeholder="Comment" rows="10"></textarea>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12" data-aos="fade-up">
                                    <input type="submit" value="Send Message" class="btn btn-warning">
                                </div>
                            </div>
                        </form>
                    </section>
                </div>
            </div>
        </div>
    </main>

@endsection
