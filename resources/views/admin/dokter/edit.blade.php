@extends('layout.master')

@section('content')

<div class="row">
    <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h6 class="card-title">Edit Dokter</h6>
                <form action="{{ route('dokter.update',$dokter->id) }}" class="forms-sample" id="dokter-update" method="post" nctype="multipart/form-data" files=true >
                    <input type="hidden" id="id" value="{{$dokter->id}}">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Email" value="{{$dokter->user->email}}">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" name="password" autocomplete="off" value="{{$dokter->user->password}}"
                            placeholder="Password">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">NIK</label>
                        <input type="text" class="form-control" id="nik" name="nik" autocomplete="off" value="{{$dokter->nik}}"
                            placeholder="NIK">
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="nama" name="nama" autocomplete="off" value="{{$dokter->nama}}"
                            placeholder="Nama">
                    </div>
                    {{-- <div class="mb-3">
                        <label class="form-label">Wilayah</label>
                        <select class="js-example-basic-single form-select" data-width="100%">
                            <option value="TX">Texas</option>
                            <option value="NY">New York</option>
                            <option value="FL">Florida</option>
                            <option value="KN">Kansas</option>
                            <option value="HW">Hawaii</option>
                        </select>
                    </div> --}}
                    
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Jenis Kelamin</label>
                        <input type="text" class="form-control" id="jenis_kelamin" name="jenis_kelamin" autocomplete="off" value="{{$dokter->jenis_kelamin}}"
                            placeholder="Nama">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Tempat Lahir</label>
                        <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" autocomplete="off" value="{{$dokter->tempat_lahir}}"
                            placeholder="Tempat Lahir">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Tanggal Lahir</label>
                        <input type="date" class="form-control" id="tanggal" name="tanggal_lahir" autocomplete="off" value="{{$dokter->tanggal_lahir}}"
                            placeholder="Tempat Lahir">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">No Hp</label>
                        <input type="text" class="form-control" id="no_telp" name="no_telp" autocomplete="off" value="{{$dokter->no_telp}}"
                            placeholder="Tempat Lahir">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">No Str</label>
                        <input type="text" class="form-control" id="no_str" name="no_str" autocomplete="off" value="{{$dokter->no_str}}"
                            placeholder="no_str">
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
