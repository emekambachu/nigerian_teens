@extends('layouts.main')

@section('title')
    Contestants
@endsection

@section('contents')
    <div class="wt-bnr-inr overlay-wraper" style="background-image:url({{ asset('main/slider/slide2.jpg') }});">
        <div class="overlay-main bg-black opacity-07"></div>
        <div class="container">
            <div class="wt-bnr-inr-entry">
                <h1 class="text-white">Contestants</h1>
            </div>
        </div>
    </div>

    <div class="bg-gray-light p-tb20">
        <div class="container">
            <ul class="wt-breadcrumb breadcrumb-style-2">
                <li><a href="{{ url('/')}}"><i class="fa fa-home"></i> Home</a></li>
                <li>Contestants</li>
            </ul>
        </div>
    </div>

    <div class="section-full p-t80 p-b50">
        <div class="container-fluid">

            <div class="section-content">

                <div class="row">
                    <div class="col-md-6">
                        <form class="contactform wrap-form clearfix text-center" method="get"
                              action="{{ url('contestants/search') }}" novalidate="novalidate">
                            @csrf
                            <label class="col-md-8">
                                <span class="input-group">
                                <span class="input-group-addon"><i class="fa fa-search"></i></span>
                                <input class="form-control" name="name" type="text" value=""
                                       placeholder="Search Contestants" required="required"></span>
                            </label>

                            <button class="m-b15 site-button green radius-xl m-r15" type="submit">Search</button>
                        </form>
                    </div>
                </div>

                <div class="row">

                @foreach($contestants as $index => $con)
                    <!-- COLUMNS 1 -->
                        <div class="col-md-3 col-sm-6 col-xs-6 col-xs-100pc m-t30">
                            <div class="wt-team-four">
                                <div class="wt-team-media">
                                    <a href="{{ route('view-contestant', $con->slug) }}">
                                        <img src="{{ asset('photos/'.$con->image) }}" alt=""></a>
                                </div>
                                <div class="wt-team-info">
                                    <div class="wt-team-skew-block">
                                        <div class="social-icons-outer p-a20">
                                            <ul class="white-border m-b0" style="list-style: none;">
                                                <li class="text-white">{{ $con->votes }} Votes</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="p-a20">
                                        <h4 class="wt-team-title text-uppercase">
                                            <a href="{{ route('view-contestant', $con->slug) }}">{{ $con->name }}</a></h4>
                                        <a href="{{ route('view-contestant', $con->slug) }}">
                                            <button class="m-b15 site-button graphical m-r15" type="button">Vote</button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>

                <!-- PAGINATION -->
                <ul class="custom-pagination pagination">
                    @if ($contestants->lastPage() > 1)
                        {{ $contestants->render() }}
                    @endif
                </ul>
            </div>

        </div>
    </div>


@endsection
