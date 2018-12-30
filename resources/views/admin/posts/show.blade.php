@extends('admin.layouts.master')

@section('title')
    Show Post
@endsection

@section('content')

    <div class="m-subheader ">
        <div class="d-flex align-items-center">
            <div class="d-flex align-items-center">
                <div class="mr-auto">
                    <h3 class="m-subheader__title m-subheader__title--separator">
                        Show Post
                    </h3>
                    <ul class="m-subheader__breadcrumbs m-nav m-nav--inline">
                        <li class="m-nav__item m-nav__item--home">
                            <a href="{{ route('admin.home') }}" class="m-nav__link m-nav__link--icon">
                                <i class="m-nav__link-icon la la-home"></i>
                            </a>
                        </li>
                        <li class="m-nav__separator">
                            -
                        </li>
                        <li class="m-nav__item">
                            <a href="{{ route('admin.posts.index') }}" class="m-nav__link">
                                <span class="m-nav__link-text">
                                    Posts
                                </span>
                            </a>
                        </li>
                        <li class="m-nav__separator">
                            -
                        </li>
                        <li class="m-nav__item">
                            <a class="m-nav__link">
                                <span class="m-nav__link-text">
                                    Edit Post
                                </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="m-content">
        <div class="m-portlet m-portlet--mobile">
            <div class="m-portlet__head" style="border: none">
            </div>
            <div class="m-portlet__body">
                <div class="m-widget19">
                    <div class="m-widget19__pic m-portlet-fit--top m-portlet-fit--sides" style="min-height-: 286px">
                        <img src="{{ URL::asset('public/uploads/posts/'.$post->image) }}" alt="{{ $post->title }}" style=" width: auto;">
                        <h3 class="m-widget19__title m--font-light">
                            {{ $post->title }}
                        </h3>
                        <div class="m-widget19__shadow"></div>
                    </div>
                    <div class="m-widget19__content">
                        <div class="m-widget19__header">
                            <div class="m-widget19__info">
                                <span class="m-widget19__username">
                                    {{ $post->category->name }}
                                </span>
                                <br>
                                <span class="m-widget19__time">
                                    {{ $post->description }}
                                </span>
                            </div>
                            <div class="m-widget19__stats">
                                <span class="m-widget19__number m--font-brand" style="width: 150px;font-size: 1.0rem;">
                                    {{ date('jS F Y', strtotime($post->created_at)) }}
                                </span>
                            </div>
                        </div>
                        <div class="m-widget19__body">
                            {!! $post->content !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

