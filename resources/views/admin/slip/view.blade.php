@extends('layouts.adminapp')

@section('content')
    <!-- Page Content -->
    <div class="content container-fluid">

        <div class="row justify-content-center">
            <div class="col-xl-10">
                <div class="card invoice-info-card">
                    <div class="card-body">
                        <div class="invoice-item invoice-item-one">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="invoice-logo">
                                        <img src="{{ asset('public/dasassets/img/logo.png') }}" alt="logo">
                                    </div>
                                    <div class="invoice-head">
                                        <h2>Slip</h2>
                                        <p>Slip Number : {{ $slip->slip_nums }}</p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="invoice-info">
                                        <a href="{{ route('slip.print', $slip->id) }}" target="_black"
                                            class="btn submit-form me-2 my-2"
                                            style="background-color: #00d3c7;
                                            border: 1px solid #00d3c7;
                                            color: #fff;">
                                            <svg width="30" height="30" viewBox="0 0 21 20" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M13.5923 12.5V15.8333C13.5923 17.2167 12.4757 18.3333 11.0923 18.3333H9.42566C8.04233 18.3333 6.92566 17.2167 6.92566 15.8333V12.5H13.5923Z"
                                                    fill="#FFFFFF" />
                                                <path
                                                    d="M6.09232 5.83366V4.16699C6.09232 2.78366 7.20898 1.66699 8.59232 1.66699H11.9256C13.309 1.66699 14.4256 2.78366 14.4256 4.16699V5.83366H6.09232Z"
                                                    fill="#FFFFFF" />
                                                <path opacity="0.4"
                                                    d="M15.259 5.83301H5.25899C3.59232 5.83301 2.75899 6.66634 2.75899 8.33301V12.4997C2.75899 14.1663 3.59232 14.9997 5.25899 14.9997H6.92565V12.4997H13.5923V14.9997H15.259C16.9257 14.9997 17.759 14.1663 17.759 12.4997V8.33301C17.759 6.66634 16.9257 5.83301 15.259 5.83301ZM8.59232 9.79134H6.09232C5.75065 9.79134 5.46732 9.50801 5.46732 9.16634C5.46732 8.82467 5.75065 8.54134 6.09232 8.54134H8.59232C8.93399 8.54134 9.21732 8.82467 9.21732 9.16634C9.21732 9.50801 8.93399 9.79134 8.59232 9.79134Z"
                                                    fill="#FFFFFF" />
                                                <path
                                                    d="M9.21732 9.16699C9.21732 9.50866 8.93398 9.79199 8.59232 9.79199H6.09232C5.75065 9.79199 5.46732 9.50866 5.46732 9.16699C5.46732 8.82533 5.75065 8.54199 6.09232 8.54199H8.59232C8.93398 8.54199 9.21732 8.82533 9.21732 9.16699Z"
                                                    fill="#FFFFFF" />
                                                <path
                                                    d="M14.4256 13.125H6.09232C5.75065 13.125 5.46732 12.8417 5.46732 12.5C5.46732 12.1583 5.75065 11.875 6.09232 11.875H14.4256C14.7673 11.875 15.0506 12.1583 15.0506 12.5C15.0506 12.8417 14.7673 13.125 14.4256 13.125Z"
                                                    fill="#FFFFFF" />
                                            </svg>

                                        </a>
                                        <h6 class="invoice-name">RAZIA NIAZ MEDICARE CENTER</h6>
                                        <p class="invoice-details">
                                            061 6353200 <br>
                                            Near Hascol Petrol Pump <br />Khanewal Road Multan
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Invoice Item -->
                        <div class="invoice-item invoice-item-two">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="invoice-info">
                                        <strong class="customer-text-one">Patient Detail</strong>
                                        <h6 class="invoice-name">{{ $slip->name }}</h6>
                                        <p class="invoice-details invoice-details-two">
                                            {{ $slip->gender }} <br>
                                            {{ $slip->age }}, <br>
                                            {{ $slip->date }} <br>
                                            {{ __('Multan') }} - {{ __('Pakistan') }}
                                        </p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="invoice-info invoice-info2">
                                        <strong class="customer-text-one">Token Detail</strong>
                                        <p class="invoice-details">
                                            <b class="small"> {{ __('Token Type :') }} </b> {{ $slip->token_type }} <br>
                                            <b class="small"> {{ __('Token Price :') }} </b>
                                            {{ $slip->cash }}{{ __('Rs') }} <br>
                                            <b class="small"> {{ __('Token Time :') }} </b> {{ $slip->created_at }}
                                        </p>
                                        <div class="invoice-item-box ">
                                            <p>Doctor: {{ $slip->dector_name }}</p>
                                            <p class="mb-0 ">Token By :{{ $slip->token_holder }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Invoice Item -->

                        <!-- Invoice Item -->
                        <div class="invoice-issues-box">
                            <div class="row">
                                <div class="col-lg-4 col-md-4">
                                    <div class="invoice-issues-date">
                                        <p>Issue Date : {{ $slip->date }}</p>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4">
                                    <div class="invoice-issues-date">
                                        <p>Due Date : {{ $slip->date }}</p>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4">
                                    <div class="invoice-issues-date">
                                        <p>Slip Amount : {{ $slip->cash }} </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Invoice Item -->

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Page Content -->
@endsection
