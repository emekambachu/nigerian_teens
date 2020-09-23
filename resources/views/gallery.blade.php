@extends('layouts.main')

@section('title')
    Gallery
@endsection

@section('contents')
    <div class="wt-bnr-inr overlay-wraper" style="background-image:url({{ asset('main/slider/slide2.jpg') }});">
        <div class="overlay-main bg-black opacity-07"></div>
        <div class="container">
            <div class="wt-bnr-inr-entry">
                <h1 class="text-white">Gallery</h1>
            </div>
        </div>
    </div>

    <div class="bg-gray-light p-tb20">
        <div class="container">
            <ul class="wt-breadcrumb breadcrumb-style-2">
                <li><a href="{{ url('/')}}"><i class="fa fa-home"></i> Home</a></li>
                <li>Gallery</li>
            </ul>
        </div>
    </div>

    <div class="section-full p-t80 p-b50">
        <div class="container">

            <!-- GALLERY CONTENT START -->
            <div class="row">
                <div class="portfolio-wrap mfp-gallery no-col-gap" style="position: relative; height: 983.868px;">

                    <!-- COLUMNS 1 -->
                    <div class="masonry-item cat-1 col-lg-4 col-md-4 col-sm-6 col-xs-6"
                         style="position: absolute; left: 0px; top: 0px;">
                        <div class="wt-gallery-bx p-a15">
                            <div class="wt-thum-bx wt-img-overlay5 wt-img-effect blurr">
                                <a href="javascript:void(0);">
                                    <img src="{{ asset('main/gallery/1.jpg') }}" alt="">
                                </a>
                                <div class="overlay-bx">
                                    <div class="overlay-icon">
                                        <a href="javascript:void(0);">
                                            <i class="fa fa-external-link wt-icon-box-xs"></i>
                                        </a>
                                        <a href="{{ asset('main/gallery/1.jpg') }}" class="mfp-link">
                                            <i class="fa fa-arrows-alt wt-icon-box-xs"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- COLUMNS 2 -->
                    <div class="masonry-item cat-2 col-lg-4 col-md-4 col-sm-6 col-xs-6"
                         style="position: absolute; left: 375px; top: 0px;">
                        <div class="wt-gallery-bx p-a15">
                            <div class="wt-thum-bx wt-img-overlay5 wt-img-effect blurr">
                                <a href="javascript:void(0);">
                                    <img src="{{ asset('main/gallery/2.jpg') }}" alt="">
                                </a>
                                <div class="overlay-bx">
                                    <div class="overlay-icon">
                                        <a href="javascript:void(0);">
                                            <i class="fa fa-external-link wt-icon-box-xs"></i>
                                        </a>
                                        <a href="{{ asset('main/gallery/2.jpg') }}" class="mfp-link">
                                            <i class="fa fa-arrows-alt wt-icon-box-xs"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- COLUMNS 3 -->
                    <div class="masonry-item cat-3 col-lg-4 col-md-4 col-sm-6 col-xs-6"
                         style="position: absolute; left: 0px; top: 245px;">
                        <div class="wt-gallery-bx p-a15">
                            <div class="wt-thum-bx wt-img-overlay5 wt-img-effect blurr">
                                <a href="javascript:void(0);">
                                    <img src="{{ asset('main/gallery/3.jpg') }}" alt="">
                                </a>
                                <div class="overlay-bx">
                                    <div class="overlay-icon">
                                        <a href="javascript:void(0);">
                                            <i class="fa fa-external-link wt-icon-box-xs"></i>
                                        </a>
                                        <a href="{{ asset('main/gallery/3.jpg') }}" class="mfp-link">
                                            <i class="fa fa-arrows-alt wt-icon-box-xs"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- COLUMNS 4 -->
                    <div class="masonry-item cat-4 col-lg-4 col-md-4 col-sm-6 col-xs-6"
                         style="position: absolute; left: 375px; top: 245px;">
                        <div class="wt-gallery-bx p-a15">
                            <div class="wt-thum-bx wt-img-overlay5 wt-img-effect blurr">
                                <a href="javascript:void(0);">
                                    <img src="{{ asset('main/gallery/4.jpg') }}" alt="">
                                </a>
                                <div class="overlay-bx">
                                    <div class="overlay-icon">
                                        <a href="javascript:void(0);">
                                            <i class="fa fa-external-link wt-icon-box-xs"></i>
                                        </a>
                                        <a href="{{ asset('main/gallery/4.jpg') }}" class="mfp-link m-b15">
                                            <i class="fa fa-arrows-alt wt-icon-box-xs"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- COLUMNS 5 -->
                    <div class="masonry-item cat-5 col-lg-4 col-md-4 col-sm-6 col-xs-6"
                         style="position: absolute; left: 0px; top: 491px;">
                        <div class="wt-gallery-bx p-a15">
                            <div class="wt-thum-bx wt-img-overlay5 wt-img-effect blurr">
                                <a href="javascript:void(0);">
                                    <img src="{{ asset('main/gallery/5.jpg') }}" alt="">
                                </a>
                                <div class="overlay-bx">
                                    <div class="overlay-icon">
                                        <a href="javascript:void(0);">
                                            <i class="fa fa-external-link wt-icon-box-xs"></i>
                                        </a>
                                        <a href="{{ asset('main/gallery/5.jpg') }}" class="mfp-link">
                                            <i class="fa fa-arrows-alt wt-icon-box-xs"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- COLUMNS 6 -->
                    <div class="masonry-item cat-4 col-lg-4 col-md-4 col-sm-6 col-xs-6"
                         style="position: absolute; left: 375px; top: 491px;">
                        <div class="wt-gallery-bx p-a15">
                            <div class="wt-thum-bx wt-img-overlay5 wt-img-effect blurr">
                                <a href="javascript:void(0);">
                                    <img src="{{ asset('main/gallery/6.jpg') }}" alt="">
                                </a>
                                <div class="overlay-bx">
                                    <div class="overlay-icon">
                                        <a href="javascript:void(0);">
                                            <i class="fa fa-external-link wt-icon-box-xs"></i>
                                        </a>
                                        <a href="{{ asset('main/gallery/6.jpg') }}" class="mfp-link">
                                            <i class="fa fa-arrows-alt wt-icon-box-xs"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- COLUMNS 7 -->
                    <div class="masonry-item cat-3 col-lg-4 col-md-4 col-sm-6 col-xs-6"
                         style="position: absolute; left: 0px; top: 737px;">
                        <div class="wt-gallery-bx p-a15">
                            <div class="wt-thum-bx wt-img-overlay5 wt-img-effect blurr">
                                <a href="javascript:void(0);">
                                    <img src="{{ asset('main/gallery/7.jpg') }}" alt="">
                                </a>
                                <div class="overlay-bx">
                                    <div class="overlay-icon">
                                        <a href="javascript:void(0);">
                                            <i class="fa fa-external-link wt-icon-box-xs"></i>
                                        </a>
                                        <a href="{{ asset('main/gallery/7.jpg') }}" class="mfp-link">
                                            <i class="fa fa-arrows-alt wt-icon-box-xs"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- COLUMNS 8 -->
                    <div class="masonry-item cat-2 col-lg-4 col-md-4 col-sm-6 col-xs-6"
                         style="position: absolute; left: 375px; top: 737px;">
                        <div class="wt-gallery-bx p-a15">
                            <div class="wt-thum-bx wt-img-overlay5 wt-img-effect blurr">
                                <a href="javascript:void(0);">
                                    <img src="{{ asset('main/gallery/8.jpg') }}" alt="">
                                </a>
                                <div class="overlay-bx">
                                    <div class="overlay-icon">
                                        <a href="javascript:void(0);">
                                            <i class="fa fa-external-link wt-icon-box-xs"></i>
                                        </a>
                                        <a href="{{ asset('main/gallery/8.jpg') }}" class="mfp-link">
                                            <i class="fa fa-arrows-alt wt-icon-box-xs"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- COLUMNS 8 -->
                    <div class="masonry-item cat-2 col-lg-4 col-md-4 col-sm-6 col-xs-6"
                         style="position: absolute; left: 375px; top: 737px;">
                        <div class="wt-gallery-bx p-a15">
                            <div class="wt-thum-bx wt-img-overlay5 wt-img-effect blurr">
                                <a href="javascript:void(0);">
                                    <img src="{{ asset('main/gallery/9.jpg') }}" alt="">
                                </a>
                                <div class="overlay-bx">
                                    <div class="overlay-icon">
                                        <a href="javascript:void(0);">
                                            <i class="fa fa-external-link wt-icon-box-xs"></i>
                                        </a>
                                        <a href="{{ asset('main/gallery/9.jpg') }}" class="mfp-link">
                                            <i class="fa fa-arrows-alt wt-icon-box-xs"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- COLUMNS 8 -->
                    <div class="masonry-item cat-2 col-lg-4 col-md-4 col-sm-6 col-xs-6"
                         style="position: absolute; left: 375px; top: 737px;">
                        <div class="wt-gallery-bx p-a15">
                            <div class="wt-thum-bx wt-img-overlay5 wt-img-effect blurr">
                                <a href="javascript:void(0);">
                                    <img src="{{ asset('main/gallery/10.jpg') }}" alt="">
                                </a>
                                <div class="overlay-bx">
                                    <div class="overlay-icon">
                                        <a href="javascript:void(0);">
                                            <i class="fa fa-external-link wt-icon-box-xs"></i>
                                        </a>
                                        <a href="{{ asset('main/gallery/10.jpg') }}" class="mfp-link">
                                            <i class="fa fa-arrows-alt wt-icon-box-xs"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- COLUMNS 8 -->
                    <div class="masonry-item cat-2 col-lg-4 col-md-4 col-sm-6 col-xs-6"
                         style="position: absolute; left: 375px; top: 737px;">
                        <div class="wt-gallery-bx p-a15">
                            <div class="wt-thum-bx wt-img-overlay5 wt-img-effect blurr">
                                <a href="javascript:void(0);">
                                    <img src="{{ asset('main/gallery/11.jpg') }}" alt="">
                                </a>
                                <div class="overlay-bx">
                                    <div class="overlay-icon">
                                        <a href="javascript:void(0);">
                                            <i class="fa fa-external-link wt-icon-box-xs"></i>
                                        </a>
                                        <a href="{{ asset('main/gallery/11.jpg') }}" class="mfp-link">
                                            <i class="fa fa-arrows-alt wt-icon-box-xs"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- COLUMNS 8 -->
                    <div class="masonry-item cat-2 col-lg-4 col-md-4 col-sm-6 col-xs-6"
                         style="position: absolute; left: 375px; top: 737px;">
                        <div class="wt-gallery-bx p-a15">
                            <div class="wt-thum-bx wt-img-overlay5 wt-img-effect blurr">
                                <a href="javascript:void(0);">
                                    <img src="{{ asset('main/gallery/12.jpg') }}" alt="">
                                </a>
                                <div class="overlay-bx">
                                    <div class="overlay-icon">
                                        <a href="javascript:void(0);">
                                            <i class="fa fa-external-link wt-icon-box-xs"></i>
                                        </a>
                                        <a href="{{ asset('main/gallery/12.jpg') }}" class="mfp-link">
                                            <i class="fa fa-arrows-alt wt-icon-box-xs"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <!-- GALLERY CONTENT END -->

        </div>
    </div>
@endsection
