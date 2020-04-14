@extends('layouts.master')

@section('content')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
</div>

<div class="row">
    <div class="col-md-12">
        <h3>Selamat Datang Admin !</h3>
    </div>
</div>
<a href="#" class="btn btn-success">Tambah Petugas</a>
<table class="table table-bordered text-center mt-3">
  <thead>
    <tr>
      <th>No</th>
      <th>Nama</th>
      <th>Level</th>
      <th>Opsi</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>1</td>
      <td>Dimas Ikhsan Ramdani</td>
      <td>Petugas</td>
      <form class="" action="index.html" method="post">
        <td>
          <a href="#" class="btn btn-primary">Ubah</a>
          <button type="submit" name="submit" class="btn btn-danger">Hapus</button>
        </td>
      </form>
    </tr>
    <tr>
      <td>2</td>
      <td>Firmansyah Fitra</td>
      <td>Masyarakat</td>
      <form class="" action="index.html" method="post">
        <td>
          <a href="#" class="btn btn-primary">Ubah</a>
          <button type="submit" name="submit" class="btn btn-danger">Hapus</button>
        </td>
      </form>
    </tr>
  </tbody>
</table>
@endsection
