@extends('layouts.adminapp')
@section('content')
    <div class="content">

        <!-- Page Header -->
        <div class="page-header">
            <div class="row">
                <div class="col-sm-12">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0);">Reports </a></li>
                        <li class="breadcrumb-item"><i class="feather-chevron-right"></i></li>
                        <li class="breadcrumb-item active">Token Report</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Table Header -->
        <div class="row">
            <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
                <div class="dash-widget">
                    <img src="{{ asset('public/dasassets/img/doctor.png') }}" width="50px" style="margin: 8px 3px;"
                        alt="">
                    <div class="dash-content dash-count">
                        <h4>Token Categories</h4>
                        <h2><span class="counter-up">{{ $slipcategory_id }}</span></h2>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
                <div class="dash-widget">
                    <img src="{{ asset('public/dasassets/img/patient.png') }}" width="50px" style="margin: 8px 3px;"
                        alt="">
                    <div class="dash-content dash-count">
                        <h4>Total Slips</h4>
                        <h2><span class="counter-up">{{ number_format($patients->total()) }}</span></h2>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-sm-6 col-lg-6 col-xl-6">
                <div class="dash-widget">
                    <img src="{{ asset('public/dasassets/img/salary.png') }}" width="50px" style="margin: 8px 3px;"
                        alt="">
                    <div class="dash-content dash-count">
                        <h4>Earnings</h4>
                        <h2>Rs. <span class="counter-up">{{ number_format($sum) }}</span>
                        </h2>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-12">
                    <div class="card card-table show-entire">
                        <div class="card-body">

                            <!-- /Table Header -->
                            <div class="staff-search-table">
                                <form action="#" method="GET">
                                    <div class="row">
                                        <div class="col-12 col-md-6 col-xl-3">
                                            <div class="form-group local-forms">
                                                <label> Dector </label>
                                                <select class="form-control select" name="dector">
                                                    <option value="">Select Dector</option>
                                                    @foreach ($dectors as $key => $dector)
                                                        <option value="{{ $dector->id }}">{{ $dector->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-6 col-xl-3">
                                            <div class="form-group local-forms">
                                                <label> Token Type </label>
                                                <select class="form-control select" name="tokentype">
                                                    <option value="">Select Token Type</option>
                                                    @foreach ($slipcategory as $key => $slipcat)
                                                        <option value="{{ $slipcat->title }}">{{ $slipcat->title }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-6 col-xl-3">
                                            <div class="form-group local-forms">
                                                <label>From </label>
                                                <input class="form-control " type="date" name="from_date">
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-6 col-xl-3">
                                            <div class="form-group local-forms ">
                                                <label>To </label>
                                                <input class="form-control " type="date" name="to_date">
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-6 col-xl-3">
                                            <div class="doctor-submit">
                                                <button type="submit"
                                                    class="btn btn-primary submit-list-form me-2">Search</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>

                            <div class="table-responsive">
                                <table class="table border-0 custom-table comman-table  mb-0">
                                    <thead>
                                        <tr>
                                            <th>Sr #</th>
                                            <th>Token Type</th>
                                            <th>Total Slips</th>
                                            <th>Amount</th>
                                            <th>Total Income</th>
                                        </tr>
                                    </thead>
                                    <tbody class="mb-5">
                                        @foreach ($categories as $key => $category)
                                            <tr>
                                                <td>{{ $key + 1 }}</td>
                                                <td> {{ $category->title }} </td>
                                                <td> {{ $category->totalslipcategory }} </td>
                                                <td>Rs. <span class="counter-up">{{ number_format($category->value) }}</span> </td>
                                                <td>Rs. <span class="counter-up">{{ number_format($category->slipreportsrcash) }}</span> </td>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Page Header -->

        <div class="row">
            <div class="col-sm-12">

                <div class="card card-table show-entire">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table border-0 custom-table comman-table  mb-0">
                                <thead>
                                    <tr>
                                        <th>
                                            SR
                                        </th>
                                        <th>Token Number</th>
                                        <th>Patient Name</th>
                                        <th>Token Type</th>
                                        <th>Token Price</th>
                                        <th>Doctor Name</th>
                                        <th>Date</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($patients as $key => $patient)
                                        <tr>
                                            <td>
                                                {{ $key + 1 }}
                                            </td>
                                            <td>{{ $patient->slip_nums }} </td>
                                            <td>{{ $patient->name }}</td>
                                            <td>{{ $patient->token_type }}</td>
                                            <td>Rs. <span
                                                        class="counter-up">{{ number_format($patient->cash) }}</span>
                                            </td>
                                            <td>{{ $patient->dector_name }}</td>
                                            <td>{{ $patient->date }}</td>

                                            <td class="d-flex">
                                                <a class="text-white rounded btn btn-warning me-2"
                                                    href="{{ route('slip.show', $patient->id) }}">
                                                    <img src="{{ asset('public/dasassets/img/icons/eye.svg') }}"
                                                        class="" alt="view">
                                                </a>
                                                <a class="text-white rounded btn btn-light me-2"
                                                    href="{{ route('slip.print', $patient->id) }}" target="_blank">
                                                    <img src="{{ asset('public/dasassets/img/icons/printer.svg') }}"
                                                        class="" alt="view">
                                                </a>

                                                <button class="text-white rounded btn btn-primary me-2" style=""
                                                    data-bs-toggle="modal" data-bs-target="#edit_slip_{{ $key }}">
                                                    <i class="fa-solid fa-pen-to-square "></i>
                                                </button>
                                                <a class="text-white rounded btn btn-danger me-2" href="#"
                                                    data-bs-toggle="modal"
                                                    data-bs-target="#delete_patient_{{ $key }}">
                                                    <i class="fa fa-trash-alt"></i>
                                                </a>
                                                <div id="delete_patient_{{ $key }}"
                                                    class="modal fade delete-modal" role="dialog">
                                                    <div class="modal-dialog modal-dialog-centered">
                                                        <div class="modal-content">
                                                            <!-- Form to delete the doctor -->
                                                            <form id="deleteForm"
                                                                action="{{ route('slip.destroy', $patient->id) }}"
                                                                method="POST">
                                                                @csrf
                                                                @method('DELETE')
                                                                <div class="text-center modal-body">
                                                                    <img src="{{ url('/') }}/public/dasassets/img/sent.png"
                                                                        alt="" width="50" height="46">
                                                                    <h3>Are you sure you want to delete Slip?</h3>
                                                                    <div class="m-t-20">
                                                                        <a href="#" class="btn btn-white"
                                                                            data-bs-dismiss="modal">Close</a>
                                                                        <button type="submit"
                                                                            class="btn btn-danger">Delete</button>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <div class="modal custom-modal modal-bg fade bank-details"
                                            id="edit_slip_{{ $key }}" role="dialog">
                                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                                <form action="{{ route('slip.update', $patient->id) }}" method="POST">
                                                    @csrf
                                                    @method('PUT')
                                                    <div class="modal-content">
                                                        <div class="modal-header">

                                                            <div class="form-header text-start mb-0">
                                                                <h4 class="mb-0">Edit Token</h4>
                                                            </div>
                                                            <button type="button" class="close" data-bs-dismiss="modal"
                                                                aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body text-start">
                                                            <div class="bank-inner-details">
                                                                <div class="row">
                                                                    <div class="col-lg-6 col-md-6">
                                                                        <div class="form-group">
                                                                            <label>Patient Name <span
                                                                                    class="login-danger">*</span></label>
                                                                            <input type="text"
                                                                                class="form-control .pad-y" name="name"
                                                                                value="{{ $patient->name }}" required>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-6 col-md-6">
                                                                        <div class="form-group">
                                                                            <label>Age <span
                                                                                    class="login-danger">*</span></label>
                                                                            <input type="number" name="age"
                                                                                class="form-control"
                                                                                value="{{ $patient->age }}" required>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-6 col-md-6">
                                                                        <div class="form-group">
                                                                            <label>Gender <span
                                                                                    class="login-danger">*</span></label>
                                                                            <select class="form-control" name="gender">
                                                                                <option value="Male"
                                                                                    @if ($patient->gender === 'Male') selected @endif>
                                                                                    Male</option>
                                                                                <option value="Female"
                                                                                    @if ($patient->gender === 'Female') selected @endif>
                                                                                    Female
                                                                                </option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-6 col-md-6">
                                                                        <div class="form-group">
                                                                            <label>Doctor Name <span
                                                                                    class="login-danger">*</span></label>
                                                                            <select class="form-control" name="dector">
                                                                                @foreach ($dectors as $dector)
                                                                                    <option value="{{ $dector->id }}"
                                                                                        @if ($patient->dector_id == $dector->id) selected @endif>
                                                                                        {{ $dector->name }}</option>
                                                                                @endforeach
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-6 col-md-6">
                                                                        <div class="form-group">
                                                                            <label>Token Type <span
                                                                                    class="login-danger">*</span></label>
                                                                            <select name="token_type"
                                                                                class="form-control">
                                                                                @foreach ($slipcategory as $slipcategories)
                                                                                    <option
                                                                                        value="{{ $slipcategories->id }}"
                                                                                        @if ($patient->token_type == $slipcategories->title) selected @endif>
                                                                                        {{ $slipcategories->title }}
                                                                                    </option>
                                                                                @endforeach
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-12 col-md-6 col-xl-6">
                                                                        <div class="form-group cal-icon">
                                                                            <label>Slip Date <span
                                                                                    class="login-danger">*</span></label>
                                                                            <input class="form-control datetimepicker"
                                                                                name="date" type="text"
                                                                                value="{{ date('d/m/Y', strtotime($patient->date)) }}"
                                                                                placeholder="">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-12 col-lg-12">
                                                                        <div class="form-group">
                                                                            <label>Comment</label>
                                                                            <textarea class="form-control" name="comment" rows="5" cols="30" style="height: 70px"
                                                                                value="{{ $patient->comment }}"></textarea>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <div class="bank-details-btn">
                                                                <a href="javascript:void(0);" data-bs-dismiss="modal"
                                                                    class="btn bank-cancel-btn me-2">Cancel</a>
                                                                <button type="submit" class="btn bank-save-btn">Update
                                                                    Token</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    @endforeach
                                </tbody>
                            </table>

                            <div style="padding:20px;">
                                {{$patients->links()}}
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
