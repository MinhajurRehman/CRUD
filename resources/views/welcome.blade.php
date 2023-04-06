<html>

<head>
    <title></title>
    {{-- stylesheet CDN's --}}
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
    {{-- Stylesheet --}}
    <link rel="stylesheet" href="{{ url('Admin/style.css') }}" />


</head>

<body>
    <div class="container mt-5">
        <div class="row d-flex justify-content-center align-items-center">
            <div class="col-md-12">
                {{-- See Employee Data --}}
                <a href="{{ url('/view') }}">
                    <button class="btn btn-primary">
                        See Employee Entries
                    </button>
                </a>
                {{-- Enter Employee Data --}}
                <a href="{{ url('/Form') }}">
                    <button class="btn btn-primary">
                        Enter Employee Details
                    </button>
                </a>
            </div>
        </div>
    </div>

</body>

</html>
