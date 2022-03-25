@extends('layout.master')

@section('content')

<div class="row">
    <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h6 class="card-title">Tambah Orangtua</h6>
                <form action="{{ route('tambahanak.store') }}" class="forms-sample" id="anak-store" method="post" nctype="multipart/form-data" files=true >
                    @csrf

                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="nama" name="nama" autocomplete="off"
                            placeholder="Nama">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Tanggal Lahir</label>
                        <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" autocomplete="off"
                            placeholder="masukkan tanggal lahir">
                    </div>
                    <div class="mb-3">
                    <select class="form-select" name="kecamatan" id="" >
                        @foreach(\App\Models\Sekolah::get() as $value => $key)
                        <option class="mb-2" value="{{$key->id}}">{{$key->nama}}</option>
                    @endforeach
                    </select>
                </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Kelas</label>
                        <input type="text" class="form-control" id="kelas" name="kelas" autocomplete="off"
                            placeholder="masukkan kelas">
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
