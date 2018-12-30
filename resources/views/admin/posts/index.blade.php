@extends('admin.layouts.master')

@section('title')
    Posts
@endsection

@section('content')

    <div class="m-subheader ">
        <div class="d-flex align-items-center">
            <div class="d-flex align-items-center">
                <div class="mr-auto">
                    <h3 class="m-subheader__title m-subheader__title--separator">
                        List All Posts
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
                                    List All
                                </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="m-content">

        @include('admin.layouts.alerts')

        <div class="m-portlet m-portlet--mobile">
            <div class="m-portlet__head">
                <div class="m-portlet__head-caption">
                    <div class="m-portlet__head-title">
                        <h3 class="m-portlet__head-text">
                            Posts
                        </h3>
                    </div>
                </div>
            </div>
            <div class="m-portlet__body">
                <!--begin: Search Form -->
                <div class="m-form m-form--label-align-right m--margin-top-20 m--margin-bottom-30">
                    <div class="row align-items-center">
                        <div class="col-xl-8 order-2 order-xl-1">
                            <div class="form-group m-form__group row align-items-center">
                                <div class="col-md-4">
                                    <div class="m-input-icon m-input-icon--left">
                                        <input type="text" class="form-control m-input" placeholder="Search..." id="generalSearch">
                                        <span class="m-input-icon__icon m-input-icon__icon--left">
                                            <span>
                                                <i class="la la-search"></i>
                                            </span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 order-1 order-xl-2 m--align-right">
                            <a href="{{ route('admin.posts.create') }}" class="btn btn-accent m-btn m-btn--custom m-btn--icon m-btn--air m-btn--pill">
                                <span>
                                    <i class="la la-plus"></i>
                                    <span>
                                        New Post
                                    </span>
                                </span>
                            </a>
                            <div class="m-separator m-separator--dashed d-xl-none"></div>
                        </div>
                    </div>
                </div>
                <!--end: Search Form -->
                <!--begin: Datatable -->
                <table class="m-datatable" id="html_table" width="100%">
                    <thead>
                        <tr>
                            <th title="Field #1">
                                #
                            </th>
                            <th title="Field #2">
                                Name
                            </th>
                            <th title="Field #3">
                                Category
                            </th>
                            <th title="Field #4">
                                Description
                            </th>
                            <th title="Field #5">
                                Created At
                            </th>
                            <th title="Field #6">
                                Actions
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                    @if($posts->count())
                        <?php $i = 0; ?>
                        @foreach( $posts as $post )
                            <?php ++$i; ?>
                            <tr>
                                <td>
                                    {{ $i }}
                                </td>
                                <td>
                                    {{ $post->title }}
                                </td>
                                <td>
                                    {{ $post->category->name }}
                                </td>
                                <td>
                                    {{ str_limit($post->description, 50) }}
                                </td>
                                <td> {{ $post->created_at->format('Y-m-d g:i A') }} </td>
                                <td>
                                    <a href="{{ route('admin.posts.show', $post->id) }}" class="m-portlet__nav-link btn m-btn m-btn--hover-accent m-btn--icon m-btn--icon-only m-btn--pill" title="Show">
                                        <i class="la la-eye"></i>
                                    </a>
                                    <a href="{{ route('admin.posts.edit', $post->id) }}" class="m-portlet__nav-link btn m-btn m-btn--hover-accent m-btn--icon m-btn--icon-only m-btn--pill" title="Edit">
                                        <i class="la la-edit"></i>
                                    </a>
                                    <a data="{{ $post->id }}" class="delete_data m-portlet__nav-link btn m-btn m-btn--hover-danger m-btn--icon m-btn--icon-only m-btn--pill" title="Delete">
                                        <i class="la la-trash"></i>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    @endif
                    </tbody>
                </table>
                <!--end: Datatable -->
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="{{ URL::asset('public/admin/js/html-table.js') }}" type="text/javascript"></script>
    <script src="{{ URL::asset('public/admin/js/sweetalert2.js') }}" type="text/javascript"></script>

    <script>
        $(document).ready(function() {

            var CSRF_TOKEN = $('meta[name="X-CSRF-TOKEN"]').attr('content');

            $('body').on('click', '.delete_data', function() {

                var id = $(this).attr('data');
                var swal_text = "You won't be able to revert this!";
                var swal_title = 'Are you sure?';

                swal({
                        title: swal_title,
                        text: swal_text,
                        type: "warning",
                        showCancelButton: !0,
                        confirmButtonText: "Yes, delete it!"
                    }).then( function(e){

                    $.ajax({
                        url: "{{ url('/') }}" + "/admin/posts/destroy" ,
                        type: "POST",
                        data: {_token: CSRF_TOKEN, 'id' : id},
                    })
                    .done(function(reseived_data) {
                        var parsed_data = $.parseJSON(reseived_data);

                        if(parsed_data.code == '1'){
                            swal({
                                type: 'success',
                                title: 'Deleted!',
                                text: 'Post has been deleted.',
                            }).then( function(e){
                                window.location.href = parsed_data.url;
                            });
                        }
                        else{
                            swal( "Error", parsed_data.message , "error" );
                        }
                    });
                });
            });
        });
    </script>
@endsection