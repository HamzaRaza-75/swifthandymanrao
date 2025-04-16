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
                            <li class="breadcrumb-item active">Invoices</li>
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
                            <div class="page-table-header mb-2">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <div class="doctor-table-blk">
                                            <h3>Invoice List</h3>
                                            <div class="doctor-search-blk">
                                                <div class="top-nav-search table-search-blk">
                                                    <form>
                                                        <input type="text" class="form-control"
                                                            placeholder="Search here">
                                                        <a class="btn"><img
                                                                src="{{asset('public/assets/img/icons/search-normal.png')}}"
                                                                alt=""></a>
                                                    </form>
                                                </div>
                                                <div class="add-group">
                                                    <a href="{{ route('sale.create') }}"
                                                        class="btn btn-primary add-pluss ms-2"><img
                                                            src="public/assets/img/icons/plus.svg" alt=""></a>
                                                    <a href="javascript:;" class="btn btn-primary doctor-refresh ms-2"
                                                        id="reload-page"><img src="public/assets/img/icons/re-fresh.svg"
                                                            alt=""></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /Table Header -->
                            <div class="staff-search-table">
                                <form>
                                    <div class="row">
                                        <div class="col-12 col-md-6 col-xl-4">
                                            <div class="form-group local-forms cal-icon">
                                                <label>From </label>
                                                <input class="form-control datetimepicker" type="text">
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-6 col-xl-4">
                                            <div class="form-group local-forms cal-icon">
                                                <label>To </label>
                                                <input class="form-control datetimepicker" type="text">
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-6 col-xl-4 ms-auto">
                                            <div class="doctor-submit">
                                                <button type="submit"
                                                    class="btn btn-primary submit-list-form me-2">Search</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="table-responsive">
                                <table class="table border-0 custom-table comman-table mb-0">
                                    <thead>
                                        <tr>
                                            <th>
                                                SRC
                                            </th>
                                            <th>Invoice Number</th>
                                            <th>SubTotal</th>
                                            <th>Discount</th>
                                            <th>Total Ammount</th>
                                            <th>Date</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($sales as $key => $sale)
                                            <tr>
                                                <td>
                                                    {{ $key + 1 }}
                                                </td>

                                                <td>
                                                    @if ($sale->sale_key === null || $sale->sale_key === '')
                                                        {{ __('OutSide Sale') }}
                                                    @else
                                                        {{ $sale->sale_key }}
                                                    @endif
                                                </td>

                                                <td>
                                                    <h2>Rs. <span
                                                            class="counter-up">{{ number_format($sale->market_price, 2, '.', ',') }}</span>
                                                    </h2>
                                                </td>
                                                <td>
                                                    @if ($sale->discount == '')
                                                    {{ __('Rs. 0.00 ') }} @else
                                                    <h2>Rs. <span
                                                                class="counter-up">{{ number_format($sale->discount, 2, '.', ',') }}</span>
                                                        </h2>
                                                    @endif
                                                </td>
                                                <td>{{ $sale->total_price }}{{ __(' Rs') }}</td>
                                                <td>{{ $sale->date }}</td>

                                                <td class="d-flex">
                                                    <a class="text-white rounded bg-warning me-2"
                                                        href="{{ route('sale.show', $sale->id) }}">
                                                        <img src="{{ asset('public/assets/img/icons/eye.svg') }}"
                                                            class="m-2" alt="view">
                                                    </a>
                                                    <a class="text-white rounded bg-success me-2"
                                                        href="{{ route('slip.print', $sale->id) }}" target="_blank">
                                                        <img src="{{ asset('public/assets/img/icons/printer.svg') }}"
                                                            class="m-2" alt="view">
                                                    </a>

                                                    <button class="text-white rounded bg-primary me-2"
                                                        style="border:none; padding:0px;" data-bs-toggle="modal"
                                                        data-bs-target="#edit_slip_{{ $key }}">
                                                        <i class="m-2 fa-solid fa-pen-to-square "></i>
                                                    </button>
                                                    <a class="text-white rounded bg-danger me-2" href="#"
                                                        data-bs-toggle="modal"
                                                        data-bs-target="#delete_patient_{{ $key }}">
                                                        <i class="m-2 fa fa-trash-alt"></i>
                                                    </a>
                                                    <div id="delete_patient_{{ $key }}"
                                                        class="modal fade delete-modal" role="dialog">
                                                        <div class="modal-dialog modal-dialog-centered">
                                                            <div class="modal-content">
                                                                <!-- Form to delete the doctor -->
                                                                <form id="deleteForm"
                                                                    action="{{ route('slip.destroy', $sale->id) }}"
                                                                    method="POST">
                                                                    @csrf
                                                                    @method('DELETE')
                                                                    <div class="text-center modal-body">
                                                                        <img src="public/assets/img/sent.png" alt=""
                                                                            width="50" height="46">
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
                                        @endforeach
                                    </tbody>
                                </table>
                                <div style="padding:20px;">
                                    {!! $sales->withQueryString()->links('pagination::bootstrap-5') !!}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        $(document).ready(function() {
            $('#hamza').select2();
        });
    </script>
@endpush
