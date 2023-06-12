@extends('layouts.header')

@section('content')
    <!--body content start-->

    <div class="page-content">

        <!--contact start-->

        <section>
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <div class="contact-main white-bg p-5 box-shadow">
                            <form id="contact-form" class="row" method="post" action="#">
                                <div id="formmessage"></div>
                                <div class="form-group col-md-6">
                                    <input id="form_name" type="text" name="firstname" class="form-control"
                                        placeholder="First Name" required="required" data-error="Name is required.">
                                    <div class="help-block with-errors"></div>
                                </div>
                                <div class="form-group col-md-6">
                                    <input id="form_name1" type="text" name="lastname" class="form-control"
                                        placeholder="Last Name" required="required" data-error="Name is required.">
                                    <div class="help-block with-errors"></div>
                                </div>
                                <div class="form-group col-md-12">
                                    <input id="form_email" type="email" name="email" class="form-control"
                                        placeholder="Email" required="required" data-error="Valid email is required.">
                                    <div class="help-block with-errors"></div>
                                </div>
                                <div class="form-group col-md-12">
                                    <input id="form_phone" type="tel" name="phone" class="form-control"
                                        placeholder="Phone" required="required" data-error="Phone is required">
                                    <div class="help-block with-errors"></div>
                                </div>
                                <div class="form-group col-md-6">
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
                                <div class="form-group col-md-6">
                                    <input id="form_subject" type="tel" name="subject" class="form-control"
                                        placeholder="Subject" required="required" data-error="Subject is required">
                                    <div class="help-block with-errors"></div>
                                </div>
                                <div class="form-group col-md-12">
                                    <textarea id="form_message" name="message" class="form-control" placeholder="Message" rows="4" required="required"
                                        data-error="Please,leave us a message."></textarea>
                                    <div class="help-block with-errors"></div>
                                </div>
                                <div class="col-md-12 text-center mt-4">
                                    <button class="btn" id="submitbtn"><span>Send Request</span>
                                    </button>
                                </div>
                            </form>
                            <div id="form-messages">
                                <div class="loader" id="loader2" style="display: none;">loader</div>
                                <div class="form-success" style="display: none;text-align:center; margin-top:15px;"></div>
                                <div class="validation-errors" style="display: none;text-align:center;margin-top:15px;">
                                    Oops! Something went wrong.
                                    <ul></ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="section-title">
                            <h6>Contact Us</h6>
                            <h2 class="title">Tell us what you need and leave us your contact info</h2>
                            <p>Get in touch and let us know how we can help. Fill out the form and we’ll be in touch as soon
                                as possible.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="contact-info">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-12">
                        <div class="contact-media"> <i class="flaticon-paper-plane"></i>
                            <h4 class="text-theme">Address:</h4>
                            <p class="mb-3">See Our Branch Office</p>
                            <div class="mb-3">
                                <h6 class="font-w-5">India Office:</h6>
                                <span class="text-black">101-102, BLOCK D, Notus IT park Sarabhai campus, Nr.Genda circle
                                    Vadodara, Gujarat</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mt-5 mt-lg-0">
                        <div class="contact-media"> <i class="flaticon-email"></i>
                            <h4 class="text-theme">Email Us</h4>
                            <p class="mb-3">Email us for general queries, including marketing and partnership
                                opportunities.</p> <a href="mailto:it.teamaccsol@gmail.com"> it.teamaccsol@gmail.com</a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mt-5 mt-lg-0">
                        <div class="contact-media"> <i class="flaticon-phone"></i>
                            <h4 class="text-theme">Call Us</h4>
                            <p class="mb-3">Call us to speak to a member of our team.</p>
                            <a href="tel:++916353423170">+91 63534 23170</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{-- <div class="map iframe-h-2"> --}}
        <iframe width="100%" height="450" style="border:0" loading="lazy"
            src="https://www.google.com/maps/embed/v1/place?q=101/102+Block+D,+Notus+IT+park+sarabhai+campus,+near+genda+circle+gorwa+road+vadodara+gujarat&key=AIzaSyA_JavUaCyIn2CZp2nCiEyR4CzUgDrksIs">
        </iframe>
        {{-- </div> --}}

        <!--contact end-->

    </div>

    <!--body content end-->
@endsection

@section('script')
    <script>
        var element = document.getElementById("contactid");
        element.classList.add("active");
    </script>

    {{-- form submission --}}
    <script type="text/javascript">
        $(document).ready(function() {
            $('#contact-form').submit(function(e) {
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
                        $(".loader2").show();
                    },
                    success: function(response) {
                        console.log(response);
                        $(".form-success").show();
                        $(".form-success").html(response.message);
                        $('#contact-form').trigger("reset");
                        $('#submitbtn').hide();
                        $validationErrors.hide();
                    },
                    error: function(data) {
                        console.log(data);
                    },
                    complete: function(data) {
                        // Hide image container
                        $("#loader2").hide();
                    },
                    processData: false,
                });
            });
        });
    </script>
@endsection
