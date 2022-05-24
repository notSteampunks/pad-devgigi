@extends('layout.master')

@section('content')

<div class="row">
    <div class="col-md-12 grid-margin stretch-card">
        <form action="{{ route('pemeriksaangigi.store') }}" class="col-md-12" id="pisik-store" method="post"
            enctype="multipart/form-data" files=true>
            @csrf
            <div class="card col-md-12">
                <div class="card-body">
                    <h6 class="card-title">Pemeriksaan Gigi</h6>

                    <div class="mb-3">
                        <label class="form-label">Nama Anak</label>
                        <select class=" form-select" name="anak" data-width="100%">
                            @foreach($anak as $anak)

                            <option value="{{$anak->id}}">{{$anak->nama}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="">
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Gambar1</label>
                            <input type="file" class="form-control" name="gambar1" placeholder="masukkan gambar">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Gambar2</label>
                            <input type="file" class="form-control" name="gambar2" placeholder="masukkan gambar">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Gambar3</label>
                            <input type="file" class="form-control" name="gambar3" placeholder="masukkan gambar">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Gambar4</label>
                            <input type="file" class="form-control" name="gambar4" placeholder="masukkan gambar">
                        </div>

                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Gambar5</label>
                            <input type="file" class="form-control" name="gambar5" placeholder="masukkan gambar">
                        </div>
                       
                    </div>
                </div>
            </div>

            <div class="card col-md-12 mt-3">
                <div class="card-body">
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Frekuensi menyikat gigi </label>
                        <input type="text" min="0" class="form-control" name="soal1" autocomplete="off"
                            placeholder="soal 1" value="">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Kunjungan ke dokter gigi</label>
                        <input type="text" min="0" class="form-control" name="soal2" autocomplete="off"
                            placeholder="soal " value="">
                    </div>
                </div>
            </div>
            
            <div class="mt-3 float-right">
                <button type="submit" class="btn btn-primary me-2">Submit</button>
                <button class="btn btn-secondary">Cancel</button>
            </div>
        
        </form>
    </div>
</div>
@endsection
