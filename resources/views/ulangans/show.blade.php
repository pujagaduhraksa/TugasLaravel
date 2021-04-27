@extends('layout/main')

@section('title', 'DETAIL PROFILE SOAL UJIAN')
        
@section('container')
    <div class="container">
        <div class="row">
            <div class="col-6">
                <h1 class="mt-3">DETAIL PROFILE SOAL UJIAN</h1>

                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                      <h5 class="card-title">{{ $ulangan->nama_mk }}</h5>
                      <h6 class="card-subtitle mb-2 text-muted">{{ $ulangan->dosen }}</h6>
                      <p class="card-text">{{ $ulangan->jumlah_soal }}</p>
                      <p class="card-text">{{ $ulangan->keterangan }}</p>


                      {{-- <button type="submit" class="btn btn-primary">Edit</button> --}}
                      <a href="{{ $ulangan->id }}/edit" class="btn btn-dark">Edit</a>
                      
                      <form action="/ulangans/{{ $ulangan->id }}" method="POST" class="d-inline">
                        @method('delete')
                        @csrf
                        <button type="submit" class="btn btn-danger">Hapus</button>
                      </form>

                      <a href="/ulangans" class="card-link">Kembali</a>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection