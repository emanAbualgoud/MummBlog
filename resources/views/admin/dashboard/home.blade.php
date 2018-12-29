@extends('admin.layouts.master')

@section('title')
    Home
@endsection

@section('content')

    <div class="m-content">
        <div class="row">
            <div class="col-xl-12">
                <!--begin:: Widgets/Activity-->
                <div class="m-portlet m-portlet--bordered-semi m-portlet--widget-fit m-portlet--full-height m-portlet--skin-light  m-portlet--rounded-force">
                    <div class="m-portlet__head">
                        <div class="m-portlet__head-caption">
                            <div class="m-portlet__head-title">
                                <h3 class="m-portlet__head-text m--font-light">
                                    Activity
                                </h3>
                            </div>
                        </div>
                    </div>
                    <div class="m-portlet__body m--bg-danger">
                        <div class="m-widget17">
                            <div class="m-widget17__visual m-widget17__visual--chart m-portlet-fit--top m-portlet-fit--sides m--bg-danger">
                                <div class="m-widget17__chart">
                                </div>
                            </div>
                            <div class="m-widget17__stats">
                                <div class="m-widget17__items m-widget17__items-col1">
                                    <div class="m-widget17__item">
                                        <span class="m-widget17__icon">
                                            <i class="flaticon-signs-1 m--font-brand"></i>
                                        </span>
                                        <span class="m-widget17__subtitle">
                                            Categories
                                        </span>
                                        <span class="m-widget17__desc">
                                            15 New Items
                                        </span>
                                    </div>
                                    <div class="m-widget17__item">
                                        <span class="m-widget17__icon">
                                            <i class="flaticon-notes m--font-info"></i>
                                        </span>
                                        <span class="m-widget17__subtitle">
                                            Posts
                                        </span>
                                        <span class="m-widget17__desc">
                                            72 New Items
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end:: Widgets/Activity-->
            </div>
        </div>
    </div>
@endsection