@extends('template.master')
@section('judul', 'Tambah Data Dosen')

@section('isi')
    <h1>Tambah Data Dosen</h1>

    @if ($errors->any())
        <div class=""alert alert-danger>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ url('save-dosen')}" method="post">    
        <div class="form-group">
            <label for="">NIK</label>
            <input type="text" class="form-control" name="nik" value="{{ old('nik')}}">
        </div>
        <div class="form-group">
            <label for="">Nama Dosen</label>
            <input type="text" class="form-control" name="nama_dosen" value="{{ old('nama_dosen')}}">
        </div>
        <div class="form-group">
            <label for="">Umur</label>
            <input type="number" class="form-control" name="umur" value="{{ old('umur')}}">
        </div>
        <input type="submit" name="simpan" value="simpan" class="btn btn-succes">
    </form>
@endsection


