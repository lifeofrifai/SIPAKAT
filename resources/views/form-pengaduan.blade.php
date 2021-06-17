@extends('layouts.layout-user')

@section('title', 'Sipakat | Pengaduan' )


@section('container')
<link rel="stylesheet" href="{{ asset('css/app.css') }} ">
<div class="container">
    
    <div class="box ">
      <div class="judul3 fw-bold fs-3 mt-2" >
        <img src="images/icon/pengaduan-logo.png" alt="">
      <p>Pengaduan<br>Sampah Sembarangan</p>
      </div>
      <form class="row g-3 mt-5" style="color : white;">
          <div class="col-12">
            <label for="inputAddress" class="form-label">Masukan Alamat lengkap</label>
            <textarea type="text" class="form-control" id="inputAddress"></textarea>
          </div>
          <div class="mb-3">
            <label for="formFile" class="form-label">Masukan Foto Bukti Sampah</label>
            <input class="form-control" type="file" id="formFile">
          </div>
          <div class="d-flex justify-content-between mt-3">
            <a href="/home" class="btn btn-danger">Kembali</a>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Ajukan</button>
          </div>
        </form>
    </div>
    
</div>
@endsection

