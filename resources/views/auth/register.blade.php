<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="author" content="NobleUI">
    <meta name="keywords"
        content="nobleui, bootstrap, bootstrap 5, bootstrap5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

    <title>NobleUI - HTML Bootstrap 5 Admin Dashboard Template</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
    <!-- End fonts -->

    <!-- core:css -->
    <link rel="stylesheet" href="{{asset('assets/vendors/core/core.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendors/select2/select2.min.css')}}">
    <!-- endinject -->

    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="{{asset('assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendors/datatables.net-bs4/dataTables.bootstrap4.css')}}">
    <!-- End plugin css for this page -->

    <!-- inject:css -->
    <link rel="stylesheet" href="{{asset('assets/fonts/feather-font/css/iconfont.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendors/flag-icon-css/css/flag-icon.min.css')}}">
    <!-- endinject -->

    <!-- Layout styles -->
    <link rel="stylesheet" href="{{asset('assets/css/demo1/style.css')}}">
    <!-- End layout styles -->

    <link rel="shortcut icon" href="{{asset('assets/images/favicon.png')}}" />
</head>

<body>
    <div class="main-wrapper">
        <div class="page-wrapper full-page">
            <div class="page-content d-flex align-items-center justify-content-center">

                <div class="row w-100 mx-0 auth-page">
                    <div class="col-md-8 col-xl-6 mx-auto">
                        <div class="card">
                            <div class="row">

                                <div class="col-md-12 ps-md-0">
                                    <div class="auth-form-wrapper px-4 py-5">
                                        <a href="#" class="noble-ui-logo d-block mb-2">Noble<span>UI</span></a>
                                        <h5 class="text-muted fw-normal mb-4">Buat akun</h5>
                                        <form class="forms-sample" action="{{route('registeruser')}}" method="POST" >
                                            @csrf
                                            <div class="mb-3">
                                                <label for="userEmail" class="form-label">Email address</label>
                                                <input type="email" class="form-control" id="userEmail" name="email"
                                                    placeholder="Email" required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="userPassword" class="form-label">Password</label>
                                                <input type="password" class="form-control" id="userPassword" name="password"
                                                    autocomplete="current-password" placeholder="Password" required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="exampleInputUsername1" class="form-label">Name</label>
                                                <input type="text" class="form-control" id="exampleInputUsername1"
                                                    autocomplete="Name" placeholder="masukkan nama" name="nama" required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="exampleInputUsername2" class="form-label">alamat</label>
                                                <input type="text" class="form-control" id="exampleInputUsername1"
                                                    autocomplete="Username" placeholder="Username" name="alamat" required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="exampleInputUsername3" class="form-label">pendidikan</label>
                                                <input type="text" class="form-control" id="exampleInputUsername1"
                                                    autocomplete="Username" placeholder="Username" name ="pendidikan" required>
                                            </div>
                                            <div>
                                                <button type="submit" 
                                                    class="btn btn-primary text-white me-2 mb-2 mb-md-0">
                                                    Sign up
                                                </button>
                                            </div>
                                            <a href="login.html" class="d-block mt-3 text-muted">Already a user? Sign
                                                in</a>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>


</body>
</html>
