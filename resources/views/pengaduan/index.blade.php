@extends('layouts.master')

@section('content')
<form class="form-horizontal form-bordered" action="" enctype="multipart/form-data" method="post">
  <div class="form-group row">
    <label class="col-md-2 col-form-label text-md-right">Isi Laporan</label>
    <div class="col-md-6">
      {!! Form::textarea('isi_laporan', null, ['class' =>'form-control']) !!}
    </div>
  </div>

  <div class="form-group row">
    <label class="col-md-2 col-form-label text-md-right">Bukti Foto</label>
    <div class="col-md-6">
      <input type="file" name="photo" class="form-control" id="example-file-input" value="">
    </div>
  </div>
    <div class="col-md-9 col-md-offset-3">
      <div class="form-group form-actions">
      <a type="submit" class="btn btn-primary float-right ml-2" href="#">Kirim</a>
      <a type="submit" class="btn btn-danger float-right" href="{{ route('masyarakat.dashboard') }}">Batal</a>
    </div>
  </div>
</form>
@endsection
