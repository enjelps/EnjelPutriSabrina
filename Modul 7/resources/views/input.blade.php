@extends('layouts.main')
@section('content')
    <title>Tambah Data</title>
        <div class="container mt-3">
            <!-- Form Untuk Tambah Data -->
            <div class="form">
                <h3>Input Data Mahasiswa</h3>
                
                <form action="/home/proses_tambah_data" method="post">
                    @csrf
                    <label>NRP</label>
                    <input type="number" class="form-control" name="nrp">

                    <label>Nama</label>
                    <input type="text" class="form-control" name="nama">

                    <label>Email</label>
                    <input type="email" class="form-control" name="email">

                    <label>Alamat</label>
                    <input type="text" class="form-control" name="alamat"><br>
                    
                    <input type="submit" name="kirim" value="tambah data" class="btn btn-dark">
                </form>
            </div>
        </div>
@endsection