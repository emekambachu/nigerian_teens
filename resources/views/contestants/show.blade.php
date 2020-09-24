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
                <div class="col-md-5">
                    <!-- BLOG START -->
                    <div class="blog-post date-style-1 blog-detail">
                        <div class="wt-post-media wt-img-effect">
                            <a href="javascript:void(0);"><img src="{{ asset('photos/'.$con->image) }}" alt=""></a>
                        </div>
                    </div>
                </div>
                <!-- LEFT PART END -->

                <!-- SIDE BAR START -->
                <div class="col-md-7">

                    <aside class="side-bar">
                        <h4 style="color: #015432;">Payment Methods: (50 Naira per Vote)</h4>
                        <p style="color: #015432;"><strong>1) Fill in your details to Pay with Paystack</strong></p>
                        <img src="{{ asset('main/paystack_logo.png') }}" width="150"/>

                        <form style="margin-top: 10px;" method="post"
                              action="{{ url('contestant/paystack/'.$con->id) }}">
                            @csrf
                            <label class="col-md-4">
                                <span class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                    <input class="form-control" name="accname" type="text"
                                           value="" placeholder="Full Name:*"
                                           required="required"></span>
                            </label>

                            <label class="col-md-4">
                                <span class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                    <input class="form-control" name="email" type="text"
                                           value="" placeholder="Your email-id:*"
                                           required="required"></span>
                            </label>

                            <label class="col-md-4">
                                <span class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-star"></i></span>
                                    <input class="form-control" minlength="4" name="votes" type="number"
                                           placeholder="Votes (Minimum 4):*"
                                           required="required"></span>
                            </label>

                            <button class="m-b15 site-button green radius-xl m-r15" type="submit">Submit</button>
                        </form>

                        <p style="color: #015432;">
                            <strong>
                                2) Or Pay to our bank account first, then fill in your details below.
                                The votes would be added upon payment approval
                            </strong><br><br>

                            <strong>Pay to the account details below</strong><br>
                            <strong>Account Name:</strong> Nigerian teens<br>
                            <strong>Account number:</strong> 0471161692<br>
                            <strong>Bank:</strong> GT Bank
                        </p>

                        <p style="color: #015432;"><strong>Voting reflects after 4 hours</strong></p>

                        <form method="post" action="{{ url('contestant/bank-payment/'.$con->id) }}">
                            @csrf
                            <label class="col-md-6">
                                <span class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-bank"></i></span>
                                    <input class="form-control" name="accname" type="text"
                                           value="" placeholder="Full Name (from bank):*"
                                           required="required"></span>
                            </label>

                            <label class="col-md-6">
                                <span class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-bank"></i></span>
                                    <input class="form-control" name="accnum" type="text"
                                           value="" placeholder="Account Number:*"
                                           required="required"></span>
                            </label>

                            <label class="col-md-6">
                                <span class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-bank"></i></span>
                                    <input class="form-control" name="bankname" type="text"
                                           value="" placeholder="Bank Name:*"
                                           required="required"></span>
                            </label>

                            <label class="col-md-6">
                                <span class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                    <input class="form-control" name="email" type="text"
                                           value="" placeholder="Your email-id:*"
                                           required="required"></span>
                            </label>

                            <label class="col-md-6">
                                <span class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-star"></i></span>
                                    <input class="form-control" minlength="4" name="votes" type="number"
                                           placeholder="Votes (Minimum 4):*"
                                           required="required"></span>
                            </label>

                            <div class="col-md-6">
                                <button class="m-b15 site-button green radius-xl m-r15" type="submit">Submit</button>
                            </div>
                        </form>
                    </aside>

                </div>
                <!-- SIDE BAR END -->

                <!-- RIGHT PART END -->
            </div>
        </div>
    </div>
@endsection
