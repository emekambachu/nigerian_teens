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
                <li><a href="{{ route('vote-contestants.index') }}"><i class="fa fa-user"></i> Vote Contestants</a></li>
                <li>{{ $con->name }}</li>
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
                            <h4 style="color: #015432;">Payment Details</h4>
                            <img src="{{ asset('main/paystack_logo.png') }}" width="90" class="mb-3"/>

                            <p style="color: #015432;"><strong>Name:</strong>
                                {{ !empty(Session::get('accname')) ? Session::get('accname') : Null }} </p>

                            <p style="color: #015432;"><strong>Votes:</strong>
                                {{ !empty(Session::get('votes')) ? Session::get('votes') : Null }} </p>

                            <p style="color: #015432;"><strong>Amount:</strong>
                                ₦ {{ !empty(Session::get('amount')) ? Session::get('amount') : Null }} </p>

                            <form method="POST" action="{{ route('pay') }}"
                                  accept-charset="UTF-8" class="form-horizontal" role="form">
                                <div class="row" style="margin-bottom:40px;">
                                    <div class="col-md-8 col-md-offset-2">
                                        <input type="hidden" name="first_name"
                                               value="{{ !empty(Session::get('accname')) ? Session::get('accname') : Null }}">  <!--required-->
                                        <input type="hidden" name="email"
                                               value="{{ !empty(Session::get('email')) ? Session::get('email') : Null }}">  <!--required-->
                                        <input type="hidden" name="amount"
                                               value="5000">  <!--required in kobo-->
                                        <input type="hidden" name="quantity"
                                               value="{{ !empty(Session::get('votes')) ? Session::get('votes') : Null }}">
                                        <input type="hidden" name="currency" value="NGN">
                                        <input type="hidden" name="metadata"
                                               value="{{ json_encode($array = [
                                            'name' => !empty(Session::get('accname')) ? Session::get('accname') : Null,
                                            'email' => !empty(Session::get('email')) ? Session::get('email') : Null,
                                            'contestant_id' => !empty(Session::get('contestant_id')) ? Session::get('contestant_id') : Null,
                                            'votes' => !empty(Session::get('votes')) ? Session::get('votes') : Null,
                                            'amount' => !empty(Session::get('amount')) ? Session::get('amount') : Null,
                                            ]) }}">  <!--For other necessary things you want to add to your payload. it is optional though-->
                                        <input type="hidden" name="reference" value="{{ Paystack::genTranxRef() }}">  <!--required-->
                                        @csrf

                                        <p>
                                            <button class="btn btn-success btn-lg btn-block" type="submit" value="Pay Now!">
                                                <i class="fa fa-plus-circle fa-lg"></i> Pay Now!
                                            </button>
                                        </p>

                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- LEFT PART END -->

                <!-- RIGHT PART END -->
            </div>
        </div>
    </div>
@endsection
