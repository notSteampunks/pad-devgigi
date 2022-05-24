@extends('layout.master')

@section('content')

<div class="row">
    <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h6 class="card-title">Tambah Anak</h6>
                <form action="{{ route('tambahanak.store') }}" class="forms-sample" id="anak-store" method="post"
                    nctype="multipart/form-data" files=true>
                    @csrf

                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="nama" name="nama" autocomplete="off"
                            placeholder="Nama">
                    </div>
                    <div class="mb-3">
                        <label class="col-md-12 mb-2"> Jenis Kelamin </label>
                        <div class="form-check form-check-inline">
                            <input type="radio" class="form-check-input" value="laki-laki" name="jenis_kelamin"
                                id="radioInline">
                            <label class="form-check-label" for="radioInline">
                                Laki-Laki
                            </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input type="radio" value="perempuan" class="form-check-input" name="jenis_kelamin"
                                id="radioInline1">
                            <label class="form-check-label" for="radioInline1">
                                Perempuan
                            </label>
                        </div>
                    </div>
                    <div class="row col-md-10">
                        <div class="col-md-3">
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Tempat Lahir</label>
                                <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir"
                                    autocomplete="off" placeholder="Tempat Lahir">
                            </div>
                        </div>
                        <div class="col-md-7">
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Tanggal Lahir</label>
                                <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir"
                                    autocomplete="off" placeholder="masukkan tanggal lahir">
                            </div>
                        </div>
                    </div>

                    <div class="mb-3">
                        <div class="form-check form-switch mb-2">
                            <input type="checkbox" class="form-check-input" id="chk">
                            <label class="form-check-label" id="labelchk" for="formSwitch1">Belum Sekolah</label>
                        </div>
                    </div>

                    <div id="data-sekolah">
                        <div class="mb-3">
                            <label class="form-label">Kecamatan</label>
                            <select class="form-select" name="kecamatan" id="id_kecamatan" data-width="100%">
                                <option class="mb-2" value=" ">---Pilih Kecamatan---</option>
                                @foreach(\App\Models\Kecamatan::get() as $value => $key)

                                <option value="{{$key->id}}">{{$key->nama}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Kelurahan</label>
                            <select class="form-select" name="kelurahan" data-width="100%" id="id_desa">

                            </select>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Sekolah</label>
                            <select class="form-select" name="sekolah" data-width="100%" id="id_sekolah">

                            </select>
                        </div>
                        <div id="kelas" class="mb-3 ">
                            <label for="exampleInputPassword1" class="form-label">Kelas</label>
                            <input type="text" class="form-control" name="kelas" autocomplete="off"
                                placeholder="masukkan kelas">
                        </div>
                    </div>

                    <div id="data-posyandu">
                        <div class="mb-3">
                            <label class="form-label">Kecamatan</label>
                            <select class="form-select" name="kecamatan" id="id_kecamatan_posyandu" data-width="100%">
                                <option class="mb-2" value=" ">---Pilih Kecamatan---</option>
                                @foreach(\App\Models\Kecamatan::get() as $value => $key)

                                <option value="{{$key->id}}">{{$key->nama}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Kelurahan</label>
                            <select class="form-select" name="kelurahan" data-width="100%" id="id_desa_posyandu">

                            </select>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Posyandu</label>
                            <select class="form-select" name="sekolah" data-width="100%" id="id_posyandu">

                            </select>
                        </div>

                    </div>

                    <button type="submit" class="btn btn-primary me-2">Submit</button>
                    <button class="btn btn-secondary">Cancel</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

@push('after-script')
<script type="text/javascript">
    $(document).ready(function () {
        $('#data-sekolah').hide();
        $('#chk').on('change', function () {
            if ($(this).is(':checked')) {
                $('#data-sekolah').show();
                $('#data-posyandu').hide();

                $('#labelchk').text('Sudah Sekolah');

            } else {
                $('#data-sekolah').hide();
                $('#data-posyandu').show();
                $('#labelchk').text('Belum Sekolah');
            }
        });

        $('#id_kecamatan').change(function () {
            let kecamatan = $("#id_kecamatan").val()
            console.log(kecamatan)
            $("#id_desa").children().remove();
            $("#id_sekolah").children().remove();
            $("#id_desa").val('');
            $("#id_sekolah").val('');
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

        $('#id_desa').change(function () {
            let kelurahan = $("#id_desa").val()
            $("#id_sekolah").children().remove();
            $("#id_sekolah").val('');
            $("#id_sekolah").append('<option value="">---Pilih Sekolah---</option>');
            $("#id_sekolah").prop('disabled', true)
            if (kelurahan != '' && kelurahan != null) {
                $.ajax({
                    url: "{{url('')}}/list-sekolah/" + kelurahan,
                    success: function (res) {
                        $("#id_sekolah").prop('disabled', false)
                        let tampilan_option = '';
                        $.each(res, function (index, sekolah) {
                            tampilan_option +=
                                `<option value="${sekolah.id}">${sekolah.nama}</option>`
                        })
                        $("#id_sekolah").append(tampilan_option);
                    },
                });
            }
        });

        $('#id_kecamatan_posyandu').change(function () {
            let kecamatan = $("#id_kecamatan_posyandu").val()
            $("#id_desa_posyandu").children().remove();
            $("#id_desa_posyandu").val('');
            $("#id_desa_posyandu").append('<option value="">---Pilih Kelurahan---</option>');
            $("#id_desa_posyandu").prop('disabled', true)
            if (kecamatan != '' && kecamatan != null) {
                $.ajax({
                    url: "{{url('')}}/list-desa/" + kecamatan,
                    success: function (res) {
                        $("#id_desa_posyandu").prop('disabled', false)
                        let tampilan_option = '';
                        $.each(res, function (index, desa) {
                            tampilan_option +=
                                `<option value="${desa.id}">${desa.nama}</option>`
                        })
                        $("#id_desa_posyandu").append(tampilan_option);
                    },
                });
            }
        });
        $('#id_desa_posyandu').change(function () {
            let kelurahan = $("#id_desa_posyandu").val()
            $("#id_posyandu").children().remove();
            $("#id_posyandu").val('');
            $("#id_posyandu").append('<option value="">---Pilih Posyandu---</option>');
            $("#id_posyandu").prop('disabled', true)
            if (kelurahan != '' && kelurahan != null) {
                $.ajax({
                    url: "{{url('')}}/list-posyandu/" + kelurahan,
                    success: function (res) {
                        $("#id_posyandu").prop('disabled', false)
                        let tampilan_option = '';
                        $.each(res, function (index, posyandu) {
                            tampilan_option +=
                                `<option value="${posyandu.id}">${posyandu.nama}</option>`
                        })
                        $("#id_posyandu").append(tampilan_option);
                    },
                });
            }
        });


    });

</script>
@endpush
