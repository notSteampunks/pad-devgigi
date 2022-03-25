@extends('layout.master')

@section('content')

<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-10">
               	<div class="card-title">
								<h4 class="mb-0">Kecamatan</h4>
							</div>
            </div>
            <div class="col-2">
            <button type="button" id="btn-create" class="btn btn-primary">Tambah data</button>
            </div>
        </div>
        <hr />
			<div class="table-responsive">
            <table id="table-kecamatan" class="table " >
                <thead>
                    <tr>
						<th>id</th>
                        <th style="width: 1px;">no</th>
                        <th>Kecamatan</th>
                        <th>action</th>
                    </tr>
                </thead>
                <tbody></tbody>
            </table>
        </div>
    </div>
</div>
@include('admin.kecamatan.create')
@include('admin.kecamatan.edit')
@endsection

@push('after-script')

<script  type="text/javascript"> 
var tableData;

$(document).ready(function () {
    $("#btn-create").on('click', function(){
          $('.fileinput-remove-button').click();
          $('input[name=nama]').val('');
          $('#modal-create').modal('show');


      });
        tableData = $('#table-kecamatan').DataTable({
            processing: true,
			serverSide: true,
            responsive: true,
            language: {
                search: "_INPUT_",
                searchPlaceholder: "Cari"
            },
			"searching": true,
            "bPaginate": true,
            serverSide: true,
            stateSave: true,
            ajax: {
                url: "{{ url('admin/table/data-kecamatan') }}",
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
                    data: 'nama',
                    name: 'nama',
                    visible: true
                },
                
                 { data: 'action', name:'action', visible:true},

            ],

        });

        $("#table-kecamatan tbody").on('click','#btn-edit', function(){
          $('.fileinput-remove-button').click();
          $('#modal-edit').modal('show');


          var data = tableData.row( $(this).parents('tr') ).data();
          var id = data['id'];
          var token = $('input[name=_token]').val();

          $('input[name=_method]').val('PUT');
          $('input[name=_token]').val(token);
          $('input[name=id_edit]').val(data['id']);
          $('input[name=nama_edit]').val(data['nama']);
          


        });

        $('#table-kecamatan tbody').on( 'click', '#btn-delete', function () {
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
              url: "{{ url('delete/kecamatan') }}"+"/"+data['id'],
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