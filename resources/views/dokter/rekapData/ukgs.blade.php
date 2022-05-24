@extends('layout.master')

@section('content')
<nav class="page-breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Rekap Data Pasien</a></li>
        <li class="breadcrumb-item active" aria-current="page">UKGS</li>
    </ol>
</nav>
<div class="card">
    <div class="card-body">
        <h6 class="card-title">REKAP DATA PER WILAYAH</h6>
        <p class="text-muted mb-3">Masukkan wilayah yang ingin ditampilkan datanya</p>
        <form class="forms-sample">
        <div class="col-md-6">
            <div class="row mb-3">
                <label for="exampleInputUsername2" class="col-sm-2 col-form-label">Wilayah Kelurahan</label>
                <div class="col-sm-9">
                    <select class="form-select" id="exampleFormControlSelect1">
                        <option selected disabled>Pilih Kelurahan</option>
                        <option>12-18</option>
                        <option>18-22</option>
                        <option>22-30</option>
                        <option>30-60</option>
                        <option>Above 60</option>
                    </select>
                </div>
            </div>
            <div class="row mb-3">
                <label for="exampleInputUsername2" class="col-sm-2 col-form-label">Sekolah</label>
                <div class="col-sm-9">
                    <select class="form-select" id="exampleFormControlSelect1">
                        <option selected disabled>Pilih Sekolah</option>
                        <option>12-18</option>
                        <option>18-22</option>
                        <option>22-30</option>
                        <option>30-60</option>
                        <option>Above 60</option>
                    </select>
                </div>
            </div>
            <div class="row mb-3">
                <label for="exampleInputUsername2" class="col-sm-2 col-form-label">Kelas</label>
                <div class="col-sm-9">
                    <select class="form-select" id="exampleFormControlSelect1">
                        <option selected disabled>Pilih Kelas</option>
                        <option>12-18</option>
                        <option>18-22</option>
                        <option>22-30</option>
                        <option>30-60</option>
                        <option>Above 60</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="col-md-6">
        </div>
        </form>
    </div>
</div>
<br>
<div class="card">
    <div class="card-body">
        <p class="text-muted mb-3">Berikut merupakan tabel pasien gigi di</p>
        <div class="table-responsive">
            <table id="dataTableExample" class="table">
            <thead>
                <tr>
                <th>#</th>
                <th>NAMA</th>
                <th>JENIS KELAMIN</th>
                <th>NAMA SEKOLAH</th>
                <!-- <th>KELAS</th> -->
                <th>STATUS SKRINING</th>
                <th>AKSI</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                <td>Tiger Nixon</td>
                <td>System Architect</td>
                <td>Edinburgh</td>
                <td>61</td>
                <!-- <td>5</td> -->
                <td>2011/04/25</td>
                <td>
                    <a class="btn btn-primary btn-icon-text btn-xs" href="{{route('dokter.rekapDetailUKGS')}}" role="button">
                        Lihat Rekap
                        <i class="btn-icon-append" data-feather="book-open"></i>
                    </a>
                    <a class="btn btn-info btn-icon btn-xs" href="#" role="button">
                        <i class="mdi mdi-tooth"></i>
                    </a>
                </td>
                </tr>
                <tr>
                <td>Garrett Winters</td>
                <td>Accountant</td>
                <td>Tokyo</td>
                <td>63</td>
                <td>2011/07/25</td>
                <td>$170,750</td>
                </tr>
                <tr>
                <td>Ashton Cox</td>
                <td>Junior Technical Author</td>
                <td>San Francisco</td>
                <td>66</td>
                <td>2009/01/12</td>
                <td>$86,000</td>
                </tr>
                <tr>
                <td>Cedric Kelly</td>
                <td>Senior Javascript Developer</td>
                <td>Edinburgh</td>
                <td>22</td>
                <td>2012/03/29</td>
                <td>$433,060</td>
                </tr>
                <tr>
                <td>Airi Satou</td>
                <td>Accountant</td>
                <td>Tokyo</td>
                <td>33</td>
                <td>2008/11/28</td>
                <td>$162,700</td>
                </tr>
                <tr>
                <td>Brielle Williamson</td>
                <td>Integration Specialist</td>
                <td>New York</td>
                <td>61</td>
                <td>2012/12/02</td>
                <td>$372,000</td>
                </tr>
                <tr>
                <td>Herrod Chandler</td>
                <td>Sales Assistant</td>
                <td>San Francisco</td>
                <td>59</td>
                <td>2012/08/06</td>
                <td>$137,500</td>
                </tr>
                <tr>
                <td>Rhona Davidson</td>
                <td>Integration Specialist</td>
                <td>Tokyo</td>
                <td>55</td>
                <td>2010/10/14</td>
                <td>$327,900</td>
                </tr>
                <tr>
                <td>Colleen Hurst</td>
                <td>Javascript Developer</td>
                <td>San Francisco</td>
                <td>39</td>
                <td>2009/09/15</td>
                <td>$205,500</td>
                </tr>
                <tr>
                <td>Sonya Frost</td>
                <td>Software Engineer</td>
                <td>Edinburgh</td>
                <td>23</td>
                <td>2008/12/13</td>
                <td>$103,600</td>
                </tr>
                <tr>
                <td>Jena Gaines</td>
                <td>Office Manager</td>
                <td>London</td>
                <td>30</td>
                <td>2008/12/19</td>
                <td>$90,560</td>
                </tr>
                <tr>
                <td>Quinn Flynn</td>
                <td>Support Lead</td>
                <td>Edinburgh</td>
                <td>22</td>
                <td>2013/03/03</td>
                <td>$342,000</td>
                </tr>
                <tr>
                <td>Charde Marshall</td>
                <td>Regional Director</td>
                <td>San Francisco</td>
                <td>36</td>
                <td>2008/10/16</td>
                <td>$470,600</td>
                </tr>
                <tr>
                <td>Haley Kennedy</td>
                <td>Senior Marketing Designer</td>
                <td>London</td>
                <td>43</td>
                <td>2012/12/18</td>
                <td>$313,500</td>
                </tr>
                <tr>
            <td>Tatyana Fitzpatrick</td>
                <td>Regional Director</td>
                <td>London</td>
                <td>19</td>
                <td>2010/03/17</td>
                <td>$385,750</td>
                </tr>
                <tr>
                <td>Michael Silva</td>
                <td>Marketing Designer</td>
                <td>London</td>
                <td>66</td>
                <td>2012/11/27</td>
                <td>$198,500</td>
                </tr>
                <tr>
                <td>Paul Byrd</td>
                <td>Chief Financial Officer (CFO)</td>
                <td>New York</td>
                <td>64</td>
                <td>2010/06/09</td>
                <td>$725,000</td>
                </tr>
                <tr>
                <td>Gloria Little</td>
                <td>Systems Administrator</td>
                <td>New York</td>
                <td>59</td>
                <td>2009/04/10</td>
                <td>$237,500</td>
                </tr>
                <tr>
                <td>Bradley Greer</td>
                <td>Software Engineer</td>
                <td>London</td>
                <td>41</td>
                <td>2012/10/13</td>
                <td>$132,000</td>
                </tr>
                <tr>
                <td>Dai Rios</td>
                <td>Personnel Lead</td>
                <td>Edinburgh</td>
                <td>35</td>
                <td>2012/09/26</td>
                <td>$217,500</td>
                </tr>
                <tr>
                <td>Jenette Caldwell</td>
                <td>Development Lead</td>
                <td>New York</td>
                <td>30</td>
                <td>2011/09/03</td>
                <td>$345,000</td>
                </tr>
                <tr>
                <td>Yuri Berry</td>
                <td>Chief Marketing Officer (CMO)</td>
                <td>New York</td>
                <td>40</td>
                <td>2009/06/25</td>
                <td>$675,000</td>
                </tr>
            </tbody>
            </table>
        </div>
        
    </div>
</div>
@endsection

@push('after-script')

<script  type="text/javascript"> 
var tableData;

$(document).ready(function () {
        tableData = $('#table-dokter').DataTable({
            processing: true,
			serverSide: true,
            responsive: true,
            language: {
                search: "INPUT",
                searchPlaceholder: "Cari"
            },
			"searching": true,
            "bPaginate": true,
            serverSide: true,
            stateSave: true,
            ajax: {
                url: "{{ url('admin/table/data-dokter') }}",
                type: "GET",
            },
            columns: [{
                    data: 'id',
                    name: 'id',
                    visible: false
                },
				{
					data: 'DT_RowIndex', name:'DT_RowIndex', visible:true
				},

                {
                    data: 'nik',
                    name: 'nik',
                    visible: true
                },
                {
                    data: 'nama',
                    name: 'nama',
                    visible: true
                },
                {
                    data: 'jenis_kelamin',
                    name: 'jenis_kelamin',
                    visible: true
                },
                 { data: 'action', name:'action', visible:true},

            ],

        });
        $('#table-dokter tbody').on( 'click', '#btn-delete', function () {
        var data = tableData.row( $(this).parents('tr') ).data();
       Swal.fire({
            title: 'Harap Konfirmasi',
            text: "Anda tidak dapat mengembalikan data yang telah dihapus!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Lanjutkan'
        }).then((willDelete) => {
          if (willDelete.isConfirmed) {
            $.ajax({
              url: "{{ url('delete/dokter') }}"+"/"+data['id'],
              method: 'get',
              success: function(result){
                tableData.ajax.reload();
                Swal.fire(
                'Hapus',
                  'Data Berhasil di hapus.',
                 'success'
                 )
              }

            });
          }
        });
      });


})
</script>
@endpush