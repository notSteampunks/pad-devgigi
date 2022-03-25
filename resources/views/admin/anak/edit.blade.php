@extends('layout.master')

@section('content')

<div class="row">
    <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h6 class="card-title">Edit Anak</h6>
                <form action="{{ route('anak.update',$anak->id) }}" class="forms-sample" id="dokter-update" method="post" nctype="multipart/form-data" files=true >
                    <input type="hidden" id="id" value="{{$anak->id}}">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label class="form-label">Nama Orangtua</label>
                        <select class="js-example-basic-single form-select" name="orangtua" data-width="100%">
                            @foreach(\App\Models\Orangtua::get() as $value => $key)
                      
                            <option value="{{$key->id}}">{{$key->nama}}</option>
                        @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="nama" name="nama" autocomplete="off" value="{{$anak->nama}}"
                            placeholder="Nama">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Tanggal Lahir</label>
                        <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" autocomplete="off" value="{{$anak->tanggal_lahir}}"
                            placeholder="masukkan tanggal lahir">
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Sekolah</label>
                        <input type="text" class="form-control" id="sekolah" name="sekolah" autocomplete="off" value="{{$anak->sekolah}}"
                            placeholder="alamat">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Kelas</label>
                        <input type="text" class="form-control" id="kelas" name="kelas" autocomplete="off" value="{{$anak->kelas}}"
                            placeholder="masukkan kelas">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Berat Badan</label>
                        <input type="number" class="form-control" id="bb" name="bb" autocomplete="off" value="{{$anak->bb}}"
                            placeholder="masukkan kelas">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Tinggi badan Badan</label>
                        <input type="number" class="form-control" id="tb" name="tb" autocomplete="off" value="{{$anak->tb}}"
                            placeholder="masukkan tinggi badan">
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
{{-- <script type="text/javascript">
    $(document).ready(function () {
        /* save data */
        $('#dokter-store').on('submit', function (e) {
            e.preventDefault();
            $.ajax({
                'type': 'POST',
                'url': "{{ route('dokter.store') }}",
                'data': new FormData(this),
                'processData': false,
                'contentType': false,
                'dataType': 'JSON',
                'success': function (data) {
                    if (data.success) {
                        window.location.href = "/dokter"
                    } else {
                        for (var count = 0; count < data.errors.length; count++) {
                            swal(data.errors[count], {
                                icon: "error",
                                timer: false,
                            });
                        }
                    }
                },

            });
        });
    });

</script> --}}
@endpush
