@extends('layout/main')

@section('title', 'DAFTAR DATA UJIAN')
        
@section('container')
    <div class="container">
        <div class="row">
            <div class="col-6">
                <h1 class="mt-3">Daftar Data Ujian</h1>

                <a href="/ulangans/create" class="btn btn-dark my-3">Tambah Data</a>

                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                <ul class="list-group">
                    @foreach( $ulangans as $ulangan)
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        {{ $ulangan->nama_mk }}
                      <a href="/ulangans/{{ $ulangan->id }}" class="badge badge-light">Detail</a>
                    </li>
                    @endforeach
                </ul>

            </div>
        </div>
    </div>
@endsection