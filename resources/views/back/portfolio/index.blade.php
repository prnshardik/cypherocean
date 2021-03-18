@extends('back.layout.app')

@section('meta')
@endsection

@section('title')
    Portfolios
@endsection

@section('styles')
@endsection

@section('content')
    <div class="page-heading">
        <h1 class="page-title">Portfolios</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="{{ route('admin.home') }}"><i class="fa fa-home font-20"></i></a>
            </li>
            <li class="breadcrumb-item">Portfolio</li>
        </ol>
    </div>
    <div class="page-content fade-in-up">
        <div class="row">
            <div class="col-md-12">
                <div class="ibox">
                    <div class="ibox-head">
                        <div class="ibox-title">Portfolio List</div>
                        <a href="{{ route('admin.portfolio.create') }}" class="btn btn-primary">Add Portfolio</a>                            
                    </div>
                    <div class="ibox-body">
                        <div class="dataTables_wrapper container-fluid dt-bootstrap4">
                            <table class="table table-bordered data-table" id="data-table">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Image</th>
                                        <th>Name</th>
                                        <th>Category Name</th>
                                        <th>Description</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                        <div class="text-center"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
 <script type="text/javascript">
        var datatable;

        $(document).ready(function() {
            if($('#data-table').length > 0){
                datatable = $('#data-table').DataTable({
                    processing: true,
                    serverSide: true,

                    // "pageLength": 10,
                    // "iDisplayLength": 10,
                    "responsive": true,
                    "aaSorting": [],
                    // "order": [], //Initial no order.
                    //     "aLengthMenu": [
                    //     [5, 10, 25, 50, 100, -1],
                    //     [5, 10, 25, 50, 100, "All"]
                    // ],

                    // "scrollX": true,
                    // "scrollY": '',
                    // "scrollCollapse": false,
                    // scrollCollapse: true,

                    // lengthChange: false,

                    "ajax":{
                        "url": "{{ route('admin.portfolio') }}",
                        "type": "POST",
                        "dataType": "json",
                        "data":{
                            _token: "{{csrf_token()}}"
                        }
                    },
                    "columnDefs": [{
                            //"targets": [0, 5], //first column / numbering column
                            "orderable": true, //set not orderable
                        },
                    ],
                    columns: [
                        {
                            data: 'DT_RowIndex',
                            name: 'DT_RowIndex'
                        },
                        {
                            data: 'image',
                            name: 'image'
                        },
                        {
                            data: 'name',
                            name: 'name'
                        },
                        {
                            data: 'portfolio_category_name',
                            name: 'portfolio_category_name'
                        },
                        {
                            data: 'description',
                            name: 'description'
                        },
                        {
                            data: 'status',
                            name: 'status'
                        },
                        {
                            data: 'action',
                            name: 'action',
                            orderable: false,
                        },
                    ]
                });
            }
        });

        function change_status(object){
            var id = $(object).data("id");
            var status = $(object).data("status");

            if (confirm('Are you sure?')) {
                $.ajax({
                    "url": "{!! route('admin.portfolio.status') !!}",
                    "dataType": "json",
                    "type": "POST",
                    "data":{
                        id: id,
                        status: status,
                        _token: "{{ csrf_token() }}"
                    },
                    success: function (response){
                        if (response.code == 200){
                            datatable.ajax.reload();
                            toastr.success('Record status changed successfully.', 'Success');
                        }else{
                            toastr.error('Failed to change status of record.', 'Error');
                        }
                    }
                });
            }
        }
    </script>
@endsection