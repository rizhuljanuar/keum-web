@extends('layouts.app')

@section('title')
    Keum Web
@endsection

@section('content')
<div class="container-fluid">
    <h3 class="page-title">Surat Masuk Keum</h3>
    <div class="row">
        <div class="col-md-12">
            <div class="panel">
                <div class="panel-heading">
                    <p class="btn btn-primary" id="btn-tambah">Add New</p>
                </div>
                <div class="panel-body">
                    <table class="table table-striped table-bordered" id="table">
                        <thead>
                            <tr>
                                <th class="text-nowrap text-center">No</th>
                                <th class="text-nowrap text-center">No Keum</th>
                                <th class="text-nowrap text-center">No. Surat</th>
                                <th class="text-nowrap text-center">Kode</th>
                                <th class="text-nowrap text-center">Tanggal Dispo</th>
                                <th class="text-nowrap text-center">Tanggal Surat</th>
                                <th class="text-nowrap text-center">Asal Surat</th>
                                <th class="text-nowrap text-center">Lampiran</th>
                                <th class="text-nowrap text-center">Perihal</th>
                                <th class="text-nowrap text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody></tbody>
                    </table>
                </div>
            </div>
            <!-- END TABLE STRIPED -->
        </div>
    </div>
</div>
@endsection

@push('after-script')
    <script>
        $(document).ready( function () {
            // $('#table').DataTable();
            var table = $('#table').DataTable({
                destroy: true,
                deferRender: true,
                ajax: {
                    url : '{{ url('/surat-masuk-keum') }}',
                    type: 'post',
                    headers: {'X-CSRF-TOKEN': '{{ csrf_token() }}'},
                    data : function(d) {
                        return {
                            ...d,
                            // page: parseInt( $('#table').DataTable().page.info().page + 1),
                            search: $('input[name=search]').val()
                        }
                    }
                },
                columns: [
                    {"data": "no", "orderable": false, class: "text-center", render: function (data, type, row, meta) {
                            return meta.row + meta.settings._iDisplayStart + 1;
                    }},
                    {data: 'no_keum', class: 'text-nowrap'},
                    {data: 'no_surat', class: 'text-nowrap'},
                    {data: 'kode', class: 'text-nowrap'},
                    {data: 'tanggal_dispo', class: 'text-nowrap'},
                    {data: 'tanggal_surat', class: 'text-nowrap'},
                    {data: 'asal_surat', class: 'text-nowrap'},
                    {data: 'lampiran', class: 'text-nowrap'},
                    {data: 'perihal', class: 'text-nowrap'},
                    {"data": "action", "orderable": false, class: "text-center", render: function (data, type, row, meta) {
                        return `
                            <div class="d-flex justify-content-center">
                                <button 
                                    type="button" 
                                    class="btn btn-sm btn-danger btn-pdf d-flex"
                                   
                                >
                                    <i class="bi bi-trash text-white f-12 mr-1"></i> Cetak Pdf
                                </button>
                            </div>    
                        `;
                        
                    }},
                ],
                "columnDefs": [
                    { "searchable": false, "targets": [0, 3, 4], "orderable": false },
                ],
                //lengthMenu: [[10, 15, 30, 50], [10, 15, 30, 50]],
                // sDom: '<"pull-left"><"pull-right"f>rt<"row"<"col-md-2 mt-2"l><"col-md-6"i><"col-md-4"p>>',
            });

            // Button excel on click event 
            $('#table tbody').on('click', '.btn-pdf' ,function(e){
                var table = $('#table').DataTable();
                var rowData = table.row($(this).parents('tr') ).data();
                @include('processing');

                $.ajax({
                    url: '{{ url('/surat-masuk-keum/pdf') }}',
                    type: 'post',
                    cache: false,
                    headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
                    xhrFields: { responseType: 'blob' },
                    complete: function() {
                        swal.close();
                    },
                    data: {
                        rowData
                    },
                    success: function(data) {
                        var a = document.createElement('a');
                        var url = window.URL.createObjectURL(data);
                        a.href = url;
                        a.download = 'Surat Masuk Keum.pdf';
                        document.body.append(a);
                        a.click();
                        window.URL.revokeObjectURL(url);
                    },
                    error: function(xhr, stat, err) {
                        swal.close();
                    }
                })
                .fail(res => {
                    swal.close();
                    if(res.status == 400) swal('', 'Data tidak ditemukan!', 'warning');
                });
            });
        } );
    </script>
@endpush