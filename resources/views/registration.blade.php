@extends('layouts.main')

@section('title')
    Registration
    @endsection

    @section('contents')
    </header>
    <!--header end-->

    <!--site-main start-->
    <div class="site-main">
        <div class="ttm-page-title-row text-center">
            <div class="title-box text-center">
                <div class="container">
                    <div class="page-title-heading">
                        <h1 class="title">Registration</h1>
                    </div>
                    <div class="breadcrumb-wrapper">
                        <div class="container">
                            <span><a title="Homepage" href="{{ url('/') }}"><i class="fa fa-home"></i>&nbsp;&nbsp;Home</a></span>
                            <span class="ttm-bread-sep ttm-textcolor-white"> &nbsp; ⁄ &nbsp;</span>
                            <span class="ttm-textcolor-white">Registration</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <section class="ttm-row contact-form-section2 bg-layer break-991-colum clearfix">
            <div class="container">
                <div class="row res-1199-mlr-15">

                    <div class="col-lg-4 col-md-4 pr-3 radius" style="background-color: #d4f387; color: #393939;">
                        <div class=" section-title clearfix">
                            <h4 class="text-uppercase">Naira Account</h4>
                            <p>
                                <strong>Account Name:</strong> Nigerian teens<br>
                                <strong>Account number:</strong> 0471161692<br>
                                <strong>Bank:</strong> GT Bank
                            </p><br>

                            <h4 class="text-uppercase">Procedure</h4>
                            <p>
                                Step 1: Mode of payment<br>
                                * Pay a non-refundable fee of #5,000 Naira to the GTbank<br>
                                * You can pay to the school management.<br>
                                * You can also pay at the pickup form outlet
                            </p><br>

                            <h4 class="text-uppercase">Criteria</h4>
                            <p>
                                * All participants must be between the ages of 13 and 18 years old<br>
                                * Be Nigerian citizens<br>
                                * Be of good health and character<br>
                                * Speak fluent english<br>
                                * 2 recent photographs (One passport and one full length picture)<br>
                                PLEASE NOTE THAT PICTURES WILL NOT BE RETURNED.  VISIT ANY PROFESSIONAL PHOTOGRAPHY
                                STUDIO FOR A GOOD QUALITY PICTURES THAT MEETS OUR STANDARDS.
                            </p>
                        </div>
                    </div>

                    <div class="col-md-8 col-lg-8">
                        <div class="padding-12 box-shadow">
                            <!-- section title -->
                            <div class="section-title clearfix mb-30">
                                <h3 style="color: #1FB25A;">Nigerian Teens Sign up</h3>
                            </div><!-- section title end -->

                            @include('includes.alerts')

                            <form class="row contactform wrap-form clearfix" method="post"
                                  action="{{ route('applications.store') }}" novalidate="novalidate"
                                  enctype="multipart/form-data">
                                @csrf
                                <label class="col-md-4">
                                    <i class="ti ti-user"></i>
                                    <span class="ttm-form-control">
                                        <input class="form-control" name="surname" type="text"
                                               placeholder="Surname:*" required="required"></span>
                                </label>

                                <label class="col-md-4">
                                    <i class="ti ti-user"></i>
                                    <span class="ttm-form-control">
                                        <input class="form-control" name="other_names" type="text"
                                               placeholder="Other Names:*" required="required"></span>
                                </label>

                                <label class="col-md-4">
                                    <i class="ti ti-user"></i>
                                    <span class="ttm-form-control">
                                        <input class="form-control" name="age" type="number"
                                               placeholder="Age:*" required="required"></span>
                                </label>

                                <label class="col-md-4">
                                    <i class="ti ti-user"></i>
                                    <span class="ttm-form-control">
                                    <select name="health_issues" id="billing_state" class="form-control">
                                            <option selected disabled>Health Issues?</option>
                                            <option value="0">No</option>
                                            <option value="1">Yes</option>
                                        </select>
                                    </span>
                                </label>

                                <label class="col-md-4">
                                    <i class="ti ti-user"></i>
                                    <span class="ttm-form-control">
                                        <input class="form-control" name="health_details" type="text"
                                               placeholder="Health Details (If Yes):*"></span>
                                </label>

                                <label class="col-md-4">
                                    <i class="ti ti-user"></i>
                                    <span class="ttm-form-control">
                                        <input class="form-control" name="nationality" type="text"
                                               placeholder="Nationality"></span>
                                </label>

                                <label class="col-md-4">
                                    <i class="ti ti-user"></i>
                                    <span class="ttm-form-control">
                                        <input class="form-control" name="state" type="text"
                                               placeholder="State"></span>
                                </label>

                                <label class="col-md-4">
                                    <i class="ti ti-user"></i>
                                    <span class="ttm-form-control">
                                        <input class="form-control" name="city" type="text"
                                               placeholder="City:"></span>
                                </label>

                                <label class="col-md-4">
                                    <i class="ti ti-user"></i>
                                    <span class="ttm-form-control">
                                        <input class="form-control" name="address" type="text"
                                               placeholder="Address:*"></span>
                                </label>

                                <label class="col-md-4">
                                    <i class="ti ti-user"></i>
                                    <span class="ttm-form-control">
                                        <input class="form-control" name="vital_state" type="text"
                                               placeholder="Vital State"></span>
                                </label>

                                <label class="col-md-4">
                                    <i class="ti ti-user"></i>
                                    <span class="ttm-form-control">
                                        <input class="form-control" name="school_name" type="text"
                                               placeholder="School Name" required></span>
                                </label>

                                <label class="col-md-4">
                                    <i class="ti ti-user"></i>
                                    <span class="ttm-form-control">
                                        <input class="form-control" name="school_class" type="text"
                                               placeholder="School Class" required></span>
                                </label>

                                <label class="col-md-3">
                                    <i class="ti ti-user"></i>
                                    <span class="ttm-form-control">
                                        <input class="form-control" name="height" type="text"
                                               placeholder="Height:*" required></span>
                                </label>

                                <label class="col-md-3">
                                    <i class="ti ti-user"></i>
                                    <span class="ttm-form-control">
                                        <input class="form-control" name="bust" type="text"
                                               placeholder="Bust:*"></span>
                                </label>

                                <label class="col-md-3">
                                    <i class="ti ti-user"></i>
                                    <span class="ttm-form-control">
                                        <input class="form-control" name="waist" type="text"
                                               placeholder="Waist"></span>
                                </label>

                                <label class="col-md-3">
                                    <i class="ti ti-user"></i>
                                    <span class="ttm-form-control">
                                        <input class="form-control" name="hips" type="text"
                                               placeholder="Hips:*" required></span>
                                </label>

                                <label class="col-md-12">
                                    1. In one sentence, what does the word beauty mean to you?
                                <span class="ttm-form-control">
                                    <input class="form-control" name="question1" type="text"
                                           placeholder="In one sentence, what does the word beauty mean to you?:*" required></span>
                                </label>

                                <label class="col-md-12">
                                    2. In one sentence, what is the motivation behind becoming a model?
                                <span class="ttm-form-control">
                                <input class="form-control" name="question2" type="text"
                                       placeholder="In one sentence, what is the motivation behind becoming a model?:*" required></span>
                                </label>

                                <label class="col-md-12">
                                    3. In one sentence, what do you think makes a person attractive?
                                    <span class="ttm-form-control">
                                <input class="form-control" name="question3" type="text"
                                       placeholder="In one sentence, what do you think makes a person attractive?:*" required></span>
                                </label>

                                <label class="col-md-12">
                                    4. Have you been in any other agency before? If yes, Name the year
                                    <span class="ttm-form-control">
                                <input class="form-control" name="question4" type="text"
                                       placeholder="Have you been in any other agency before? If yes, Name the year:*" required></span>
                                </label>

                                <label class="col-md-12">
                                    5. Why did you choose to be part of Nigerian teena
                                    <span class="ttm-form-control">
                                <input class="form-control" name="question5" type="text"
                                       placeholder="Why did you choose to be part of Little Miss Damsel Nigeria:*" required></span>
                                </label>

                                <label class="col-md-6">
                                    <i class="ti ti-user"></i>
                                    <span class="ttm-form-control">
                                <input class="form-control" name="parent_surname" type="text"
                                       placeholder="Parent Surname:*" required></span>
                                </label>

                                <label class="col-md-6">
                                    <i class="ti ti-user"></i>
                                    <span class="ttm-form-control">
                                <input class="form-control" name="parent_other_names" type="text"
                                       placeholder="Parent Other Names:*" required></span>
                                </label>

                                <label class="col-md-6">
                                    <i class="ti ti-mobile"></i>
                                    <span class="ttm-form-control">
                                <input class="form-control" name="parent_mobile" type="tel"
                                       placeholder="Parent Mobile:*" required></span>
                                </label>

                                <label class="col-md-6">
                                    <i class="ti ti-email"></i>
                                    <span class="ttm-form-control">
                                        <input class="form-control" name="parent_email" type="text"
                                               placeholder="Parent Email:*" required="required"></span>
                                </label>

                                <label class="col-md-12">
                                    <i class="ti ti-home"></i>
                                    <span class="ttm-form-control">
                                        <input class="form-control" name="parent_address" type="text"
                                               placeholder="Parent Address:*" required="required"></span>
                                </label>

                                <label class="col-md-6">
                                    Sender Account Name and Number
                                    <span class="ttm-form-control">
                                        <input class="form-control" name="payment_details" type="text"
                                               placeholder="Account Name and Number:*" required="required"></span>
                                </label>

                                <label class="col-md-6">
                                    Scanned copy of teller or Screenshot of online transaction
                                    <span class="form-control">
                                        <input class="form-control" name="image" type="file"></span>
                                </label>

                                <label class="col-md-4">
                                    I HEREBY AGREE THAT THE INFORMATION PROVIDED ABOVE IS TRUE AND ACCURATE AND WOULD LIKE TO BE INCLUDED IN THIS YEAR'S NIGERIAN TEENS BEAUTY PAGEANT
                                    <span class="form-control">
                                        <input class="form-control" name="terms1" type="checkbox" value="Yes" required="required"></span>
                                </label>

                                <label class="col-md-4">
                                    I HEREBY AGREE THAT AT THE TIME OF THE SUBMISSION OF THIS APPLICATION, I AM AT LEAST 13 YEARS OLD AND NOT OLDER THAN 18 YEARS OLD
                                    <span class="form-control">
                                        <input class="form-control" name="terms2" type="checkbox" value="Yes" required="required"></span>
                                </label>

                                <label class="col-md-4">
                                    I HEREBY AGREE TO BE BOUND BY THE TERMS AND CONDITIONS STATED IN THE ELIGIBILITY CRITERIA FOR THE LMDN BEAUTY PAGEANT
                                    <span class="form-control">
                                        <input class="form-control" name="terms3" type="checkbox" value="Yes" required="required"></span>
                                </label>

                                <input name="submit" type="submit" value="Submit" class="btn btn-round btn-success" id="submit" title="Submit">
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </section>

    </div><!-- site-main end -->
@endsection

@section('bottom-scripts')

    <script type= "text/javascript" src = "{{ asset('main/js/countries.js') }}"></script>

    <script language="javascript">
        populateCountries("country", "state"); // first parameter is id of country drop-down and second parameter is id of state drop-down
        populateCountries("country2");
        populateCountries("country2");
    </script>
@endsection
