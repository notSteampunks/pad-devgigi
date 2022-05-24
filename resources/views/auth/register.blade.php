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
                                        <form class="forms-sample" action="{{route('registeruser')}}" method="POST">
                                            @csrf
                                            <div class="mb-3">
                                                <label for="userEmail" class="form-label">Email address</label>
                                                <input type="email" class="form-control" id="userEmail" name="email"
                                                    placeholder="Email" required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="userPassword" class="form-label">Password</label>
                                                <input type="password" class="form-control" id="userPassword"
                                                    name="password" autocomplete="current-password"
                                                    placeholder="Password" required>
                                            </div>
                                            <div class="form-check mb-3">
                                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                                <label class="form-check-label" for="exampleCheck1">
                                                    Show Password
                                                </label>
                                            </div>
                                            <div class="mb-3">
                                                <label for="exampleInputUsername1" class="form-label">Name</label>
                                                <input type="text" class="form-control" 
                                                    autocomplete="Name" placeholder="masukkan nama" name="nama" id="name"
                                                    required>
                                            </div>
                                            <div class="row col-md-10">
                                                <div class="col-md-4">
                                                    <div class="mb-3">
                                                        <label for="exampleInputPassword1" class="form-label">Tempat
                                                            Lahir</label>
                                                        <input type="text" class="form-control" id="tempat_lahir"
                                                            name="tempat_lahir" autocomplete="off"
                                                            placeholder="Tempat Lahir">
                                                    </div>
                                                </div>
                                                <div class="col-md-7">
                                                    <div class="mb-3">
                                                        <label for="exampleInputPassword1" class="form-label">Tanggal
                                                            Lahir</label>
                                                        <input type="date" class="form-control" id="tanggal_lahir"
                                                            name="tanggal_lahir" autocomplete="off"
                                                            placeholder="masukkan tanggal lahir">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Kecamatan</label>
                                                <select class="form-select" name="id_kecamatan" id="id_kecamatan"
                                                    data-width="100%">
                                                    <option class="mb-2" value=" ">---Pilih Kecamatan---</option>
                                                    @foreach(\App\Models\Kecamatan::get() as $value => $key)

                                                    <option value="{{$key->id}}">{{$key->nama}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Kelurahan</label>
                                                <select class="form-select" name="id_kelurahan" data-width="100%"
                                                    id="id_desa">

                                                </select>
                                            </div>
                                            <div class="mb-3">
                                                <label for="exampleInputUsername2" class="form-label">alamat</label>
                                                <input type="text" class="form-control" 
                                                    autocomplete="Username" placeholder="Username" name="alamat"
                                                    required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="exampleInputUsername3" class="form-label">pendidikan</label>
                                                <input type="text" class="form-control" 
                                                    autocomplete="Username" placeholder="Username" name="pendidikan"
                                                    required>
                                            </div>
                                            <div>
                                                <button type="submit"
                                                    class="btn btn-primary text-white me-2 mb-2 mb-md-0">
                                                    Sign up
                                                </button>
                                            </div>
                                            <a href="/" class="d-block mt-3 text-muted">Sudah punya akun?
                                                login</a>
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

    <script src="{{asset('assets/vendors/core/core.js')}}"></script>
    <script type="text/javascript">
        $(document).ready(function () {

            var email = $('#userEmail');
            var password = $('#userPassword');
            var name = $('#name');

            $('#exampleCheck1').click(function () {
                if ($(this).is(':checked')) {
                    $('#userPassword').attr('type', 'text');
                } else {
                    $('#userPassword').attr('type', 'password');
                }
            });

            $('#id_kecamatan').change(function () {
                let kecamatan = $("#id_kecamatan").val()
                $("#id_desa").children().remove();
                $("#id_desa").val('');
                $("#id_desa").append('<option value="">---Pilih Kelurahan---</option>');
                $("#id_desa").prop('disabled', true)
                if (kecamatan != '' && kecamatan != null) {
                    $.ajax({
                        url: "{{url('')}}/list-desa/" + kecamatan,
                        success: function (res) {
                            $("#id_desa").prop('disabled', false)
                            let tampilan_option = '';
                            $.each(res, function (index, desa) {
                                tampilan_option +=
                                    `<option value="${desa.id}">${desa.nama}</option>`
                            })
                            $("#id_desa").append(tampilan_option);
                        },
                    });
                }
            });
        });

    </script>

</body>

</html>
