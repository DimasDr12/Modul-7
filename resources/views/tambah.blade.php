@extends('layout.main')
@section('isi')
    <h1 class="sub-judul">Input Data Mahasiswa</h1>
    <form action="/tambah/tambahAction" method="">
        {{ csrf_field() }}
        <div class="countainer-form">
            <div class="form-spes-l">
                <label for="nim">NIM</label><br><input type="text" name="nim"><br>
                <label for="nama">Nama</label><br><input type="text" name="nama"><br>
            </div>
            <div class="form-spes-r">
                <label for="email">Email</label><br>
                <input type="text" name="email"><br>
                <label for="alamat">Alamat</label>
                <br>
                <input type="text" name="alamat">
            </div>
        </div>
        <button class="btn">Submit</button>
    </form>
@endsection
