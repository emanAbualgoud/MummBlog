@extends('admin.layouts.master')

@section('title')
    Show Category
@endsection

@section('content')

    <div class="m-subheader ">
        <div class="d-flex align-items-center">
            <div class="d-flex align-items-center">
                <div class="mr-auto">
                    <h3 class="m-subheader__title m-subheader__title--separator">
                        Show Category
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
                            <a href="{{ route('admin.categories.index') }}" class="m-nav__link">
                                <span class="m-nav__link-text">
                                    Categories
                                </span>
                            </a>
                        </li>
                        <li class="m-nav__separator">
                            -
                        </li>
                        <li class="m-nav__item">
                            <a class="m-nav__link">
                                <span class="m-nav__link-text">
                                    Edit Category
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
                        <img src="{{ URL::asset('public/admin/img/no-image.png') }}" alt="{{ $category->name }}" style=" width: auto;">
                        <h3 class="m-widget19__title m--font-light">
                            {{ $category->name }}
                        </h3>
                        <div class="m-widget19__shadow"></div>
                    </div>
                    <div class="m-widget19__content">
                        <div class="m-widget19__header">
                        </div>
                        <div class="m-widget19__body">
                            {{ $category->description }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

