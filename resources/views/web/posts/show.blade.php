@extends('web.layouts.master')

@section('content')

    <section class="s-content s-content--top-padding s-content--narrow">
        <article class="row entry format-standard">
            <div class="entry__media col-full">
                <div class="entry__post-thumb">
                    <img src="{{ URL::asset('public/uploads/posts/'.$post->image) }}" sizes="(max-width: 2000px) 100vw, 2000px" alt="{{ $post->title }}">
                </div>
            </div>
            <div class="entry__header col-full">
                <h1 class="entry__header-title display-1">
                    {{ $post->title }}
                </h1>
                <ul class="entry__header-meta">
                    <li class="date"> {{ date('jS F Y', strtotime($post->created_at)) }} </li>
                    <li class="byline">
                        {{ $post->description }}
                    </li>
                </ul>
            </div>
            <div class="col-full entry__main">

                {!! $post->content !!}

                <div class="entry__taxonomies">
                    <div class="entry__cat">
                        <h5>Posted In: </h5>
                        <span class="entry__tax-list">
                            <a href="{{ route('category-posts', Hashids::encode($post->category->id)) }}">
                                 {{ $post->category->name }}
                            </a>
                        </span>
                    </div>
                </div>
            </div>
        </article>
    </section>

@endsection
