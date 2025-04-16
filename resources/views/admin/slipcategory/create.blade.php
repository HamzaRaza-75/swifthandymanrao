@extends('layouts.adminapp')
@section('content')
    <div class="content">

        <!-- Page Header -->
        <div class="page-header">
            <div class="row">
                <div class="col-sm-12">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('slipcategory.index') }}">Token</a></li>
                        <li class="breadcrumb-item"><i class="feather-chevron-right"></i></li>
                        <li class="breadcrumb-item active">Token Category</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- /Page Header -->
        <div class="row">
            <div class="col-sm-12">

                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('slipcategory.store') }}" method="POST">
                            @csrf
                            <div class="row mb-4 justify-content-sm-center ">
                                <div class="col-12">
                                    <div class="form-heading">
                                        <h4>Token Category</h4>
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


                                <div class="col-6 ">
                                    <div class="form-group local-forms">
                                        <label>Token Category Name <span class="login-danger">*</span></label>
                                        <input class="form-control" type="text" placeholder="" name="title">
                                    </div>
                                </div>

                                <div class="col-6 ">
                                    <div class="form-group local-forms">
                                        <label>Token Category Price <span class="login-danger">*</span></label>
                                        <input class="form-control" type="number" placeholder="" name="value">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group local-forms">
                                        <label>Token Category Status <span class="login-danger">*</span></label>
                                        <select class="form-control select" id="hamza" name="status">
                                            <option selected>Choose Status</option>
                                            <option value="Active">Active</option>
                                            <option value="In Active">In Active</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-12 mt-4 ms-4 ">
                                    <div class="doctor-submit text-start">
                                        <button type="submit" class="btn btn-primary submit-form me-2">Submit</button>
                                        <a href="{{route('slipcategory.index')}}" class="btn btn-primary cancel-form">Cancel</a>
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
    {{-- <script>
        $(document).ready(function() {
            $('#hamza').select2();
        });
    </script> --}}
@endpush
