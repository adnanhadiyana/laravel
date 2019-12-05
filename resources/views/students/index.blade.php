@extends('template/main')

@section('title','Daftar Students')

@section('container')


<div class="container">
<div class="row">
<div class="col">

<h1>Daftar Mahasiswa</h1>
<a href="/students/create" class="btn btn-primary">Tambah data mahasiswa</a>

<table class="table">
  <thead class="bg-primary">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nama</th>
     <th scope="col">Action</th>
      
    </tr>
  </thead>
  <tbody>
  @foreach($students as $student)
    <tr>
      <th scope="row">{{$loop->iteration}}</th>
      <td>{{$student->nama}}</td>
      <td>
      <a href="{{url('students/'.$student->id)}}" class="badge badge-success">detail</a>
      
      </td>
    </tr>
    @endforeach
    </tbody>
</table>

</div>
</div>
</div>

@endsection