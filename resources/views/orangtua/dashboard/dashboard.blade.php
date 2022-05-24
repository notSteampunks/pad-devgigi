@extends('layout.master')

@section('content')
<div class="row">
    <div class="col-12 col-xl-12 stretch-card">
        <div class="row flex-grow-1">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <!-- <div class="d-flex justify-content-between align-items-baseline">
                            <h3> Selamat Datang, Bu Julia </h3>
                            <button type="button" class="btn btn-primary">Tambah Data Anak</button>
                        </div>


                        <div class="row">
                            <div class="col-6 col-md-12 col-xl-5">
                                <p class="text-muted mb-3">nama anak</p>
                                <h3 class="mb-2">3,897</h3>
                            </div>
                        </div> -->
                        
                        <table class="table table-borderless table-sm">
                            <thead>
                                <tr style="color: black; line-height: 14px;">
                                    <td>
                                        <h3><b>Selamat Datang, Bu Julia</b></h3>
                                    </td>
                                </tr>
                            </thead>
                            <tbody> 
                                <tr style="color: black; line-height: 5px; font-size:small">
                                    <td>nama</td>
                                    <td>jenis kelamin</td>
                                    <td>nama posyandu</td>
                                    <td>TTL</td>
                                    <td>usia anak</td>
                                </tr>
                                <tr style="color: black; line-height: 10px; font-size:larger;">
                                    <td>Oman</td>
                                    <td>Laki-laki</td>
                                    <td>Seruni</td>
                                    <td>Bekasi, 14 Agustus 2002</td>
                                    <td>17 Tahun</td>
                                </tr>
                            </tbody>
                        </table>



                    </div>
                </div>
            </div>
        </div>
    </div>




    <div class="col-12 col-xl-12 stretch-card">
        <div class="row flex-grow-1">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-baseline">
                            <h6 class="card-title">KONDISI KESEHATAN ANAK</h6>
                        </div>
                        <div class="row">
                            <div class="col-3">
                                <div class="card text-white bg-info">
                                    <div class="card-body">
                                        <h5 class="card-title">Ideal</h5>
                                        <p class="card-text">07/12/2021</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="card text-white bg-info">
                                    <div class="card-body">
                                        <h5 class="card-title">Ideal</h5>
                                        <p class="card-text">07/12/2021</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="card text-white bg-info">
                                    <div class="card-body">
                                        <h5 class="card-title">Ideal</h5>
                                        <p class="card-text">07/12/2021</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="card text-white bg-info">
                                    <div class="card-body">
                                        <h5 class="card-title">Ideal</h5>
                                        <p class="card-text">07/12/2021</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xl-6 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title">Grafik Tinggi Badan Anak</h6>
                    <div class="flot-chart-wrapper">
                        <div class="flot-chart" id="flotLine"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-6 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title">Grafik Tinggi Badan Anak</h6>
                    <div class="flot-chart-wrapper">
                        <div class="flot-chart" id="flotLine"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row flex-grow-1">
        <div class="col-md-8 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-baseline">
                        <h6 class="card-title">ARTIKEL REKOMENDASI</h6>
                    </div>
                    <div class="row">

                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-baseline">
                        <h6 class="card-title">VIDEO REKOMENDASI</h6>
                    </div>
                    <div class="row">

                    </div>
                </div>
            </div>
        </div>
    </div>
    

</div>



@endsection
<!-- <button type="button" class="btn btn-primary">Tambah Data Anak</button> -->
