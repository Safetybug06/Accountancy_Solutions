@extends('layouts.header')

@section('content')
    <!--hero section start-->

    <div class="videoContainer">
        <div class="overlay"></div>
        <div class="overlay-text" data-aos="fade-down">
            <h1 class="mb-4 text-white animated1">Your One Stop Solution for all your accounting needs.
            </h1>
            <p class="lead text-white animated2">A reliable accounting processing service that provides
                Professional and Excellent Services in UK, Jamaica and India since 2001.</p>
            <div class="animated3 mt-5">
                <a class="btn btn-2" href="about"> <span class="btn-icon btn-arrow"></span>
                    <span class="btn-text">Learn More</span>
                </a>
                <a class="btn btn-2 btn-border white" href="contact"> <span class="btn-icon btn-arrow"></span>
                    <span class="btn-text">Contact Us</span>
                </a>
            </div>
        </div>
        <video autoplay loop muted>
            <source src="images/video1.mp4" type="video/mp4">
            {{-- <source src="http://inserthtml.com/demos/javascript/background-videos/flowers.webm" type="video/webm"> --}}
        </video>

    </div>


    <!--hero section end-->


    <!--body content start-->

    <div class="page-content">

        <!--form start-->

        <section class="mt-md-1">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="row g-0 box-shadow">
                            <div class="col-lg-5 col-md-12 theme-bg p-5">
                                <div class="section-title mb-4">
                                    <h2 class="title">Contact Us</h2>
                                </div>
                                <form id="queto-form" method="post" action="#">
                                    <div id="formmessage"></div>
                                    <div class="form-group">
                                        <input id="form_name" type="text" name="firstname" class="form-control"
                                            placeholder="Your Name" required="required" data-error="Name is required.">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="form-group">
                                        <input id="form_email" type="email" name="email" class="form-control"
                                            placeholder="Your Email" required="required"
                                            data-error="Valid email is required.">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="form-group">
                                        <input id="form_number" type="text" name="phone" class="form-control"
                                            placeholder="Phone Number" required="required">
                                    </div>
                                    <div class="form-group">
                                        <select name="service" class="form-control">
                                            <option>- Select Service</option>
                                            <option>VAT Processing</option>
                                            <option>Payroll Service</option>
                                            <option>CIS Payroll</option>
                                            <option>Management Accounts</option>
                                            <option>Corporation Tax</option>
                                            <option>Person Tax</option>
                                            <option>Tax Planning and Tax Investigation</option>
                                        </select>
                                    </div>
                                    <button class="btn btn-2 btn-border white mt-5" id="sbtn"> <span
                                            class="btn-icon btn-arrow"></span>
                                        <span class="btn-text">Submit</span>
                                    </button>
                                </form>
                                <div id="form-messages">
                                    <div class="loader" id="loader3" style="display: none;">loader</div>
                                    <div class="form-success"
                                        style="display: none;text-align:center; color:white; margin-top:3rem !important;">
                                    </div>
                                    <div class="validation-errors"
                                        style="display: none;text-align:center; color:white; margin-top:3rem !important;">
                                        Oops! Something went wrong.
                                        <ul></ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-7 col-md-12 white-bg d-flex align-items-center">
                                <div class="p-3 p-md-5 w-100 h-100">
                                    {{-- <div class="row">
                    <div class="col-lg-6 col-md-6"> --}}
                                    <div class="featured-item" data-bg-color="rgba(49,67,239,0.070)">
                                        <div class="featured-icon"> <i class="flaticon-solution"></i>
                                        </div>
                                        <div class="featured-title">
                                            <h5>What we do...</h5>
                                        </div>
                                        <div class="featured-desc">
                                            <p>Being the longest established Accountancy firm Jam’s Accountancy Solutions is
                                                offering high-quality one-stop solution professional and compliance services
                                                on both local and international fronts which includes Bookkeeping, <b>VAT
                                                    Processing, Payroll Service, CIS Payroll, Management Accounts,
                                                    Corporation Tax, Person Tax, Tax Planning and Tax Investigation.</b> We
                                                also have legal and insolvency partners.</p>
                                        </div>
                                        <br>

                                        <div class="featured-desc">
                                            <p>In today’s complex, competitive and fast-paced environment, we understand
                                                that businesses, as well as individuals, need some extra attention, further
                                                most accounting isn’t fun for everyone, but we’re truly passionate about our
                                                work and the clients we engaged with. Our Accounting members will embrace a
                                                service culture that emphasizes efficiency and effectiveness through
                                                personal touch, swift response times, reliability, and innovative thinking.
                                                Let’s engage and see what makes us different…</p>
                                        </div>
                                    </div>
                                    {{-- </div> --}}
                                    {{-- <div class="col-lg-6 col-md-6 mt-5 mt-md-0">
                      <div class="featured-item" data-bg-color="rgba(253,91,3,0.070)">
                        <div class="featured-icon"> <i class="flaticon-money"></i>
                        </div>
                        <div class="featured-title">
                          <h5>Financial Analysis</h5>
                        </div>
                        <div class="featured-desc">
                          <p>I will give you a complete account of the system, and expound the actual teachings</p>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-6 col-md-6 mt-5">
                      <div class="featured-item" data-bg-color="rgba(131,199,43,0.070)">
                        <div class="featured-icon"> <i class="flaticon-testing"></i>
                        </div>
                        <div class="featured-title">
                          <h5>Strategy & Marketing</h5>
                        </div>
                        <div class="featured-desc">
                          <p>I will give you a complete account of the system, and expound the actual teachings</p>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-6 col-md-6 mt-5">
                      <div class="featured-item" data-bg-color="rgba(233,15,42,0.070)">
                        <div class="featured-icon"> <i class="flaticon-life"></i>
                        </div>
                        <div class="featured-title">
                          <h5>Investment Planning</h5>
                        </div>
                        <div class="featured-desc">
                          <p>I will give you a complete account of the system, and expound the actual teachings</p>
                        </div>
                      </div>
                    </div> --}}
                                    {{-- </div> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--form end-->


        <!--about start-->

        <section>
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-12">
                        <div class="row g-0">
                            <div class="col-6">
                                <img class="img-fluid rounded" src="images/about/01.jpg" alt="">
                            </div>
                            <div class="col-6 ms-n4 mt-8">
                                <img class="img-fluid rounded" src="images/about/02.jpg" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-12 mt-2 mt-lg-0">
                        <div class="section-title">
                            <h6>About Us</h6>
                            <h2 class="title">Jam’s Accountancy Solutions is an international account processing service
                                provider</h2>
                            <p>With highly credentialed reputation and professional experience with more than 20 years in
                                this field. We aim to offer services beyond excellence through our team having strong
                                professional background, good know-how knowledge within their local jurisdiction and trusted
                                experience in handling clients worldwide.</p>
                        </div>
                    </div>
                </div>
                <div class="row mt-8 text-white">
                    <div class="col-lg-4 theme-bg p-5"> <i class="flaticon-brainstorming ic-3x"></i>
                        <h5 class="font-w-7 text-white mt-3">Bookkeeping</h5>
                        <p>Let’s a dedicated bookkeeper analyse and categorise all your transactions to provide predictive
                            real-time financial data every month.</p>
                    </div>
                    <div class="col-lg-4 dark-bg p-5"> <i class="flaticon-team ic-3x"></i>
                        <h5 class="font-w-7 text-white mt-3">VAT Returns</h5>
                        <p>Don’t keep HMRC waiting, we can process your quarterly VAT returns, check and even submit them
                            for you. Or we can just do the processing.</p>
                    </div>
                    <div class="col-lg-4 theme-bg-2 p-5"> <i class="flaticon-money-2 ic-3x"></i>
                        <h5 class="font-w-7 text-white mt-3">Year-End Accounts</h5>
                        <p>Our year-end accounts experts process the complex and time consuming job quickly and easily. They
                            will prepare an accurate report of your financial health.</p>
                    </div>
                </div>
            </div>
        </section>

        <!--about end-->




    </div>

    <!--body content end-->
@endsection

@section('script')
    <script>
        var element = document.getElementById("homeid");
        element.classList.add("active");
    </script>

    {{-- form submission --}}
    <script type="text/javascript">
        $(document).ready(function() {
            $('#queto-form').submit(function(e) {
                e.preventDefault();
                //var data = $(this).serialize();
                var data = $(this).serialize();
                var $validationErrors = $('.validation-errors');
                $.ajax({
                    data: data,
                    url: window.location.href,
                    type: 'POST',
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf_token"]').attr('content')
                    },
                    dataType: 'json',
                    beforeSend: function() {
                        // Show image container
                        $(".loader3").show();
                    },
                    success: function(response) {
                        console.log(response);
                        $(".form-success").show();
                        $(".form-success").html(response.message);
                        $('#queto-form').trigger("reset");
                        $('#sbtn').hide();
                        $validationErrors.hide();
                    },
                    error: function(data) {
                        console.log(data);
                    },
                    complete: function(data) {
                        // Hide image container
                        $("#loader3").hide();
                    },
                    processData: false,
                });
            });
        });
    </script>
@endsection
