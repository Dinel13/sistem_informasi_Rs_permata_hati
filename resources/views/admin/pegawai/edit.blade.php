@extends('admin.template.default')

@section('content')
<div class="box">
    <div class="box-header">
        <h3 class="box-title">Edit Data Penulis</h3>
    </div>
    <div class="box-body">
        <form action="{{ route('autor.update', $autor) }}" method="post">
            @csrf
            @method("PUT")
            <div class="form-group @error('name') has-error @enderror ">
                <label for="name">Nama</label>
                <input type="text" name='name' value="{{ old('name') ?? $autor->name}}" placeholder="Masukkan nama penulis" class="form-group">
                @error('name')
                <span class="help-block">{{ $message}}</span>
                @enderror
            </div>
            <div class="form-group">
                <input type="submit" value="Ubah" class="btn btn-primary">
            </div>
        </form>
    </div>
</div>
@endsection