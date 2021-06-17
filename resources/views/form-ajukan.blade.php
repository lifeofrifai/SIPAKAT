@extends('layouts.layout-user')

@section('title', 'Ajukan' )


@section('container')
<link rel="stylesheet" href="{{ asset('css/app.css') }} ">
<div class="container">
  <div class="box " style="height: 920px;">
        <div class="judul fw-bold fs-3 mt-2" >
          <img src="images/icon/ajukan-logo.png" alt="">
        <p>Ajukan Layanan<br>Sampah Pribadi</p>
        </div>
        
          <form class="row g-3 mt-3" method="post" action="/home" style="color : white;">
          @csrf
            <div class="col-12">
              <label for="nama" class="form-label @error('nama') is-invalid @enderror">Nama Lengkap</label>
              <input type="text" class="form-control" id="nama" value="{{ old('nama') }}">
              <!-- @error('nama')
              <div id="validationServer05Feedback" class="invalid-feedback">{{$message}}</div>
              @enderror -->
            </div>
            <div class="col-12">
              <label for="pekerjaan" class="form-label @error('pekerjaan') is-invalid @enderror">Pekerjaan</label>
              <input type="text" class="form-control" id="pekerjaan" placeholder="Guru, PNS, polisi dll..." value="{{ old('pekerjaan') }}">
              <!-- @error('pekerjaan')
              <div id="validationServer05Feedback" class="invalid-feedback">{{$message}}</div>
              @enderror -->
            </div>
            <div class="col-12">
              <label for="kecamatan" class="form-label ">kecamatan</label>
              <select id="kecamatan" class="form-select">
                <option selected>Pilih...</option>
                <option>Baiturrahman</option>
                <option>Kuta Alam</option>
                <option>Meuraxa</option>
                <option>Syiah Kuala</option>
                <option>Lueng Bata</option>
                <option>Kuta Raja</option>
                <option>Banda Raya</option>
                <option>Jaya Baru</option>
                <option>Ulee Kareng</option>
              </select>
            </div>
            <div class="col-12">
              <label for="alamat_lengkap" class="form-label @error('alamat_lengkap') is-invalid @enderror">Alamat lengkap</label>
              <input type="text" class="form-control" id="alamat_lengkap" value="{{ old('alamat_lengkap') }}">
              <!-- @error('alamat_lengkap')
              <div id="validationServer05Feedback" class="invalid-feedback">{{$message}}</div>
              @enderror -->
            </div>
            <div class="col-12">
              <label for="alasan" class="form-label @error('alasan') is-invalid @enderror">Alasan Mengajukan</label>
              <input type="text" class="form-control" id="alasan" value="{{ old('alasan') }}">
              <!-- @error('alasan')
              <div id="validationServer05Feedback" class="invalid-feedback">{{$message}}</div>
              @enderror -->
            </div>
            <div class="mb-3">
              <label for="foto_rumah" class="form-label @error('foto_rumah') is-invalid @enderror">Masukan Foto Depan Rumah</label>
              <input class="form-control" type="file" id="foto_rumah" value="{{ old('foto_rumah') }}">
              <!-- @error('foto_rumah')
              <div id="validationServer05Feedback" class="invalid-feedback">{{$message}}</div>
              @enderror -->
            </div>
            <div class="d-flex justify-content-between">
              <a href="/home" class="btn btn-danger">Kembali</a>
              <button type="submit" class="btn btn-primary">Ajukan</button>
            </div>

            <!-- Modal
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title mx-auto" id="exampleModalLabel" style="color: black;">Apakah Anda Sudah Yakin?</h5>
                  </div>
                  <div class="modal-body">
                    <br><br>
                  </div>
                  <div class="modal-footer d-flex justify-content-between">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tidak</button>
                    <button type="submit" class="btn btn-primary">Yakin</button>
                  </div>
                </div>
              </div>
            </div> -->

          </form>

                      

  </div>
</div>
@endsection

