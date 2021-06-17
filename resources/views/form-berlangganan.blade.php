@extends('layouts.layout-user')

@section('title', 'Langganan' )


@section('container')
<link rel="stylesheet" href="{{ asset('css/app.css') }} ">
<div class="container">
    
    <div class="box ">
      <div class="judul4 fw-bold fs-3 mt-2" >
        <img src="images/icon/berlangganan-logo.png" alt="">
        <p>Cek Masa<br>Berlangganan</p>
        <div class="subs fs-4">
          <p>Masa Berlangganan Layanan Kebersihan Sampah <br> Anda Berlaku Sampai Dengan :</p>
          <p class="tgl">20 Juli 2021</p>
        </div>
          <div class="d-flex justify-content-between mt-5">
            <a href="/home" class="btn btn-danger px-4">Kembali</a>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Perpanjang</button>
          </div>
      </div>
    </div>
    
</div>
@endsection

