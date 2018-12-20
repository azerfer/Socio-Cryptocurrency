@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                  <div class="card-header">Edit Tiket</div>
                      <div class="card-body">
                              @include('validasi')
                              {!! Form::model($tiket,['route'=>['tiket.update',$tiket->id],'method'=>'PUT']) !!}

                          <div class="form-group row">
                            <label class="col-md-2 col-form-label text-md-right">Nama Tiket</label>
                                 <div class="col-md-6">
                                 {!! Form::text('name_tiket',null,['class'=>'form-control']) !!}
                                 </div>
                           </div>

                          <div class="form-group row">
                            <label class="col-md-2 col-form-label text-md-right">Jenis Tiket</label>
                                 <div class="col-md-6">
                                 {!! Form::text('jenis_tiket',null,['class'=>'form-control']) !!}
                                 </div>
                           </div>

                          <div class="form-group row">
                            <label class="col-md-2 col-form-label text-md-right">Nama kategori</label>
                                 <div class="col-md-6">
                                 {!! Form::select('id_kategori',\App\Kategori::pluck('nama_kategori','id'),NULL,['class'=>'form-control']) !!}
                                </div>
                           </div>

                          <div class="form-group row">
                            <label class="col-md-2 col-form-label text-md-right">Jumlah</label>
                                 <div class="col-md-6">
                                        {!! Form::number('jumlah_tiket',null,['class'=>'form-control']) !!}
                                 </div>
                           </div>

                          <div class="form-group row">
                            <label class="col-md-2 col-form-label text-md-right">Jumlah</label>
                                 <div class="col-md-6">
                                        {!! Form::number('harga_tiket',null,['class'=>'form-control']) !!}
                                 </div>
                           </div>

                               <div class="form-group row mb-0">
                                    <div class="col-md-6 offset-md-2">
                                        <button type="submit" class="btn btn-danger">Tambah data</button>
                                       <a href="{{ route('tiket.index') }}" class="btn btn-info">Kembali</a>
                                    </div>
                          </div>
                      </div>
                  </div>
            </div>
        </div>
    </div>
</div>
@endsection