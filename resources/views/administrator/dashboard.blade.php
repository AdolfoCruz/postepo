@extends('administrator.index')
@section('content')
<!--begin::Toolbar-->
<!--begin::Toolbar-->
<div class="toolbar py-2" id="kt_toolbar">
    <!--begin::Container-->
    <div id="kt_toolbar_container" class="container-fluid d-flex align-items-center">
        <!--begin::Page title-->
        <div class="flex-grow-1 flex-shrink-0 me-5">
            <!--begin::Page title-->
            <div data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}" class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
                <!--begin::Title-->
                <h1 class="d-flex align-items-center text-dark fw-bold my-1 fs-3">Dashboard
                <!--begin::Separator-->
                <span class="h-20px border-gray-200 border-start ms-3 mx-2"></span>
                <!--end::Separator-->
                <!--begin::Description-->
                <small class="text-muted fs-7 fw-semibold my-1 ms-1">#XRS-45670</small>
                <!--end::Description--></h1>
                <!--end::Title-->
            </div>
            <!--end::Page title-->
        </div>
        <!--end::Page title-->
        <!--begin::Action group-->
        <div class="d-flex align-items-center flex-wrap">
            <!--begin::Wrapper-->
            <div class="flex-shrink-0 me-2">
                <ul class="nav">
                    <li class="nav-item">
                        <a class="nav-link btn btn-sm btn-color-muted btn-active-color-primary btn-active-light active fw-semibold fs-7 px-4 me-1" data-bs-toggle="tab" href="#">Day</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn btn-sm btn-color-muted btn-active-color-primary btn-active-light fw-semibold fs-7 px-4 me-1" data-bs-toggle="tab" href="">Week</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn btn-sm btn-color-muted btn-active-color-primary btn-active-light fw-semibold fs-7 px-4" data-bs-toggle="tab" href="#">Year</a>
                    </li>
                </ul>
            </div>
            <!--end::Wrapper-->
            <!--begin::Wrapper-->
            <div class="d-flex align-items-center">
                <!--begin::Daterangepicker-->
                <a href="#" class="btn btn-sm btn-bg-light btn-color-gray-500 btn-active-color-primary me-2" id="kt_dashboard_daterangepicker" data-bs-toggle="tooltip" data-bs-dismiss="click" data-bs-trigger="hover" title="Select dashboard daterange">
                    <span class="fw-semibold me-1" id="kt_dashboard_daterangepicker_title">Range:</span>
                    <span class="fw-bold" id="kt_dashboard_daterangepicker_date">July 14</span>
                </a>
                <!--end::Daterangepicker-->
                <!--begin::Actions-->
                <div class="d-flex align-items-center">
                    <button type="button" class="btn btn-sm btn-icon btn-color-primary btn-active-light btn-active-color-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_create_campaign">
                        <!--begin::Svg Icon | path: icons/duotune/files/fil005.svg-->
                        <span class="svg-icon svg-icon-2x">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path opacity="0.3" d="M19 22H5C4.4 22 4 21.6 4 21V3C4 2.4 4.4 2 5 2H14L20 8V21C20 21.6 19.6 22 19 22ZM16 13.5L12.5 13V10C12.5 9.4 12.6 9.5 12 9.5C11.4 9.5 11.5 9.4 11.5 10L11 13L8 13.5C7.4 13.5 7 13.4 7 14C7 14.6 7.4 14.5 8 14.5H11V18C11 18.6 11.4 19 12 19C12.6 19 12.5 18.6 12.5 18V14.5L16 14C16.6 14 17 14.6 17 14C17 13.4 16.6 13.5 16 13.5Z" fill="currentColor" />
                                <rect x="11" y="19" width="10" height="2" rx="1" transform="rotate(-90 11 19)" fill="currentColor" />
                                <rect x="7" y="13" width="10" height="2" rx="1" fill="currentColor" />
                                <path d="M15 8H20L14 2V7C14 7.6 14.4 8 15 8Z" fill="currentColor" />
                            </svg>
                        </span>
                        <!--end::Svg Icon-->
                    </button>
                </div>
                <!--end::Actions-->
            </div>
            <!--end::Wrapper-->
        </div>
        <!--end::Action group-->
    </div>
    <!--end::Container-->
</div>
<!--end::Toolbar-->
<!--end::Toolbar-->

{{-- PRIMERA OPCION --}}
<!--begin::Content-->
{{-- <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Container-->
    <div id="kt_content_container" class="container-fluid">
        <!--begin::Layout-->
        <div class="d-flex flex-column flex-xl-row">
            <!--begin::Content-->
            <div class="d-flex flex-row-fluid me-xl-9 mb-10 mb-xl-0">
                <!--begin::Pos food-->
                <div class="card card-flush card-p-0 bg-transparent border-0">
                    <!--begin::Body-->
                    <div class="card-body">
                        <!--begin::Nav-->
                        <ul class="nav nav-pills d-flex justify-content-between nav-pills-custom d-grid gap-3 gap-lg-6 mb-6">
                            <!--begin::Item-->
                            <li class="nav-item mb-3 me-0">
                                <!--begin::Nav link-->
                                <a class="nav-link nav-link-border-solid btn btn-outline btn-flex btn-active-color-primary flex-column flex-stack pt-9 pb-7 page-bg show active" data-bs-toggle="pill" href="#kt_pos_food_content_1" style="width: 138px;height: 180px">
                                    <!--begin::Icon-->
                                    <div class="nav-icon mb-3">
                                        <!--begin::Food icon-->
                                        <img src="{{ asset('metronic/assets/media/svg/food-icons/spaghetti.svg') }}" class="w-50px" alt="" />
                                        <!--end::Food icon-->
                                    </div>
                                    <!--end::Icon-->
                                    <!--begin::Info-->
                                    <div class="">
                                        <span class="text-gray-800 fw-bold fs-2 d-block">Lunch</span>
                                        <span class="text-gray-400 fw-semibold fs-7">8 Options</span>
                                    </div>
                                    <!--end::Info-->
                                </a>
                                <!--end::Nav link-->
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="nav-item mb-3 me-0">
                                <!--begin::Nav link-->
                                <a class="nav-link nav-link-border-solid btn btn-outline btn-flex btn-active-color-primary flex-column flex-stack pt-9 pb-7 page-bg" data-bs-toggle="pill" href="#kt_pos_food_content_2" style="width: 138px;height: 180px">
                                    <!--begin::Icon-->
                                    <div class="nav-icon mb-3">
                                        <!--begin::Food icon-->
                                        <img src="{{ asset('metronic/assets/media/svg/food-icons/salad.svg') }}" class="w-50px" alt="" />
                                        <!--end::Food icon-->
                                    </div>
                                    <!--end::Icon-->
                                    <!--begin::Info-->
                                    <div class="">
                                        <span class="text-gray-800 fw-bold fs-2 d-block">Salad</span>
                                        <span class="text-gray-400 fw-semibold fs-7">14 Salads</span>
                                    </div>
                                    <!--end::Info-->
                                </a>
                                <!--end::Nav link-->
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="nav-item mb-3 me-0">
                                <!--begin::Nav link-->
                                <a class="nav-link nav-link-border-solid btn btn-outline btn-flex btn-active-color-primary flex-column flex-stack pt-9 pb-7 page-bg" data-bs-toggle="pill" href="#kt_pos_food_content_3" style="width: 138px;height: 180px">
                                    <!--begin::Icon-->
                                    <div class="nav-icon mb-3">
                                        <!--begin::Food icon-->
                                        <img src="{{ asset('metronic/assets/media/svg/food-icons/cheeseburger.svg') }}" class="w-50px" alt="" />
                                        <!--end::Food icon-->
                                    </div>
                                    <!--end::Icon-->
                                    <!--begin::Info-->
                                    <div class="">
                                        <span class="text-gray-800 fw-bold fs-2 d-block">Burger</span>
                                        <span class="text-gray-400 fw-semibold fs-7">5 Burgers</span>
                                    </div>
                                    <!--end::Info-->
                                </a>
                                <!--end::Nav link-->
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="nav-item mb-3 me-0">
                                <!--begin::Nav link-->
                                <a class="nav-link nav-link-border-solid btn btn-outline btn-flex btn-active-color-primary flex-column flex-stack pt-9 pb-7 page-bg" data-bs-toggle="pill" href="#kt_pos_food_content_4" style="width: 138px;height: 180px">
                                    <!--begin::Icon-->
                                    <div class="nav-icon mb-3">
                                        <!--begin::Food icon-->
                                        <img src="{{ asset('metronic/assets/media/svg/food-icons/coffee.svg') }}" class="w-50px" alt="" />
                                        <!--end::Food icon-->
                                    </div>
                                    <!--end::Icon-->
                                    <!--begin::Info-->
                                    <div class="">
                                        <span class="text-gray-800 fw-bold fs-2 d-block">Coffee</span>
                                        <span class="text-gray-400 fw-semibold fs-7">7 Beverages</span>
                                    </div>
                                    <!--end::Info-->
                                </a>
                                <!--end::Nav link-->
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="nav-item mb-3 me-0">
                                <!--begin::Nav link-->
                                <a class="nav-link nav-link-border-solid btn btn-outline btn-flex btn-active-color-primary flex-column flex-stack pt-9 pb-7 page-bg" data-bs-toggle="pill" href="#kt_pos_food_content_5" style="width: 138px;height: 180px">
                                    <!--begin::Icon-->
                                    <div class="nav-icon mb-3">
                                        <!--begin::Food icon-->
                                        <img src="{{ asset('metronic/assets/media/svg/food-icons/cheesecake.svg') }}" class="w-50px" alt="" />
                                        <!--end::Food icon-->
                                    </div>
                                    <!--end::Icon-->
                                    <!--begin::Info-->
                                    <div class="">
                                        <span class="text-gray-800 fw-bold fs-2 d-block">Dessert</span>
                                        <span class="text-gray-400 fw-semibold fs-7">8 Desserts</span>
                                    </div>
                                    <!--end::Info-->
                                </a>
                                <!--end::Nav link-->
                            </li>
                            <!--end::Item-->
                        </ul>
                        <!--end::Nav-->
                        <!--begin::Tab Content-->
                        <div class="tab-content">
                            <!--begin::Tap pane-->
                            <div class="tab-pane fade show active" id="kt_pos_food_content_1">
                                <!--begin::Wrapper-->
                                <div class="d-flex flex-wrap d-grid gap-5 gap-xxl-9">
                                    <!--begin::Card-->
                                    <div class="card card-flush flex-row-fluid p-6 pb-5 mw-100">
                                        <!--begin::Body-->
                                        <div class="card-body text-center">
                                            <!--begin::Food img-->
                                            <img src="{{ asset('metronic/assets/media/stock/food/img-2.jpg') }}" class="rounded-3 mb-4 w-150px h-150px w-xxl-200px h-xxl-200px" alt="" />
                                            <!--end::Food img-->
                                            <!--begin::Info-->
                                            <div class="mb-2">
                                                <!--begin::Title-->
                                                <div class="text-center">
                                                    <span class="fw-bold text-gray-800 cursor-pointer text-hover-primary fs-3 fs-xl-1">T-Bone Stake</span>
                                                    <span class="text-gray-400 fw-semibold d-block fs-6 mt-n1">16 mins to cook</span>
                                                </div>
                                                <!--end::Title-->
                                            </div>
                                            <!--end::Info-->
                                            <!--begin::Total-->
                                            <span class="text-success text-end fw-bold fs-1">$16.50$</span>
                                            <!--end::Total-->
                                        </div>
                                        <!--end::Body-->
                                    </div>
                                    <!--end::Card-->
                                    <!--begin::Card-->
                                    <div class="card card-flush flex-row-fluid p-6 pb-5 mw-100">
                                        <!--begin::Body-->
                                        <div class="card-body text-center">
                                            <!--begin::Food img-->
                                            <img src="{{ asset('metronic/assets/media/stock/ecommerce/10.gif') }}" class="rounded-3 mb-4 w-150px h-150px w-xxl-200px h-xxl-200px" alt="" />
                                            <!--end::Food img-->
                                            <!--begin::Info-->
                                            <div class="mb-2">
                                                <!--begin::Title-->
                                                <div class="text-center">
                                                    <span class="fw-bold text-gray-800 cursor-pointer text-hover-primary fs-3 fs-xl-1">Chef’s Salmon</span>
                                                    <span class="text-gray-400 fw-semibold d-block fs-6 mt-n1">16 mins to cook</span>
                                                </div>
                                                <!--end::Title-->
                                            </div>
                                            <!--end::Info-->
                                            <!--begin::Total-->
                                            <span class="text-success text-end fw-bold fs-1">$12.40$</span>
                                            <!--end::Total-->
                                        </div>
                                        <!--end::Body-->
                                    </div>
                                    <!--end::Card-->
                                    <!--begin::Card-->
                                    <div class="card card-flush flex-row-fluid p-6 pb-5 mw-100">
                                        <!--begin::Body-->
                                        <div class="card-body text-center">
                                            <!--begin::Food img-->
                                            <img src="{{ asset('metronic/assets/media/stock/ecommerce/16.gif') }}" class="rounded-3 mb-4 w-150px h-150px w-xxl-200px h-xxl-200px" alt="" />
                                            <!--end::Food img-->
                                            <!--begin::Info-->
                                            <div class="mb-2">
                                                <!--begin::Title-->
                                                <div class="text-center">
                                                    <span class="fw-bold text-gray-800 cursor-pointer text-hover-primary fs-3 fs-xl-1">Ramen</span>
                                                    <span class="text-gray-400 fw-semibold d-block fs-6 mt-n1">16 mins to cook</span>
                                                </div>
                                                <!--end::Title-->
                                            </div>
                                            <!--end::Info-->
                                            <!--begin::Total-->
                                            <span class="text-success text-end fw-bold fs-1">$14.90$</span>
                                            <!--end::Total-->
                                        </div>
                                        <!--end::Body-->
                                    </div>
                                    <!--end::Card-->
                                    <!--begin::Card-->
                                    <div class="card card-flush flex-row-fluid p-6 pb-5 mw-100">
                                        <!--begin::Body-->
                                        <div class="card-body text-center">
                                            <!--begin::Food img-->
                                            <img src="{{ asset('metronic/assets/media/stock/ecommerce/17.gif') }}" class="rounded-3 mb-4 w-150px h-150px w-xxl-200px h-xxl-200px" alt="" />
                                            <!--end::Food img-->
                                            <!--begin::Info-->
                                            <div class="mb-2">
                                                <!--begin::Title-->
                                                <div class="text-center">
                                                    <span class="fw-bold text-gray-800 cursor-pointer text-hover-primary fs-3 fs-xl-1">Chicken Breast</span>
                                                    <span class="text-gray-400 fw-semibold d-block fs-6 mt-n1">16 mins to cook</span>
                                                </div>
                                                <!--end::Title-->
                                            </div>
                                            <!--end::Info-->
                                            <!--begin::Total-->
                                            <span class="text-success text-end fw-bold fs-1">$9.00$</span>
                                            <!--end::Total-->
                                        </div>
                                        <!--end::Body-->
                                    </div>
                                    <!--end::Card-->
                                    <!--begin::Card-->
                                    <div class="card card-flush flex-row-fluid p-6 pb-5 mw-100">
                                        <!--begin::Body-->
                                        <div class="card-body text-center">
                                            <!--begin::Food img-->
                                            <img src="{{ asset('metronic/assets/media/stock/ecommerce/18.gif') }}" class="rounded-3 mb-4 w-150px h-150px w-xxl-200px h-xxl-200px" alt="" />
                                            <!--end::Food img-->
                                            <!--begin::Info-->
                                            <div class="mb-2">
                                                <!--begin::Title-->
                                                <div class="text-center">
                                                    <span class="fw-bold text-gray-800 cursor-pointer text-hover-primary fs-3 fs-xl-1">Tenderlion Steak</span>
                                                    <span class="text-gray-400 fw-semibold d-block fs-6 mt-n1">16 mins to cook</span>
                                                </div>
                                                <!--end::Title-->
                                            </div>
                                            <!--end::Info-->
                                            <!--begin::Total-->
                                            <span class="text-success text-end fw-bold fs-1">$19.00$</span>
                                            <!--end::Total-->
                                        </div>
                                        <!--end::Body-->
                                    </div>
                                    <!--end::Card-->
                                    <!--begin::Card-->
                                    <div class="card card-flush flex-row-fluid p-6 pb-5 mw-100">
                                        <!--begin::Body-->
                                        <div class="card-body text-center">
                                            <!--begin::Food img-->
                                            <img src="{{ asset('metronic/assets/media/stock/ecommerce/19.gif') }}" class="rounded-3 mb-4 w-150px h-150px w-xxl-200px h-xxl-200px" alt="" />
                                            <!--end::Food img-->
                                            <!--begin::Info-->
                                            <div class="mb-2">
                                                <!--begin::Title-->
                                                <div class="text-center">
                                                    <span class="fw-bold text-gray-800 cursor-pointer text-hover-primary fs-3 fs-xl-1">Soup of the Day</span>
                                                    <span class="text-gray-400 fw-semibold d-block fs-6 mt-n1">16 mins to cook</span>
                                                </div>
                                                <!--end::Title-->
                                            </div>
                                            <!--end::Info-->
                                            <!--begin::Total-->
                                            <span class="text-success text-end fw-bold fs-1">$7.50$</span>
                                            <!--end::Total-->
                                        </div>
                                        <!--end::Body-->
                                    </div>
                                    <!--end::Card-->
                                    <!--begin::Card-->
                                    <div class="card card-flush flex-row-fluid p-6 pb-5 mw-100">
                                        <!--begin::Body-->
                                        <div class="card-body text-center">
                                            <!--begin::Food img-->
                                            <img src="{{ asset('metronic/assets/media/stock/ecommerce/20.gif') }}" class="rounded-3 mb-4 w-150px h-150px w-xxl-200px h-xxl-200px" alt="" />
                                            <!--end::Food img-->
                                            <!--begin::Info-->
                                            <div class="mb-2">
                                                <!--begin::Title-->
                                                <div class="text-center">
                                                    <span class="fw-bold text-gray-800 cursor-pointer text-hover-primary fs-3 fs-xl-1">Pancakes</span>
                                                    <span class="text-gray-400 fw-semibold d-block fs-6 mt-n1">16 mins to cook</span>
                                                </div>
                                                <!--end::Title-->
                                            </div>
                                            <!--end::Info-->
                                            <!--begin::Total-->
                                            <span class="text-success text-end fw-bold fs-1">$6.50$</span>
                                            <!--end::Total-->
                                        </div>
                                        <!--end::Body-->
                                    </div>
                                    <!--end::Card-->
                                    <!--begin::Card-->
                                    <div class="card card-flush flex-row-fluid p-6 pb-5 mw-100">
                                        <!--begin::Body-->
                                        <div class="card-body text-center">
                                            <!--begin::Food img-->
                                            <img src="{{ asset('metronic/assets/media/stock/ecommerce/21.gif') }}" class="rounded-3 mb-4 w-150px h-150px w-xxl-200px h-xxl-200px" alt="" />
                                            <!--end::Food img-->
                                            <!--begin::Info-->
                                            <div class="mb-2">
                                                <!--begin::Title-->
                                                <div class="text-center">
                                                    <span class="fw-bold text-gray-800 cursor-pointer text-hover-primary fs-3 fs-xl-1">Breakfast</span>
                                                    <span class="text-gray-400 fw-semibold d-block fs-6 mt-n1">16 mins to cook</span>
                                                </div>
                                                <!--end::Title-->
                                            </div>
                                            <!--end::Info-->
                                            <!--begin::Total-->
                                            <span class="text-success text-end fw-bold fs-1">$8.20$</span>
                                            <!--end::Total-->
                                        </div>
                                        <!--end::Body-->
                                    </div>
                                    <!--end::Card-->
                                    <!--begin::Card-->
                                    <div class="card card-flush flex-row-fluid p-6 pb-5 mw-100">
                                        <!--begin::Body-->
                                        <div class="card-body text-center">
                                            <!--begin::Food img-->
                                            <img src="{{ asset('metronic/assets/media/stock/ecommerce/22.gif') }}" class="rounded-3 mb-4 w-150px h-150px w-xxl-200px h-xxl-200px" alt="" />
                                            <!--end::Food img-->
                                            <!--begin::Info-->
                                            <div class="mb-2">
                                                <!--begin::Title-->
                                                <div class="text-center">
                                                    <span class="fw-bold text-gray-800 cursor-pointer text-hover-primary fs-3 fs-xl-1">Sweety</span>
                                                    <span class="text-gray-400 fw-semibold d-block fs-6 mt-n1">16 mins to cook</span>
                                                </div>
                                                <!--end::Title-->
                                            </div>
                                            <!--end::Info-->
                                            <!--begin::Total-->
                                            <span class="text-success text-end fw-bold fs-1">$11.40$</span>
                                            <!--end::Total-->
                                        </div>
                                        <!--end::Body-->
                                    </div>
                                    <!--end::Card-->

                                </div>
                                <!--end::Wrapper-->
                            </div>
                            <!--end::Tap pane-->
                            <!--begin::Tap pane-->
                            <div class="tab-pane fade" id="kt_pos_food_content_2">
                                <!--begin::Wrapper-->
                                <div class="d-flex flex-wrap d-grid gap-5 gap-xxl-9">
                                    <!--begin::Card-->
                                    <div class="card card-flush flex-row-fluid p-6 pb-5 mw-100">
                                        <!--begin::Body-->
                                        <div class="card-body text-center">
                                            <!--begin::Food img-->
                                            <img src="{{ asset('metronic/assets/media/stock/ecommerce/1.gif') }}" class="rounded-3 mb-4 w-150px h-150px w-xxl-200px h-xxl-200px" alt="" />
                                            <!--end::Food img-->
                                            <!--begin::Info-->
                                            <div class="mb-2">
                                                <!--begin::Title-->
                                                <div class="text-center">
                                                    <span class="fw-bold text-gray-800 cursor-pointer text-hover-primary fs-3 fs-xl-1">Sweety</span>
                                                    <span class="text-gray-400 fw-semibold d-block fs-6 mt-n1">16 mins to cook</span>
                                                </div>
                                                <!--end::Title-->
                                            </div>
                                            <!--end::Info-->
                                            <!--begin::Total-->
                                            <span class="text-success text-end fw-bold fs-1">$11.40$</span>
                                            <!--end::Total-->
                                        </div>
                                        <!--end::Body-->
                                    </div>
                                    <!--end::Card-->
                                    <!--begin::Card-->
                                    <div class="card card-flush flex-row-fluid p-6 pb-5 mw-100">
                                        <!--begin::Body-->
                                        <div class="card-body text-center">
                                            <!--begin::Food img-->
                                            <img src="{{ asset('metronic/assets/media/stock/ecommerce/2.gif') }}" class="rounded-3 mb-4 w-150px h-150px w-xxl-200px h-xxl-200px" alt="" />
                                            <!--end::Food img-->
                                            <!--begin::Info-->
                                            <div class="mb-2">
                                                <!--begin::Title-->
                                                <div class="text-center">
                                                    <span class="fw-bold text-gray-800 cursor-pointer text-hover-primary fs-3 fs-xl-1">Breakfast</span>
                                                    <span class="text-gray-400 fw-semibold d-block fs-6 mt-n1">16 mins to cook</span>
                                                </div>
                                                <!--end::Title-->
                                            </div>
                                            <!--end::Info-->
                                            <!--begin::Total-->
                                            <span class="text-success text-end fw-bold fs-1">$8.20$</span>
                                            <!--end::Total-->
                                        </div>
                                        <!--end::Body-->
                                    </div>
                                    <!--end::Card-->
                                    <!--begin::Card-->
                                    <div class="card card-flush flex-row-fluid p-6 pb-5 mw-100">
                                        <!--begin::Body-->
                                        <div class="card-body text-center">
                                            <!--begin::Food img-->
                                            <img src="{{ asset('metronic/assets/media/stock/ecommerce/3.gif') }}" class="rounded-3 mb-4 w-150px h-150px w-xxl-200px h-xxl-200px" alt="" />
                                            <!--end::Food img-->
                                            <!--begin::Info-->
                                            <div class="mb-2">
                                                <!--begin::Title-->
                                                <div class="text-center">
                                                    <span class="fw-bold text-gray-800 cursor-pointer text-hover-primary fs-3 fs-xl-1">Chicken Breast</span>
                                                    <span class="text-gray-400 fw-semibold d-block fs-6 mt-n1">16 mins to cook</span>
                                                </div>
                                                <!--end::Title-->
                                            </div>
                                            <!--end::Info-->
                                            <!--begin::Total-->
                                            <span class="text-success text-end fw-bold fs-1">$9.00$</span>
                                            <!--end::Total-->
                                        </div>
                                        <!--end::Body-->
                                    </div>
                                    <!--end::Card-->
                                    <!--begin::Card-->
                                    <div class="card card-flush flex-row-fluid p-6 pb-5 mw-100">
                                        <!--begin::Body-->
                                        <div class="card-body text-center">
                                            <!--begin::Food img-->
                                            <img src="{{ asset('metronic/assets/media/stock/ecommerce/4.gif') }}" class="rounded-3 mb-4 w-150px h-150px w-xxl-200px h-xxl-200px" alt="" />
                                            <!--end::Food img-->
                                            <!--begin::Info-->
                                            <div class="mb-2">
                                                <!--begin::Title-->
                                                <div class="text-center">
                                                    <span class="fw-bold text-gray-800 cursor-pointer text-hover-primary fs-3 fs-xl-1">Ramen</span>
                                                    <span class="text-gray-400 fw-semibold d-block fs-6 mt-n1">16 mins to cook</span>
                                                </div>
                                                <!--end::Title-->
                                            </div>
                                            <!--end::Info-->
                                            <!--begin::Total-->
                                            <span class="text-success text-end fw-bold fs-1">$14.90$</span>
                                            <!--end::Total-->
                                        </div>
                                        <!--end::Body-->
                                    </div>
                                    <!--end::Card-->
                                    <!--begin::Card-->
                                    <div class="card card-flush flex-row-fluid p-6 pb-5 mw-100">
                                        <!--begin::Body-->
                                        <div class="card-body text-center">
                                            <!--begin::Food img-->
                                            <img src="{{ asset('metronic/assets/media/stock/ecommerce/5.gif') }}" class="rounded-3 mb-4 w-150px h-150px w-xxl-200px h-xxl-200px" alt="" />
                                            <!--end::Food img-->
                                            <!--begin::Info-->
                                            <div class="mb-2">
                                                <!--begin::Title-->
                                                <div class="text-center">
                                                    <span class="fw-bold text-gray-800 cursor-pointer text-hover-primary fs-3 fs-xl-1">Tenderlion Steak</span>
                                                    <span class="text-gray-400 fw-semibold d-block fs-6 mt-n1">16 mins to cook</span>
                                                </div>
                                                <!--end::Title-->
                                            </div>
                                            <!--end::Info-->
                                            <!--begin::Total-->
                                            <span class="text-success text-end fw-bold fs-1">$19.00$</span>
                                            <!--end::Total-->
                                        </div>
                                        <!--end::Body-->
                                    </div>
                                    <!--end::Card-->
                                    <!--begin::Card-->
                                    <div class="card card-flush flex-row-fluid p-6 pb-5 mw-100">
                                        <!--begin::Body-->
                                        <div class="card-body text-center">
                                            <!--begin::Food img-->
                                            <img src="{{ asset('metronic/assets/media/stock/ecommerce/6.gif') }}" class="rounded-3 mb-4 w-150px h-150px w-xxl-200px h-xxl-200px" alt="" />
                                            <!--end::Food img-->
                                            <!--begin::Info-->
                                            <div class="mb-2">
                                                <!--begin::Title-->
                                                <div class="text-center">
                                                    <span class="fw-bold text-gray-800 cursor-pointer text-hover-primary fs-3 fs-xl-1">Soup of the Day</span>
                                                    <span class="text-gray-400 fw-semibold d-block fs-6 mt-n1">16 mins to cook</span>
                                                </div>
                                                <!--end::Title-->
                                            </div>
                                            <!--end::Info-->
                                            <!--begin::Total-->
                                            <span class="text-success text-end fw-bold fs-1">$7.50$</span>
                                            <!--end::Total-->
                                        </div>
                                        <!--end::Body-->
                                    </div>
                                    <!--end::Card-->
                                    <!--begin::Card-->
                                    <div class="card card-flush flex-row-fluid p-6 pb-5 mw-100">
                                        <!--begin::Body-->
                                        <div class="card-body text-center">
                                            <!--begin::Food img-->
                                            <img src="{{ asset('metronic/assets/media/stock/ecommerce/23.gif') }}" class="rounded-3 mb-4 w-150px h-150px w-xxl-200px h-xxl-200px" alt="" />
                                            <!--end::Food img-->
                                            <!--begin::Info-->
                                            <div class="mb-2">
                                                <!--begin::Title-->
                                                <div class="text-center">
                                                    <span class="fw-bold text-gray-800 cursor-pointer text-hover-primary fs-3 fs-xl-1">Pancakes</span>
                                                    <span class="text-gray-400 fw-semibold d-block fs-6 mt-n1">16 mins to cook</span>
                                                </div>
                                                <!--end::Title-->
                                            </div>
                                            <!--end::Info-->
                                            <!--begin::Total-->
                                            <span class="text-success text-end fw-bold fs-1">$6.50$</span>
                                            <!--end::Total-->
                                        </div>
                                        <!--end::Body-->
                                    </div>
                                    <!--end::Card-->
                                    <!--begin::Card-->
                                    <div class="card card-flush flex-row-fluid p-6 pb-5 mw-100">
                                        <!--begin::Body-->
                                        <div class="card-body text-center">
                                            <!--begin::Food img-->
                                            <img src="{{ asset('metronic/assets/media/stock/ecommerce/24.gif') }}" class="rounded-3 mb-4 w-150px h-150px w-xxl-200px h-xxl-200px" alt="" />
                                            <!--end::Food img-->
                                            <!--begin::Info-->
                                            <div class="mb-2">
                                                <!--begin::Title-->
                                                <div class="text-center">
                                                    <span class="fw-bold text-gray-800 cursor-pointer text-hover-primary fs-3 fs-xl-1">Chef’s Salmon</span>
                                                    <span class="text-gray-400 fw-semibold d-block fs-6 mt-n1">16 mins to cook</span>
                                                </div>
                                                <!--end::Title-->
                                            </div>
                                            <!--end::Info-->
                                            <!--begin::Total-->
                                            <span class="text-success text-end fw-bold fs-1">$12.40$</span>
                                            <!--end::Total-->
                                        </div>
                                        <!--end::Body-->
                                    </div>
                                    <!--end::Card-->
                                    <!--begin::Card-->
                                    <div class="card card-flush flex-row-fluid p-6 pb-5 mw-100">
                                        <!--begin::Body-->
                                        <div class="card-body text-center">
                                            <!--begin::Food img-->
                                            <img src="{{ asset('metronic/assets/media/stock/ecommerce/25.gif') }}" class="rounded-3 mb-4 w-150px h-150px w-xxl-200px h-xxl-200px" alt="" />
                                            <!--end::Food img-->
                                            <!--begin::Info-->
                                            <div class="mb-2">
                                                <!--begin::Title-->
                                                <div class="text-center">
                                                    <span class="fw-bold text-gray-800 cursor-pointer text-hover-primary fs-3 fs-xl-1">T-Bone Stake</span>
                                                    <span class="text-gray-400 fw-semibold d-block fs-6 mt-n1">16 mins to cook</span>
                                                </div>
                                                <!--end::Title-->
                                            </div>
                                            <!--end::Info-->
                                            <!--begin::Total-->
                                            <span class="text-success text-end fw-bold fs-1">$16.50$</span>
                                            <!--end::Total-->
                                        </div>
                                        <!--end::Body-->
                                    </div>
                                    <!--end::Card-->
                                </div>
                                <!--end::Wrapper-->
                            </div>
                            <!--end::Tap pane-->
                            <!--begin::Tap pane-->
                            <div class="tab-pane fade" id="kt_pos_food_content_3">
                                <!--begin::Wrapper-->
                                <div class="d-flex flex-wrap d-grid gap-5 gap-xxl-9">
                                    <!--begin::Card-->
                                    <div class="card card-flush flex-row-fluid p-6 pb-5 mw-100">
                                        <!--begin::Body-->
                                        <div class="card-body text-center">
                                            <!--begin::Food img-->
                                            <img src="{{ asset('metronic/assets/media/stock/ecommerce/26.gif') }}" class="rounded-3 mb-4 w-150px h-150px w-xxl-200px h-xxl-200px" alt="" />
                                            <!--end::Food img-->
                                            <!--begin::Info-->
                                            <div class="mb-2">
                                                <!--begin::Title-->
                                                <div class="text-center">
                                                    <span class="fw-bold text-gray-800 cursor-pointer text-hover-primary fs-3 fs-xl-1">Breakfast</span>
                                                    <span class="text-gray-400 fw-semibold d-block fs-6 mt-n1">16 mins to cook</span>
                                                </div>
                                                <!--end::Title-->
                                            </div>
                                            <!--end::Info-->
                                            <!--begin::Total-->
                                            <span class="text-success text-end fw-bold fs-1">$8.20$</span>
                                            <!--end::Total-->
                                        </div>
                                        <!--end::Body-->
                                    </div>
                                    <!--end::Card-->
                                    <!--begin::Card-->
                                    <div class="card card-flush flex-row-fluid p-6 pb-5 mw-100">
                                        <!--begin::Body-->
                                        <div class="card-body text-center">
                                            <!--begin::Food img-->
                                            <img src="{{ asset('metronic/assets/media/stock/ecommerce/27.gif') }}" class="rounded-3 mb-4 w-150px h-150px w-xxl-200px h-xxl-200px" alt="" />
                                            <!--end::Food img-->
                                            <!--begin::Info-->
                                            <div class="mb-2">
                                                <!--begin::Title-->
                                                <div class="text-center">
                                                    <span class="fw-bold text-gray-800 cursor-pointer text-hover-primary fs-3 fs-xl-1">Sweety</span>
                                                    <span class="text-gray-400 fw-semibold d-block fs-6 mt-n1">16 mins to cook</span>
                                                </div>
                                                <!--end::Title-->
                                            </div>
                                            <!--end::Info-->
                                            <!--begin::Total-->
                                            <span class="text-success text-end fw-bold fs-1">$11.40$</span>
                                            <!--end::Total-->
                                        </div>
                                        <!--end::Body-->
                                    </div>
                                    <!--end::Card-->
                                    <!--begin::Card-->
                                    <div class="card card-flush flex-row-fluid p-6 pb-5 mw-100">
                                        <!--begin::Body-->
                                        <div class="card-body text-center">
                                            <!--begin::Food img-->
                                            <img src="{{ asset('metronic/assets/media/stock/ecommerce/28.gif') }}" class="rounded-3 mb-4 w-150px h-150px w-xxl-200px h-xxl-200px" alt="" />
                                            <!--end::Food img-->
                                            <!--begin::Info-->
                                            <div class="mb-2">
                                                <!--begin::Title-->
                                                <div class="text-center">
                                                    <span class="fw-bold text-gray-800 cursor-pointer text-hover-primary fs-3 fs-xl-1">T-Bone Stake</span>
                                                    <span class="text-gray-400 fw-semibold d-block fs-6 mt-n1">16 mins to cook</span>
                                                </div>
                                                <!--end::Title-->
                                            </div>
                                            <!--end::Info-->
                                            <!--begin::Total-->
                                            <span class="text-success text-end fw-bold fs-1">$16.50$</span>
                                            <!--end::Total-->
                                        </div>
                                        <!--end::Body-->
                                    </div>
                                    <!--end::Card-->
                                    <!--begin::Card-->
                                    <div class="card card-flush flex-row-fluid p-6 pb-5 mw-100">
                                        <!--begin::Body-->
                                        <div class="card-body text-center">
                                            <!--begin::Food img-->
                                            <img src="{{ asset('metronic/assets/media/stock/ecommerce/29.gif') }}" class="rounded-3 mb-4 w-150px h-150px w-xxl-200px h-xxl-200px" alt="" />
                                            <!--end::Food img-->
                                            <!--begin::Info-->
                                            <div class="mb-2">
                                                <!--begin::Title-->
                                                <div class="text-center">
                                                    <span class="fw-bold text-gray-800 cursor-pointer text-hover-primary fs-3 fs-xl-1">Chef’s Salmon</span>
                                                    <span class="text-gray-400 fw-semibold d-block fs-6 mt-n1">16 mins to cook</span>
                                                </div>
                                                <!--end::Title-->
                                            </div>
                                            <!--end::Info-->
                                            <!--begin::Total-->
                                            <span class="text-success text-end fw-bold fs-1">$12.40$</span>
                                            <!--end::Total-->
                                        </div>
                                        <!--end::Body-->
                                    </div>
                                    <!--end::Card-->
                                    <!--begin::Card-->
                                    <div class="card card-flush flex-row-fluid p-6 pb-5 mw-100">
                                        <!--begin::Body-->
                                        <div class="card-body text-center">
                                            <!--begin::Food img-->
                                            <img src="{{ asset('metronic/assets/media/stock/ecommerce/30.gif') }}" class="rounded-3 mb-4 w-150px h-150px w-xxl-200px h-xxl-200px" alt="" />
                                            <!--end::Food img-->
                                            <!--begin::Info-->
                                            <div class="mb-2">
                                                <!--begin::Title-->
                                                <div class="text-center">
                                                    <span class="fw-bold text-gray-800 cursor-pointer text-hover-primary fs-3 fs-xl-1">Chicken Breast</span>
                                                    <span class="text-gray-400 fw-semibold d-block fs-6 mt-n1">16 mins to cook</span>
                                                </div>
                                                <!--end::Title-->
                                            </div>
                                            <!--end::Info-->
                                            <!--begin::Total-->
                                            <span class="text-success text-end fw-bold fs-1">$9.00$</span>
                                            <!--end::Total-->
                                        </div>
                                        <!--end::Body-->
                                    </div>
                                    <!--end::Card-->
                                    <!--begin::Card-->
                                    <div class="card card-flush flex-row-fluid p-6 pb-5 mw-100">
                                        <!--begin::Body-->
                                        <div class="card-body text-center">
                                            <!--begin::Food img-->
                                            <img src="{{ asset('metronic/assets/media/stock/ecommerce/31.gif') }}" class="rounded-3 mb-4 w-150px h-150px w-xxl-200px h-xxl-200px" alt="" />
                                            <!--end::Food img-->
                                            <!--begin::Info-->
                                            <div class="mb-2">
                                                <!--begin::Title-->
                                                <div class="text-center">
                                                    <span class="fw-bold text-gray-800 cursor-pointer text-hover-primary fs-3 fs-xl-1">Ramen</span>
                                                    <span class="text-gray-400 fw-semibold d-block fs-6 mt-n1">16 mins to cook</span>
                                                </div>
                                                <!--end::Title-->
                                            </div>
                                            <!--end::Info-->
                                            <!--begin::Total-->
                                            <span class="text-success text-end fw-bold fs-1">$14.90$</span>
                                            <!--end::Total-->
                                        </div>
                                        <!--end::Body-->
                                    </div>
                                    <!--end::Card-->
                                    <!--begin::Card-->
                                    <div class="card card-flush flex-row-fluid p-6 pb-5 mw-100">
                                        <!--begin::Body-->
                                        <div class="card-body text-center">
                                            <!--begin::Food img-->
                                            <img src="{{ asset('metronic/assets/media/stock/ecommerce/32.gif') }}" class="rounded-3 mb-4 w-150px h-150px w-xxl-200px h-xxl-200px" alt="" />
                                            <!--end::Food img-->
                                            <!--begin::Info-->
                                            <div class="mb-2">
                                                <!--begin::Title-->
                                                <div class="text-center">
                                                    <span class="fw-bold text-gray-800 cursor-pointer text-hover-primary fs-3 fs-xl-1">Soup of the Day</span>
                                                    <span class="text-gray-400 fw-semibold d-block fs-6 mt-n1">16 mins to cook</span>
                                                </div>
                                                <!--end::Title-->
                                            </div>
                                            <!--end::Info-->
                                            <!--begin::Total-->
                                            <span class="text-success text-end fw-bold fs-1">$7.50$</span>
                                            <!--end::Total-->
                                        </div>
                                        <!--end::Body-->
                                    </div>
                                    <!--end::Card-->
                                    <!--begin::Card-->
                                    <div class="card card-flush flex-row-fluid p-6 pb-5 mw-100">
                                        <!--begin::Body-->
                                        <div class="card-body text-center">
                                            <!--begin::Food img-->
                                            <img src="{{ asset('metronic/assets/media/stock/ecommerce/33.gif') }}" class="rounded-3 mb-4 w-150px h-150px w-xxl-200px h-xxl-200px" alt="" />
                                            <!--end::Food img-->
                                            <!--begin::Info-->
                                            <div class="mb-2">
                                                <!--begin::Title-->
                                                <div class="text-center">
                                                    <span class="fw-bold text-gray-800 cursor-pointer text-hover-primary fs-3 fs-xl-1">Tenderlion Steak</span>
                                                    <span class="text-gray-400 fw-semibold d-block fs-6 mt-n1">16 mins to cook</span>
                                                </div>
                                                <!--end::Title-->
                                            </div>
                                            <!--end::Info-->
                                            <!--begin::Total-->
                                            <span class="text-success text-end fw-bold fs-1">$19.00$</span>
                                            <!--end::Total-->
                                        </div>
                                        <!--end::Body-->
                                    </div>
                                    <!--end::Card-->
                                    <!--begin::Card-->
                                    <div class="card card-flush flex-row-fluid p-6 pb-5 mw-100">
                                        <!--begin::Body-->
                                        <div class="card-body text-center">
                                            <!--begin::Food img-->
                                            <img src="{{ asset('metronic/assets/media/stock/ecommerce/34.gif') }}" class="rounded-3 mb-4 w-150px h-150px w-xxl-200px h-xxl-200px" alt="" />
                                            <!--end::Food img-->
                                            <!--begin::Info-->
                                            <div class="mb-2">
                                                <!--begin::Title-->
                                                <div class="text-center">
                                                    <span class="fw-bold text-gray-800 cursor-pointer text-hover-primary fs-3 fs-xl-1">Pancakes</span>
                                                    <span class="text-gray-400 fw-semibold d-block fs-6 mt-n1">16 mins to cook</span>
                                                </div>
                                                <!--end::Title-->
                                            </div>
                                            <!--end::Info-->
                                            <!--begin::Total-->
                                            <span class="text-success text-end fw-bold fs-1">$6.50$</span>
                                            <!--end::Total-->
                                        </div>
                                        <!--end::Body-->
                                    </div>
                                    <!--end::Card-->
                                </div>
                                <!--end::Wrapper-->
                            </div>
                            <!--end::Tap pane-->
                            <!--begin::Tap pane-->
                            <div class="tab-pane fade" id="kt_pos_food_content_4">
                                <!--begin::Wrapper-->
                                <div class="d-flex flex-wrap d-grid gap-5 gap-xxl-9">
                                    <!--begin::Card-->
                                    <div class="card card-flush flex-row-fluid p-6 pb-5 mw-100">
                                        <!--begin::Body-->
                                        <div class="card-body text-center">
                                            <!--begin::Food img-->
                                            <img src="{{ asset('metronic/assets/media/stock/ecommerce/35.gif') }}" class="rounded-3 mb-4 w-150px h-150px w-xxl-200px h-xxl-200px" alt="" />
                                            <!--end::Food img-->
                                            <!--begin::Info-->
                                            <div class="mb-2">
                                                <!--begin::Title-->
                                                <div class="text-center">
                                                    <span class="fw-bold text-gray-800 cursor-pointer text-hover-primary fs-3 fs-xl-1">Pancakes</span>
                                                    <span class="text-gray-400 fw-semibold d-block fs-6 mt-n1">16 mins to cook</span>
                                                </div>
                                                <!--end::Title-->
                                            </div>
                                            <!--end::Info-->
                                            <!--begin::Total-->
                                            <span class="text-success text-end fw-bold fs-1">$6.50$</span>
                                            <!--end::Total-->
                                        </div>
                                        <!--end::Body-->
                                    </div>
                                    <!--end::Card-->
                                    <!--begin::Card-->
                                    <div class="card card-flush flex-row-fluid p-6 pb-5 mw-100">
                                        <!--begin::Body-->
                                        <div class="card-body text-center">
                                            <!--begin::Food img-->
                                            <img src="assets/media/stock/food/img-5.jpg" class="rounded-3 mb-4 w-150px h-150px w-xxl-200px h-xxl-200px" alt="" />
                                            <!--end::Food img-->
                                            <!--begin::Info-->
                                            <div class="mb-2">
                                                <!--begin::Title-->
                                                <div class="text-center">
                                                    <span class="fw-bold text-gray-800 cursor-pointer text-hover-primary fs-3 fs-xl-1">Breakfast</span>
                                                    <span class="text-gray-400 fw-semibold d-block fs-6 mt-n1">16 mins to cook</span>
                                                </div>
                                                <!--end::Title-->
                                            </div>
                                            <!--end::Info-->
                                            <!--begin::Total-->
                                            <span class="text-success text-end fw-bold fs-1">$8.20$</span>
                                            <!--end::Total-->
                                        </div>
                                        <!--end::Body-->
                                    </div>
                                    <!--end::Card-->
                                    <!--begin::Card-->
                                    <div class="card card-flush flex-row-fluid p-6 pb-5 mw-100">
                                        <!--begin::Body-->
                                        <div class="card-body text-center">
                                            <!--begin::Food img-->
                                            <img src="assets/media/stock/food/img-4.jpg" class="rounded-3 mb-4 w-150px h-150px w-xxl-200px h-xxl-200px" alt="" />
                                            <!--end::Food img-->
                                            <!--begin::Info-->
                                            <div class="mb-2">
                                                <!--begin::Title-->
                                                <div class="text-center">
                                                    <span class="fw-bold text-gray-800 cursor-pointer text-hover-primary fs-3 fs-xl-1">Chicken Breast</span>
                                                    <span class="text-gray-400 fw-semibold d-block fs-6 mt-n1">16 mins to cook</span>
                                                </div>
                                                <!--end::Title-->
                                            </div>
                                            <!--end::Info-->
                                            <!--begin::Total-->
                                            <span class="text-success text-end fw-bold fs-1">$9.00$</span>
                                            <!--end::Total-->
                                        </div>
                                        <!--end::Body-->
                                    </div>
                                    <!--end::Card-->
                                    <!--begin::Card-->
                                    <div class="card card-flush flex-row-fluid p-6 pb-5 mw-100">
                                        <!--begin::Body-->
                                        <div class="card-body text-center">
                                            <!--begin::Food img-->
                                            <img src="assets/media/stock/food/img-8.jpg" class="rounded-3 mb-4 w-150px h-150px w-xxl-200px h-xxl-200px" alt="" />
                                            <!--end::Food img-->
                                            <!--begin::Info-->
                                            <div class="mb-2">
                                                <!--begin::Title-->
                                                <div class="text-center">
                                                    <span class="fw-bold text-gray-800 cursor-pointer text-hover-primary fs-3 fs-xl-1">Ramen</span>
                                                    <span class="text-gray-400 fw-semibold d-block fs-6 mt-n1">16 mins to cook</span>
                                                </div>
                                                <!--end::Title-->
                                            </div>
                                            <!--end::Info-->
                                            <!--begin::Total-->
                                            <span class="text-success text-end fw-bold fs-1">$14.90$</span>
                                            <!--end::Total-->
                                        </div>
                                        <!--end::Body-->
                                    </div>
                                    <!--end::Card-->
                                    <!--begin::Card-->
                                    <div class="card card-flush flex-row-fluid p-6 pb-5 mw-100">
                                        <!--begin::Body-->
                                        <div class="card-body text-center">
                                            <!--begin::Food img-->
                                            <img src="assets/media/stock/food/img-9.jpg" class="rounded-3 mb-4 w-150px h-150px w-xxl-200px h-xxl-200px" alt="" />
                                            <!--end::Food img-->
                                            <!--begin::Info-->
                                            <div class="mb-2">
                                                <!--begin::Title-->
                                                <div class="text-center">
                                                    <span class="fw-bold text-gray-800 cursor-pointer text-hover-primary fs-3 fs-xl-1">Soup of the Day</span>
                                                    <span class="text-gray-400 fw-semibold d-block fs-6 mt-n1">16 mins to cook</span>
                                                </div>
                                                <!--end::Title-->
                                            </div>
                                            <!--end::Info-->
                                            <!--begin::Total-->
                                            <span class="text-success text-end fw-bold fs-1">$7.50$</span>
                                            <!--end::Total-->
                                        </div>
                                        <!--end::Body-->
                                    </div>
                                    <!--end::Card-->
                                    <!--begin::Card-->
                                    <div class="card card-flush flex-row-fluid p-6 pb-5 mw-100">
                                        <!--begin::Body-->
                                        <div class="card-body text-center">
                                            <!--begin::Food img-->
                                            <img src="assets/media/stock/food/img-11.jpg" class="rounded-3 mb-4 w-150px h-150px w-xxl-200px h-xxl-200px" alt="" />
                                            <!--end::Food img-->
                                            <!--begin::Info-->
                                            <div class="mb-2">
                                                <!--begin::Title-->
                                                <div class="text-center">
                                                    <span class="fw-bold text-gray-800 cursor-pointer text-hover-primary fs-3 fs-xl-1">Sweety</span>
                                                    <span class="text-gray-400 fw-semibold d-block fs-6 mt-n1">16 mins to cook</span>
                                                </div>
                                                <!--end::Title-->
                                            </div>
                                            <!--end::Info-->
                                            <!--begin::Total-->
                                            <span class="text-success text-end fw-bold fs-1">$11.40$</span>
                                            <!--end::Total-->
                                        </div>
                                        <!--end::Body-->
                                    </div>
                                    <!--end::Card-->
                                    <!--begin::Card-->
                                    <div class="card card-flush flex-row-fluid p-6 pb-5 mw-100">
                                        <!--begin::Body-->
                                        <div class="card-body text-center">
                                            <!--begin::Food img-->
                                            <img src="assets/media/stock/food/img-3.jpg" class="rounded-3 mb-4 w-150px h-150px w-xxl-200px h-xxl-200px" alt="" />
                                            <!--end::Food img-->
                                            <!--begin::Info-->
                                            <div class="mb-2">
                                                <!--begin::Title-->
                                                <div class="text-center">
                                                    <span class="fw-bold text-gray-800 cursor-pointer text-hover-primary fs-3 fs-xl-1">Pancakes</span>
                                                    <span class="text-gray-400 fw-semibold d-block fs-6 mt-n1">16 mins to cook</span>
                                                </div>
                                                <!--end::Title-->
                                            </div>
                                            <!--end::Info-->
                                            <!--begin::Total-->
                                            <span class="text-success text-end fw-bold fs-1">$6.50$</span>
                                            <!--end::Total-->
                                        </div>
                                        <!--end::Body-->
                                    </div>
                                    <!--end::Card-->
                                    <!--begin::Card-->
                                    <div class="card card-flush flex-row-fluid p-6 pb-5 mw-100">
                                        <!--begin::Body-->
                                        <div class="card-body text-center">
                                            <!--begin::Food img-->
                                            <img src="assets/media/stock/food/img-7.jpg" class="rounded-3 mb-4 w-150px h-150px w-xxl-200px h-xxl-200px" alt="" />
                                            <!--end::Food img-->
                                            <!--begin::Info-->
                                            <div class="mb-2">
                                                <!--begin::Title-->
                                                <div class="text-center">
                                                    <span class="fw-bold text-gray-800 cursor-pointer text-hover-primary fs-3 fs-xl-1">Chef’s Salmon</span>
                                                    <span class="text-gray-400 fw-semibold d-block fs-6 mt-n1">16 mins to cook</span>
                                                </div>
                                                <!--end::Title-->
                                            </div>
                                            <!--end::Info-->
                                            <!--begin::Total-->
                                            <span class="text-success text-end fw-bold fs-1">$12.40$</span>
                                            <!--end::Total-->
                                        </div>
                                        <!--end::Body-->
                                    </div>
                                    <!--end::Card-->
                                    <!--begin::Card-->
                                    <div class="card card-flush flex-row-fluid p-6 pb-5 mw-100">
                                        <!--begin::Body-->
                                        <div class="card-body text-center">
                                            <!--begin::Food img-->
                                            <img src="assets/media/stock/food/img-10.jpg" class="rounded-3 mb-4 w-150px h-150px w-xxl-200px h-xxl-200px" alt="" />
                                            <!--end::Food img-->
                                            <!--begin::Info-->
                                            <div class="mb-2">
                                                <!--begin::Title-->
                                                <div class="text-center">
                                                    <span class="fw-bold text-gray-800 cursor-pointer text-hover-primary fs-3 fs-xl-1">Tenderlion Steak</span>
                                                    <span class="text-gray-400 fw-semibold d-block fs-6 mt-n1">16 mins to cook</span>
                                                </div>
                                                <!--end::Title-->
                                            </div>
                                            <!--end::Info-->
                                            <!--begin::Total-->
                                            <span class="text-success text-end fw-bold fs-1">$19.00$</span>
                                            <!--end::Total-->
                                        </div>
                                        <!--end::Body-->
                                    </div>
                                    <!--end::Card-->
                                </div>
                                <!--end::Wrapper-->
                            </div>
                            <!--end::Tap pane-->
                            <!--begin::Tap pane-->
                            <div class="tab-pane fade" id="kt_pos_food_content_5">
                                <!--begin::Wrapper-->
                                <div class="d-flex flex-wrap d-grid gap-5 gap-xxl-9">
                                    <!--begin::Card-->
                                    <div class="card card-flush flex-row-fluid p-6 pb-5 mw-100">
                                        <!--begin::Body-->
                                        <div class="card-body text-center">
                                            <!--begin::Food img-->
                                            <img src="assets/media/stock/food/img-10.jpg" class="rounded-3 mb-4 w-150px h-150px w-xxl-200px h-xxl-200px" alt="" />
                                            <!--end::Food img-->
                                            <!--begin::Info-->
                                            <div class="mb-2">
                                                <!--begin::Title-->
                                                <div class="text-center">
                                                    <span class="fw-bold text-gray-800 cursor-pointer text-hover-primary fs-3 fs-xl-1">Tenderlion Steak</span>
                                                    <span class="text-gray-400 fw-semibold d-block fs-6 mt-n1">16 mins to cook</span>
                                                </div>
                                                <!--end::Title-->
                                            </div>
                                            <!--end::Info-->
                                            <!--begin::Total-->
                                            <span class="text-success text-end fw-bold fs-1">$19.00$</span>
                                            <!--end::Total-->
                                        </div>
                                        <!--end::Body-->
                                    </div>
                                    <!--end::Card-->
                                    <!--begin::Card-->
                                    <div class="card card-flush flex-row-fluid p-6 pb-5 mw-100">
                                        <!--begin::Body-->
                                        <div class="card-body text-center">
                                            <!--begin::Food img-->
                                            <img src="assets/media/stock/food/img-5.jpg" class="rounded-3 mb-4 w-150px h-150px w-xxl-200px h-xxl-200px" alt="" />
                                            <!--end::Food img-->
                                            <!--begin::Info-->
                                            <div class="mb-2">
                                                <!--begin::Title-->
                                                <div class="text-center">
                                                    <span class="fw-bold text-gray-800 cursor-pointer text-hover-primary fs-3 fs-xl-1">Breakfast</span>
                                                    <span class="text-gray-400 fw-semibold d-block fs-6 mt-n1">16 mins to cook</span>
                                                </div>
                                                <!--end::Title-->
                                            </div>
                                            <!--end::Info-->
                                            <!--begin::Total-->
                                            <span class="text-success text-end fw-bold fs-1">$8.20$</span>
                                            <!--end::Total-->
                                        </div>
                                        <!--end::Body-->
                                    </div>
                                    <!--end::Card-->
                                    <!--begin::Card-->
                                    <div class="card card-flush flex-row-fluid p-6 pb-5 mw-100">
                                        <!--begin::Body-->
                                        <div class="card-body text-center">
                                            <!--begin::Food img-->
                                            <img src="assets/media/stock/food/img-4.jpg" class="rounded-3 mb-4 w-150px h-150px w-xxl-200px h-xxl-200px" alt="" />
                                            <!--end::Food img-->
                                            <!--begin::Info-->
                                            <div class="mb-2">
                                                <!--begin::Title-->
                                                <div class="text-center">
                                                    <span class="fw-bold text-gray-800 cursor-pointer text-hover-primary fs-3 fs-xl-1">Chicken Breast</span>
                                                    <span class="text-gray-400 fw-semibold d-block fs-6 mt-n1">16 mins to cook</span>
                                                </div>
                                                <!--end::Title-->
                                            </div>
                                            <!--end::Info-->
                                            <!--begin::Total-->
                                            <span class="text-success text-end fw-bold fs-1">$9.00$</span>
                                            <!--end::Total-->
                                        </div>
                                        <!--end::Body-->
                                    </div>
                                    <!--end::Card-->
                                    <!--begin::Card-->
                                    <div class="card card-flush flex-row-fluid p-6 pb-5 mw-100">
                                        <!--begin::Body-->
                                        <div class="card-body text-center">
                                            <!--begin::Food img-->
                                            <img src="assets/media/stock/food/img-3.jpg" class="rounded-3 mb-4 w-150px h-150px w-xxl-200px h-xxl-200px" alt="" />
                                            <!--end::Food img-->
                                            <!--begin::Info-->
                                            <div class="mb-2">
                                                <!--begin::Title-->
                                                <div class="text-center">
                                                    <span class="fw-bold text-gray-800 cursor-pointer text-hover-primary fs-3 fs-xl-1">Pancakes</span>
                                                    <span class="text-gray-400 fw-semibold d-block fs-6 mt-n1">16 mins to cook</span>
                                                </div>
                                                <!--end::Title-->
                                            </div>
                                            <!--end::Info-->
                                            <!--begin::Total-->
                                            <span class="text-success text-end fw-bold fs-1">$6.50$</span>
                                            <!--end::Total-->
                                        </div>
                                        <!--end::Body-->
                                    </div>
                                    <!--end::Card-->
                                    <!--begin::Card-->
                                    <div class="card card-flush flex-row-fluid p-6 pb-5 mw-100">
                                        <!--begin::Body-->
                                        <div class="card-body text-center">
                                            <!--begin::Food img-->
                                            <img src="assets/media/stock/food/img-2.jpg" class="rounded-3 mb-4 w-150px h-150px w-xxl-200px h-xxl-200px" alt="" />
                                            <!--end::Food img-->
                                            <!--begin::Info-->
                                            <div class="mb-2">
                                                <!--begin::Title-->
                                                <div class="text-center">
                                                    <span class="fw-bold text-gray-800 cursor-pointer text-hover-primary fs-3 fs-xl-1">T-Bone Stake</span>
                                                    <span class="text-gray-400 fw-semibold d-block fs-6 mt-n1">16 mins to cook</span>
                                                </div>
                                                <!--end::Title-->
                                            </div>
                                            <!--end::Info-->
                                            <!--begin::Total-->
                                            <span class="text-success text-end fw-bold fs-1">$16.50$</span>
                                            <!--end::Total-->
                                        </div>
                                        <!--end::Body-->
                                    </div>
                                    <!--end::Card-->
                                    <!--begin::Card-->
                                    <div class="card card-flush flex-row-fluid p-6 pb-5 mw-100">
                                        <!--begin::Body-->
                                        <div class="card-body text-center">
                                            <!--begin::Food img-->
                                            <img src="assets/media/stock/food/img-7.jpg" class="rounded-3 mb-4 w-150px h-150px w-xxl-200px h-xxl-200px" alt="" />
                                            <!--end::Food img-->
                                            <!--begin::Info-->
                                            <div class="mb-2">
                                                <!--begin::Title-->
                                                <div class="text-center">
                                                    <span class="fw-bold text-gray-800 cursor-pointer text-hover-primary fs-3 fs-xl-1">Chef’s Salmon</span>
                                                    <span class="text-gray-400 fw-semibold d-block fs-6 mt-n1">16 mins to cook</span>
                                                </div>
                                                <!--end::Title-->
                                            </div>
                                            <!--end::Info-->
                                            <!--begin::Total-->
                                            <span class="text-success text-end fw-bold fs-1">$12.40$</span>
                                            <!--end::Total-->
                                        </div>
                                        <!--end::Body-->
                                    </div>
                                    <!--end::Card-->
                                    <!--begin::Card-->
                                    <div class="card card-flush flex-row-fluid p-6 pb-5 mw-100">
                                        <!--begin::Body-->
                                        <div class="card-body text-center">
                                            <!--begin::Food img-->
                                            <img src="assets/media/stock/food/img-8.jpg" class="rounded-3 mb-4 w-150px h-150px w-xxl-200px h-xxl-200px" alt="" />
                                            <!--end::Food img-->
                                            <!--begin::Info-->
                                            <div class="mb-2">
                                                <!--begin::Title-->
                                                <div class="text-center">
                                                    <span class="fw-bold text-gray-800 cursor-pointer text-hover-primary fs-3 fs-xl-1">Ramen</span>
                                                    <span class="text-gray-400 fw-semibold d-block fs-6 mt-n1">16 mins to cook</span>
                                                </div>
                                                <!--end::Title-->
                                            </div>
                                            <!--end::Info-->
                                            <!--begin::Total-->
                                            <span class="text-success text-end fw-bold fs-1">$14.90$</span>
                                            <!--end::Total-->
                                        </div>
                                        <!--end::Body-->
                                    </div>
                                    <!--end::Card-->
                                    <!--begin::Card-->
                                    <div class="card card-flush flex-row-fluid p-6 pb-5 mw-100">
                                        <!--begin::Body-->
                                        <div class="card-body text-center">
                                            <!--begin::Food img-->
                                            <img src="assets/media/stock/food/img-9.jpg" class="rounded-3 mb-4 w-150px h-150px w-xxl-200px h-xxl-200px" alt="" />
                                            <!--end::Food img-->
                                            <!--begin::Info-->
                                            <div class="mb-2">
                                                <!--begin::Title-->
                                                <div class="text-center">
                                                    <span class="fw-bold text-gray-800 cursor-pointer text-hover-primary fs-3 fs-xl-1">Soup of the Day</span>
                                                    <span class="text-gray-400 fw-semibold d-block fs-6 mt-n1">16 mins to cook</span>
                                                </div>
                                                <!--end::Title-->
                                            </div>
                                            <!--end::Info-->
                                            <!--begin::Total-->
                                            <span class="text-success text-end fw-bold fs-1">$7.50$</span>
                                            <!--end::Total-->
                                        </div>
                                        <!--end::Body-->
                                    </div>
                                    <!--end::Card-->
                                    <!--begin::Card-->
                                    <div class="card card-flush flex-row-fluid p-6 pb-5 mw-100">
                                        <!--begin::Body-->
                                        <div class="card-body text-center">
                                            <!--begin::Food img-->
                                            <img src="assets/media/stock/food/img-11.jpg" class="rounded-3 mb-4 w-150px h-150px w-xxl-200px h-xxl-200px" alt="" />
                                            <!--end::Food img-->
                                            <!--begin::Info-->
                                            <div class="mb-2">
                                                <!--begin::Title-->
                                                <div class="text-center">
                                                    <span class="fw-bold text-gray-800 cursor-pointer text-hover-primary fs-3 fs-xl-1">Sweety</span>
                                                    <span class="text-gray-400 fw-semibold d-block fs-6 mt-n1">16 mins to cook</span>
                                                </div>
                                                <!--end::Title-->
                                            </div>
                                            <!--end::Info-->
                                            <!--begin::Total-->
                                            <span class="text-success text-end fw-bold fs-1">$11.40$</span>
                                            <!--end::Total-->
                                        </div>
                                        <!--end::Body-->
                                    </div>
                                    <!--end::Card-->
                                </div>
                                <!--end::Wrapper-->
                            </div>
                            <!--end::Tap pane-->
                        </div>
                        <!--end::Tab Content-->
                    </div>
                    <!--end: Card Body-->
                </div>
                <!--end::Pos food-->
            </div>
            <!--end::Content-->
            <!--begin::Sidebar-->
            <div class="flex-row-auto w-xl-425px">
                <!--begin::Pos order-->
                <div class="card card-flush bg-body" id="kt_pos_form">
                    <!--begin::Header-->
                    <div class="card-header pt-5">
                        <h3 class="card-title fw-bold text-gray-800 fs-2qx">Orden Actual</h3>
                        <!--begin::Toolbar-->
                        <div class="card-toolbar">
                            <a href="#" class="btn btn-light-primary fs-4 fw-bold py-4">Clear All</a>
                        </div>
                        <!--end::Toolbar-->
                    </div>
                    <!--end::Header-->
                    <!--begin::Body-->
                    <div class="card-body pt-0">
                        <!--begin::Table container-->
                        <div class="table-responsive mb-8">
                            <!--begin::Table-->
                            <table class="table align-middle gs-0 gy-4 my-0">
                                <!--begin::Table head-->
                                <thead>
                                    <tr>
                                        <th class="min-w-175px"></th>
                                        <th class="w-125px"></th>
                                        <th class="w-60px"></th>
                                    </tr>
                                </thead>
                                <!--end::Table head-->
                                <!--begin::Table body-->
                                <tbody>
                                    <tr data-kt-pos-element="item" data-kt-pos-item-price="33">
                                        <td class="pe-0">
                                            <div class="d-flex align-items-center">
                                                <img src="{{ asset('metronic/assets/media/stock/ecommerce/1.gif') }}" class="w-50px h-50px rounded-3 me-3" alt="" />
                                                <span class="fw-bold text-gray-800 cursor-pointer text-hover-primary fs-6 me-1">T-Bone Stake</span>
                                            </div>
                                        </td>
                                        <td class="pe-0">
                                            <!--begin::Dialer-->
                                            <div class="position-relative d-flex align-items-center" data-kt-dialer="true" data-kt-dialer-min="1" data-kt-dialer-max="10" data-kt-dialer-step="1" data-kt-dialer-decimals="0">
                                                <!--begin::Decrease control-->
                                                <button type="button" class="btn btn-icon btn-sm btn-light btn-icon-gray-400" data-kt-dialer-control="decrease">
                                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr089.svg-->
                                                    <span class="svg-icon svg-icon-3x">
                                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <rect x="6" y="11" width="12" height="2" rx="1" fill="currentColor" />
                                                        </svg>
                                                    </span>
                                                    <!--end::Svg Icon-->
                                                </button>
                                                <!--end::Decrease control-->
                                                <!--begin::Input control-->
                                                <input type="text" class="form-control border-0 text-center px-0 fs-3 fw-bold text-gray-800 w-30px" data-kt-dialer-control="input" placeholder="Amount" name="manageBudget" readonly="readonly" value="2" />
                                                <!--end::Input control-->
                                                <!--begin::Increase control-->
                                                <button type="button" class="btn btn-icon btn-sm btn-light btn-icon-gray-400" data-kt-dialer-control="increase">
                                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr087.svg-->
                                                    <span class="svg-icon svg-icon-3x">
                                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <rect opacity="0.5" x="11" y="18" width="12" height="2" rx="1" transform="rotate(-90 11 18)" fill="currentColor" />
                                                            <rect x="6" y="11" width="12" height="2" rx="1" fill="currentColor" />
                                                        </svg>
                                                    </span>
                                                    <!--end::Svg Icon-->
                                                </button>
                                                <!--end::Increase control-->
                                            </div>
                                            <!--end::Dialer-->
                                        </td>
                                        <td class="text-end">
                                            <span class="fw-bold text-primary fs-2" data-kt-pos-element="item-total">$66.00</span>
                                        </td>
                                    </tr>
                                    <tr data-kt-pos-element="item" data-kt-pos-item-price="7.5">
                                        <td class="pe-0">
                                            <div class="d-flex align-items-center">
                                                <img src="{{ asset('metronic/assets/media/stock/ecommerce/70.gif') }}" class="w-50px h-50px rounded-3 me-3" alt="" />
                                                <span class="fw-bold text-gray-800 cursor-pointer text-hover-primary fs-6 me-1">Soup of the Day</span>
                                            </div>
                                        </td>
                                        <td class="pe-0">
                                            <!--begin::Dialer-->
                                            <div class="position-relative d-flex align-items-center" data-kt-dialer="true" data-kt-dialer-min="1" data-kt-dialer-max="10" data-kt-dialer-step="1" data-kt-dialer-decimals="0">
                                                <!--begin::Decrease control-->
                                                <button type="button" class="btn btn-icon btn-sm btn-light btn-icon-gray-400" data-kt-dialer-control="decrease">
                                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr089.svg-->
                                                    <span class="svg-icon svg-icon-3x">
                                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <rect x="6" y="11" width="12" height="2" rx="1" fill="currentColor" />
                                                        </svg>
                                                    </span>
                                                    <!--end::Svg Icon-->
                                                </button>
                                                <!--end::Decrease control-->
                                                <!--begin::Input control-->
                                                <input type="text" class="form-control border-0 text-center px-0 fs-3 fw-bold text-gray-800 w-30px" data-kt-dialer-control="input" placeholder="Amount" name="manageBudget" readonly="readonly" value="1" />
                                                <!--end::Input control-->
                                                <!--begin::Increase control-->
                                                <button type="button" class="btn btn-icon btn-sm btn-light btn-icon-gray-400" data-kt-dialer-control="increase">
                                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr087.svg-->
                                                    <span class="svg-icon svg-icon-3x">
                                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <rect opacity="0.5" x="11" y="18" width="12" height="2" rx="1" transform="rotate(-90 11 18)" fill="currentColor" />
                                                            <rect x="6" y="11" width="12" height="2" rx="1" fill="currentColor" />
                                                        </svg>
                                                    </span>
                                                    <!--end::Svg Icon-->
                                                </button>
                                                <!--end::Increase control-->
                                            </div>
                                            <!--end::Dialer-->
                                        </td>
                                        <td class="text-end">
                                            <span class="fw-bold text-primary fs-2" data-kt-pos-element="item-total">$7.50</span>
                                        </td>
                                    </tr>
                                    <tr data-kt-pos-element="item" data-kt-pos-item-price="13.5">
                                        <td class="pe-0">
                                            <div class="d-flex align-items-center">
                                                <img src="{{ asset('metronic/assets/media/stock/ecommerce/192.gif') }}" class="w-50px h-50px rounded-3 me-3" alt="" />
                                                <span class="fw-bold text-gray-800 cursor-pointer text-hover-primary fs-6 me-1">Pancakes</span>
                                            </div>
                                        </td>
                                        <td class="pe-0">
                                            <!--begin::Dialer-->
                                            <div class="position-relative d-flex align-items-center" data-kt-dialer="true" data-kt-dialer-min="1" data-kt-dialer-max="10" data-kt-dialer-step="1" data-kt-dialer-decimals="0">
                                                <!--begin::Decrease control-->
                                                <button type="button" class="btn btn-icon btn-sm btn-light btn-icon-gray-400" data-kt-dialer-control="decrease">
                                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr089.svg-->
                                                    <span class="svg-icon svg-icon-3x">
                                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <rect x="6" y="11" width="12" height="2" rx="1" fill="currentColor" />
                                                        </svg>
                                                    </span>
                                                    <!--end::Svg Icon-->
                                                </button>
                                                <!--end::Decrease control-->
                                                <!--begin::Input control-->
                                                <input type="text" class="form-control border-0 text-center px-0 fs-3 fw-bold text-gray-800 w-30px" data-kt-dialer-control="input" placeholder="Amount" name="manageBudget" readonly="readonly" value="2" />
                                                <!--end::Input control-->
                                                <!--begin::Increase control-->
                                                <button type="button" class="btn btn-icon btn-sm btn-light btn-icon-gray-400" data-kt-dialer-control="increase">
                                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr087.svg-->
                                                    <span class="svg-icon svg-icon-3x">
                                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <rect opacity="0.5" x="11" y="18" width="12" height="2" rx="1" transform="rotate(-90 11 18)" fill="currentColor" />
                                                            <rect x="6" y="11" width="12" height="2" rx="1" fill="currentColor" />
                                                        </svg>
                                                    </span>
                                                    <!--end::Svg Icon-->
                                                </button>
                                                <!--end::Increase control-->
                                            </div>
                                            <!--end::Dialer-->
                                        </td>
                                        <td class="text-end">
                                            <span class="fw-bold text-primary fs-2" data-kt-pos-element="item-total">$27.00</span>
                                        </td>
                                    </tr>
                                    <tr data-kt-pos-element="item" data-kt-pos-item-price="13.5">
                                        <td class="pe-0">
                                            <div class="d-flex align-items-center">
                                                <img src="{{ asset('metronic/assets/media/stock/ecommerce/193.gif') }}" class="w-50px h-50px rounded-3 me-3" alt="" />
                                                <span class="fw-bold text-gray-800 cursor-pointer text-hover-primary fs-6 me-1">Pancakes</span>
                                            </div>
                                        </td>
                                        <td class="pe-0">
                                            <!--begin::Dialer-->
                                            <div class="position-relative d-flex align-items-center" data-kt-dialer="true" data-kt-dialer-min="1" data-kt-dialer-max="10" data-kt-dialer-step="1" data-kt-dialer-decimals="0">
                                                <!--begin::Decrease control-->
                                                <button type="button" class="btn btn-icon btn-sm btn-light btn-icon-gray-400" data-kt-dialer-control="decrease">
                                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr089.svg-->
                                                    <span class="svg-icon svg-icon-3x">
                                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <rect x="6" y="11" width="12" height="2" rx="1" fill="currentColor" />
                                                        </svg>
                                                    </span>
                                                    <!--end::Svg Icon-->
                                                </button>
                                                <!--end::Decrease control-->
                                                <!--begin::Input control-->
                                                <input type="text" class="form-control border-0 text-center px-0 fs-3 fw-bold text-gray-800 w-30px" data-kt-dialer-control="input" placeholder="Amount" name="manageBudget" readonly="readonly" value="2" />
                                                <!--end::Input control-->
                                                <!--begin::Increase control-->
                                                <button type="button" class="btn btn-icon btn-sm btn-light btn-icon-gray-400" data-kt-dialer-control="increase">
                                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr087.svg-->
                                                    <span class="svg-icon svg-icon-3x">
                                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <rect opacity="0.5" x="11" y="18" width="12" height="2" rx="1" transform="rotate(-90 11 18)" fill="currentColor" />
                                                            <rect x="6" y="11" width="12" height="2" rx="1" fill="currentColor" />
                                                        </svg>
                                                    </span>
                                                    <!--end::Svg Icon-->
                                                </button>
                                                <!--end::Increase control-->
                                            </div>
                                            <!--end::Dialer-->
                                        </td>
                                        <td class="text-end">
                                            <span class="fw-bold text-primary fs-2" data-kt-pos-element="item-total">$27.00</span>
                                        </td>
                                    </tr>
                                </tbody>
                                <!--end::Table body-->
                            </table>
                            <!--end::Table-->
                        </div>
                        <!--end::Table container-->
                        <!--begin::Summary-->
                        <div class="d-flex flex-stack bg-success rounded-3 p-6 mb-11">
                            <!--begin::Content-->
                            <div class="fs-6 fw-bold text-white">
                                <span class="d-block mb-2">Cantidad productos</span>
                                <span class="d-block lh-1 mb-2">Subtotal</span>
                                <span class="d-block mb-9">Descuento</span>
                                <span class="d-block fs-2qx lh-1">Total</span>
                            </div>
                            <!--end::Content-->
                            <!--begin::Content-->
                            <div class="fs-6 fw-bold text-white text-end">
                                <span class="d-block lh-1 mb-2" data-kt-pos-element="total">4</span>
                                <span class="d-block mb-2" data-kt-pos-element="discount">$100.50</span>
                                <span class="d-block mb-9" data-kt-pos-element="tax">-$8.00</span>
                                <span class="d-block fs-2qx lh-1" data-kt-pos-element="grant-total">$93.46</span>
                            </div>
                            <!--end::Content-->
                        </div>
                        <!--end::Summary-->
                        <!--begin::Payment Method-->
                        <div class="m-0">
                            <!--begin::Title-->
                            <h1 class="fw-bold text-gray-800 mb-5">Método de pago</h1>
                            <!--end::Title-->
                            <!--begin::Radio group-->
                            <div class="d-flex flex-equal gap-5 gap-xxl-9 px-0 mb-12" data-kt-buttons="true" data-kt-buttons-target="[data-kt-button]">
                                <!--begin::Radio-->
                                <label class="btn bg-light btn-color-gray-600 btn-active-text-gray-800 border border-3 border-gray-100 border-active-primary btn-active-light-primary w-100 px-4" data-kt-button="true">
                                    <!--begin::Input-->
                                    <input class="btn-check" type="radio" name="method" value="0" />
                                    <!--end::Input-->
                                    <!--begin::Icon-->
                                    <i class="fonticon-cash-payment fs-2hx mb-2 pe-0"></i>
                                    <!--end::Icon-->
                                    <!--begin::Title-->
                                    <span class="fs-7 fw-bold d-block">Efectivo</span>
                                    <!--end::Title-->
                                </label>
                                <!--end::Radio-->
                                <!--begin::Radio-->
                                <label class="btn bg-light btn-color-gray-600 btn-active-text-gray-800 border border-3 border-gray-100 border-active-primary btn-active-light-primary w-100 px-4 active" data-kt-button="true">
                                    <!--begin::Input-->
                                    <input class="btn-check" type="radio" name="method" value="1" />
                                    <!--end::Input-->
                                    <!--begin::Icon-->
                                    <i class="fonticon-card fs-2hx mb-2 pe-0"></i>
                                    <!--end::Icon-->
                                    <!--begin::Title-->
                                    <span class="fs-7 fw-bold d-block">Tarjeta</span>
                                    <!--end::Title-->
                                </label>
                                <!--end::Radio-->
                                <!--begin::Radio-->
                                <label class="btn bg-light btn-color-gray-600 btn-active-text-gray-800 border border-3 border-gray-100 border-active-primary btn-active-light-primary w-100 px-4" data-kt-button="true">
                                    <!--begin::Input-->
                                    <input class="btn-check" type="radio" name="method" value="2" />
                                    <!--end::Input-->
                                    <!--begin::Icon-->
                                    <i class="fonticon-mobile-payment fs-2hx mb-2 pe-0"></i>
                                    <!--end::Icon-->
                                    <!--begin::Title-->
                                    <span class="fs-7 fw-bold d-block">Vales</span>
                                    <!--end::Title-->
                                </label>
                                <!--end::Radio-->
                            </div>
                            <!--end::Radio group-->
                            <!--begin::Actions-->
                            <button class="btn btn-primary fs-1 w-100 py-4">Imprimir recibo</button>
                            <!--end::Actions-->
                        </div>
                        <!--end::Payment Method-->
                    </div>
                    <!--end: Card Body-->
                </div>
                <!--end::Pos order-->
            </div>
            <!--end::Sidebar-->
        </div>
        <!--end::Layout-->
    </div>
    <!--end::Container-->
</div> --}}
<!--end::Content-->
{{-- FIN PRIMERA OPCION --}}

{{-- SEGUNDA OPCION --}}
<!--begin::Content-->
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Container-->
    <div id="kt_content_container" class="container-fluid">
        <!--begin::Layout-->
        <div class="d-flex flex-column flex-xl-row">
            <!--begin::Content-->
            <div class="d-flex-auto flex-row-fluid me-xl-9 mb-10 mb-xl-1">
                <div class="card card-flush bg-body" id="kt_pos_form"> <br>
                    <div class="d-flex align-items-center xposition-relative xmb-n5 gs-3 gy-4 my-1">
                        <!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
                        <span class="svg-icon svg-icon-1 position-absolute ms-4">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1" transform="rotate(45 17.0365 15.1223)" fill="currentColor"></rect>
                                <path d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z" fill="currentColor"></path>
                            </svg>
                        </span>
                        <!--end::Svg Icon-->
                        <input type="text" data-kt-ecommerce-edit-order-filter="search" class="form-control form-control-solid w-100 w-lg-50 ps-14" placeholder="Burcar producto">
                    </div>
                    <table class="table align-middle gs-3 gy-4 my-0">
                        <!--begin::Table head-->
                        <thead>
                            <tr>
                                <th class="min-w-175px center">Producto</th>
                                <th class="w-125px">Cantidad</th>
                                <th class="w-60px">Total</th>
                            </tr>
                        </thead>
                        <!--end::Table head-->
                        <!--begin::Table body-->
                        <tbody>
                            <tr data-kt-pos-element="item" data-kt-pos-item-price="33">
                                <td class="pe-0">
                                    <div class="d-flex align-items-center">
                                        <img src="{{ asset('metronic/assets/media/stock/ecommerce/1.gif') }}" class="w-50px h-50px rounded-3 me-3" alt="" />
                                        <span class="fw-bold text-gray-800 cursor-pointer text-hover-primary fs-6 me-1">T-Bone Stake</span>
                                    </div>
                                </td>
                                <td class="pe-0">
                                    <!--begin::Dialer-->
                                    <div class="position-relative d-flex align-items-center" data-kt-dialer="true" data-kt-dialer-min="1" data-kt-dialer-max="10" data-kt-dialer-step="1" data-kt-dialer-decimals="0">
                                        <!--begin::Decrease control-->
                                        <button type="button" class="btn btn-icon btn-sm btn-light btn-icon-gray-400" data-kt-dialer-control="decrease">
                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr089.svg-->
                                            <span class="svg-icon svg-icon-3x">
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <rect x="6" y="11" width="12" height="2" rx="1" fill="currentColor" />
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                        </button>
                                        <!--end::Decrease control-->
                                        <!--begin::Input control-->
                                        <input type="text" class="form-control border-0 text-center px-0 fs-3 fw-bold text-gray-800 w-30px" data-kt-dialer-control="input" placeholder="Amount" name="manageBudget" readonly="readonly" value="2" />
                                        <!--end::Input control-->
                                        <!--begin::Increase control-->
                                        <button type="button" class="btn btn-icon btn-sm btn-light btn-icon-gray-400" data-kt-dialer-control="increase">
                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr087.svg-->
                                            <span class="svg-icon svg-icon-3x">
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <rect opacity="0.5" x="11" y="18" width="12" height="2" rx="1" transform="rotate(-90 11 18)" fill="currentColor" />
                                                    <rect x="6" y="11" width="12" height="2" rx="1" fill="currentColor" />
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                        </button>
                                        <!--end::Increase control-->
                                    </div>
                                    <!--end::Dialer-->
                                </td>
                                <td class="text-end">
                                    <span class="fw-bold text-primary fs-2" data-kt-pos-element="item-total">$66.00</span>
                                </td>
                            </tr>
                            <tr data-kt-pos-element="item" data-kt-pos-item-price="7.5">
                                <td class="pe-0">
                                    <div class="d-flex align-items-center">
                                        <img src="{{ asset('metronic/assets/media/stock/ecommerce/70.gif') }}" class="w-50px h-50px rounded-3 me-3" alt="" />
                                        <span class="fw-bold text-gray-800 cursor-pointer text-hover-primary fs-6 me-1">Soup of the Day</span>
                                    </div>
                                </td>
                                <td class="pe-0">
                                    <!--begin::Dialer-->
                                    <div class="position-relative d-flex align-items-center" data-kt-dialer="true" data-kt-dialer-min="1" data-kt-dialer-max="10" data-kt-dialer-step="1" data-kt-dialer-decimals="0">
                                        <!--begin::Decrease control-->
                                        <button type="button" class="btn btn-icon btn-sm btn-light btn-icon-gray-400" data-kt-dialer-control="decrease">
                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr089.svg-->
                                            <span class="svg-icon svg-icon-3x">
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <rect x="6" y="11" width="12" height="2" rx="1" fill="currentColor" />
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                        </button>
                                        <!--end::Decrease control-->
                                        <!--begin::Input control-->
                                        <input type="text" class="form-control border-0 text-center px-0 fs-3 fw-bold text-gray-800 w-30px" data-kt-dialer-control="input" placeholder="Amount" name="manageBudget" readonly="readonly" value="1" />
                                        <!--end::Input control-->
                                        <!--begin::Increase control-->
                                        <button type="button" class="btn btn-icon btn-sm btn-light btn-icon-gray-400" data-kt-dialer-control="increase">
                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr087.svg-->
                                            <span class="svg-icon svg-icon-3x">
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <rect opacity="0.5" x="11" y="18" width="12" height="2" rx="1" transform="rotate(-90 11 18)" fill="currentColor" />
                                                    <rect x="6" y="11" width="12" height="2" rx="1" fill="currentColor" />
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                        </button>
                                        <!--end::Increase control-->
                                    </div>
                                    <!--end::Dialer-->
                                </td>
                                <td class="text-end">
                                    <span class="fw-bold text-primary fs-2" data-kt-pos-element="item-total">$7.50</span>
                                </td>
                            </tr>
                            <tr data-kt-pos-element="item" data-kt-pos-item-price="13.5">
                                <td class="pe-0">
                                    <div class="d-flex align-items-center">
                                        <img src="{{ asset('metronic/assets/media/stock/ecommerce/192.gif') }}" class="w-50px h-50px rounded-3 me-3" alt="" />
                                        <span class="fw-bold text-gray-800 cursor-pointer text-hover-primary fs-6 me-1">Pancakes</span>
                                    </div>
                                </td>
                                <td class="pe-0">
                                    <!--begin::Dialer-->
                                    <div class="position-relative d-flex align-items-center" data-kt-dialer="true" data-kt-dialer-min="1" data-kt-dialer-max="10" data-kt-dialer-step="1" data-kt-dialer-decimals="0">
                                        <!--begin::Decrease control-->
                                        <button type="button" class="btn btn-icon btn-sm btn-light btn-icon-gray-400" data-kt-dialer-control="decrease">
                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr089.svg-->
                                            <span class="svg-icon svg-icon-3x">
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <rect x="6" y="11" width="12" height="2" rx="1" fill="currentColor" />
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                        </button>
                                        <!--end::Decrease control-->
                                        <!--begin::Input control-->
                                        <input type="text" class="form-control border-0 text-center px-0 fs-3 fw-bold text-gray-800 w-30px" data-kt-dialer-control="input" placeholder="Amount" name="manageBudget" readonly="readonly" value="2" />
                                        <!--end::Input control-->
                                        <!--begin::Increase control-->
                                        <button type="button" class="btn btn-icon btn-sm btn-light btn-icon-gray-400" data-kt-dialer-control="increase">
                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr087.svg-->
                                            <span class="svg-icon svg-icon-3x">
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <rect opacity="0.5" x="11" y="18" width="12" height="2" rx="1" transform="rotate(-90 11 18)" fill="currentColor" />
                                                    <rect x="6" y="11" width="12" height="2" rx="1" fill="currentColor" />
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                        </button>
                                        <!--end::Increase control-->
                                    </div>
                                    <!--end::Dialer-->
                                </td>
                                <td class="text-end">
                                    <span class="fw-bold text-primary fs-2" data-kt-pos-element="item-total">$27.00</span>
                                </td>
                            </tr>
                            <tr data-kt-pos-element="item" data-kt-pos-item-price="13.5">
                                <td class="pe-0">
                                    <div class="d-flex align-items-center">
                                        <img src="{{ asset('metronic/assets/media/stock/ecommerce/193.gif') }}" class="w-50px h-50px rounded-3 me-3" alt="" />
                                        <span class="fw-bold text-gray-800 cursor-pointer text-hover-primary fs-6 me-1">Pancakes</span>
                                    </div>
                                </td>
                                <td class="pe-0">
                                    <!--begin::Dialer-->
                                    <div class="position-relative d-flex align-items-center" data-kt-dialer="true" data-kt-dialer-min="1" data-kt-dialer-max="10" data-kt-dialer-step="1" data-kt-dialer-decimals="0">
                                        <!--begin::Decrease control-->
                                        <button type="button" class="btn btn-icon btn-sm btn-light btn-icon-gray-400" data-kt-dialer-control="decrease">
                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr089.svg-->
                                            <span class="svg-icon svg-icon-3x">
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <rect x="6" y="11" width="12" height="2" rx="1" fill="currentColor" />
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                        </button>
                                        <!--end::Decrease control-->
                                        <!--begin::Input control-->
                                        <input type="text" class="form-control border-0 text-center px-0 fs-3 fw-bold text-gray-800 w-30px" data-kt-dialer-control="input" placeholder="Amount" name="manageBudget" readonly="readonly" value="2" />
                                        <!--end::Input control-->
                                        <!--begin::Increase control-->
                                        <button type="button" class="btn btn-icon btn-sm btn-light btn-icon-gray-400" data-kt-dialer-control="increase">
                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr087.svg-->
                                            <span class="svg-icon svg-icon-3x">
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <rect opacity="0.5" x="11" y="18" width="12" height="2" rx="1" transform="rotate(-90 11 18)" fill="currentColor" />
                                                    <rect x="6" y="11" width="12" height="2" rx="1" fill="currentColor" />
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                        </button>
                                        <!--end::Increase control-->
                                    </div>
                                    <!--end::Dialer-->
                                </td>
                                <td class="text-end">
                                    <span class="fw-bold text-primary fs-2" data-kt-pos-element="item-total">$27.00</span>
                                </td>
                            </tr>
                        </tbody>
                        <!--end::Table body-->
                    </table>
                </div>

            </div>
            <!--end::Content-->
            <!--begin::Sidebar-->
            <div class="flex-row-auto w-xl-425px">
                <!--begin::Pos order-->
                <div class="card card-flush bg-body" id="kt_pos_form">
                    <!--begin::Header-->
                    <div class="card-header pt-5">
                        <h3 class="card-title fw-bold text-gray-800 fs-2qx">Orden Actual</h3>
                        <!--begin::Toolbar-->
                        <div class="card-toolbar">
                            <a href="#" class="btn btn-light-primary fs-4 fw-bold py-4">Clear All</a>
                        </div>
                        <!--end::Toolbar-->
                    </div>
                    <!--end::Header-->
                    <!--begin::Body-->
                    <div class="card-body pt-0">
                        <!--begin::Table container-->
                        <div class="table-responsive mb-8">
                            <!--begin::Table-->
                            {{-- <table class="table align-middle gs-0 gy-4 my-0">
                                <!--begin::Table head-->
                                <thead>
                                    <tr>
                                        <th class="min-w-175px"></th>
                                        <th class="w-125px"></th>
                                        <th class="w-60px"></th>
                                    </tr>
                                </thead>
                                <!--end::Table head-->
                                <!--begin::Table body-->
                                <tbody>
                                    <tr data-kt-pos-element="item" data-kt-pos-item-price="33">
                                        <td class="pe-0">
                                            <div class="d-flex align-items-center">
                                                <img src="{{ asset('metronic/assets/media/stock/ecommerce/1.gif') }}" class="w-50px h-50px rounded-3 me-3" alt="" />
                                                <span class="fw-bold text-gray-800 cursor-pointer text-hover-primary fs-6 me-1">T-Bone Stake</span>
                                            </div>
                                        </td>
                                        <td class="pe-0">
                                            <!--begin::Dialer-->
                                            <div class="position-relative d-flex align-items-center" data-kt-dialer="true" data-kt-dialer-min="1" data-kt-dialer-max="10" data-kt-dialer-step="1" data-kt-dialer-decimals="0">
                                                <!--begin::Decrease control-->
                                                <button type="button" class="btn btn-icon btn-sm btn-light btn-icon-gray-400" data-kt-dialer-control="decrease">
                                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr089.svg-->
                                                    <span class="svg-icon svg-icon-3x">
                                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <rect x="6" y="11" width="12" height="2" rx="1" fill="currentColor" />
                                                        </svg>
                                                    </span>
                                                    <!--end::Svg Icon-->
                                                </button>
                                                <!--end::Decrease control-->
                                                <!--begin::Input control-->
                                                <input type="text" class="form-control border-0 text-center px-0 fs-3 fw-bold text-gray-800 w-30px" data-kt-dialer-control="input" placeholder="Amount" name="manageBudget" readonly="readonly" value="2" />
                                                <!--end::Input control-->
                                                <!--begin::Increase control-->
                                                <button type="button" class="btn btn-icon btn-sm btn-light btn-icon-gray-400" data-kt-dialer-control="increase">
                                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr087.svg-->
                                                    <span class="svg-icon svg-icon-3x">
                                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <rect opacity="0.5" x="11" y="18" width="12" height="2" rx="1" transform="rotate(-90 11 18)" fill="currentColor" />
                                                            <rect x="6" y="11" width="12" height="2" rx="1" fill="currentColor" />
                                                        </svg>
                                                    </span>
                                                    <!--end::Svg Icon-->
                                                </button>
                                                <!--end::Increase control-->
                                            </div>
                                            <!--end::Dialer-->
                                        </td>
                                        <td class="text-end">
                                            <span class="fw-bold text-primary fs-2" data-kt-pos-element="item-total">$66.00</span>
                                        </td>
                                    </tr>
                                    <tr data-kt-pos-element="item" data-kt-pos-item-price="7.5">
                                        <td class="pe-0">
                                            <div class="d-flex align-items-center">
                                                <img src="{{ asset('metronic/assets/media/stock/ecommerce/70.gif') }}" class="w-50px h-50px rounded-3 me-3" alt="" />
                                                <span class="fw-bold text-gray-800 cursor-pointer text-hover-primary fs-6 me-1">Soup of the Day</span>
                                            </div>
                                        </td>
                                        <td class="pe-0">
                                            <!--begin::Dialer-->
                                            <div class="position-relative d-flex align-items-center" data-kt-dialer="true" data-kt-dialer-min="1" data-kt-dialer-max="10" data-kt-dialer-step="1" data-kt-dialer-decimals="0">
                                                <!--begin::Decrease control-->
                                                <button type="button" class="btn btn-icon btn-sm btn-light btn-icon-gray-400" data-kt-dialer-control="decrease">
                                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr089.svg-->
                                                    <span class="svg-icon svg-icon-3x">
                                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <rect x="6" y="11" width="12" height="2" rx="1" fill="currentColor" />
                                                        </svg>
                                                    </span>
                                                    <!--end::Svg Icon-->
                                                </button>
                                                <!--end::Decrease control-->
                                                <!--begin::Input control-->
                                                <input type="text" class="form-control border-0 text-center px-0 fs-3 fw-bold text-gray-800 w-30px" data-kt-dialer-control="input" placeholder="Amount" name="manageBudget" readonly="readonly" value="1" />
                                                <!--end::Input control-->
                                                <!--begin::Increase control-->
                                                <button type="button" class="btn btn-icon btn-sm btn-light btn-icon-gray-400" data-kt-dialer-control="increase">
                                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr087.svg-->
                                                    <span class="svg-icon svg-icon-3x">
                                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <rect opacity="0.5" x="11" y="18" width="12" height="2" rx="1" transform="rotate(-90 11 18)" fill="currentColor" />
                                                            <rect x="6" y="11" width="12" height="2" rx="1" fill="currentColor" />
                                                        </svg>
                                                    </span>
                                                    <!--end::Svg Icon-->
                                                </button>
                                                <!--end::Increase control-->
                                            </div>
                                            <!--end::Dialer-->
                                        </td>
                                        <td class="text-end">
                                            <span class="fw-bold text-primary fs-2" data-kt-pos-element="item-total">$7.50</span>
                                        </td>
                                    </tr>
                                    <tr data-kt-pos-element="item" data-kt-pos-item-price="13.5">
                                        <td class="pe-0">
                                            <div class="d-flex align-items-center">
                                                <img src="{{ asset('metronic/assets/media/stock/ecommerce/192.gif') }}" class="w-50px h-50px rounded-3 me-3" alt="" />
                                                <span class="fw-bold text-gray-800 cursor-pointer text-hover-primary fs-6 me-1">Pancakes</span>
                                            </div>
                                        </td>
                                        <td class="pe-0">
                                            <!--begin::Dialer-->
                                            <div class="position-relative d-flex align-items-center" data-kt-dialer="true" data-kt-dialer-min="1" data-kt-dialer-max="10" data-kt-dialer-step="1" data-kt-dialer-decimals="0">
                                                <!--begin::Decrease control-->
                                                <button type="button" class="btn btn-icon btn-sm btn-light btn-icon-gray-400" data-kt-dialer-control="decrease">
                                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr089.svg-->
                                                    <span class="svg-icon svg-icon-3x">
                                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <rect x="6" y="11" width="12" height="2" rx="1" fill="currentColor" />
                                                        </svg>
                                                    </span>
                                                    <!--end::Svg Icon-->
                                                </button>
                                                <!--end::Decrease control-->
                                                <!--begin::Input control-->
                                                <input type="text" class="form-control border-0 text-center px-0 fs-3 fw-bold text-gray-800 w-30px" data-kt-dialer-control="input" placeholder="Amount" name="manageBudget" readonly="readonly" value="2" />
                                                <!--end::Input control-->
                                                <!--begin::Increase control-->
                                                <button type="button" class="btn btn-icon btn-sm btn-light btn-icon-gray-400" data-kt-dialer-control="increase">
                                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr087.svg-->
                                                    <span class="svg-icon svg-icon-3x">
                                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <rect opacity="0.5" x="11" y="18" width="12" height="2" rx="1" transform="rotate(-90 11 18)" fill="currentColor" />
                                                            <rect x="6" y="11" width="12" height="2" rx="1" fill="currentColor" />
                                                        </svg>
                                                    </span>
                                                    <!--end::Svg Icon-->
                                                </button>
                                                <!--end::Increase control-->
                                            </div>
                                            <!--end::Dialer-->
                                        </td>
                                        <td class="text-end">
                                            <span class="fw-bold text-primary fs-2" data-kt-pos-element="item-total">$27.00</span>
                                        </td>
                                    </tr>
                                    <tr data-kt-pos-element="item" data-kt-pos-item-price="13.5">
                                        <td class="pe-0">
                                            <div class="d-flex align-items-center">
                                                <img src="{{ asset('metronic/assets/media/stock/ecommerce/193.gif') }}" class="w-50px h-50px rounded-3 me-3" alt="" />
                                                <span class="fw-bold text-gray-800 cursor-pointer text-hover-primary fs-6 me-1">Pancakes</span>
                                            </div>
                                        </td>
                                        <td class="pe-0">
                                            <!--begin::Dialer-->
                                            <div class="position-relative d-flex align-items-center" data-kt-dialer="true" data-kt-dialer-min="1" data-kt-dialer-max="10" data-kt-dialer-step="1" data-kt-dialer-decimals="0">
                                                <!--begin::Decrease control-->
                                                <button type="button" class="btn btn-icon btn-sm btn-light btn-icon-gray-400" data-kt-dialer-control="decrease">
                                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr089.svg-->
                                                    <span class="svg-icon svg-icon-3x">
                                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <rect x="6" y="11" width="12" height="2" rx="1" fill="currentColor" />
                                                        </svg>
                                                    </span>
                                                    <!--end::Svg Icon-->
                                                </button>
                                                <!--end::Decrease control-->
                                                <!--begin::Input control-->
                                                <input type="text" class="form-control border-0 text-center px-0 fs-3 fw-bold text-gray-800 w-30px" data-kt-dialer-control="input" placeholder="Amount" name="manageBudget" readonly="readonly" value="2" />
                                                <!--end::Input control-->
                                                <!--begin::Increase control-->
                                                <button type="button" class="btn btn-icon btn-sm btn-light btn-icon-gray-400" data-kt-dialer-control="increase">
                                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr087.svg-->
                                                    <span class="svg-icon svg-icon-3x">
                                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <rect opacity="0.5" x="11" y="18" width="12" height="2" rx="1" transform="rotate(-90 11 18)" fill="currentColor" />
                                                            <rect x="6" y="11" width="12" height="2" rx="1" fill="currentColor" />
                                                        </svg>
                                                    </span>
                                                    <!--end::Svg Icon-->
                                                </button>
                                                <!--end::Increase control-->
                                            </div>
                                            <!--end::Dialer-->
                                        </td>
                                        <td class="text-end">
                                            <span class="fw-bold text-primary fs-2" data-kt-pos-element="item-total">$27.00</span>
                                        </td>
                                    </tr>
                                </tbody>
                                <!--end::Table body-->
                            </table> --}}
                            <!--end::Table-->
                        </div>
                        <!--end::Table container-->
                        <!--begin::Summary-->
                        <div class="d-flex flex-stack bg-success rounded-3 p-6 mb-11">
                            <!--begin::Content-->
                            <div class="fs-6 fw-bold text-white">
                                <span class="d-block mb-2">Cantidad productos</span>
                                <span class="d-block lh-1 mb-2">Subtotal</span>
                                <span class="d-block mb-9">Descuento</span>
                                <span class="d-block fs-2qx lh-1">Total</span>
                            </div>
                            <!--end::Content-->
                            <!--begin::Content-->
                            <div class="fs-6 fw-bold text-white text-end">
                                <span class="d-block lh-1 mb-2" data-kt-pos-element="total">4</span>
                                <span class="d-block mb-2" data-kt-pos-element="discount">$100.50</span>
                                <span class="d-block mb-9" data-kt-pos-element="tax">-$8.00</span>
                                <span class="d-block fs-2qx lh-1" data-kt-pos-element="grant-total">$93.46</span>
                            </div>
                            <!--end::Content-->
                        </div>
                        <!--end::Summary-->
                        <!--begin::Payment Method-->
                        <div class="m-0">
                            <!--begin::Title-->
                            <h1 class="fw-bold text-gray-800 mb-5">Método de pago</h1>
                            <!--end::Title-->
                            <!--begin::Radio group-->
                            <div class="d-flex flex-equal gap-5 gap-xxl-9 px-0 mb-12" data-kt-buttons="true" data-kt-buttons-target="[data-kt-button]">
                                <!--begin::Radio-->
                                <label class="btn bg-light btn-color-gray-600 btn-active-text-gray-800 border border-3 border-gray-100 border-active-primary btn-active-light-primary w-100 px-4" data-kt-button="true">
                                    <!--begin::Input-->
                                    <input class="btn-check" type="radio" name="method" value="0" />
                                    <!--end::Input-->
                                    <!--begin::Icon-->
                                    <i class="fonticon-cash-payment fs-2hx mb-2 pe-0"></i>
                                    <!--end::Icon-->
                                    <!--begin::Title-->
                                    <span class="fs-7 fw-bold d-block">Efectivo</span>
                                    <!--end::Title-->
                                </label>
                                <!--end::Radio-->
                                <!--begin::Radio-->
                                <label class="btn bg-light btn-color-gray-600 btn-active-text-gray-800 border border-3 border-gray-100 border-active-primary btn-active-light-primary w-100 px-4 active" data-kt-button="true">
                                    <!--begin::Input-->
                                    <input class="btn-check" type="radio" name="method" value="1" />
                                    <!--end::Input-->
                                    <!--begin::Icon-->
                                    <i class="fonticon-card fs-2hx mb-2 pe-0"></i>
                                    <!--end::Icon-->
                                    <!--begin::Title-->
                                    <span class="fs-7 fw-bold d-block">Tarjeta</span>
                                    <!--end::Title-->
                                </label>
                                <!--end::Radio-->
                                <!--begin::Radio-->
                                <label class="btn bg-light btn-color-gray-600 btn-active-text-gray-800 border border-3 border-gray-100 border-active-primary btn-active-light-primary w-100 px-4" data-kt-button="true">
                                    <!--begin::Input-->
                                    <input class="btn-check" type="radio" name="method" value="2" />
                                    <!--end::Input-->
                                    <!--begin::Icon-->
                                    <i class="fonticon-mobile-payment fs-2hx mb-2 pe-0"></i>
                                    <!--end::Icon-->
                                    <!--begin::Title-->
                                    <span class="fs-7 fw-bold d-block">Vales</span>
                                    <!--end::Title-->
                                </label>
                                <!--end::Radio-->
                            </div>
                            <!--end::Radio group-->
                            <!--begin::Actions-->
                            <button class="btn btn-primary fs-1 w-100 py-4">Imprimir recibo</button>
                            <!--end::Actions-->
                        </div>
                        <!--end::Payment Method-->
                    </div>
                    <!--end: Card Body-->
                </div>
                <!--end::Pos order-->
            </div>
            <!--end::Sidebar-->
        </div>
        <!--end::Layout-->
    </div>
    <!--end::Container-->
</div>
<!--end::Content-->
{{-- FIN SEGUNDA OPCION --}}

@endsection
