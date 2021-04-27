@extends('layout/main')

@section('title', 'DAFTAR DATA UJIAN')
        
@section('container')
    <div class="container">
        <div class="row">
            <div class="col-10">
                <h1 class="mt-3">Daftar Ujian</h1>

                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nama Mata Kuliah</th>
                            <th scope="col">Dosen</th>
                            <th scope="col">Jumlah Soal</th>
                            <th scope="col">Keterangan</th>
                            <th scope="col">Aksi</th>
                        </tr>
                       <tbody>
                           @foreach($ujian as $ujn)
                            <tr>
                                <th scope="row"> {{ $loop->iteration }}</th>
                                <td>{{ $ujn->nama_mk }}</td>
                                <td>{{ $ujn->dosen }}</td>
                                <td>{{ $ujn->jumlah_soal }}</td>
                                <td>{{ $ujn->keterangan }}</td>
                                <td>
                                    <a href="#" class="badge badge-success">Edit</a>
                                    <a href="#" class="badge badge-danger">Hapus</a>
                                </td>
                            </tr>
                           @endforeach
                       </tbody>
                    </thead>
                </table>
            </div>
        </div>
    </div>
@endsection