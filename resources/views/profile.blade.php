@extends('layouts.adminapp')

@section('content')
    <div class="content">
        <!-- Page Header -->
        <div class="page-header">
            <div class="row">
                <div class="col-sm-12">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0);">Dashboard </a></li>
                        <li class="breadcrumb-item"><i class="feather-chevron-right"></i></li>
                        <li class="breadcrumb-item active">Edit Profile</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- /Page Header -->

        <div class="card-box">
            <h3 class="card-title">Profile Informations</h3>
            <div class="row">
                <div class="col-md-12">
                    <div class="profile-img-wrap">
                        <img class="inline-block" src="{{ url('/') }}/public/dasassets/img/user-06.jpg" alt="user">
                    </div>
                    <div class="profile-basic">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group local-forms">
                                    <label class="focus-label">Name</label>
                                    <input type="text" class="form-control floating" disabled  value="{{ Auth::user()->name }}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group local-forms">
                                    <label class="focus-label">Email</label>
                                    <input type="text" class="form-control floating" disabled  value="{{ Auth::user()->email }}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group local-forms ">
                                    <label class="focus-label">Registration Date</label>
                                    <div class="">
                                        <input class="form-control floating " type="text" disabled
                                            value="{{ date('d/m/Y', strtotime(Auth::user()->created_at)) }}">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <form action="{{ route('adminupdate-password') }}" method="POST">
            @csrf
            <div class="card-box">
                <h3 class="card-title">{{ __('Change Password') }}</h3>
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group local-forms">
                            <label class="focus-label" for="oldPasswordInput">Old Password</label>
                            <input name="old_password" type="password"
                                class="form-control @error('old_password') is-invalid @enderror" id="oldPasswordInput"
                                placeholder="Old Password">
                            @error('old_password')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group local-forms">
                            <label for="newPasswordInput" class="form-label">New
                                Password</label>
                            <input name="new_password" type="password"
                                class="form-control @error('new_password') is-invalid @enderror" id="newPasswordInput"
                                placeholder="New Password">
                            @error('new_password')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group local-forms">
                            <label for="confirmNewPasswordInput" class="form-label">Confirm New
                                Password</label>
                            <input name="new_password_confirmation" type="password" class="form-control"
                                id="confirmNewPasswordInput" placeholder="Confirm New Password">
                        </div>
                    </div>
                </div>
                <div>
                    <button class="btn btn-primary submit-btn mb-4" type="submit">Save</button>
                </div>
            </div>
        </form>
    </div>
@endsection
