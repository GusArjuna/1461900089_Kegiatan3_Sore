@extends('layout0089')
@section('judul','home')
@section('isi')
<h5>Select Filter</h5>
<a href="{{url('add0089')}}" class="btn btn-primary mb-3">Add Data</a>
<table class="table">
    <thead class="table-dark">
        <tr>
            <td>#</td>
            <td>Nama Guru</td>
            <td>Bidang Mata Pelajaran</td>
            <td>Aksi</td>
        </tr>
    </thead>
    <tbody>
        @foreach($gurus as $guru)
        <tr>
            <td>{{ $loop->iteration}}</td>
            <td>{{$guru->nama}}</td>
            <td>{{$guru->mengajar}}</td>
            <td>
                <a href="{{url('edit0089',$guru->id)}}"><span class="badge bg-warning text-light">Edit</span></a>
                <a href="{{url('delete',$guru->id)}}"><span class="badge bg-danger  text-light">Delete</span></a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection