@extends('layout.master')

@section('content')

<nav class="page-breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Rekap Data Pasien</a></li>
        <li class="breadcrumb-item active" aria-current="page">UKGM</li>
    </ol>
</nav>

<div class="card">
    <div class="card-body">
        <h6 class="card-title">RIWAYAT PEMERIKSAAN</h6>
        <p class="text-muted mb-3" id="text-tabel-pasien">Berikut merupakan tabel riwayat hasil pemeriksaan yang telah
            anak lakukan</p>
        <div class="table-responsive">
            <table id="dataTableExample" class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Tanggal</th>
                        <th>Waktu</th>
                        <th>Tipe Pemeriksaan</th>
                        <th>Hasil Pemeriksaan</th>
                        <th>Rekomendasi Dokter</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>07/02/2020</td>
                        <td>14:00</td>
                        <td>Gigi </td>
                        <td><button type="button" class="btn btn-warning btn-xs text-white">Proses pemeriksaan</button></td>
                        <td>-</td>

                    </tr>
                    <tr>
                        <td>2</td>
                        <td>07/02/2020</td>
                        <td>14:00</td>
                        <td>Fisik (Statis Gigi) </td>
                        <td>Ideal</td>
                        <td>Segera lakukan pencabutan gigi ke dokter</td>
                    </tr>
                </tbody>
            </table>
        </div>

    </div>
</div>

@endsection


@push('after-script')

<script type="text/javascript">
    var tableData;
    var tableDataMata;
    var tableDataTelinga;
    let filter;

    $(document).ready(function () {

        $('#anak').select2({
            placeholder: 'Pilih anak',

        });
        if ($('#anak').val() == 'null') {
            $('#table-fisik').DataTable({
                "oLanguage": {
                    "sEmptyTable": "Silakan pilih anak terlebih dahulu",
                },
            }).clear();
            $('#table-mata').DataTable({
                "oLanguage": {
                    "sEmptyTable": "Silakan pilih anak terlebih dahulu",
                },
            }).clear();
            $('#table-telinga').DataTable({
                "oLanguage": {
                    "sEmptyTable": "Silakan pilih anak terlebih dahulu",
                },
            }).clear();


        } else {
            $('#table-fisik').DataTable({
                "oLanguage": {
                    "sEmptyTable": "Silakan pilih anak terlebih dahulu",
                },
            }).clear();
            $('#table-mata').DataTable({
                "oLanguage": {
                    "sEmptyTable": "Silakan pilih anak terlebih dahulu",
                },
            }).clear();
            $('#table-telinga').DataTable({
                "oLanguage": {
                    "sEmptyTable": "Silakan pilih anak terlebih dahulu",
                },
            }).clear();

        }


        function load_data(anak = '') {
            tableData = $('#table-fisik ').DataTable({
                "oLanguage": {
                    "sEmptyTable": "Silakan pilih anak terlebih dahulu",
                    "zeroRecords": "Data tidak ditemukan",
                },
                processing: true,
                serverSide: true,

                language: {
                    search: "_INPUT_",
                    searchPlaceholder: "Cari",
                    processing: `<div class="spinner-border text-primary" role="status">
                             <span class="visually-hidden">Loading...</span>
                            </div>`
                },
                "searching": true,
                "bPaginate": true,
                serverSide: true,
                stateSave: true,
                ajax: {
                    url: "{{ url('admin/table/data-pemeriksaan-fisik') }}",
                    type: "GET",
                    data: {
                        anak: anak
                    }
                },
                columns: [{
                        data: 'id',
                        name: 'id',
                        visible: false
                    },
                    {
                        data: 'DT_RowIndex',
                        name: 'DT_RowIndex',
                        visible: true
                    },

                    {
                        data: 'tanggal',
                        name: 'tanggal',
                        visible: true
                    },
                    {
                        data: 'jam',
                        name: 'jam',
                        visible: true
                    },
                    {
                        data: 'imt',
                        name: 'imt',
                        visible: true
                    },




                ],

            });
            tableDataMata = $('#table-mata').DataTable({
                "oLanguage": {
                    "sEmptyTable": "Silakan pilih anak terlebih dahulu",
                    "zeroRecords": "Data tidak ditemukan",
                },
                processing: true,
                serverSide: true,

                language: {
                    search: "_INPUT_",
                    searchPlaceholder: "Cari",
                    processing: `<div class="spinner-border text-primary" role="status">
                             <span class="visually-hidden">Loading...</span>
                            </div>`
                },
                "searching": true,
                "bPaginate": true,
                serverSide: true,
                stateSave: true,
                ajax: {
                    url: "{{ url('admin/table/data-pemeriksaan-mata') }}",
                    type: "GET",
                    data: {
                        anak: anak
                    }
                },
                columns: [{
                        data: 'id',
                        name: 'id',
                        visible: false
                    },
                    {
                        data: 'DT_RowIndex',
                        name: 'DT_RowIndex',
                        visible: true
                    },

                    {
                        data: 'tanggal',
                        name: 'tanggal',
                        visible: true
                    },
                    {
                        data: 'jam',
                        name: 'jam',
                        visible: true
                    },
                    {
                        data: 'soal3',
                        name: 'soal3',
                        visible: true
                    }


                ],

            });
            tableDataTelinga = $('#table-telinga').DataTable({
                "oLanguage": {
                    "sEmptyTable": "Silakan pilih anak terlebih dahulu",
                    "zeroRecords": "Data tidak ditemukan",
                },
                processing: true,
                serverSide: true,

                language: {
                    search: "_INPUT_",
                    searchPlaceholder: "Cari",
                    processing: `<div class="spinner-border text-primary" role="status">
                             <span class="visually-hidden">Loading...</span>
                            </div>`
                },
                "searching": true,
                "bPaginate": true,
                serverSide: true,
                stateSave: true,
                ajax: {
                    url: "{{ url('admin/table/data-pemeriksaan-telinga') }}",
                    type: "GET",
                    data: {
                        anak: anak
                    }
                },
                columns: [{
                        data: 'id',
                        name: 'id',
                        visible: false
                    },
                    {
                        data: 'DT_RowIndex',
                        name: 'DT_RowIndex',
                        visible: true
                    },

                    {
                        data: 'tanggal',
                        name: 'tanggal',
                        visible: true
                    },
                    {
                        data: 'jam',
                        name: 'jam',
                        visible: true
                    },
                    {
                        data: 'soal3',
                        name: 'soal3',
                        visible: true
                    }


                ],

            });
        }

        $('#anak').change(function () {
            var anak = $(this).val();

            if (anak) {
                $('#table-fisik').DataTable().clear().destroy();
                $('#table-mata').DataTable().clear().destroy();
                $('#table-telinga').DataTable().clear().destroy();

                load_data(anak);
            } else {
                $('#table-fisik').DataTable().clear().destroy();
                $('#table-mata').DataTable().clear().destroy();
                $('#table-telinga').DataTable().clear().destroy();

            }
        });



    })

</script>
@endpush
