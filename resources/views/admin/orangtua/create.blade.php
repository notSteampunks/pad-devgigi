@extends('layout.master')

@section('content')

<div class="row">
    <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h6 class="card-title">Tambah Orangtua</h6>
                <form action="{{ route('orangtua.store') }}" class="forms-sample" id="orangtua-store" method="post" nctype="multipart/form-data" files=true >
                    @csrf
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Email address</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="Email">
                        </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" name="password" autocomplete="off"
                            placeholder="Password">
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="nama" name="nama" autocomplete="off"
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
                        <label for="exampleInputPassword1" class="form-label">Alamat</label>
                        <input type="text" class="form-control" id="alamat" name="alamat" autocomplete="off"
                            placeholder="alamat">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Pendidikan</label>
                        <select class="js-example-basic-single form-select" name="pendidikan" data-width="100%">
                            <option value="TX">S1</option>
                            <option value="NY">SMA</option>
                        </select>
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
