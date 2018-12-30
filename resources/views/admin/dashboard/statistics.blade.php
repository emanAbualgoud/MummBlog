@extends('admin.layouts.master')

@section('title')
    Home
@endsection

@section('content')

    <div class="m-subheader ">
        <div class="d-flex align-items-center">
            <div class="mr-auto">
                <h3 class="m-subheader__title ">
                    Dashboard Statistics
                </h3>
            </div>
        </div>
    </div>

    <div class="m-content">
        <div class="row">
            <div class="col-xl-12">
                <!--begin:: Widgets/Activity-->
                <div class="m-portlet m-portlet--bordered-semi m-portlet--widget-fit m-portlet--full-height m-portlet--skin-light">
                    <div class="m-portlet__head">
                        <div class="m-portlet__head-caption">
                            <div class="m-portlet__head-title">
                                {{--<h3 class="m-portlet__head-text m--font-light">--}}
                                {{--Activity--}}
                                {{--</h3>--}}
                            </div>
                        </div>
                    </div>
                    <div class="m-portlet__body">
                        <div class="card" style="margin-bottom: 20px;border: none;">
                            <div class="card__header">
                                <h3> Categories ( {{ $categoriesCount }} ) </h3>
                                {!! $categoriesChart->render() !!}
                            </div>
                        </div>
                        <div class="card" style="margin-bottom: 20px;border: none;">
                            <div class="card__header">
                                <h3> Posts ( {{ $postsCount }} ) </h3>
                                {!! $postsChart->render() !!}
                            </div>
                        </div>
                    </div>
                </div>
                <!--end:: Widgets/Activity-->
            </div>
        </div>
    </div>
@endsection