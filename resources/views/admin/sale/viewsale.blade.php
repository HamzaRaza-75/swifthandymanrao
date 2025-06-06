@extends('layouts.app')
@section('content')
<div class="page-wrapper">
    <div class="content">

        <!-- Page Header -->
        <div class="page-header">
            <div class="row">
                <div class="col-sm-12">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="invoices.html">Accounts </a></li>
                        <li class="breadcrumb-item"><i class="feather-chevron-right"></i></li>
                        <li class="breadcrumb-item active">Invoice View</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- /Page Header -->

        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <div class="invoice-head-clinic">
                            <div class="row">
                                <div class="col-12 col-md-6">
                                    <div class="invoice-counts">
                                        <h4>Invoice <span>#345766</span></h4>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="invoice-counts float-end">
                                        <h4>Status: <a href="javascript:;" class="status-green">Success</a></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row custom-invoice">
                            <div class="col-12 col-md-6 m-b-20">
                                <img src="{{asset('public/assets/img/logo.png')}}" width="35" height="35" alt=""> <span>Pre Clinic</span>
                                <ul class="list-unstyled invoice-clinic mt-2">
                                    <li>3864 Quiet Valley Lane,
                                    <li>Sherman Oaks, CA, 91403</li>
                                    <li>GST No:2914035</li>
                                </ul>
                            </div>
                            <div class="col-12 col-md-6 m-b-20">
                                <div class="invoice-details">
                                    <h3 >Bill To:</h3>
                                    <h3 >Zydus Medicals</h3>
                                    <ul class="list-unstyled invoice-clinic">
                                        <li>5754 Airport Rd</li>
                                        <li>Coosada, AL, 36020</li>
                                        <li>United States</li>
                                        <li>888-777-6655</li>
                                        <li><a href="https://preclinic.dreamstechnologies.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="74161506060d1701101534110c15190418115a171b19">[email&#160;protected]</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6 col-lg-12 m-b-20">
                                <div class="invoice-details">
                                    <h4>Invoice Date : <i class="feather-calendar me-2"></i><span>03 Oct 2022</span></h4>
                                    <h4>Due Date : <i class="feather-calendar me-2"></i><span>03 Oct 2022</span></h4>
                                </div>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-hover border-0 custom-table invoice-table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Item</th>
                                        <th>Description</th>
                                        <th>Quantity</th>
                                        <th>Unit Cost</th>
                                        <th>Charges</th>
                                        <th>Discount</th>
                                        <th>Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Full body checkup</td>
                                        <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit</td>
                                        <td>$150</td>
                                        <td>1</td>
                                        <td>10</td>
                                        <td>10</td>
                                        <td>$150</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Blood Test</td>
                                        <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit</td>
                                        <td>$12</td>
                                        <td>1</td>
                                        <td>10</td>
                                        <td>10</td>
                                        <td>$12</td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>General checkup</td>
                                        <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit</td>
                                        <td>$100</td>
                                        <td>1</td>
                                        <td>10</td>
                                        <td>10</td>
                                        <td>$100</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div>
                            <div class="row invoice-payment">
                                <div class="col-sm-7">
                                </div>
                                <div class="col-sm-5">
                                    <div class="m-b-20">
                                        <div class="table-responsive no-border">
                                            <table class="table mb-0 border-0 custom-table invoices-table total-fonts">
                                                <tbody>
                                                    <tr>
                                                        <td class="float-end">Subtotal : $2600</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="float-end">Discount : $100</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="float-end">GST (10%) : $160</td>
                                                    </tr>
                                                    <tr class="bold-total-invoice">
                                                        <td class="float-end">
                                                            <h5>Total : $2760</h5>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="invoice-info">
                                <h5>Terms & Condition</h5>
                                <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus sed dictum ligula, cursus blandit risus. Maecenas eget metus non tellus dignissim aliquam ut a ex. Maecenas sed vehicula dui, ac suscipit lacus.</p>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="doctor-submit float-end">
                                <a href="javascript:;" class="btn btn-primary submit-form me-2">Send Invoice</a>
                                <a href="javascript:;" class="btn btn-primary cancel-form"><i class="feather-printer me-2"></i>Print</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
