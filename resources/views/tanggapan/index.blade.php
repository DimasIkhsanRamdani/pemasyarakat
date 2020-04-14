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
  <label class="col-md-2 col-form-label text-md-right">Status</label>
<div class="col-md-6">
    {!! Form::select('pengaduans ',\App\Pengaduan::pluck('status'),NULL,['class'=>'form-control']) !!}
</div>
</div>
<div class="col-md-9 col-md-offset-3">
  <div class="form-group form-actions">
  <a type="submit" class="btn btn-primary float-right ml-2" href="#">Kirim</a>
  <a type="submit" class="btn btn-danger float-right" href="{{ route('petugas.dashboard') }}">Batal</a>
</div>
</div>
</form>
@endsection
