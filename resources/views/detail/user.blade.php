@extends('master')

@section('content')
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
      <td>Dimas</td>
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
      <td>Maman</td>
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
