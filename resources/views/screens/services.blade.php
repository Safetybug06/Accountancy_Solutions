@extends('layouts.header')

@section('content')
    <div class="page-content">

        <!--section start-->

        <section>
            <div class="container">
                {{-- <div class="row"> --}}
                {{-- <div class="col-lg-8 col-md-12"> --}}
                <h2 class="title mb-3">Our Services</h2>
                <p class="mb-0">We aim to offer services beyond excellence through our team having strong professional
                    background, good know-how knowledge within their local jurisdiction and trusted experience in
                    handling clients worldwide.</p>
                {{-- <img class="img-fluid w-100 rounded box-shadow my-4" src="images/services/large/05.jpg" alt=""> --}}
                {{-- <p>consectetur adipisicing elit. Totam mollitia incidunt vero cupiditate obcaecati iusto tempora unde!
                        Numquam officiis, quae adipisci quam laudantium nulla modi. adipisci quam laudantium nulla modi.
                        Totam mollitia incidunt vero cupiditate obcaecati</p>
                    <p class="mb-0">consectetur adipisicing elit. Totam mollitia incidunt vero cupiditate obcaecati iusto
                        tempora unde! Numquam officiis, quae adipisci quam laudantium nulla modi. adipisci quam laudantium
                        nulla modi. Totam mollitia incidunt vero cupiditate obcaecati</p> --}}

                <!-- Services Grid start -->
                <div class="container text-center p-2 border-bottom border-top mt-4">
                    <h3 class="mb-4 mt-4">List of Services :</h3>
                    <div class="row text-center p-1">
                      <div class="col-md text-center p-1">
                        Self Assessment Tax Returns
                      </div>
                      <div class="col-md text-center p-1">
                        Tax Planning and Savings
                      </div>
                      <div class="col-md text-center p-1">
                        Tax Investigations
                      </div>
                    </div>
                    <div class="row text-center p-1">
                        <div class="col-md text-center p-1">
                            Bookkeeping
                        </div>
                        <div class="col-md text-center p-1">
                            VAT Processing with MTD Compliance
                        </div>
                        <div class="col-md text-center p-1">
                            Year End Accounts
                        </div>
                      </div>
                      <div class="row text-center p-1">
                        <div class="col-md text-center p-1">
                            Corporation Tax
                        </div>
                        <div class="col-md text-center p-1">
                            Payroll
                        </div>
                        <div class="col-md text-center p-1">
                            Payroll-CIS
                        </div>
                      </div>
                      <div class="row text-center p-1">
                        <div class="col-md text-center p-1">
                            Auto-Enrollment Pensions
                        </div>
                        <div class="col-md text-center p-1">
                            Making Tax Digital
                        </div>
                        <div class="col-md text-center p-1">
                            Company Secretarial Service
                        </div>
                      </div>
                      <div class="row text-center p-1">
                        <div class="col-md text-center p-1">
                            Legal And Insolvency Advice
                        </div>
                        
                      </div>
                      
                  </div>
                <!-- Services Grid end -->


                <div class="row mt-3">
                    <div class="col-sm-6 mt-3 mt-sm-0">
                        <div class="featured-item text-center">
                            <div class="featured-icon"> <i class="flaticon-report"></i>
                            </div>
                            <div class="featured-title">
                                <h5>Taxes And Efficiency</h5>
                            </div>
                            {{-- <div class="featured-desc">
                                    <p>Get in touch with us and we’ll figure out something that works for everyone</p>
                                </div> --}}
                        </div>
                    </div>
                    <div class="col-sm-6 mt-3 mt-lg-0">
                        <div class="featured-item text-center">
                            <div class="featured-icon"> <i class="flaticon-testing"></i>
                            </div>
                            <div class="featured-title">
                                <h5>Financial And Analysis</h5>
                            </div>
                            {{-- <div class="featured-desc">
                                    <p>Get in touch with us and we’ll figure out something that works for everyone</p>
                                </div> --}}
                        </div>
                    </div>
                </div>
                


                <div class="tab mt-5 grey-bg p-4">
                    <!-- Nav tabs -->
                    <nav>
                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                            <a class="nav-item nav-link active" id="nav-home-tab" data-bs-toggle="tab" href="#tab1-1"
                                role="tab" aria-selected="true">Payroll</a>
                            <a class="nav-item nav-link" id="nav-profile-tab" data-bs-toggle="tab" href="#tab1-2"
                                role="tab" aria-selected="false">VAT Returns</a>
                            <a class="nav-item nav-link" id="nav-profile-tab" data-bs-toggle="tab" href="#tab1-3"
                                role="tab" aria-selected="false">Year-End Accounts</a>
                            <a class="nav-item nav-link" id="nav-profile-tab" data-bs-toggle="tab" href="#tab1-4"
                                role="tab" aria-selected="false">Bookkeeping</a>
                        </div>
                    </nav>
                    <!-- Tab panes -->
                    <div class="tab-content" id="nav-tabContent">
                        
                        <div role="tabpanel" class="tab-pane fade show active" id="tab1-1">
                            <p class="lead">When Payroll managed efficiently makes everyone happy. However, your practice staff didn’t enter this profession to do extensive administration or keep track of payroll legislation. Fully managed payroll services involve many time-consuming tasks like entering employee data in the software, producing payslips, managing deductions like statutory payments (ex. SMP, SSP, SPP), DEO (Direct earnings order by HMRC) deduction, student loans and pensions, and transferring wages into the employee's bank accounts. Our professional payroll team free up the time of accountants in practice and save them from payroll complications and compliances, so that our clients pay their employees on time.</p>

                            <div id="accordion" class="accordion mt-2">
                                <div class="card">
                                    <div class="card-header">
                                        <h6 class="mb-0">
                                            <a data-bs-toggle="collapse" data-bs-parent="#accordion" href="#collapse1">Scope of work</a>
                                        </h6>
                                    </div>
                                    <div id="collapse1" class="collapse show" data-bs-parent="#accordion">
                                        <div class="card-body">
                                            <ul type="disc">
                                                <li>Company and employee setup</li>
                                                <li>Processing of timesheets and creation of payslips</li>
                                                <li>Periodic payroll submissions</li>
                                                <li>Auto-enrolment and its administration (pension schemes)</li>
                                                <li>Completion of P11D forms, including P32, P35, P45 (for leaver employee) P9D, P11D, P11D(B), and P46 forms</li>
                                                <li>GDPR-compliant payslips</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="tab1-2">
                            <p class="lead">Don’t keep HMRC waiting, we can process your quarterly VAT returns, check and even submit them for you. Or we can just do the processing. Additionally, our experts deal with all aspects of VAT inspections on your behalf and always ensure the routine VAT compliance requirements are met.</p>
                            <p class="mb-0">The VAT landscape in the UK is continually changing, and the introduction of MTD means agents who will be providing MTD for VAT services to clients may need a helping hand. If you are in this position or just looking for some staffing back-up, Accountancy Solutions will happy to prepare the returns for you so that you only pay what you are supposed to pay.</p>

                            <div id="accordion" class="accordion mt-2">
                                <div class="card">
                                    <div class="card-header">
                                        <h6 class="mb-0">
                                            <a data-bs-toggle="collapse" data-bs-parent="#accordion" href="#collapse2">Scope of work</a>
                                        </h6>
                                    </div>
                                    <div id="collapse2" class="collapse" data-bs-parent="#accordion">
                                        <div class="card-body">
                                            <ul type="disc">
                                                <li>VAT registration/de-registration</li>
                                                <li>Compilation and submission of monthly/quarterly VAT returns</li>
                                                <li>Schemes – FRS, standard, retail, or marginal</li>
                                                <li>VAT summary and reporting</li>
                                                <li>MTD for VAT</li>
                                                <li>Advice on VAT planning and administration</li>
                                                <li>HMRC correspondence management</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="tab1-3">
                            <p class="lead">Our year-end accounts experts process the complex and time consuming job quickly and easily. They will prepare an accurate report of your financial health. we ensure our clients’ stay compliant by preparing and submitting the annual accounts to Companies House and HMRC – on time, always !
                            </p>

                            <div id="accordion" class="accordion mt-2">
                                <div class="card">
                                    <div class="card-header">
                                        <h6 class="mb-0">
                                            <a data-bs-toggle="collapse" data-bs-parent="#accordion" href="#collapse3">Scope of work</a>
                                        </h6>
                                    </div>
                                    <div id="collapse3" class="collapse" data-bs-parent="#accordion">
                                        <div class="card-body">
                                            <ul type="disc">
                                                <li>Preparation of fully-referenced notes, control accounts and lead schedules</li>
                                                <li>Analysis of incomes and expenses</li>
                                                <li>Preparation of trial balance, P&L, and balance sheet</li>
                                                <li>Filing of accounts with HMRC and Companies House</li>
                                                <li>Comprehensive notes and analytical review</li>
                                                <li>Finalization of accounts on an accounting software of your choice</li>
                                                <li>Key actionable insights for stakeholders discussed with clients straightaway</li>
                                                <li>Draft accounts in .pdf and iXBRL</li>
                                                <li>Two-level review of processes</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="tab1-4">
                            <p class="lead">Let’s a dedicated bookkeeper analyse and categorise all your transactions to provide predictive real-time financial data every month.</p>
                         
                        </div>
                    </div>
                </div>
                {{-- </div> --}}
                {{-- </div> --}}
            </div>
        </section>

        <!--section end-->

    </div>

    <!--body content end-->
@endsection

@section('script')
    <script>
        var element = document.getElementById("serviceid");
        element.classList.add("active");
    </script>
@endsection
