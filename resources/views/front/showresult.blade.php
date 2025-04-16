<html>

<!-- Mirrored from colorlib.com/etc/searchf/colorlib-search-7/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 28 Sep 2023 18:18:52 GMT -->

<head>
    <title>{{ config('app.name', 'Laravel') }}</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <style>
        .btn-toolbar {
            display: -ms-flexbox;
            display: flex;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
            -ms-flex-pack: start;
            justify-content: space-around;
        }

        body {
            background: #00b5e9;

        }
    </style>

</head>

<body>

    <div class="offset-md-2 col-md-8" style="margin-top: 50px">
        <div class="wrap">
            <div class="btn-toolbar buttons" style="margin-bottom: 50px">
                <div class="btn-group">
                    <a id="desktop" href="{{ url('/') }}/{{ $student->image }}" class="btn btn-primary" download>
                        <i class="fa fa-desktop" aria-hidden="true"></i>
                        Download
                    </a>
                </div>
                <div class="btn-group">
                    <a href="{{ url('/') }}" class="btn btn-success">
                        <i class="fa fa-mobile-phone" aria-hidden="true"></i>
                        Back
                    </a>
                </div>
            </div>

            <div class="card">
                <div class="card-header">{{ $student->name }}</div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">Reg No :</th>
                                <td scope="col">{{ $student->registration }}</td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="col">Sr.No:</th>
                                <td scope="col">{{ $student->serial_no }}</td>
                            </tr>
                            <tr>
                                <th scope="col">Roll No :</th>
                                <td scope="col">{{ $student->roll_number }}</td>
                            </tr>
                            <tr>
                                <th scope="col">Full NAME :</th>
                                <td scope="col">{{ $student->name }}</td>
                            </tr>
                            <tr>
                                <th scope="col">Father/Husband Name :</th>
                                <td scope="col">{{ $student->f_name }}</td>
                            </tr>
                            <tr>
                                <th scope="col">Trade :</th>
                                <td scope="col">{{ $student->cources }}</td>
                            </tr>
                            <tr>
                                <th scope="col">Duration :</th>
                                <td scope="col">{{ $student->duration }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

            </div>

            <div class="card" style="    margin-top: 20px">
                <div class="card-header">Marks Details</div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">Total Marks </th>
                                <th scope="col">Obtained Marks </th>
                                <th scope="col">Percentage </th>
                                <th scope="col">Grade </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td scope="col">{{ $student->total_marks }}</td>
                                <td scope="col">{{ $student->obtain_marks }}</td>
                                <td scope="col">{{ $student->percentage }}</td>
                                <td scope="col">{{ $student->grade }}</td>
                            </tr>

                        </tbody>
                    </table>
                </div>

            </div>
            <div class="card" style="    margin-top: 20px">
                <div class="card-header">Certificate</div>
                <div class="card-body">
                    <img src="{{ url('/') }}/{{ $student->image }}" </div>

                </div>
            </div>
        </div>
    </div>




    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
    </script>




</body>

<!-- Mirrored from colorlib.com/etc/searchf/colorlib-search-7/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 28 Sep 2023 18:18:53 GMT -->

</html>
