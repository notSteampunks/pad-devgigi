@extends('layout.master')

@section('content')

<div class="row">
    <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h6 class="card-title">Pemeriksaan</h6>
                <form action="{{ route('pemeriksaanfisik.store') }}" class="forms-sample" id="pisik-store" method="post" nctype="multipart/form-data" files=true >
                    @csrf

                    <div class="mb-3">
                        <label class="form-label">Nama Orangtua</label>
                        <select class=" form-select" name="anak" data-width="100%">
                            @foreach($anak as $anak)
                      
                            <option value="{{$anak->id}}">{{$anak->nama}}</option>
                        @endforeach
                        </select>
                    </div>
                    <div class="hasilimt">
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">tinggi badan</label>
                        <input type="text" class="form-control" id="tinggibadan" name="tinggi_badan" autocomplete="off"
                            placeholder="Nama" value="">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Berat badan</label>
                        <input type="text" class="form-control"  id="berat_badan" name="berat_badan" autocomplete="off"
                            placeholder="masukkan berat badan" value="">
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">imt</label>
                        <input type="text" class="form-control" id="imt" value=""  autocomplete="off" readonly=""> 
                    </div>
                </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">sistole</label>
                        <input type="number" class="form-control" id="sistole" name="sistole" autocomplete="off"
                            placeholder="masukkan kelas">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">diastole</label>
                        <input type="number" class="form-control" id="diastole" name="diastole" autocomplete="off"
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

<script type="text/javascript">
    
      




   

</script>
@endpush
