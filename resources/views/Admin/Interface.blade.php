<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>View</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    {{-- stylesheet CDN's --}}
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css">

</head>

<body>
    <div class="container">
        <a href="{{ url('/Form') }}">
            <button class="btn btn-primary d-inline-block m-2">
                Add
            </button>
        </a>
        <table class="table">
            <thead>
                <tr>
                    <td>First Name</td>
                    <td>Last Name</td>
                    <td>Email</td>
                    <td>Mobile Number</td>
                    <td>Job Title</td>
                    <td>Answer</td>
                </tr>
            </thead>
            @foreach ($employee_details as $emoloyee)
                <tr>
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
                                class="btn btn-primary">Edit</button></a>
                    </td>
                </tr>
            @endforeach
    </div>
</body>

</html>
