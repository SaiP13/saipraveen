<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Register</title>
    <script src="{{ asset('js/sweetalert.min.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('css/sweetalert.css') }}">

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

    <div class="container">
        <div class="d-flex justify-content-center">
            <div class="card o-hidden border-2 shadow-lg my-5 text-center" style="width: 27rem;">
                <div class="card-body p-2">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        {{-- <div class="col-lg-5 d-none d-lg-block bg-register-image"></div> --}}
                        <div class="col-lg-12">
                            <div class="p-4">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                                </div>
                                <form class="user" id="registerForm">
                                    @csrf
                                    <div class="form-group row">
                                        <div class="col-sm-6 mb-3 mb-sm-0">
                                            <input type="text" name="first_name" class="form-control form-control-user"
                                                id="first_name" placeholder="First Name">
                                        </div>
                                        <div class="col-sm-6">
                                            <input type="text" name="last_name" class="form-control form-control-user"
                                                id="last_name" placeholder="Last Name">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <input type="email" name="email" class="form-control form-control-user"
                                            id="email" placeholder="Email Address">
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-6 mb-3 mb-sm-0">
                                            <input type="password" name="password"
                                                class="form-control form-control-user" id="password"
                                                placeholder="Password">
                                        </div>
                                        <div class="col-sm-6">
                                            <input type="password" name="confirm_password"
                                                class="form-control form-control-user" id="confirm_password"
                                                placeholder="Repeat Password">
                                        </div>
                                    </div>
                                    <button type="submit" id="submitButton" class="btn btn-primary btn-user btn-block">
                                        Register Account
                                    </button>

                                    {{-- <a href="index.html" class="btn btn-google btn-user btn-block">
                                    <i class="fab fa-google fa-fw"></i> Register with Google
                                </a>
                                <a href="index.html" class="btn btn-facebook btn-user btn-block">
                                    <i class="fab fa-facebook-f fa-fw"></i> Register with Facebook
                                </a> --}}
                                </form>
                                <hr>
                                <div class="text-center">
                                    <a class="small" href="forgot-password.html">Forgot Password?</a>
                                </div>
                                <div class="text-center">
                                    <a class="small" href="login.html">Already have an account? Login!</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>
    <script>
        $(document).ready(function(){
            $('#submitButton').click(function (e) {
                e.preventDefault();
                $.ajax({
                    url: "{{ url('register')}}",
                    type: 'post',
                    dataType: 'json',
                    data: $('form#registerForm').serialize(),
                    success: function (data) {
                        if (data.errors) {
                            var errors = "";
                            $.each(data.errors, function (key, value) {
                                errors += "\n" + value + "\n";
                            });

                            swal({
                                title: "Info",
                                text: errors,
                                type: "error",
                            });
                        }

                    }

                });

            });
        });

    </script>
</body>

</html>
