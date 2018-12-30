@extends('web.layouts.master')

@section('content')

    <section class="s-content s-content--top-padding">
        <div class="row narrow">
            <div class="col-full s-content__header" data-aos="fade-up">
                <h1 class="display-1 display-1--with-line-sep">Category: {{ $category->name }}</h1>
                <p class="lead">
                    {{ $category->description }}
                </p>
            </div>
        </div>

        <div class="row entries-wrap add-top-padding wide">
            <div class="entries">
                @foreach($posts as $post)
                    <article class="col-block">
                        <div class="item-entry" data-aos="zoom-in">
                            <div class="item-entry__thumb">
                                <a href="{{ route('posts.show', Hashids::encode($post->id)) }}" class="item-entry__thumb-link">
                                    <img src="{{ URL::asset('public/uploads/posts/'.$post->image) }}" alt="{{ $post->title }}">
                                </a>
                            </div>
                            <div class="item-entry__text">
                                <div class="item-entry__cat">
                                    <a href="{{ route('category-posts', Hashids::encode($post->category->id)) }}"> {{ $post->category->name }} </a>
                                </div>
                                <h1 class="item-entry__title">
                                    <a href="{{ route('posts.show', Hashids::encode($post->id)) }}">
                                        {{ $post->title }}
                                    </a>
                                </h1>
                                <div class="item-entry__date">
                                    <a href="{{ route('posts.show', Hashids::encode($post->id)) }}">
                                        {{ str_limit($post->description, 30) }}
                                    </a>
                                    {{--<a href="{{ route('posts.show', Hashids::encode($post->id)) }}">--}}
                                    {{--{{ date('jS F Y', strtotime($post->created_at)) }}--}}
                                    {{--</a>--}}
                                </div>
                            </div>
                        </div> <!-- item-entry -->
                    </article> <!-- end article -->
                @endforeach
            </div> <!-- end entries -->
        </div>

        <div class="row pagination-wrap">
            <div class="col-full">
                <nav class="pgn" data-aos="fade-up">
                    {{ $posts->links() }}
                </nav>
            </div>
        </div>
    </section>
@endsection
