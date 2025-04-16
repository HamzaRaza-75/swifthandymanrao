@extends('layouts.adminapp')
@section('content')
    <div class="content">
        <!-- Page Header -->
        <div class="page-header">
            <div class="row">
                <div class="col-sm-12">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0);">Dashboard</a></li>
                        <li class="breadcrumb-item"><i class="feather-chevron-right"></i></li>
                        <li class="breadcrumb-item active">Admin Dashboard</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- /Page Header -->

        <div class="good-morning-blk">
            <div class="row">
                <div class="col-md-6">
                    <div class="morning-user">
                        <h2>{{ $greeting }} , <span>{{ Auth::user()->name }}</span></h2>
                        <p>Have a nice day at work</p>
                    </div>
                </div>
                <div class="col-md-6 position-blk">
                    <div class="morning-img">
                        <img src="{{ asset('public/dasassets/img/morning-img-01.png') }}" alt="">
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
                <div class="dash-widget">
                    <img src="{{ asset('public/dasassets/img/doctor.png') }}" width="50px" style="margin: 8px 3px;"
                        alt="">
                    <div class="dash-content dash-count">
                        <h4>Active Doctors</h4>
                        <h2><span class="counter-up">{{ $doctors }}</span></h2>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
                <div class="dash-widget">
                    <img src="{{ asset('public/dasassets/img/patient.png') }}" width="50px" style="margin: 8px 3px;"
                        alt="">
                    <div class="dash-content dash-count">
                        <h4>Total Slips</h4>
                        <h2><span class="counter-up">{{ number_format($patients) }}</span></h2>
                    </div>
                </div>
            </div>
            {{-- <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
                <div class="dash-widget">
                    <img src="{{ asset('public/dasassets/img/drugs.png') }}" width="50px" style="margin: 8px 3px;"
                        alt="">
                    <div class="dash-content dash-count">
                        <h4>Total Medicines</h4>
                        <h2><span class="counter-up">{{ number_format($medicines) }}</span></h2>
                    </div>
                </div>
            </div> --}}
            <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
                <div class="dash-widget">
                    <img src="{{ asset('public/dasassets/img/salary.png') }}" width="50px" style="margin: 8px 3px;"
                        alt="">
                    <div class="dash-content dash-count">
                        <h4>Earnings</h4>
                        <h2>Rs. <span class="counter-up">{{ number_format($sale) }}</span></h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    {{-- <script>
        $(document).ready(function() {
            $('#hamza').select2();
        });
    </script> --}}
@endpush
