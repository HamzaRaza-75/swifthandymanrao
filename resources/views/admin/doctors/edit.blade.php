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
                        <li class="breadcrumb-item active">Edit Doctor</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- /Page Header -->
        <div class="row">
            <div class="col-sm-12">

                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('doctors.update', $doctor->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-heading">
                                        <h4>Edit Doctor</h4>
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
                            </div>
                            <div class="card-box">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="profile-img-wrap">
                                            <img class="inline-block" id="profileImage"
                                                src="@if ($doctor->image == '') {{ asset('public/dasassets/img/user.jpg') }} @else {{ asset('public/uploadedimages/' . $doctor->image) }} @endif"
                                                alt="user">
                                            <div class="fileupload btn">
                                                <span class="btn-text">edit</span>
                                                <input class="upload" type="file" id="imageInput" name="image"
                                                    onchange="previewImage(event)">
                                            </div>
                                        </div>
                                        <div class="profile-basic">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group local-forms">
                                                        <label class="focus-label">First Name <span
                                                                class="login-danger">*</span></label>
                                                        <input type="text" class="form-control floating" name="firstname"
                                                            value="{{ $doctor->firstname }}">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group local-forms">
                                                        <label class="focus-label">Last Name</label>
                                                        <input type="text" class="form-control floating" name="lastname"
                                                            value="{{ $doctor->lastname }}">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group local-forms">
                                                        <label class="focus-label">Phone No <span
                                                                class="login-danger">*</span></label>
                                                        <input type="text" class="form-control floating"
                                                            name="phonenumber" value="{{ $doctor->phone_num }}">
                                                    </div>
                                                </div>
                                                <div class="col-12 col-md-6 col-xl-6">
                                                    <div class="form-group select-gender">
                                                        <label class="gen-label">Gender <span
                                                                class="login-danger">*</span></label>
                                                        <div class="form-check-inline">
                                                            <label class="form-check-label">
                                                                <input type="radio" name="gender"
                                                                    class="form-check-input mt-0" value="Male"
                                                                    @if ($doctor->gender == 'Male') @checked(true) @endif>Male
                                                            </label>
                                                        </div>
                                                        <div class="form-check-inline">
                                                            <label class="form-check-label">
                                                                <input type="radio" name="gender"
                                                                    class="form-check-input mt-0" value="Female"
                                                                    @if ($doctor->gender == 'Female') @checked(true) @endif>Female
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group local-forms">
                                                        <label class="focus-label">Education <span
                                                                class="login-danger">*</span></label>
                                                        <input type="text" class="form-control floating" name="education"
                                                            value="{{ $doctor->education }}">
                                                    </div>
                                                </div>
                                                <div class="col-12 col-md-6 col-xl-6">
                                                    <div class="form-group select-gender">
                                                        <label class="gen-label">Status <span
                                                                class="login-danger">*</span></label>
                                                        <div class="form-check-inline">
                                                            <label class="form-check-label">
                                                                <input type="radio" name="status"
                                                                    class="form-check-input mt-0" value="Active"
                                                                    @if ($doctor->status == 'Active') @checked(true) @endif>Active
                                                            </label>
                                                        </div>
                                                        <div class="form-check-inline">
                                                            <label class="form-check-label">
                                                                <input type="radio" name="status"
                                                                    class="form-check-input mt-0" value="In Active"
                                                                    @if ($doctor->status == 'In Active') @checked(true) @endif>In
                                                                Active
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-12">
                                                    <div class="doctor-submit text-end">
                                                        <button type="submit"
                                                            class="btn btn-primary submit-form me-2">Update</button>
                                                        <a href="{{ route('doctors.index') }}"
                                                            class="btn btn-primary cancel-form">Cancel</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
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
        function previewImage(event) {
            const reader = new FileReader();
            reader.onload = function() {
                const output = document.getElementById('profileImage');
                output.src = reader.result;
            };
            reader.readAsDataURL(event.target.files[0]);
        }
    </script>
@endpush
