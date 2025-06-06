@extends('layouts.app')
@section('content')
    <div class="page-wrapper">
        <div class="content">
            <!-- Page Header -->
            <div class="page-header">
                <div class="row">
                    <div class="col-sm-12">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0);">Accounts </a></li>
                            <li class="breadcrumb-item"><i class="feather-chevron-right"></i></li>
                            <li class="breadcrumb-item active">Add Invoice</li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- /Page Header -->

            <div class="row">
                <div class="col-sm-12">

                    <div class="card ">
                        <div class="card-body">
                            <form>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-heading">
                                            <h4>Add Invoice</h4>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6 col-xl-6">
                                        <div class="form-group local-forms">
                                            <label>Patient Name <span class="login-danger">*</span></label>
                                            <input class="form-control" type="text">
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6 col-xl-6">
                                        <div class="form-group local-forms">
                                            <label>Email <span class="login-danger">*</span></label>
                                            <input class="form-control" type="email">
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6 col-xl-6">
                                        <div class="form-group local-forms">
                                            <label>Department <span class="login-danger">*</span></label>
                                            <select class="form-control select">
                                                <option>Select Department</option>
                                                <option>Orthopedics</option>
                                                <option>Radiology</option>
                                                <option>Dentist</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6 col-xl-6">
                                        <div class="form-group local-forms">
                                            <label>Tax <span class="login-danger">*</span></label>
                                            <select class="form-control select">
                                                <option>Select Tax</option>
                                                <option>VAT</option>
                                                <option>GST</option>
                                                <option>No GST</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6 col-xl-6">
                                        <div class="form-group local-forms cal-icon">
                                            <label>Invoice Date <span class="login-danger">*</span></label>
                                            <input class="form-control datetimepicker" type="text">
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6 col-xl-6">
                                        <div class="form-group local-forms cal-icon">
                                            <label>Due Date <span class="login-danger">*</span></label>
                                            <input class="form-control datetimepicker" type="text">
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6 col-xl-6">
                                        <div class="form-group local-forms">
                                            <label>Patient Address <span class="login-danger">*</span></label>
                                            <textarea class="form-control" rows="3" cols="30"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6 col-xl-6">
                                        <div class="form-group local-forms">
                                            <label>Billing Address <span class="login-danger">*</span></label>
                                            <textarea class="form-control" rows="3" cols="30"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6 col-xl-6">
                                        <div class="form-group local-forms">
                                            <label>Payment Method <span class="login-danger">*</span></label>
                                            <select class="form-control select">
                                                <option>Select Payment Method</option>
                                                <option>Debit Card</option>
                                                <option>Gpay</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6 col-xl-6">
                                        <div class="form-group local-forms">
                                            <label>Select Payment Status <span class="login-danger">*</span></label>
                                            <select class="form-control select">
                                                <option>Select Tax</option>
                                                <option>Paid</option>
                                                <option>Un Paid</option>
                                                <option>Patially Paid</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-12">
                                        <div class="table-responsive">
                                            <table class="table border-0 custom-table invoices-table">
                                                <thead>
                                                    <tr>
                                                        <th style="width: 20px">#</th>
                                                        <th class="col-sm-2">Item</th>
                                                        <th class="col-md-6">Description</th>
                                                        <th style="width:100px;">Unit Cost</th>
                                                        <th style="width:80px;">Qty</th>
                                                        <th>Amount</th>
                                                        <th> </th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>1</td>
                                                        <td>
                                                            <input class="form-control" type="text"
                                                                style="min-width:150px">
                                                        </td>
                                                        <td>
                                                            <input class="form-control" type="text"
                                                                style="min-width:150px">
                                                        </td>
                                                        <td>
                                                            <input class="form-control" style="width:100px" type="text">
                                                        </td>
                                                        <td>
                                                            <input class="form-control" style="width:80px" type="text">
                                                        </td>
                                                        <td>
                                                            <input class="form-control " style="width:120px" type="text">
                                                        </td>
                                                        <td><a href="javascript:void(0)"
                                                                class="text-success font-18 add-table-invoice"
                                                                title="Add"><i class="fa fa-plus"></i></a></td>
                                                    </tr>
                                                    <tr>
                                                        <td>2</td>
                                                        <td>
                                                            <input class="form-control" type="text"
                                                                style="min-width:150px">
                                                        </td>
                                                        <td>
                                                            <input class="form-control" type="text"
                                                                style="min-width:150px">
                                                        </td>
                                                        <td>
                                                            <input class="form-control" style="width:100px"
                                                                type="text">
                                                        </td>
                                                        <td>
                                                            <input class="form-control" style="width:80px"
                                                                type="text">
                                                        </td>
                                                        <td>
                                                            <input class="form-control " style="width:120px"
                                                                type="text">
                                                        </td>
                                                        <td><a href="javascript:void(0)"
                                                                class="text-success font-18 add-table-invoice"
                                                                title="Add"><i class="fa fa-plus"></i></a></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="table-responsive custom-table invoices-table">
                                            <table class="table border-0 grand-totals">
                                                <tbody>
                                                    <tr>
                                                        <td class="text-end">Total</td>
                                                        <td>
                                                            <input class="form-control text-end" type="text">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-end ">Tax</td>
                                                        <td>
                                                            <input class="form-control text-end" type="text">
                                                        </td>
                                                    </tr>
                                                    <tr class="bold-total">
                                                        <td class="text-end">
                                                            Grand Total
                                                        </td>
                                                        <td>
                                                            <input class="form-control text-end" type="text">
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group local-forms">
                                            <label>Other Information <span class="login-danger">*</span></label>
                                            <textarea class="form-control" rows="3" cols="30"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="doctor-submit text-end">
                                            <button type="submit"
                                                class="btn btn-primary submit-form me-2">Submit</button>
                                            <button type="submit" class="btn btn-primary cancel-form">Cancel</button>
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
@endsection

@push('scripts')
    <script>
        $(document).ready(function() {
            $('#hamza').select2();
        });
    </script>
@endpush
