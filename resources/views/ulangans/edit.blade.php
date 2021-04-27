@extends('layout/main')

@section('title', 'FORM UBAH DATA UJIAN')
        
@section('container')
    <div class="container">
        <div class="row">
            <div class="col-8">
                <h1 class="mt-3">FORM UBAH DATA UJIAN</h1>
                <br>

                <form method="POST" action="/ulangans/{{ $ulangan->id }}">
                    @method('patch')
                    @csrf
                    <div class="form-group">
                      <label for="nama_mk">Nama</label>
                      <input type="text" class="form-control @error('nama_mk') is-invalid @enderror" id="nama" placeholder="Masukkan Nama Mata Kuliah Ujian" name="nama_mk" value="{{ $ulangan->nama_mk}}">
                          @error('nama_mk')
                            <div class="invalid-feedback"> {{ $message }}</div>
                          @enderror
                    </div>
                    <div class="form-group">
                      <label for="dosen">Dosen</label>
                      <input type="text" class="form-control @error('dosen') is-invalid @enderror" id="dosen" placeholder="Masukkan Nama Dosen Mata Kuliah" name="dosen" value="{{ $ulangan->dosen}}">
                          @error('dosen')
                            <div class="invalid-feedback"> {{ $message }}</div>
                          @enderror
                    </div>
                    <div class="form-group">
                      <label for="jumlah_soal">Jumlah Soal</label>
                      <input type="text" class="form-control @error('jumlah_soal') is-invalid @enderror" id="jumlah_soal" placeholder="Masukkan Jumlah Soal Mata Kuliah" name="jumlah_soal" value="{{ $ulangan->jumlah_soal}}">
                        @error('jumlah_soal')
                          <div class="invalid-feedback"> {{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                      <label for="keterangan">Keterangan</label>
                      <input type="text" class="form-control @error('keterangan') is-invalid @enderror" id="keterangan" placeholder="Masukkan Keterangan Mata Kuliah" name="keterangan" value="{{ $ulangan->keterangan}}">
                          @error('keterangan')
                            <div class="invalid-feedback"> {{ $message }}</div>
                          @enderror
                    </div>
                    <button type="submit" class="btn btn-dark">Ubah Data!</button>
                </form>

            </div>
        </div>
    </div>
@endsection