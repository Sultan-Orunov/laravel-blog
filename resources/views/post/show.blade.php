@extends('layouts.main')

@section('content')
    <main class="blog-post">
        <div class="container">
            <h1 class="edica-page-title" data-aos="fade-up">{{ $post->title }}</h1>
            <p class="edica-blog-post-meta" data-aos="fade-up" data-aos-delay="200"> • {{ $date->translatedFormat('F') }} {{ $date->day }}, {{ $date->year }} • {{ $date->format('H:i') }} • {{ $post->comments->count() }} Коментария •</p>
            <section class="blog-post-featured-img" data-aos="fade-up" data-aos-delay="300">
                <img src="{{ url('storage/'. $post->main_image) }}" alt="featured image" class="w-100">
            </section>
            <section class="post-content">
                <div class="row">
                    <div class="col-lg-9 mx-auto" data-aos="fade-up">
                        {!! $post->content !!}
                    </div>
                </div>
            </section>
            <div class="row">
                <div class="col-lg-9 mx-auto">
                    <section class="related-posts">
                        <h2 class="section-title mb-4" data-aos="fade-up">Схожие посты</h2>
                        <div class="row">
                            @foreach($relatedPosts as $post)
                            <div class="col-md-4" data-aos="fade-right" data-aos-delay="100">
                                <img src="{{ url('storage/'. $post->preview_image) }}" alt="related post" class="post-thumbnail">
                                <p class="post-category">{{ $post->category->title }}</p>
                                <a href="{{ route('post.show', $post->id) }}">
                                    <h5 class="post-title">{{ $post->title }}</h5>
                                </a>
                            </div>
                            @endforeach
                        </div>
                    </section>
                    <div class="mb-3">
                        @foreach($post->comments as $comment)
                        <div class="card mb-2">
                            <div class="card-body">
                                <div class="d-flex justify-content-between">
                                    <h5 class="card-title">{{ $comment->user->name }}</h5>
                                    <h6>{{ $comment->DateAsCarbon->diffForHumans() }}</h6>
                                </div>
                                <p class="card-text">{{ $comment->message }}</p>
                            </div>
                        </div>
                        @endforeach
                    </div>

                    <section class="comment-section">
                        @auth()
                        <h2 class="section-title mb-5" data-aos="fade-up">Отпраить коментарий</h2>
                        <form action="{{ route('post.comment.store', $post->id) }}" method="post">
                            @csrf
                            <div class="row">
                                <div class="form-group col-12" data-aos="fade-up">
                                    <label for="comment" class="sr-only">Коментарий</label>
                                    <textarea name="message" id="comment" class="form-control" placeholder="Коментарий" rows="10"></textarea>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12" data-aos="fade-up">
                                    <input type="submit" value="Отправить коментарий" class="btn btn-warning">
                                </div>
                            </div>
                        </form>
                        @endauth
                    </section>

                </div>
            </div>
        </div>
    </main>
@endsection
