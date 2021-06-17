@extends('layouts.layout-user')


@section('title', 'Home' )


@section('container')
<link rel="stylesheet" href="{{ asset('css/app.css') }} ">
<div class="container">

          @if (session('status'))
              <div class="alert alert-success">
                  {{ session('status') }}
              </div>
          @endif  
      <div class="box ">
        <a href="/form-ajukan"><img src="images/icon/ajukan.png" alt="" class="tombol"></a>
        <a href="/form-lapor"><img src="images/icon/lapor.png" alt="" class="tombol"></a>
        <a href="/form-pengaduan"><img src="images/icon/pengaduan.png" alt="" class="tombol"></a>
        <a href="/form-berlangganan"><img src="images/icon/berlangganan.png" alt="" class="tombol"></a>
      </div>
    
</div>
@endsection
