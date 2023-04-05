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
            <div class="col-md-8">
                <form action="{{ $url }}" method="POST" id="regForm">
                    @csrf
                    <h1 id="register">{{ $title }}</h1>
                    <div class="all-steps" id="all-steps">
                        <span class="step"><i class="fa fa-user"></i></span>
                        <span class="step"><i class="fa fa-map-marker"></i></span>
                        <span class="step"><i class="fa fa-shopping-bag"></i></span>
                        <span class="step"><i class="fa fa-car"></i></span>
                        <span class="step"><i class="fa fa-spotify"></i></span>
                        <span class="step"><i class="fa fa-mobile-phone"></i></span>
                    </div>

                    <div class="tab">
                        <h6>What's your first name?</h6>
                        <p>
                            <input placeholder="First Name..." oninput="this.className = ''" name="fname">
                        </p>

                    </div>
                    <div class="tab">
                        <h6>What's your last name?</h6>
                        <p>
                            <input placeholder="Last Name..." oninput="this.className = ''" name="lname"
                                value=" {{ $employee_details->lname }}" />
                        </p>

                    </div>
                    <div class="tab">
                        <h6>What's your email?</h6>
                        <p><input placeholder="Email" oninput="this.className = ''" name="email"
                                value="{{ $employee_details->email }}" /></p>

                    </div>
                    <div class="tab">
                        <h6>What's your Mobile Number?</h6>
                        <p><input placeholder="Enter Mobile Number" oninput="this.className = ''" name="mob"
                                value="{{ $employee_details->mob }}" /></p>

                    </div>
                    <div class="tab">
                        <h6>What's your Job Post?</h6>
                        <p><input placeholder="Enter Job Post" oninput="this.className = ''" name="job"
                                value="{{ $employee_details->job }}"></p>
                    </div>

                    <div class="tab">
                        <h6>Are You freshy or Experience Developer ?</h6>
                        <p><input placeholder="Answer...." oninput="this.className = ''" name="ans"
                                value="{{ $employee_details->ans }}" /></p>
                    </div>


                    <div class="thanks-message text-center" id="text-message"> <img src="{{ url('Images/tic.png') }}"
                            width="100" class="mb-4">
                        <button type="submit" class="btn-block btn-success">{{ $title }}</button>
                    </div>
                    <div style="overflow:auto;" id="nextprevious" class="n-p">
                        <div style="float:right;">
                            <button type="button" id="prevBtn" onclick="nextPrev(-1)"><i
                                    class="fa fa-angle-double-left"></i></button>
                            <button type="button" id="nextBtn" onclick="nextPrev(1)"><i
                                    class="fa fa-angle-double-right"></i></button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>


    {{-- Js --}}
    <script src="{{ url('Admin/style.js') }}"></script>

</body>

</html>
