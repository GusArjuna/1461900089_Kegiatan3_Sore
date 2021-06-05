@extends('layout0089')
@section('judul','Edit')
@section('isi')
<form method="post" action="{{url('edit0089',$guru->id)}}">
    @csrf
    <div class="mb-3">
        <label for="nama" class="form-label">Nama Guru</label>
        <input type="text" class="form-control" id="nama" name="nama" value="{{$guru->nama}}">
    </div>
    <div class="mb-3">
        <label for="bidang" class="form-label">Bidang Mata Pelajaran</label>
        <input type="text" class="form-control" id="bidang" name="bidang" value="{{$guru->mengajar}}">
    </div>
    <button type="submit" class="btn btn-primary">Update</button>
</form>
@endsection