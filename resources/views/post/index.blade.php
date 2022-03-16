@extends('layouts.main')
@section('content')

<main class="blog">
    <div class="container">
        <h1 class="edica-page-title aos-init aos-animate" data-aos="fade-up">Blog</h1>
        <section class="featured-posts-section">
            <div class="row">
                @foreach($posts as $post)
                    <div class="col-md-4 fetured-post blog-post aos-init aos-animate" data-aos="fade-right">
                    <div class="blog-post-thumbnail-wrapper">
                        <img src="{{url('/storage', $post->main_image)}}" alt="blog post">
                    </div>
                        <div class="d-flex justify-content-between">
                            <p class="blog-post-category">{{$post->category->title}}</p>

                            <form action="{{route('post.like.store', $post->id)}}" method="post">
                                @csrf
                                <span>
                                    {{$post->liked_users_count}}
                                </span>
                                <button type="submit" class="border-0 bg-transparent">
                                @auth()
                                    @if(auth()->user()->likedPosts->contains($post->id))
                                            <i class="fas fa-heart"></i>
                                    @else
                                            <i class="far fa-heart"></i>
                                    @endif
                                @endauth
                                </button>
                            </form>
                        </div>
                    <a href="{{route('posts.show', $post->id)}}" class="blog-post-permalink">
                        <h6 class="blog-post-title">{{$post->title}}</h6>
                    </a>
                </div>
                @endforeach
            </div>
        </section>
        <div class="row">
            <div class="col-md-8">
                <section>
                    <div class="row blog-post-row">
                        @foreach($post_r as $post)
                            <div class="col-md-6 blog-post aos-init" data-aos="fade-up">
                                <div class="blog-post-thumbnail-wrapper">
                                    <img src="{{url('/storage', $post->preview_image)}}" alt="blog post">
                                </div>
                                <p class="blog-post-category">{{$post->category->title}}</p>
                                <a href="{{route('posts.show', $post->id)}}" class="blog-post-permalink">
                                    <h6 class="blog-post-title">{{$post->title}}</h6>
                                </a>
                            </div>
                        @endforeach
                    </div>
                </section>
            </div>
            <div class="col-md-4 sidebar aos-init" data-aos="fade-left">
                <div class="widget widget-post-carousel">
                    <h5 class="widget-title">Post Lists</h5>
                    <div class="post-carousel">
                        <div id="carouselId" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carouselId" data-slide-to="0" class=""></li>
                                <li data-target="#carouselId" data-slide-to="1" class=""></li>
                                <li data-target="#carouselId" data-slide-to="2" class="active"></li>
                            </ol>
                            <div class="carousel-inner" role="listbox">
                                <figure class="carousel-item">
                                    <img src="{{asset('assets/images/blog_widget_carousel.jpg')}}" alt="First slide">
                                    <figcaption class="post-title">
                                        <a href="#!">Front becomes an official Instagram Marketing Partner</a>
                                    </figcaption>
                                </figure>
                                <figure class="carousel-item">
                                        <img src="{{asset('assets/images/blog_7.jpg')}}" alt="First slide">
                                        <figcaption class="post-title">
                                            <a href="#!">Front becomes an official Instagram Marketing Partner</a>
                                        </figcaption>
                                </figure>
                                <div class="carousel-item active">
                                        <img src="{{asset('assets/images/blog_5.jpg')}}" alt="First slide">
                                        <figcaption class="post-title">
                                            <a href="#!">Front becomes an official Instagram Marketing Partner</a>
                                        </figcaption>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="widget widget-post-list">
                    <h5 class="widget-title">Post List</h5>
                    <ul class="post-list">
                        <li class="post">
                            <a href="#!" class="post-permalink media">
                                <img src="{{asset('assets/images/blog_widget_1.jpg')}}" alt="blog post">
                                <div class="media-body">
                                    <h6 class="post-title">Front becomes an official Instagram Marketing Partner</h6>
                                </div>
                            </a>
                        </li>
                        <li class="post">
                            <a href="#!" class="post-permalink media">
                                <img src="{{asset('assets/images/blog_widget_2.jpg')}}" alt="blog post">
                                <div class="media-body">
                                    <h6 class="post-title">Front becomes an official Instagram Marketing Partner</h6>
                                </div>
                            </a>
                        </li>
                        <li class="post">
                            <a href="#!" class="post-permalink media">
                                <img src="{{asset('assets/images/blog_widget_3.jpg')}}" alt="blog post">
                                <div class="media-body">
                                    <h6 class="post-title">Front becomes an official Instagram Marketing Partner</h6>
                                </div>
                            </a>
                        </li>
                        <li class="post">
                            <a href="#!" class="post-permalink media">
                                <img src="{{asset('assets/images/blog_widget_4.jpg')}}" alt="blog post">
                                <div class="media-body">
                                    <h6 class="post-title">Front becomes an official Instagram Marketing Partner</h6>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="widget">
                    <h5 class="widget-title">Categories</h5>
                    <img src="{{asset('assets/images/blog_widget_categories.jpg')}}" alt="categories" class="w-100">
                </div>
            </div>
        </div>
    </div>

</main>

@endsection
