@extends('admin.template.default')

@section('content')
<div class="box">
    <div class="box-header">
        <h3 class="box-title">Data Semua Pasien</h3>

        <a href="" class="btn btn-primary">Tambahkan Data Pasien</a>
        <br>
        <br>
    </div>
    @include('admin.template.partial.alert')

    <div class="box-body">

        <table id="dataTable" class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th>Id_pasien</th>
                    <th>Nama</th>
                    <th>umur</th>
                    <th>gender</th>
                    <th>alamat</th>
                    <th>penyakit</th>
                    <th>id_dokter</th>
                </tr>
            </thead>
        </table>
    </div>

</div>

<form action="" method="post" id="returnForm">
    @csrf
    @method("PUT")
    <input type="submit" value="Return" style="display: none">
</form>

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
            ajax: "q",
            columns: [{
                    data: 'DT_RowIndex',
                    orderable: false,
                    searchable: false
                },
                {
                    data: 'id_pasien'
                },
                {
                    data: 'nama'
                },
                {
                    data: 'umur'
                },
                {
                    data: 'gender'
                },
                {
                    data: 'alamat'
                },
                {
                    data: 'penyakit'
                },
                {
                    data: 'id_dokter'
                }
            ]
        });
    });
</script>

@endpush