@extends('layouts.main')

@section('title')
    Contact
@endsection

@section('contents')
    <div class="wt-bnr-inr overlay-wraper" style="background-image:url({{ asset('main/slider/slide2.jpg') }});">
        <div class="overlay-main bg-black opacity-07"></div>
        <div class="container">
            <div class="wt-bnr-inr-entry">
                <h1 class="text-white">Contact</h1>
            </div>
        </div>
    </div>

    <div class="bg-gray-light p-tb20">
        <div class="container">
            <ul class="wt-breadcrumb breadcrumb-style-2">
                <li><a href="{{ url('/')}}"><i class="fa fa-home"></i> Home</a></li>
                <li>Contact</li>
            </ul>
        </div>
    </div>

    <div class="section-full p-t80 p-b50">
        <div class="container-fluid">
            <div class="wt-box col-md-6">
                <h4 class="text-uppercase">Contact Detail </h4>
                <div class="wt-separator-outer m-b30">
                    <div class="wt-separator style-icon">
                        <i class="fa fa-leaf text-black"></i>
                        <span class="separator-left bg-primary"></span>
                        <span class="separator-right bg-primary"></span>
                    </div>
                </div>
                <div class="row">

                    <div class="col-md-6 col-sm-6 m-b30">
                        <div class="wt-icon-box-wraper bx-style-1 p-a15 left clearfix">
                            <div class="wt-icon-box-sm bg-primary">
                                        <span class="icon-cell text-white">
                                            <i class="fa fa-phone"></i>
                                        </span>
                            </div>
                            <div class="icon-content">
                                <h5 class="wt-tilte text-uppercase">Phone</h5>
                                <p>08091304065, 08181073065, 09014818914</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-sm-6 m-b30">
                        <div class="wt-icon-box-wraper bx-style-1 p-a15 left clearfix">
                            <div class="wt-icon-box-sm bg-primary">
                                        <span class="icon-cell text-white">
                                            <i class="fa fa-envelope"></i>
                                        </span>
                            </div>
                            <div class="icon-content">
                                <h5 class="wt-tilte text-uppercase">Email</h5>
                                <p>info@nigerianteens.com</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12 col-sm-6 m-b30">
                        <div class="wt-icon-box-wraper bx-style-1 p-a15 left clearfix">
                            <div class="wt-icon-box-sm bg-primary">
                                        <span class="icon-cell text-white">
                                            <i class="fa fa-map-marker"></i>
                                        </span>
                            </div>
                            <div class="icon-content">
                                <h5 class="wt-tilte text-uppercase">Address</h5>
                                <p> Plot f6 Abacha road GRA, Port Harcourt, Rivers state, Nigeria</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="wt-box col-md-6">
                <h4 class="text-uppercase">Contact Form </h4>
                <div class="wt-separator-outer m-b30">
                    <div class="wt-separator style-icon">
                        <i class="fa fa-leaf text-black"></i>
                        <span class="separator-left bg-primary"></span>
                        <span class="separator-right bg-primary"></span>
                    </div>
                </div>

                <form class="" method="post" action="">

                    <div class="row">

                        <div class="col-md-6">
                            <div class="form-group">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                    <input name="username" type="text" required="" class="form-control" placeholder="Name">
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                    <input name="email" type="text" class="form-control" required="" placeholder="Email">
                                </div>
                            </div>

                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <div class="input-group">
                                    <span class="input-group-addon v-align-m"><i class="fa fa-pencil"></i></span>
                                    <textarea name="message" rows="4" class="form-control Message" required=""></textarea>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12 text-right">
                            <button name="submit" type="submit" value="Submit" class="site-button  m-r15">Submit  <i class="fa fa-angle-double-right"></i></button>
                            <button name="Resat" type="reset" value="Reset" class="site-button ">Reset  <i class="fa fa-angle-double-right"></i></button>
                        </div>

                    </div>

                </form>

            </div>
        </div>
    </div>

@endsection
