@extends('layouts.adminapp')
@section('content')
    <div class="content">
        <!-- Page Header -->
        <div class="page-header">
            <div class="row">
                <div class="col-sm-12">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Pharmacy </a></li>
                        <li class="breadcrumb-item"><i class="feather-chevron-right"></i></li>
                        <li class="breadcrumb-item active">Medicine List</li>
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
                                        <h3>Medicines List</h3>
                                        <div class="doctor-search-blk">
                                            <div class="top-nav-search table-search-blk">
                                                <form action="#" method="GET" id="search_form">
                                                    <input type="text" class="form-control" placeholder="Search Medicine"
                                                        id="myInput" name="search">
                                                </form>
                                            </div>
                                            <div class="add-group">
                                                <button class="btn btn-primary ms-2" type="submit"><img src="{{asset('public/dasassets/img/icons/search-normal.png')}}"
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
                                        <th>Medicine Name</th>
                                        <th>Sale Price</th>
                                        <th>Purchase Price</th>
                                        <th>Total Qty</th>
                                        <th>Remaining Qty</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody id="myTable">

                                    @foreach ($pharmacy as $key => $pharmacy)
                                        <tr>
                                            <td>
                                                {{ $key + 1 }}
                                            </td>

                                            <td>{{ $pharmacy->title }} <div><span
                                                        style="color:rgb(112, 24, 24); font-size:12px; cursor: pointer;">({{ $pharmacy->detail }})</span>
                                                </div>
                                            </td>
                                            <td>
                                                <h2>Rs. <span
                                                    class="counter-up">{{ number_format($pharmacy->sale_price, 2, '.', ',') }}</span>
                                            </h2>
                                            </td>
                                            <td>
                                                <h2>Rs. <span
                                                    class="counter-up">{{ number_format($pharmacy->phurcse_price, 2, '.', ',') }}</span>
                                            </h2>
                                            </td>

                                            <td>
                                                {{ $pharmacy->qty }} {{__('Qty')}}
                                            </td>

                                            <td>
                                                {{ $pharmacy->qty - $pharmacy->sale_madicine }} {{__('Qty')}}
                                            </td>

                                            <td class="d-flex">
                                                <a class="text-white rounded btn btn-primary me-3 "
                                                    href="{{ route('pharmacy.edit', $pharmacy->id) }}"><i
                                                        class=" fa-solid fa-pen-to-square "></i></a>
                                                <a class="text-white rounded btn btn-warning me-3"
                                                    href="{{ route('pharmacy.show', $pharmacy->id) }}">
                                                    <img src="{{ asset('public/dasassets/img/icons/eye.svg') }}"
                                                        class="" alt="view">
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                                {{-- @if ($pharmacy->isEmpty())
                                            <div class="alert alert-warning" role="alert">
                                                No records found.
                                            </div>
                                        @endif --}}
                            </table>
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
            $('#myinput').on('keyup', function() {
                var searchText = $(this).val().toLowerCase();
                $('#myTable tbody tr').each(function() {
                    var found = false;
                    $(this).find('td').each(function() {
                        var cellText = $(this).text().toLowerCase();
                        if (cellText.indexOf(searchText) !== -1) {
                            found = true;
                            return false; // Break the loop
                        }
                    });
                    $(this).toggle(found);
                });
            });
        });
    </script>
@endpush
