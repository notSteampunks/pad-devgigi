@extends('layout.master')

@section('content')

<div class="row">
    <div class="col-md-12 grid-margin stretch-card">
        <form action="{{ route('pemeriksaanfisik.store') }}" class="col-md-12" id="pisik-store" method="post"
            nctype="multipart/form-data" files=true>
            @csrf
            <div class="card col-md-12">
                <div class="card-body">
                    <h6 class="card-title">Pemeriksaan</h6>


                    <div class="mb-3">
                        <label class="form-label">Nama Anak</label>
                        <select class=" form-select" name="anak" data-width="100%">
                            @foreach($anak as $anak)

                            <option value="{{$anak->id}}">{{$anak->nama}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="hasilimt">
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Berat badan</label>
                            <input type="text" min="0" class="form-control" id="berat_badan" name="berat_badan"
                                autocomplete="off" placeholder="masukkan berat badan" value="">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">tinggi badan</label>
                            <input type="text" min="0" class="form-control" id="tinggi_badan" name="tinggi_badan"
                                autocomplete="off" placeholder="Nama" value="">
                        </div>


                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">imt</label>
                            <input type="text" class="form-control" value="harap isi berat badan dan tinggi badan"
                                id="imt"  readonly="">
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
                </div>
            </div>

            <div class="card col-md-12 mt-2">
                <div class="card-body">
                    <h6 class="card-title">Pemeriksaan Mata</h6>
                    <p style="font-size:12px" class="card-text text-secondary mb-3">Pilih ya atau tidak dari pertanyaan gejala sakit mata </p>

                    <div class="mb-3">
                        <label class="col-md-12 mb-2">Mata perih / merah dan bengkak  </label>
                        <div class="form-check form-check-inline">
                            <input type="radio" class="form-check-input" value="ya" name="soal1" id="radioInline">
                            <label class="form-check-label" for="radioInline">
                                Ya
                            </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input type="radio" value="tidak" class="form-check-input" name="soal1" id="radioInline1">
                            <label class="form-check-label" for="radioInline1">
                                Tidak
                            </label>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="col-md-12 mb-2"> Tidak dapat melihat / membaca dengan jelas </label>
                        <div class="form-check form-check-inline">
                            <input type="radio" class="form-check-input" value="ya" name="soal2" id="radioInline">
                            <label class="form-check-label" for="radioInline">
                                Ya
                            </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input type="radio" value="tidak" class="form-check-input" name="soal2" id="radioInline1">
                            <label class="form-check-label" for="radioInline1">
                                Tidak
                            </label>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label class="col-md-12 mb-2"> Menggunakan kacamata </label>
                        <div class="form-check form-check-inline">
                            <input type="radio" class="form-check-input" value="normal" name="soal3" id="radioInline">
                            <label class="form-check-label" for="radioInline">
                                Tidak
                            </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input type="radio" value="minus" class="form-check-input selected" name="soal3" id="radioInline1">
                            <label class="form-check-label" for="radioInline1">
                                Ya, Minus
                            </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input type="radio" value="silinder" class="form-check-input selected" name="soal3" id="radioInline1">
                            <label class="form-check-label" for="radioInline1">
                                Ya, Silinder
                            </label>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label class="col-md-12 mb-2"> Mata juling </label>
                        <div class="form-check form-check-inline">
                            <input type="radio" class="form-check-input" value="ya" name="soal4" id="radioInline">
                            <label class="form-check-label" for="radioInline">
                                Ya
                            </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input type="radio" value="tidak" class="form-check-input" name="soal4" id="radioInline1">
                            <label class="form-check-label" for="radioInline1">
                                Tidak
                            </label>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label class="col-md-12 mb-2"> Tidak dapat membedakan warna dengan baik  </label>
                        <div class="form-check form-check-inline">
                            <input type="radio" class="form-check-input" value="ya" name="soal5" id="radioInline">
                            <label class="form-check-label" for="radioInline">
                                Ya
                            </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input type="radio" value="tidak" class="form-check-input" name="soal5" id="radioInline1">
                            <label class="form-check-label" for="radioInline1">
                                Tidak
                            </label>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Berapa lama waktu menonton TV + melihat gadget seperti HP/tablet + melihat layar komputer dalam 1 hari (Jam) </label>
                        <input type="text" class="form-control"  name="soal6" autocomplete="off"
                            placeholder="">
                    </div>

                    
                </div>
            </div>

            <div class="card col-md-12 mt-2">
                <div class="card-body">
                    <h6 class="card-title">Pemeriksaan Telinga</h6>
                    <p style="font-size:12px" class="card-text text-secondary mb-3">Pilih ya atau tidak dari pertanyaan gejala pendengaran </p>

                    <div class="mb-3">
                        <label class="col-md-12 mb-2">Tidak merespon bila ada suara keras  </label>
                        <div class="form-check form-check-inline">
                            <input type="radio" class="form-check-input" value="ya" name="soal1" id="radioInline">
                            <label class="form-check-label" for="radioInline">
                                Ya
                            </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input type="radio" value="tidak" class="form-check-input" name="soal1" id="radioInline1">
                            <label class="form-check-label" for="radioInline1">
                                Tidak
                            </label>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="col-md-12 mb-2"> Tidak mendengar bila dipanggil  </label>
                        <div class="form-check form-check-inline">
                            <input type="radio" class="form-check-input" value="ya" name="soal2" id="radioInline">
                            <label class="form-check-label" for="radioInline">
                                Ya
                            </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input type="radio" value="tidak" class="form-check-input" name="soal2" id="radioInline1">
                            <label class="form-check-label" for="radioInline1">
                                Tidak
                            </label>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label class="col-md-12 mb-2"> Tidak dapat mendengar dengan jelas  </label>
                        <div class="form-check form-check-inline">
                            <input type="radio" class="form-check-input" value="ya" name="soal3" id="radioInline">
                            <label class="form-check-label" for="radioInline">
                                Ya
                            </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input type="radio" value="tidak" class="form-check-input" name="soal3" id="radioInline1">
                            <label class="form-check-label" for="radioInline1">
                                Tidak
                            </label>
                        </div>
                    </div>



                    <div class="mb-3">
                        <label class="col-md-12 mb-2"> Keluar cairan dari telinga </label>
                        <div class="form-check form-check-inline">
                            <input type="radio" class="form-check-input" value="ya" name="soal4" id="radioInline">
                            <label class="form-check-label" for="radioInline">
                                Ya
                            </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input type="radio" value="tidak" class="form-check-input" name="soal4" id="radioInline1">
                            <label class="form-check-label" for="radioInline1">
                                Tidak
                            </label>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label class="col-md-12 mb-2"> Telinga terasa tertutup atau tersumbat  </label>
                        <div class="form-check form-check-inline">
                            <input type="radio" class="form-check-input" value="ya" name="soal5" id="radioInline">
                            <label class="form-check-label" for="radioInline">
                                Ya
                            </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input type="radio" value="tidak" class="form-check-input" name="soal5" id="radioInline1">
                            <label class="form-check-label" for="radioInline1">
                                Tidak
                            </label>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label class="col-md-12 mb-2"> Nyeri telinga  </label>
                        <div class="form-check form-check-inline">
                            <input type="radio" class="form-check-input" value="ya" name="soal6" id="radioInline">
                            <label class="form-check-label" for="radioInline">
                                Ya
                            </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input type="radio" value="tidak" class="form-check-input" name="soal6" id="radioInline1">
                            <label class="form-check-label" for="radioInline1">
                                Tidak
                            </label>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Volume saat menonton TV atau mendengar radio </label>
                        <input type="text" class="form-control"  name="soal7" autocomplete="off"
                            placeholder="" required>
                    </div>

                    
                </div>
            </div>

            <div class="mt-3">
                <button type="submit" class="btn btn-primary me-2">Submit</button>
                <button class="btn btn-secondary">Cancel</button>
            </div>
        </form>
    </div>
</div>
@endsection

@push('after-script')

<script type="text/javascript">
    $(document).ready(function () {
        $(" #berat_badan,#tinggi_badan").keyup(function () {
            var bb = $("#berat_badan").val();
            var tb = $("#tinggi_badan").val();
            console.log(bb)
            console.log(tb)
            tb/=100
            console.log(tb)
                

            if (bb != "" && tb != "") {
                var imt = bb / (tb * tb);
                imt=imt.toFixed(1)   
               
                if (imt >= 27) {
                    $("#imt").removeClass("bg-success bg-info");
                    $("#imt").addClass("bg-danger");
                    $("#imt").val(imt+ " (Obesitas)");
                } else if ((imt >= 25.1) & (imt < 27)) {
                    $("#imt").addClass("bg-danger");
                    $("#imt").removeClass("bg-success bg-info");
                    $("#imt").val(imt + " (Gemuk)");
                } else if ((imt >= 18.5) & (imt <= 25)) {
                    $("#imt").removeClass("bg-danger bg-info");
                    $("#imt").addClass("bg-success");
                    $("#imt").val(imt + " (Normal)");
                } else if ((imt >= 17) & (imt <= 18.4)) {
                    $("#imt").addClass("bg-info");
                    $("#imt").removeClass("bg-success bg-danger");
                    $(".imt").val(imt + " (Kurus)");
                } else {
                    $("#imt").addClass("bg-info");
                    $("#imt").removeClass("bg-success bg-danger");
                    $("#imt").val(imt + " (Sangat Kurus)");
                }
            } else if (bb == "" && tb != "") {
                $("#imt").removeClass("bg-danger bg-success bg-info");

                $("#imt").val("harap isi berat badan");
            } else if (bb != "" && tb == "") {
                $("#imt").removeClass("bg-danger bg-success bg-info");
                $("#imt").val("harap isi tinggi badan");
            } else if (bb == "" && tb == "") {
                $("#imt").removeClass("bg-danger bg-success bg-info");
                $("#imt").val("harap isi berat badan dan tinggi badan");
            }


        });
    });

</script>
@endpush
