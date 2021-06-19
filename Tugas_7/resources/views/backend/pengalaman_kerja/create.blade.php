@extends('backend/layouts.template')

@section('content')
<!--main content start-->
<section id="main-content">
    <section class="wrapper">
        <!--overview start-->
        <div class="row">
            <div class="col-lg-12">
                <h3 class="page-header"><i class="icon_document_alt"></i> Riwayat Hidup</h3>
                <ol class="breadcrumb">
                    <li><i class="fa fa-home"></i><a href="{{ url('home') }}">Home</a></li>
                    <li><i class="icon_document_alt"></i>Riwayat Hidup</li>
                    <li><i class="fa fa-files-o"></i>Pengalaman Kerja</li>
                </ol>
            </div>
        </div>

        <div class="row">
          <div class="col-lg-12">
            <section class="panel">
              <header class="panel-heading">
                {{ $admin_lecturer }}  Pengalaman Kerja
              </header>
              @if ($errors->any())
                <div class="alert alert-danger">
                  <strong>Whoops!</strong> There where some problems with your input.<br><br>
                  <ul>
                    @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                    @endforeach
                  </ul>
                </div>
              @endif
              <div class="panel-body">
                <div class="form">
                  <form class="form-validate form-horizontal" id="pengalaman_kerja"
                  action="{{ isset($pengalaman_kerja) ? route('pengalaman_kerja.update',$pengalaman_kerja->id) : route('pengalaman_kerja.store') }}" method="post">
                    {!! csrf_field() !!}
                    {!! isset($pengalaman_kerja) ? method_field('PUT') : '' !!}
                    <input type="hidden" name="id" value="{{ isset($pengalaman_kerja) ? $pengalaman_kerja->id : ''}}">
                    <div class="form-group">
                      <label for="cname" class="control-label col-lg-2">Nama Perusahaan <span class="require">*</span></label>
                      <div class="col-lg-10">
                        <input class="form-control" type="text" name="nama" id="nama" minlenght="5" value="{{ isset($pengalaman_kerja) ? $pengalaman_kerja->nama : ''}}" require />
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="cname" class="control-label col-lg-2">Jabatan <span class="require">*</span></label>
                      <div class="col-lg-10">
                        <input class="form-control" type="text" name="jabatan" id="jabatan" minlenght="2" value="{{ isset($pengalaman_kerja) ? $pengalaman_kerja->jabatan : ''}}" require />
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="curl" class="control-label col-lg-2">Tahun Masuk <span class="require">*</span></label>
                      <div class="col-lg-10">
                        <input class="form-control" type="text" name="tahun_masuk" id="tahun_masuk" value="{{ isset($pengalaman_kerja) ? $pengalaman_kerja->tahun_masuk : ''}}" require />
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="curl" class="control-label col-lg-2">Tahun Selesai <span class="require">*</span></label>
                      <div class="col-lg-10">
                        <input class="form-control" type="text" name="tahun_keluar" id="tahun_keluar" value="{{ isset($pengalaman_kerja) ? $pengalaman_kerja->tahun_keluar : ''}}" require />
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="col-lg-offset-2 col-lg-10">
                        <button class="btn btn-primary" type="submit">Submit</button>
                        <a href="{{ route('pengalaman_kerja.index') }}"><button class="btn btn-default" type="button">Cancel</button></a>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </section>
          </div>
        </div>
        <!--/.row-->
    </section>
</section>
@endsection
@push('content-css')
<link href="{{asset('backend/css/bootstrap-datepicker.css')}}" rel="stylesheet"/ />
@endpush
@push('content-js')
<script src="{{asset('backend/js/bootstrap-datepicker.js')}}"></script>
<script type="text/javascript">
  $('#tahun_masuk').datepicker({
    format: "yyyy",
    viewMode: "years",
    minViewMode: "years"
  });
  $('#tahun_keluar').datepicker({
    format: "yyyy",
    viewMode: "years",
    minViewMode: "years"
  });
</script>
@endpush