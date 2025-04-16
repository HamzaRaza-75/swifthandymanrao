@extends('layouts.adminapp')
@section('content')
    <div class="content">
        <!-- Page Header -->
        <div class="page-header">
            <div class="row">
                <div class="col-sm-12">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Token Category </a></li>
                        <li class="breadcrumb-item"><i class="feather-chevron-right"></i></li>
                        <li class="breadcrumb-item active">Token Category List</li>
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
                                        <h3>Token Categories List</h3>
                                        <div class="doctor-search-blk">
                                            {{-- <div class="top-nav-search table-search-blk">
                                                <form action="#" method="GET" id="search_form">
                                                    <input type="text" class="form-control"
                                                        placeholder="Search By Tokent" id="myInput" name="search">
                                                </form>
                                            </div> --}}
                                            <div class="add-group">
                                                {{-- <button class="btn btn-primary ms-2" type="submit"><img
                                                        src="{{ asset('public/dasassets/img/icons/search-normal.png') }}"
                                                        height="25px" alt="" onclick="submitform()"></button> --}}
                                                <a href="{{route('slipcategory.create')}}" class="btn btn-primary add-pluss ms-2"
                                                    ><img
                                                        src="{{ asset('public/dasassets/img/icons/plus.svg') }}"
                                                        alt=""></a>
                                                <a href="javascript:;" class="btn btn-primary doctor-refresh ms-2"
                                                    id="reload-page"><img
                                                        src="{{ asset('public/dasassets/img/icons/re-fresh.svg') }}"
                                                        alt=""></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Table Header -->

                        <div class="table-responsive">
                            <table class="table mb-0 border-0 custom-table comman-table datatable">
                                <thead>
                                    <tr>
                                        <th>
                                            SRC
                                        </th>
                                        <th>Token Type</th>
                                        <th>Price</th>
                                        <th>Status</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody id="myTable">

                                    @foreach ($slipcategories as $key => $slipcategory)
                                        <tr>
                                            <td>
                                                {{ $key + 1 }}
                                            </td>

                                            <td>{{ $slipcategory->title }}</td>
                                            <td>
                                                {{-- {{ $doctor->created_at->format('d-m-Y') }} --}}
                                                {{ $slipcategory->value }}
                                            </td>
                                            <td>
                                                @if ($slipcategory->status === 'Active')
                                                    <span class="py-2 badge badge-success ">Active</span>
                                                @else
                                                    <span class="py-2 badge badge-danger ">Inactive</span>
                                                @endif
                                            </td>

                                            <td class="d-flex">
                                                <a class="text-white rounded btn btn-primary me-2"
                                                    href="{{ route('slipcategory.edit', $slipcategory->id) }}"><i
                                                        class="fa-solid fa-pen-to-square"></i></a>
                                                <a class="text-white btn rounded btn-danger me-2" href="#"
                                                    data-bs-toggle="modal" data-bs-target="#delete_patient">
                                                    <i class="fa fa-trash-alt"></i>
                                                </a>
                                            </td>
                                            <div id="delete_patient" class="modal fade delete-modal" role="dialog">
                                                <div class="modal-dialog modal-dialog-centered">
                                                    <div class="modal-content">
                                                        <!-- Form to delete the doctor -->
                                                        <form id="deleteForm"
                                                            action="{{ route('slipcategory.destroy', $slipcategory->id) }}"
                                                            method="POST">
                                                            @csrf
                                                            @method('DELETE')
                                                            <div class="text-center modal-body">
                                                                <img src="{{ asset('public/dasassets/img/sent.png') }}"
                                                                    alt="" width="50" height="46">
                                                                <h3>Are you sure you want to delete this Token Category?
                                                                </h3>
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
                                        </tr>
                                    @endforeach
                                    {{-- @if ($doctors->isEmpty())
                                                <div class="alert alert-warning" role="alert">
                                                    No records found.
                                                </div>
                                            @endif --}}
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


{{-- @push('scripts')
    <script>
        $(document).ready(function() {
            $("#myInput").on("keyup", function() {
                var value = $(this).val().toLowerCase();
                $("#myTable tr").filter(function() {
                    $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                });
            });
        });
    </script>
@endpush --}}
