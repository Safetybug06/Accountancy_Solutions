@extends('layouts.header')

@section('content')
    <!--body content start-->

    <div class="page-content">


        <!--about us start-->

        <section>
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-12">
                        <div class="position-relative">
                            <img class="img-fluid rounded box-shadow w-100" src="images/about/03.jpg" alt="">
                            {{-- <div class="video-btn video-btn-pos"> <a class="play-btn popup-youtube me-3" href="https://www.youtube.com/watch?v=P_wKDMcr1Tg"><i class="fas fa-play"></i></a>
              </div> --}}
                        </div>
                    </div>
                    <div class="col-lg-6 col-12 mt-5 mt-lg-0">
                        <div class="section-title">
                            <h6>About Us</h6>
                            <h2 class="title">The smartest thing to do with your Accounting Business</h2>
                            <p>Jam’s Accountancy Solutions is an international account processing service provider with
                                highly credentialed reputation and professional experience with more than 20 years in this
                                field. We aim to offer services beyond excellence through our team having strong
                                professional background, good know-how knowledge within their local jurisdiction and trusted
                                experience in handling clients worldwide.</p>
                        </div>

                    </div>
                </div>
            </div>
        </section>

        <!--about us end-->


        <!--about start-->
        <h2 class="text-center w-100"><span class="text-theme font-w-7">List of services</span></h2>
        <section style="padding:30px;">
            <div class="container">
                <div class="row mt-1">
                    <div class="col-lg-4 col-md-4">
                        <h5><span class="text-theme font-w-7">01.</span>&nbsp; Self Assessment Tax Returns</h5>

                    </div>
                    <div class="col-lg-4 col-md-4">
                        <h5><span class="text-theme font-w-7">02.</span>&nbsp; Tax Savings</h5>

                    </div>
                    <div class="col-lg-4 col-md-4">
                        <h5><span class="text-theme font-w-7">03.</span>&nbsp; Corporation Tax</h5>

                    </div>
                    <div class="col-lg-4 col-md-4">
                        <h5><span class="text-theme font-w-7">04.</span>&nbsp;Year End Accounts</h5>

                    </div>
                    <div class="col-lg-4 col-md-4">
                        <h5><span class="text-theme font-w-7">05.</span>&nbsp; Bookkeeping</h5>

                    </div>
                    <div class="col-lg-4 col-md-4">
                        <h5><span class="text-theme font-w-7">06.</span>&nbsp; Payroll</h5>

                    </div>
                    <div class="col-lg-4 col-md-4">
                        <h5><span class="text-theme font-w-7">07.</span>&nbsp; VAT Returns</h5>

                    </div>
                    <div class="col-lg-4 col-md-4">
                        <h5><span class="text-theme font-w-7">08.</span>&nbsp; VAT Processing</h5>

                    </div>
                    <div class="col-lg-4 col-md-4">
                        <h5><span class="text-theme font-w-7">09.</span>&nbsp; Legal and insolvancy advice</h5>

                    </div>
                    <div class="col-lg-4 col-md-4">
                        <h5><span class="text-theme font-w-7">10.</span>&nbsp; Capital Gains Tax</h5>

                    </div>
                    <div class="col-lg-4 col-md-4">
                        <h5><span class="text-theme font-w-7">11.</span>&nbsp; Payroll</h5>

                    </div>
                    <div class="col-lg-4 col-md-4">
                        <h5><span class="text-theme font-w-7">12.</span>&nbsp; Tax Planning</h5>

                    </div>
                    <div class="col-lg-4 col-md-4">
                        <h5><span class="text-theme font-w-7">13.</span>&nbsp; Tax Investigations</h5>

                    </div>
                    <div class="col-lg-4 col-md-4">
                        <h5><span class="text-theme font-w-7">14.</span>&nbsp; Making Tax Digital</h5>

                    </div>
                    <div class="col-lg-4 col-md-4">
                        <h5><span class="text-theme font-w-7">15.</span>&nbsp; Auto-Enrolment Pensions</h5>

                    </div>
                    <div class="col-lg-4 col-md-4">
                        <h5><span class="text-theme font-w-7">16.</span>&nbsp; CIS Payroll</h5>

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
        var element = document.getElementById("aboutid");
        element.classList.add("active");
    </script>
@endsection
