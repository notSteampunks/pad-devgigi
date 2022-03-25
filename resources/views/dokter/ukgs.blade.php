@extends('layout.master')

@section('content')
<nav class="page-breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Pemeriksaan Gigi</a></li>
        <li class="breadcrumb-item active" aria-current="page">UKGS</li>
    </ol>
</nav>

<div class="row">
    <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">DATA PASIEN PER WILAYAH</h4>
                <p class="text-muted mb-3">Masukan wilayah yang ingin ditampilkan datanya</p>
                <form class="forms-sample">
                    <div class="row mb-3">
                        <label for="pilihKelurahan" class="col-sm-3 col-form-label">Wilayah Kelurahan</label>
                        <div class="col-sm-4">
                            <select class="js-example-basic-single form-select" data-width="100%">
                                <option selected disabled>Pilih Kelurahan</option>
                                <option value="TX">Sleman</option>
                                <option value="TX">Gunung Kidul</option>
                                <option value="NY">Kulon Progo</option>
                                <option value="FL">Klaten</option>
                                <option value="KN">Depok</option>
                                <option value="HW">Sinduharjo</option>
                            </select>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="pilihSekolah" class="col-sm-3 col-form-label">Sekolah</label>
                        <div class="col-sm-4">
                            <select class="js-example-basic-single form-select" data-width="100%">
                                <option selected disabled>Pilih Sekolah</option>
                                <option value="TX">SDN 1</option>
                                <option value="WY">SDN 2</option>
                                <option value="NY">SDN 3</option>
                                <option value="FL">SDN 4</option>
                                <option value="KN">SDN 5</option>
                                <option value="HW">SDN 6</option>
                            </select>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="pilihKelas" class="col-sm-3 col-form-label">Kelas</label>
                        <div class="col-sm-4">
                            <select class="js-example-basic-single form-select" data-width="100%">
                                <option selected disabled>Pilih Kelas</option>
                                <option value="TX">1</option>
                                <option value="WY">2</option>
                                <option value="NY">3</option>
                                <option value="FL">4</option>
                                <option value="KN">5</option>
                                <option value="HW">6</option>
                            </select>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <p class="text-muted mb-3">Berikut merupakan tabel seluruh pasien gigi</p>
                    <div class="table-responsive">
                        <table id="dataTableExample" class="table">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Tanggal Skrining</th>
                                    <th>Waktu</th>
                                    <th>Nama</th>
                                    <th>Jenis Kelamin</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>07/03/2022</td>
                                    <td>14.00</td>
                                    <td>Adhisty Zahida</td>
                                    <td>SDN Pulo 07</td>
                                    <td>
                                        <button type="button" class="btn btn-primary btn-icon">
                                            <i data-feather="book-open"></i>
                                        </button>
                                        <button type="button" class="btn btn-info btn-icon-text">
                                            Button with Icon
                                            <i class="btn-icon-append" data-feather="box"></i>
                                        </button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

@endsection