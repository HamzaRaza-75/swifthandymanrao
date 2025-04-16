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
                        <li class="breadcrumb-item active">Token Category Update</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- /Page Header -->
        <div class="row">
            <div class="col-sm-12">

                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('slipcategory.update', $slipcategory->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="row mb-4 justify-content-center ">
                                <div class="col-12">
                                    <div class="form-heading">
                                        <h4>Token Category Update</h4>
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
                                        <input class="form-control" type="text" placeholder=""
                                            value="{{ $slipcategory->title }}" name="title">
                                    </div>
                                </div>
                                <div class="col-6 ">
                                    <div class="form-group local-forms">
                                        <label>Token Category Price <span class="login-danger">*</span></label>
                                        <input class="form-control" type="number" placeholder=""
                                            value="{{ $slipcategory->value }}" name="value">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group local-forms">
                                        <label>Token Category Status <span class="login-danger">*</span></label>
                                        <select class="form-control select" id="hamza" name="status">
                                            <option selected>Choose Status</option>
                                            <option value="Active" @if ($slipcategory->status === 'Active') selected @endif>
                                                Active</option>
                                            <option value="In Active" @if ($slipcategory->status === 'In Active') selected @endif>
                                                In Active</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12 mt-4 ms-4 ">
                                    <div class="doctor-submit text-start">
                                        <button type="submit" class="btn btn-primary submit-form me-2">Update</button>
                                        <a href="{{ route('slipcategory.index') }}"
                                            class="btn btn-primary cancel-form">Cancel</a>
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
