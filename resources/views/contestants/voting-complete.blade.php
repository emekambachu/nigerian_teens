@extends('layouts.main')

@section('title')
    Voting Complete
@endsection

@section('contents')
    <div class="wt-bnr-inr overlay-wraper" style="background-image:url({{ asset('main/slider/slide2.jpg') }});">
        <div class="overlay-main bg-black opacity-07"></div>
        <div class="container">
            <div class="wt-bnr-inr-entry">
                <h1 class="text-white">Voting Complete</h1>
            </div>
        </div>
    </div>

    <div class="bg-gray-light p-tb20">
        <div class="container">
            <ul class="wt-breadcrumb breadcrumb-style-2">
                <li><a href="{{ url('/')}}"><i class="fa fa-home"></i> Home</a></li>
                <li><a href="{{ route('vote-contestants.index') }}"><i class="fa fa-user"></i> Vote Contestants</a></li>
                <li>Voting Complete</li>
            </ul>
        </div>
    </div>

    <div class="section-full p-t80 p-b50" style="background-image: url('{{ asset('main/bg1.jpg') }}')">
        <div class="container">
            <div class="row">

            @include('includes.alerts')

            <!-- LEFT PART START -->
                <div class="col-md-6">
                    <!-- BLOG START -->
                    <div class="blog-post date-style-1 blog-detail">
                        <div class="wt-post-media wt-img-effect">
                            <h4 style="color: #015432;">Voting Complete</h4>

                                    </div>
                                </div>
                        </div>
                    </div>
                </div>
                <!-- LEFT PART END -->

                <!-- RIGHT PART END -->
            </div>
    </div>
@endsection
