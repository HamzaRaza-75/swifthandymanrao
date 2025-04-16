@extends('layouts.adminapp')
@section('content')
    <div class="content">
        <!-- Page Header -->
        <div class="page-header">
            <div class="row">
                <div class="col-sm-12">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Slips</a></li>
                        <li class="breadcrumb-item"><i class="feather-chevron-right"></i></li>
                        <li class="breadcrumb-item active">Patients Slip</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- /Page Header -->

        <div class="row">
            <div class="col-sm-12">

                <div class="card card-table show-entire">
                    <div class="card-body">

                        <!-- Table Header -->
                        <div class="mb-2 page-table-header">
                            <div class="row align-items-center">
                                <div class="col">
                                    <div class="doctor-table-blk">
                                        <h3>Slip List</h3>
                                        <div class="doctor-search-blk">
                                            <div class="top-nav-search table-search-blk">
                                                <form action="#" method="GET" id="search_form">
                                                    <input type="text" class="form-control" placeholder="Search By Token"
                                                        id="myInput" name="search">
                                                </form>
                                            </div>
                                            <div class="add-group">
                                                <button class="btn btn-primary ms-2" type="button"><img
                                                        src="{{ asset('public/dasassets/img/icons/search-normal.png') }}"
                                                        height="25px" alt="" onclick="submitform()"></button>
                                                <button type="btn" class="btn btn-primary add-pluss ms-2"
                                                    data-bs-toggle="modal" data-bs-target="#bank_details"><img
                                                        src="{{ asset('public/dasassets/img/icons/plus.svg') }}"
                                                        alt=""></button>
                                                <a href="javascript:;" class="btn btn-primary doctor-refresh ms-2"
                                                    id="reload-page"><img
                                                        src="{{ asset('public/dasassets/img/icons/re-fresh.svg') }}"
                                                        alt=""></a>
                                            </div>
                                            {{-- slip modal --}}
                                            <div class="modal custom-modal  fade bank-details" id="bank_details"
                                                role="dialog">
                                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                                    <form action="{{ route('slip.store') }}" method="POST">
                                                        @csrf
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <div class="form-header text-start mb-0">
                                                                    <h4 class="mb-0">Add Token</h4>
                                                                </div>
                                                                <button type="button" class="close"
                                                                    data-bs-dismiss="modal" aria-label="Close">
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
                                                                                    class="form-control .pad-y"
                                                                                    name="name" placeholder="Name"
                                                                                    required>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-lg-6 col-md-6">
                                                                            <div class="form-group">
                                                                                <label>Age <span
                                                                                        class="login-danger">*</span></label>
                                                                                <input type="number" name="age"
                                                                                    class="form-control" placeholder="Age"
                                                                                    required>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-lg-6 col-md-6">
                                                                            <div class="form-group">
                                                                                <label>Gender <span
                                                                                        class="login-danger">*</span></label>
                                                                                <select class="form-control" name="gender">
                                                                                    <option value="Male">Male</option>
                                                                                    <option value="Female">Female
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
                                                                                        <option value="{{ $dector->id }}">
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
                                                                                    @foreach ($slipcategories as $slipcategory)
                                                                                        <option
                                                                                            value="{{ $slipcategory->id }}">
                                                                                            {{ $slipcategory->title }}
                                                                                        </option>
                                                                                    @endforeach
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-12 col-md-6 col-xl-6">
                                                                            <div class="form-group">
                                                                                <label>Slip Date <span
                                                                                        class="login-danger">*</span></label>
                                                                                <input class="form-control" name="date"
                                                                                    type="date"
                                                                                    value="{{ date('Y-m-d') }}"
                                                                                    placeholder="">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-12 col-lg-12">
                                                                            <div class="form-group">
                                                                                <label>Comment</label>
                                                                                <textarea class="form-control" name="comment" rows="5" cols="30" style="height: 70px"></textarea>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <div class="bank-details-btn">
                                                                    <a href="javascript:void(0);" data-bs-dismiss="modal"
                                                                        class="btn bank-cancel-btn me-2">Cancel</a>
                                                                    <button type="submit" class="btn bank-save-btn">Add
                                                                        Token</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /Table Header -->

                    <div class="table-responsive">
                        <table class="table mb-0 border-0 custom-table comman-table ">
                            <thead>
                                <tr>
                                    <th>Slip No</th>
                                    <th>Name</th>
                                    <th>Token Type</th>
                                    <th>Price</th>
                                    <th>Doctor</th>
                                    <th>Date</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody id="myTable">
                                <div id="searchResults"></div>
                                @foreach ($slips as $key => $slip)
                                    <tr>
                                        @if ($slip->slip_nums == '')
                                            <td>
                                                {{ $slip->slip_num }}
                                            </td>
                                        @else
                                            <td>
                                                {{ $slip->slip_nums }}
                                            </td>
                                        @endif

                                        <td>
                                            {{ $slip->name }}
                                        </td>

                                        <td>
                                            {{ $slip->token_type }}
                                        </td>

                                        <td>
                                            Rs. <span class="counter-up">{{ number_format($slip->cash) }}</span>
                                        </td>

                                        <td>
                                            {{ $slip->dector_name }}
                                        </td>

                                        <td>
                                            {{ $slip->date }}
                                        </td>

                                        <td class="d-flex">
                                            <a class="text-white rounded btn btn-warning me-2"
                                                href="{{ route('slip.show', $slip->id) }}">
                                                <img src="{{ asset('public/dasassets/img/icons/eye.svg') }}"
                                                    class="" alt="view">
                                            </a>
                                            <a class="text-white rounded btn btn-light me-2"
                                                href="{{ route('slip.print', $slip->id) }}" target="_blank">
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
                                            <div id="delete_patient_{{ $key }}" class="modal fade delete-modal"
                                                role="dialog">
                                                <div class="modal-dialog modal-dialog-centered">
                                                    <div class="modal-content">
                                                        <!-- Form to delete the doctor -->
                                                        <form id="deleteForm"
                                                            action="{{ route('slip.destroy', $slip->id) }}"
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
                                            <form action="{{ route('slip.update', $slip->id) }}" method="POST">
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
                                                                        <input type="text" class="form-control .pad-y"
                                                                            name="name" value="{{ $slip->name }}"
                                                                            required>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-6 col-md-6">
                                                                    <div class="form-group">
                                                                        <label>Age <span
                                                                                class="login-danger">*</span></label>
                                                                        <input type="number" name="age"
                                                                            class="form-control"
                                                                            value="{{ $slip->age }}" required>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-6 col-md-6">
                                                                    <div class="form-group">
                                                                        <label>Gender <span
                                                                                class="login-danger">*</span></label>
                                                                        <select class="form-control" name="gender">
                                                                            <option value="Male"
                                                                                @if ($slip->gender === 'Male') selected @endif>
                                                                                Male</option>
                                                                            <option value="Female"
                                                                                @if ($slip->gender === 'Female') selected @endif>
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
                                                                                    @if ($slip->dector_id == $dector->id) selected @endif>
                                                                                    {{ $dector->name }}</option>
                                                                            @endforeach
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-6 col-md-6">
                                                                    <div class="form-group">
                                                                        <label>Token Type <span
                                                                                class="login-danger">*</span></label>
                                                                        <select name="token_type" class="form-control">
                                                                            @foreach ($slipcategories as $slipcategory)
                                                                                <option value="{{ $slipcategory->id }}"
                                                                                    @if ($slip->token_type == $slipcategory->title) selected @endif>
                                                                                    {{ $slipcategory->title }}
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
                                                                            value="{{ date('d/m/Y', strtotime($slip->date)) }}"
                                                                            placeholder="">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-12 col-lg-12">
                                                                    <div class="form-group">
                                                                        <label>Comment</label>
                                                                        <textarea class="form-control" name="comment" rows="5" cols="30" style="height: 70px"
                                                                            value="{{ $slip->comment }}"></textarea>
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
                            {{-- @if ($pharmacy->isEmpty())
                                            <div class="alert alert-warning" role="alert">
                                                No records found.
                                            </div>
                                        @endif --}}
                        </table>

                        {{-- <table id="slipsTable">
                            <thead>
                                <!-- Table header structure -->
                            </thead>
                            <tbody id="slipsTableBody">
                                <!-- Rows will be populated via AJAX -->
                            </tbody>
                        </table> --}}

                        <div style="padding:20px;">
                            {!! $slips->appends(request()->query())->links() !!}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    @if (Session::has('success'))
        <script>
            window.onload = function() {
                printSection('sectionToPrint');
            };
        </script>
    @endif

    @if (Session::has('success'))
        @php
            $printslip = DB::table('slips')
                ->orderBy('id', 'DESC')
                ->first();

        @endphp

        <!-- Your page content here -->

        <!-- The section you want to print -->
        <div id="sectionToPrint"
            style="visibility: hidden; font-family: 'Poppins', sans-serif;
        @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600');
        ">
            <section class="main-pd-wrapper">
                <div
                    style="
            text-align: center;
            margin: auto;
            line-height: 1.5;
            font-size: 14px;
            color: #4a4a4a;
          ">
                    <div class="headr-sec" style="display: flex; align-items: center; gap: 10px">
                        <img src="{{ asset('public/dasassets/img/logo.png') }}" class="logo-img" style="height: 48px" />

                        <p
                            style="
                font-weight: bold;
                color: #000;
                font-size: 18px;
                display: flex;
                flex: 1;
                text-align: center;
              ">
                            RAZIA NIAZ MEDICARE CENTER
                        </p>
                    </div>
                    <p style="margin: 4px auto; text-transform: uppercase; color: #000;">
                        Near Hascol Petrol Pump <br />Khanewal Road Multan
                    </p>
                    <div
                        style="
              display: flex;
              align-items: center;
              justify-content: center;
              font-size: 16px;
              font-weight: 600;
               color: #000;
            ">
                        <div style="margin-right: 12px">Phone:</div>
                        061 6353200
                    </div>
                    <hr style="border: 1px dashed rgb(131, 131, 131); margin: 10px auto" />
                </div>
                <div
                    style="
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 10px 0;
            font-size: 24px;
            font-weight: 700;
          ">
                    {{ $printslip->slip_nums }}
                </div>
                <div style="display: flex; flex-direction: column; margin-top: 20px">
                    <div
                        style="
              display: flex;
              align-items: center;
              justify-content: space-between;
              margin-bottom: 8px;
               color: #000;
            ">
                        <h4
                            style="
                margin: 0;
                margin: 0;
                display: flex;
                align-items: center;
                flex: 0.8;
              ">
                            Name :
                        </h4>
                        <p
                            style="
                margin: 0;
                margin: 0;
                display: flex;
                align-items: center;
                flex: 1;
              ">
                            {{ $printslip->name }}
                        </p>
                    </div>
                    <div
                        style="
              display: flex;
              align-items: center;
              justify-content: space-between;
              margin-bottom: 8px;
               color: #000;
            ">
                        <h4
                            style="
                margin: 0;
                margin: 0;
                display: flex;
                align-items: center;
                flex: 0.8;
              ">
                            Age :
                        </h4>
                        <p
                            style="
                margin: 0;
                margin: 0;
                display: flex;
                align-items: center;
                flex: 1;
              ">
                            {{ $printslip->age }} years
                        </p>
                    </div>
                    <div
                        style="
              display: flex;
              align-items: center;
              justify-content: space-between;
              margin-bottom: 8px;
               color: #000;
            ">
                        <h4
                            style="
                margin: 0;
                margin: 0;
                display: flex;
                align-items: center;
                flex: 0.8;
              ">
                            Gender :
                        </h4>
                        <p
                            style="
                margin: 0;
                margin: 0;
                display: flex;
                align-items: center;
                flex: 1;
              ">
                            {{ $printslip->gender }}
                        </p>
                    </div>
                    <div
                        style="
              display: flex;
              align-items: center;
              justify-content: space-between;
              margin-bottom: 8px;
               color: #000;
            ">
                        <h4
                            style="
                margin: 0;
                margin: 0;
                display: flex;
                align-items: center;
                flex: 0.8;
              ">
                            Token Type :
                        </h4>
                        <p
                            style="
                margin: 0;
                margin: 0;
                display: flex;
                align-items: center;
                flex: 1;
              ">
                            {{ $printslip->token_type }}
                        </p>
                    </div>
                    <div
                        style="
              display: flex;
              align-items: center;
              justify-content: space-between;
              margin-bottom: 8px;
               color: #000;
            ">
                        <h4
                            style="
                margin: 0;
                margin: 0;
                display: flex;
                align-items: center;
                flex: 0.8;
              ">
                            Cash Received :
                        </h4>
                        <p
                            style="
                margin: 0;
                margin: 0;
                display: flex;
                align-items: center;
                flex: 1;
              ">
                            Rs: {{ $printslip->cash }}
                        </p>
                    </div>
                    <div
                        style="
              display: flex;
              align-items: center;
              justify-content: space-between;
              margin-bottom: 8px;
               color: #000;
            ">
                        <h4
                            style="
                margin: 0;
                margin: 0;
                display: flex;
                align-items: center;
                flex: 0.8;
              ">
                            Ref. To Dr. :
                        </h4>
                        <p
                            style="
                margin: 0;
                margin: 0;
                display: flex;
                align-items: center;
                flex: 1;
              ">
                            {{ $printslip->dector_name }}
                        </p>
                    </div>
                    <div
                        style="
              display: flex;
              align-items: center;
              justify-content: space-between;
              margin-bottom: 8px;
               color: #000;
            ">
                        <h4
                            style="
                margin: 0;
                margin: 0;
                display: flex;
                align-items: center;
                flex: 0.8;
              ">
                            Token By :
                        </h4>
                        <p
                            style="
                margin: 0;
                margin: 0;
                display: flex;
                align-items: center;
                flex: 1;
              ">
                            {{ $printslip->token_holder }}
                        </p>
                    </div>
                    <div
                        style="
              display: flex;
              align-items: center;
              justify-content: space-between;
              margin-bottom: 8px;
               color: #000;
            ">
                        <h4
                            style="
                margin: 0;
                margin: 0;
                display: flex;
                align-items: center;
                flex: 0.8;
              ">
                            Time :
                        </h4>
                        <p
                            style="
                margin: 0;
                margin: 0;
                display: flex;
                align-items: center;
                flex: 1;
              ">
                            {{ date('d-M-Y h:i A', strtotime($printslip->created_at)) }}
                        </p>
                    </div>
                </div>
                <div
                    style="
              width: 100%;
              margin-top: 25px;
              border-top: 1px dashed #000;
              display: flex;
              align-items: center;
              justify-content: space-between;
              padding: 10px 0;
              font-size: 10px;
              font-weight: 400;
              text-transform: uppercase;
               color: #000;
          ">
                    <div style="display: flex; align-items: center; margin-bottom: 0px">
                        Software develop by: www.zeezsoft.com
                    </div>
                    <!--<div style="display: flex; align-items: center">-->
                    <!--  Contact: 0324 7003964-->
                    <!--</div>-->
                </div>
            </section>
        </div>
    @endif
@endsection
@push('scripts')
    <script>
        function printSection(sectionId) {
            var section = document.getElementById(sectionId);
            if (section) {
                var printWindow = window.open('', '', 'width=800,height=600');
                printWindow.document.write('<html><head><title>Print</title></head><body>');
                printWindow.document.write(section.innerHTML);
                printWindow.document.write('</body></html>');
                printWindow.document.close();
                printWindow.print();
            }
        }

        function submitform() {
            document.getElementById('search_form').submit();
        }

        function disableSubmit() {
            var submitButton = document.getElementById("submitButton");
            submitButton.disabled = true;
        }
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        // $(document).ready(function() {
        //     $('#myInput').keyup(function() {
        //         var keyword = $(this).val();
        //         var baseUrl = $('meta[name="base-url"]').attr('content');
        //         $.ajax({
        //             url: "{{ route('filterUsers') }}",
        //             type: 'GET',
        //             data: {
        //                 keyword: keyword
        //             },
        //             success: function(response) {

        //                 console.log(response);
        //                 var usersTable = $('#usersTable tbody');
        //                 usersTable.empty();


        //                 response.slips.forEach(function(slip, key) {
        //                     usersTable += '<tr>';
        //                     // Construct each table row based on the slip data
        //                     // You'll need to adapt this part to match your actual slip attributes and structure
        //                     usersTable += '<td>' + slip.slip_nums + '</td>';
        //                     usersTable += '<td>' + slip.name + '</td>';
        //                     usersTable += '<td>' + slip.token_type + '</td>';
        //                     usersTable += '<td>Rs. ' + slip.cash + '</td>';
        //                     usersTable += '<td>' + slip.dector_name + '</td>';
        //                     usersTable += '<td>' + slip.date + '</td>';
        //                     // Add other columns and actions as needed
        //                     usersTable += '</tr>';
        //                 });
        //                 // $('#slipsTableBody').html(usersTable);
        //             },
        //             error: function(xhr) {
        //                 console.log(xhr.responseText);
        //             }
        //         });
        //     });
        // });
        // Use jQuery to handle the click event of the button
        $(document).ready(function() {
            $('#addSlipButton').click(function() {
                $('#addslip').modal('show'); // Show the modal with ID 'addslip'
            });
        });
    </script>


    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
@endpush
