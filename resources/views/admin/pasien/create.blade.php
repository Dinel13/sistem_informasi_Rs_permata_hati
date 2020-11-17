@extends('admin.template.default')

@section('content')
<div class="box">
    <div class="box-header">
        <h3 class="box-title">Tambah Data Penulis</h3>
    </div>
    <div class="box-body">
        <form action="{{ route('buku.simpan') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group @error('judul') has-error @enderror ">
                <label for="judul">Judul</label>
                <input type="text" name='judul' value="{{old('title')}}" placeholder="Masukkan judul" class="form-control">
                 @error('judul')
                <span class="help-block">{{ $message}}</span>
                @enderror
            </div>
            <div class="form-group @error('desc') has-error @enderror ">
                <label for="desc">descripsi</label>
                <textarea name="desc" class="form-control" value="{{old('desc')}}" placeholder="Masukkan deskripsi" rows="3">{{old('desc')}}</textarea>
                @error('desc')
                <span class="help-block">{{ $message}}</span>
                @enderror
            </div>
            <div class="form-group @error('author_id') has-error @enderror ">
                <label for="penulis">Penulis</label>
                <select name="author_id" class="form-control">
                    @foreach ($autors as $autor)
                        <option value="{{$autor->id}}">{{$autor->name}}</option>
                    @endforeach
                </select>
                @error('author_id')
                <span class="help-block">{{ $message}}</span>
                @enderror
            </div>
            <div class="form-group @error('cover') has-error @enderror ">
                <label for="sampul">Sampul</label>
                <input type="file" name='cover' class="form-control">
                 @error('cover')
                <span class="help-block">{{ $message}}</span>
                @enderror
            </div>
            <div class="form-group @error('qty') has-error @enderror ">
                <label for="jumlah">Jumlah</label>
                <input type="text" name='qty' value="{{old('qty')}}" placeholder="Masukkan jumlah buku" class="form-control">
                 @error('qty')
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
