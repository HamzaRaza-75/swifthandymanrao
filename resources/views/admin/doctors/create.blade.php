@extends('layouts.adminapp')
@section('content')
    <div class="content">

        <!-- Page Header -->
        <div class="page-header">
            <div class="row">
                <div class="col-sm-12">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0);">Doctors </a></li>
                        <li class="breadcrumb-item"><i class="feather-chevron-right"></i></li>
                        <li class="breadcrumb-item active">Add Doctor</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- /Page Header -->
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('doctors.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-heading">
                                        <h4>Create Doctor</h4>
                                    </div>
                                    @if ($errors->any())
                                        <div>
                                            <ul>
                                                @foreach ($errors->all() as $error)
                                                    <span class="text-danger small ">
                                                        <li>{{ $error }}</li>
                                                    </span>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif
                                </div>
                                <div class="col-12 col-md-6 col-xl-6">
                                    <div class="form-group local-forms">
                                        <label>First Name <span class="login-danger">*</span></label>
                                        <input class="form-control" type="text" placeholder="" name="firstname" required>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6 col-xl-6">
                                    <div class="form-group local-forms">
                                        <label>Last Name </label>
                                        <input class="form-control" type="text" placeholder="" name="lastname">
                                    </div>
                                </div>
                                <div class="col-12 col-md-6 col-xl-6">
                                    <div class="form-group local-forms">
                                        <label>Mobile <span class="login-danger">*</span></label>
                                        <input class="form-control" type="text" placeholder="" name="phonenumber"
                                            required>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6 col-xl-6">
                                    <div class="form-group select-gender">
                                        <label class="gen-label">Gender<span class="login-danger">*</span></label>
                                        <div class="form-check-inline">
                                            <label class="form-check-label">
                                                <input type="radio" name="gender" class="form-check-input mt-0"
                                                    value="Male">Male
                                            </label>
                                        </div>
                                        <div class="form-check-inline">
                                            <label class="form-check-label">
                                                <input type="radio" name="gender" class="form-check-input mt-0"
                                                    value="Female">Female
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6 col-xl-6">
                                    <div class="form-group local-forms">
                                        <label>Education <span class="login-danger">*</span></label>
                                        <input class="form-control" type="text" placeholder="" name="education" required>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6 col-xl-6">
                                    <div class="form-group local-top-form">
                                        <label class="local-top">Avatar </label>
                                        <div class="settings-btn upload-files-avator">
                                            <input type="file" accept="image/*" name="image" id="file"
                                                onchange="displayFileName(event)" class="hide-input">
                                            <label for="file" class="upload">Choose File</label>
                                            <span id="fileNameDisplay" class="file-name-display"></span>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12 col-md-6 col-xl-6">
                                    <div class="form-group select-gender">
                                        <label class="gen-label">Status <span class="login-danger">*</span></label>
                                        <div class="form-check-inline">
                                            <label class="form-check-label">
                                                <input type="radio" name="status" class="form-check-input mt-0"
                                                    value="Active">Active
                                            </label>
                                        </div>
                                        <div class="form-check-inline">
                                            <label class="form-check-label">
                                                <input type="radio" name="status" class="form-check-input mt-0"
                                                    value="In Active">In
                                                Active
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="doctor-submit text-end">
                                        <button type="submit" class="btn btn-primary submit-form me-2">Submit</button>
                                        <a href="{{ route('doctors.index') }}"
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
    <script>
        function displayFileName(event) {
            const input = event.target;
            const fileNameDisplay = document.getElementById('fileNameDisplay');

            if (input.files.length > 0) {
                fileNameDisplay.textContent = input.files[0].name;
            } else {
                fileNameDisplay.textContent = 'No file chosen';
            }
        }
    </script>
@endpush
