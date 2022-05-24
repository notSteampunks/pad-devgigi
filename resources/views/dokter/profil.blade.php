@extends('layout.master')

@section('content')
<style>
    profile-photo .img {
        position: absolute;
        width: 111.34px;
        height: 100px;
        left: 24px;
        top: 179px;
    }

    .text-p {
        position: relative;
        padding: 5px;
        left: 130px;
    }

</style>
<div class="container-fluid">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active" aria-current="page">Profil</li>
        </ol>
    </nav>
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                @foreach (Auth::user()->dokter as $dokter)
                <form action="{{route('dokter.profilEdit', $dokter->id)}}" class="forms-horizontal" id="profil" method="post" nctype="multipart/form-data" files=true>   
                    @csrf
                    <div class="form-group">

                        {{-- foto profil --}}
                        <div class="position-relative">
                            <figure class="overflow-hidden mb-0 d-flex justify-content-center">
                                <!-- <img src="https://via.placeholder.com/1560x370" class="rounded-top" alt="profile cover" wi> -->
                                <img src="{{ asset('dokter/header/'.$dokter->header) }}" class="rounded-top" alt="profile cover" width="1560px" height="370px"">
                            </figure>
                            <div
                                class="d-flex justify-content-between align-items-center position-absolute top-90 w-100 px-2 px-md-4 mt-n4">
                                <div class="profil-photo">
                                    <img class="wd-100 mt-3 rounded-square" src="{{ asset('dokter/avatar/'.$dokter->avatar) }}"
                                        alt="profile">
                                </div>
                                <div>
                                    <button class="btn btn-primary btn-icon-text" type="submit">
                                        <i data-feather="edit" class="btn-icon-prepend"></i> Edit Profil
                                    </button>
                                </div>
                            </div>
                        </div>

                        {{-- Tag nama --}}
                        <div class="text-p">
                            <span class="h4 text-dark">drg. {{$dokter -> nama }}</span>
                            <br>
                            <span class="h9 text-facebook">{{ $dokter -> no_str }}</span>
                        </div>

                        {{-- form profil --}}
                        <div class="mt-5">
                            <form class="forms-sample mt-5">
                                <div class="row mb-3">
                                    <label for="nama" class="col-sm-3 col-form-label">Nama</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="nama"
                                            value="{{ $dokter -> nama }}" readonly>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="tempatlahir" class="col-sm-3 col-form-label">Tempat Lahir</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="tempattanggallahir" readonly
                                            autocomplete="off" value="{{ $dokter -> tempat_lahir }}" placeholder="Tempat Tanggal Lahir">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="tanggallahir" class="col-sm-3 col-form-label">Tanggal
                                        Lahir</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="tempattanggallahir" readonly
                                            autocomplete="off" value="{{ $dokter -> tanggal_lahir }} " placeholder="Tempat Tanggal Lahir">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="nik" class="col-sm-3 col-form-label">NIK</label>
                                    <div class="col-sm-9">
                                        <input type="number" class="form-control" id="nik" readonly
                                            placeholder="Nomor Induk Kependudukan" value="{{ $dokter -> nik }}">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="jenis-kelamin" class="col-sm-3 col-form-label">Jenis
                                        Kelamin</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="jeniskelamin"
                                            placeholder="Jenis Kelamin" value="{{ $dokter -> jenis_kelamin}}" readonly>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="nohp" class="col-sm-3 col-form-label">No Hp</label>
                                    <div class="col-sm-9">
                                        <input type="number" class="form-control" id="nohp"
                                            placeholder="Nomor Handphone" value="{{ $dokter -> no_telp}}" readonly>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="email" class="col-sm-3 col-form-label">Email</label>
                                    <div class="col-sm-9">
                                        <input type="email" class="form-control" id="email"
                                            placeholder="Email" value="{{ Auth::user() -> email }}" readonly>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="nostr" class="col-sm-3 col-form-label">No STR</label>
                                    <div class="col-sm-9">
                                        <input type="number" class="form-control" id="nostr"
                                            placeholder="No STR" value="{{ $dokter -> no_str }}" readonly>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                </form>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection
