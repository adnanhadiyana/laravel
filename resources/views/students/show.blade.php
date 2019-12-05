@extends('template/main')

@section('title','detail mahasiswa')

@section('container')


<div class="container">
<div class="row">
<div class="col">

<h1>detail mahasiswa</h1>
<div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">{{$student->nama}}</h5>
    <h6 class="card-subtitle mb-2 text-muted">{{$student->email}}</h6>
    <p class="card-text">{{$student->nrp}}</p>
    <p class="card-text">{{$student->jurusan}}</p>
    <a href="#" class="card-link">edit</a>
    <a href="#" class="card-link">hapus</a>
    <a href="{{url('students/')}}" class="card-link">kembali</a>
  </div>
</div>
</div>
</div>
</div>

@endsection