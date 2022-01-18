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
                </div>
                <div class="panel-body">
                    <table class="table table-striped table-bordered" id="table">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>No Keum</th>
                                <th>Tanggal</th>
                                <th>Kelompok Surat</th>
                                <th>Kode</th>
                                <th>No. Surat</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>110101</td>
                                <td>10-01-2022</td>
                                <td>S</td>
                                <td>KK</td>
                                <td>1030303</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>110101</td>
                                <td>10-01-2022</td>
                                <td>BB</td>
                                <td>KK</td>
                                <td>1030303</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>110101</td>
                                <td>10-01-2022</td>
                                <td>CC</td>
                                <td>KK</td>
                                <td>1030303</td>
                            </tr>
                        </tbody>
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
            var table = $('#table').DataTable({
                destroy: true,
                deferRender: true,
                scrollX: true,
                ajax: {
                    url : '{{ url('/information/users/list') }}',
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
                    {data: 'tanggal', class: 'text-nowrap'},
                    {data: 'kelompok_surat', class: 'text-nowrap'},
                    {data: 'kode', class: 'text-nowrap'},
                    {data: 'no_surat', class: 'text-nowrap'},
                    {"data": "action", "orderable": false, class: "text-center", render: function (data, type, row, meta) {
                        return `
                            <div class="d-flex justify-content-center">
                                <button 
                                    type="button" 
                                    class="btn btn-sm btn-info btn-edit mr-1 d-flex" 
                                >
                                    <i class="bi bi-pencil text-white f-12 mr-1"></i> Edit
                                </button> 
                                <button 
                                    type="button" 
                                    class="btn btn-sm btn-danger btn-delete d-flex" 
                                >
                                    <i class="bi bi-trash text-white f-12 mr-1"></i> Delete
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
        } );
    </script>
@endpush