<html>

<head>
    <title></title>
    {{-- stylesheet CDN's --}}
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css">
    {{-- Stylesheet --}}
    <link rel="stylesheet" href="{{ url('Admin/style.css') }}" />


</head>

<body>
    <div class="container-fluid px-1 py-5 mx-auto">
        <div class="row d-flex justify-content-center">
            <div class="col-xl-7 col-lg-8 col-md-9 col-11 text-center">
                <h3>Employee Entries</h3>
                <div class="card">
                    <h5 class="text-center mb-4">MR Software House</h5>
                    <form method="POST" class="form-card">
                        @csrf
                        <div class="row justify-content-between text-left">
                            <div class="form-group col-sm-6 flex-column d-flex"> <label
                                    class="form-control-label px-3">First name<span class="text-danger">
                                        *</span></label> <input type="text" name="fname"
                                    placeholder="Enter your first name" value="{{ $employee_details->fname }}"> </div>
                            <div class="form-group col-sm-6 flex-column d-flex"> <label
                                    class="form-control-label px-3">Last name<span class="text-danger"> *</span></label>
                                <input type="text" name="lname" placeholder="Enter your last name"
                                    value="{{ $employee_details->lname }}">
                            </div>
                        </div>
                        <div class="row justify-content-between text-left">
                            <div class="form-group col-sm-6 flex-column d-flex"> <label
                                    class="form-control-label px-3">Business email<span class="text-danger">
                                        *</span></label> <input type="text" name="email"
                                    placeholder="ex: example@gmail.com" value="{{ $employee_details->email }}"> </div>
                            <div class="form-group col-sm-6 flex-column d-flex"> <label
                                    class="form-control-label px-3">Phone number<span class="text-danger">
                                        *</span></label> <input type="text" name="mob" placeholder="ex: +92"
                                    value="{{ $employee_details->mob }}">
                            </div>
                        </div>
                        <div class="row justify-content-between text-left">
                            <div class="form-group col-sm-6 flex-column d-flex"> <label
                                    class="form-control-label px-3">Job title<span class="text-danger"> *</span></label>
                                <input type="text" name="job" placeholder="ex: Full Stack Developer"
                                    value="{{ $employee_details->job }}">
                            </div>
                        </div>
                        <div class="row justify-content-between text-left">
                            <div class="form-group col-12 flex-column d-flex"> <label
                                    class="form-control-label px-3">Salary Base OR Internship?<span class="text-danger">
                                        *</span></label>
                                <input type="text" name="ans" placeholder="ex: Internship"
                                    value="{{ $employee_details->ans }}">
                            </div>
                        </div>
                        <div class="row justify-content-end">
                            <div class="form-group col-sm-6"> <button type="submit"
                                    class="btn-block btn-primary">Save</button> </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>



</body>

</html>
