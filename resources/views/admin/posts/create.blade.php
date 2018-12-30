@extends('admin.layouts.master')

@section('title')
    Create Post
@endsection

@section('content')

    <div class="m-subheader ">
        <div class="d-flex align-items-center">
            <div class="d-flex align-items-center">
                <div class="mr-auto">
                    <h3 class="m-subheader__title m-subheader__title--separator">
                        Create New Post
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
                                    Create New
                                </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="m-content">

        <div class="col-lg-10">
            <div class="m-portlet m-portlet--tab">
                <div class="m-portlet__head">
                    <div class="m-portlet__head-caption">
                        <div class="m-portlet__head-title">
                            <span class="m-portlet__head-icon m--hide">
                                <i class="la la-gear"></i>
                            </span>
                            <h3 class="m-portlet__head-text">
                                Post Data
                            </h3>
                        </div>
                    </div>
                </div>

                {!! Form::open([ 'url' => route('admin.posts.store'), 'class' => 'm-form m-form--fit m-form--label-align-right', 'files'=> 'true' ]) !!}

                    @include('admin.posts._form')
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="{{ URL::asset('public/admin/js/autosize.js') }}" type="text/javascript"></script>
    <script src="{{ URL::asset('public/admin/js/select2.js') }}" type="text/javascript"></script>
    <script src="https://cdn.ckeditor.com/ckeditor5/11.0.1/classic/ckeditor.js"></script>

    <script>
        var allEditors = document.querySelectorAll('.editor');

        for (var i = 0; i < allEditors.length; ++i) {
            ClassicEditor.create( allEditors[i] ), {
                removePlugins: [ 'ImageUpload' ],
            } ;
        }
    </script>
@endsection
