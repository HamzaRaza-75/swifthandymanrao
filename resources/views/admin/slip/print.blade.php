<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Tax Invoice</title>
    <link rel="shortcut icon" type="image/png" href="./favicon.png" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="{{ url('/') }}/public/dasassets/css/bootstrap.min.css">

    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="{{ url('/') }}/public/dasassets/plugins/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="{{ url('/') }}/public/dasassets/plugins/fontawesome/css/all.min.css">

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600');
    </style>
    <script>
        window.onload = function() {
            window.print();
        };
    </script>

</head>

<body style="font-family: 'Poppins', sans-serif">
    <section class="main-pd-wrapper">
        <div
            style="
          text-align: center;
          margin: auto;
          line-height: 1.5;
          font-size: 14px;
          color: #4a4a4a;
        ">
            <div class="headr-sec" style="display: flex; align-items: center; gap: 10px">
                <img src="{{ asset('public/dasassets/img/logo.png') }}" class="logo-img" style="height: 48px" />

                <p
                    style="
              font-weight: bold;
              margin-top:16px;
              color: #000;
              font-size: 18px;
              display: flex;
              flex: 1;
              text-align: center;
            ">
                    RAZIA NIAZ MEDICARE CENTER
                </p>
            </div>
            <p style="margin: 4px auto; text-transform: uppercase;  color: #000;">
                Near Hascol Petrol Pump <br />Khanewal Road Multan
            </p>
            <div
                style="
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 18px;
            font-weight: 600;
          ">
                <div style="margin-right: 12px; color: #000;">Phone:</div>
                061 6353200
            </div>
            <hr style="border: 1px dashed rgb(131, 131, 131); margin: 8px auto" />
        </div>
        <div
            style="
          display: flex;
          align-items: center;
          justify-content: center;
          margin: 10px 0;
          font-size: 20px;
          font-weight: 500;
        ">
            {{ $slip->slip_nums }}
        </div>
        <div style="display: flex; flex-direction: column; margin-top: 14px">
            <div
                style="
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 6px;
          ">
                <h6
                    style="
              margin: 0;
              margin: 0;
              display: flex;
              align-items: center;
              flex: 0.8;
            ">
                    Name :
                </h6>
                <p
                    style="
              margin: 0;
              margin: 0;
              display: flex;
              align-items: center;
              flex: 1;
               color: #000;
            ">
                    {{ $slip->name }}
                </p>
            </div>
            <div
                style="
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 7px;
          ">
                <h6
                    style="
              margin: 0;
              margin: 0;
              display: flex;
              align-items: center;
              flex: 0.8;
            ">
                    Age :
                </h6>
                <p
                    style="
              margin: 0;
              margin: 0;
              display: flex;
              align-items: center;
              flex: 1;
               color: #000;
            ">
                    {{ $slip->age }} years
                </p>
            </div>
            <div
                style="
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 7px;
          ">
                <h6
                    style="
              margin: 0;
              margin: 0;
              display: flex;
              align-items: center;
              flex: 0.8;
            ">
                    Gender :
                </h6>
                <p
                    style="
              margin: 0;
              margin: 0;
              display: flex;
              align-items: center;
              flex: 1;
               color: #000;
            ">
                    {{ $slip->gender }}
                </p>
            </div>
            <div
                style="
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 7px;
          ">
                <h6
                    style="
              margin: 0;
              margin: 0;
              display: flex;
              align-items: center;
              flex: 0.8;
            ">
                    Token Type :
                </h6>
                <p
                    style="
              margin: 0;
              margin: 0;
              display: flex;
              align-items: center;
              flex: 1;
               color: #000;
            ">
                    {{ $slip->token_type }}
                </p>
            </div>
            <div
                style="
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 7px;
          ">
                <h6
                    style="
              margin: 0;
              margin: 0;
              display: flex;
              align-items: center;
              flex: 0.8;
            ">
                    Cash Received :
                </h6>
                <p
                    style="
              margin: 0;
              margin: 0;
              display: flex;
              align-items: center;
              flex: 1;
               color: #000;
            ">
                    Rs: {{ $slip->cash }}
                </p>
            </div>
            <div
                style="
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 7px;
          ">
                <h6
                    style="
              margin: 0;
              margin: 0;
              display: flex;
              align-items: center;
              flex: 0.8;
            ">
                    Ref. To Dr. :
                </h6>
                <p
                    style="
              margin: 0;
              margin: 0;
              display: flex;
              align-items: center;
              flex: 1;
               color: #000;
            ">
                    {{ $slip->dector_name }}
                </p>
            </div>
            <div
                style="
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 7px;
          ">
                <h6
                    style="
              margin: 0;
              margin: 0;
              display: flex;
              align-items: center;
              flex: 0.8;
            ">
                    Token By :
                </h6>
                <p
                    style="
              margin: 0;
              margin: 0;
              display: flex;
              align-items: center;
              flex: 1;
               color: #000;
            ">
                    {{ $slip->token_holder }}
                </p>
            </div>
            <div
                style="
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 7px;
          ">
                <h6
                    style="
              margin: 0;
              margin: 0;
              display: flex;
              align-items: center;
              flex: 0.8;
            ">
                    Time :
                </h6>
                <p
                    style="
              margin: 0;
              margin: 0;
              display: flex;
              align-items: center;
              flex: 1;
               color: #000;
            ">
                    {{ date('d-M-Y h:i A', strtotime($slip->created_at)) }}
                </p>
            </div>
        </div>
        <div
            style="
         width: 100%;
          margin-top: 25px;
          border-top: 1px dashed #000;
          display: flex;
          align-items: center;
          justify-content: space-between;
          padding: 10px 0;
          font-size: 10px;
          font-weight: 400;
          text-transform: uppercase;
        ">
            <div style="display: flex; align-items: center; margin-bottom: 0px">
                Software develop by: www.zeezsoft.com
            </div>
            <!--<div style="display: flex; align-items: center">-->
            <!--  Contact: 0324 7003964-->
            <!--</div>-->
        </div>
    </section>
</body>

</html>
