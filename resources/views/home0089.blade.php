@extends('layout0089')
@section('judul','home')
@section('isi')
<h5>select Nama Guru and NIP</h5>
<table class="table">
    <thead class="table-dark">
        <tr>
            <td>#</td>
            <td>Nama Guru</td>
            <td>NIP</td>
        </tr>
    </thead>
    <tbody>
        @foreach($studentselect as $studsel)
        <tr>
            <td>{{ $loop->iteration}}</td>
            <td>{{ $studsel->nama_guru}}</td>
            <td>{{ $studsel->nip}}</td>
        </tr>
        @endforeach
    </tbody>
</table>
<h5>Where Nama Guru Budi Setiawan</h5>
<table class="table">
    <thead class="table-dark">
        <tr>
            <td>#</td>
            <td>Nama Guru</td>
        </tr>
    </thead>
    <tbody>
        @foreach($studentw as $studw)
        <tr>
            <td>{{ $loop->iteration}}</td>
            <td>{{ $studw->nama_guru}}</td>
        </tr>
        @endforeach
    </tbody>
</table>
<h5>Join Guru and Siswa with Wali Kelas</h5>
<table class="table">
    <thead class="table-dark">
        <tr>
            <td>#</td>
            <td>Nama Siswa</td>
            <td>Wali Kelas</td>
        </tr>
    </thead>
    <tbody>
        @foreach($studentjoin as $studj)
        <tr>
            <td>{{ $loop->iteration}}</td>
            <td>{{ $studj->nama_siswa}}</td>
            <td>{{ $studj->nama_guru}}</td>
        </tr>
        @endforeach
    </tbody>
</table>
<h5>Join Guru and Siswa Budi Setiawan</h5>
<table class="table">
    <thead class="table-dark">
        <tr>
            <td>#</td>
            <td>Nama Siswa</td>
            <td>Nama Guru</td>
        </tr>
    </thead>
    <tbody>
        @foreach($studentjoinlike as $studjl)
        <tr>
            <td>{{ $loop->iteration}}</td>
            <td>{{ $studjl->nama_siswa}}</td>
            <td>{{ $studjl->nama_guru}}</td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection