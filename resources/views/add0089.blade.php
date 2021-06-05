@extends('layout0089')
@section('judul','Add Page')
@section('isi')
<form method="post" action="{{url('/')}}">
    @csrf
    <div class="mb-3">
        <label for="nama" class="form-label">Nama Guru</label>
        <input type="text" class="form-control" id="nama" name="nama">
    </div>
    <div class="mb-3">
        <label for="bidang" class="form-label">Bidang Mata Pelajaran</label>
        <input type="text" class="form-control" id="bidang" name="bidang">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection