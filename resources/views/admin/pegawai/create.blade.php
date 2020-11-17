@extends('admin.template.default')

@section('content')
<div class="box">
    <div class="box-header">
        <h3 class="box-title">Tambah Data Penulis</h3>
    </div>
    <div class="box-body">
        <form action="{{ route('autor.simpan') }}" method="post">
            @csrf
            <div class="form-group @error('name') has-error @enderror ">
                <label for="name">Nama</label>
                <input type="text" name='name' value="{{old('name')}}" placeholder="Masukkan nama penulis" class="form-group">
                @error('name')
                <span class="help-block">{{ $message}}</span>
                @enderror
            </div>
            <div class="form-group">
                <input type="submit" value="tambah" class="btn btn-primary">
            </div>
        </form>
    </div>
</div>
@endsection