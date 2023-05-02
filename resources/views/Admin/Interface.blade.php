<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    {{-- Datatables --}}
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>View</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    {{-- stylesheet CDN's that connected with Internet --}}
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css">
    {{-- DATATABLES --}}
    <link href="https://cdnjs.cloudflare.com/ajax/libs/fontawesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">

</head>
{{-- Called Internal Css --}}
<style>
    body {
        background-color: black;
        margin-top: 20px;
        color: white;
    }

    tr {
        color: white;
    }

    th {
        color: green;
        font-size: 20px;
    }

    /* Jquery class use there with important attribute */
    .dataTables_wrapper .dataTables_length select {
        background-color: white !important;
        color: black !important;
    }
</style>
{{-- Close Internal Css --}}

<body>
    <div class="container">
        {{-- Heading --}}
        <h1 style="text-align: center; color:white;">EMPLOYEE ENTRIES</h1>
        {{-- Table --}}
        <table class="table table-bordered" id="EmpTable">
            {{-- Table head heading that Stable in position --}}
            <thead>
                {{-- tr = table row --}}
                <tr>
                    {{-- th = Table head --}}
                    <th><b>First Name</b></th>
                    <th><b>Last Name</b></th>
                    <th><b>Email</b></th>
                    <th><b>Mobile Number</b></th>
                    <th><b>Job Title</b></th>
                    <th><b>Answer</b></th>
                    <th>
                        <a href="{{ url('/Form') }}">
                            <button class="btn btn-block btn-info d-inline-block">
                                <b> Add</b>
                            </button>
                        </a>
                    </th>
                </tr>
            </thead>
            {{-- Foreach loop using to create and view data --}}
            @foreach ($employee_details as $emoloyee)
                {{-- tr = table row --}}
                <tr>
                    {{-- td = Table data --}}
                    <td>{{ $emoloyee->fname }}</td>
                    <td>{{ $emoloyee->lname }}</td>
                    <td>{{ $emoloyee->email }}</td>
                    <td>{{ $emoloyee->mob }}</td>
                    <td>{{ $emoloyee->job }}</td>
                    <td>{{ $emoloyee->ans }}</td>
                    <td>
                        <a href="{{ route('employee.delete', ['id' => $emoloyee->id]) }}"><button
                                class="btn btn-danger">Delete</button></a>
                        <a href="{{ route('employee.edit', ['id' => $emoloyee->id]) }}"><button
                                class="btn btn-success">Edit</button></a>
                    </td>
                </tr>
            @endforeach
            {{-- Close Foreach loop --}}
    </div>
    {{-- Datatables link and script --}}
    <script src="https://code.jquery.com/jquery-3.6.3.min.js"
        integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
    <script src="//cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#EmpTable').DataTable({
                "pagingType": "full_numbers",
                "lengthMenu": [
                    [5, 10, 25, 50, -1],
                    [5, 10, 25, 50, "All"]
                ],
                responsive: true,
                language: {
                    search: "INPUT ",
                    searchPlaceholder: "Search",
                }
            });
        });
    </script>
</body>

</html>
