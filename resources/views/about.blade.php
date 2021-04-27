@extends('layout/main')

@section('title', 'About')
        
@section('container')
    <div class="container">
        <div class="row">
            
            <div class="col-4">
                <br>
                <br>
            <h3>Selamat Datang Di Aplikasi CRUD Data Ujian</h3>
            <p>Ini adalah contoh CRUD dibuat menggunakan Laravel. <br>
                Pada aplikasi ini bisa menambah, edit, menampilkan serta menghapus data.</p>
            </div>
            <div class="col-8">
                <br>
                <br>
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <img src="img/img1.jpg" class="d-block w-100" alt="Gambar 1">
                      </div>
                      <div class="carousel-item">
                        <img src="img/img2.jpg" class="d-block w-10" alt="Gambar 2">
                      </div>
                      <div class="carousel-item">
                        <img src="img/img3.jpg" class="d-block w-10" alt="Gambar 3">
                      </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="sr-only">Next</span>
                    </a>
                  </div>
            </div>
        </div>
    </div>
@endsection