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


@endsection
