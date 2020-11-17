@extends('admin.template.default')

@section('content')
<div class="box">
    <div class="box-header">
        <h3 class="box-title">Data Dokter</h3>
        <br>
        <a href="" class="btn btn-primary">Tambahkan Dokter</a>
        <br>
    </div>
 @include('admin.template.partial.alert')

    <div class="box-body">
          
        <table id="dataTable" class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nama</th>
                    <th>Umur</th>
                    <th>Gender</th>
                    <th>Alamat</th>
                    <th>Aksi</th>
                </tr>
            </thead>

            <!--tbody>
            <tr>
                <th>1</th>
                <th>seseaorang</th>
            </tr>
        </tbody-->
        </table>
    </div>

</div>
@endsection

@push('styles')
   <!-- DataTables -->
   <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">

@endpush

@push('scripts')

<!-- DataTables -->
<script src="{{ asset('assets/plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}q"></script>
<script>
    $(function() {
        $('#dataTable').DataTable({
            processing: true,
            serverSide: true,
            ajax: "",
            columns: [{
                    data: 'id'
                },
                {
                    data: 'title'
                },
                {
                    data: 'desc'
                },{
                    data: 'autor'
                },{
                    data: 'cover'
                },{
                    data: 'qty'
                }, {
                    data : 'Aksi'
                }
            ]
        });
    });
</script>

@endpush