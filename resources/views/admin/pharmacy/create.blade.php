@extends('layouts.adminapp')
@section('content')
        <div class="content">

            <!-- Page Header -->
            <div class="page-header">
                <div class="row">
                    <div class="col-sm-12">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('pharmacy.index') }}">Pharmacy </a></li>
                            <li class="breadcrumb-item"><i class="feather-chevron-right"></i></li>
                            <li class="breadcrumb-item active">Add Medicine</li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- /Page Header -->
            <div class="row">
                <div class="col-sm-12">

                    <div class="card">
                        <div class="card-body">
                            <form action="{{ route('pharmacy.store') }}" method="POST">
                                @csrf

                                <div class="row mb-4">
                                    <div class="col-12">
                                        <div class="form-heading">
                                            <h4>Add Medicine</h4>
                                        </div>
                                    </div>
                                    @if (count($errors) > 0)
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="alert">
                                                    @foreach ($errors->all() as $error)
                                                        <li><span class="text-danger small">{{ $error }}</span></li>
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>
                                    @endif


                                    <div class="col-12 col-md-6 col-xl-4 ">
                                        <div class="form-group local-forms">
                                            <label>Medicine Name <span class="login-danger">*</span></label>
                                            <input class="form-control" type="text" placeholder="" name="title">
                                        </div>
                                    </div>

                                    <div class="col-12 col-md-6 col-xl-4">
                                        <div class="form-group local-forms">
                                            <label>Purchase Price <span class="login-danger">*</span></label>
                                            <input class="form-control" type="number" placeholder="" name="phurcse_price">
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6 col-xl-4">
                                        <div class="form-group local-forms">
                                            <label>Sale Price <span class="login-danger">*</span></label>
                                            <input class="form-control" type="number" placeholder="" name="sale_price">
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6 col-xl-6 ">
                                        <div class="form-group local-forms">
                                            <label>Medicine Quantity <span class="login-danger">*</span></label>
                                            <input class="form-control" type="number" placeholder="" name="qty">
                                        </div>
                                    </div>


                                    <div class="col-12 col-md-6 col-xl-6 ">
                                        <div class="form-group local-forms">
                                            <label>Medicine Detail <span class="login-danger">*</span></label>
                                            <input class="form-control" type="text" placeholder="" name="detail">
                                        </div>
                                    </div>


                                    <div class="col-12 col-md-6 col-xl-8">
                                        <div class="form-group local-forms">
                                            <label>Choose Unit<span class="login-danger">*</span></label>
                                            <select class="form-control select" id="hamza" name="unit">
                                                <option selected>Choose Unit</option>
                                                <option value="Box">Box</option>
                                                <option value="No">No</option>
                                                <option value="Packet">Packet</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6 col-xl-4">
                                        <div class="form-group local-forms cal-icon">
                                            <label>Expriey Date<span class="login-danger">*</span></label>
                                            <input class="form-control datetimepicker" name="expire_date" type="text" placeholder="">
                                        </div>
                                    </div>
                                    <div class="col-8 mt-2 ms-4 ">
                                        <div class="doctor-submit text-start">
                                            <button type="submit" class="btn btn-primary submit-form me-2">Submit</button>
                                            <a href="{{route('pharmacy.index')}}" class="btn btn-primary cancel-form">Cancel</a>
                                        </div>
                                    </div>
                                </div>
                            </form>
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
