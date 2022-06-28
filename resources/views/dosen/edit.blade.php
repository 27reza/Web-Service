<form action="{{route('update.dosen', $dosen->id)}}" method="post">
    @csrf
    @method('PATCH')
    <div class="form-group">
        <label for="">NIK</label>
        <input type="text" class="form-control" name="nik" value="{{$dosen->nik}}">
    </div>
    <div class="form-group">
        <label for="">NAMA DOSEN</label>
        <input type="text" class="form-control" name="nama_dosen" value="{{$dosen->nik}}">
    </div>
    <div class="form-group">
        <label for=""NIK>Umur</label>
        <input type="text" class="form-control" name="umur" value="{{$dosen->nik}}">
    </div>

</form>