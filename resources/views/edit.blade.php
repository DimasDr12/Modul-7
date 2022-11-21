<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title></title>
</head>

<body>
    <div class="countiner">
        <div class="count-nav">
            <div class="count-nav-l">
                <p>Siakad</p>
            </div>
            <div class="count-nav-r">
                <ul>
                    <li><a href="/home" class="">Data mahasiswa</a></li>
                    <li><a href="/tambah" class="active">Input Data</a></li>
                    <li><a href="">About Me</a></li>
                </ul>
            </div>
        </div>
        <h1 class="sub-judul">Detail Data Mahasiswa</h1>
        <form action="/editAction" method="">
            @foreach ($mahasiswa as $mhs)
                {{ csrf_field() }}
                <div class="countainer-form">
                    <input type="hidden" name="id" value="{{ $mhs->id }}">
                    <div class="form-spes-l">
                        <label>NIM</label><br><input type="text" name="nim" value="{{ $mhs->nim }}"><br>
                        <label>NAMA</label><br><input type="text" name="nama" value="{{ $mhs->nama }}"><br>
                    </div>
                    <div class="form-spes-r">
                        <label>Email</label><br><input type="text" name="email" value="{{ $mhs->email }}"><br>
                        <label>Alamat</label><br><input type="text" name="alamat" value="{{ $mhs->alamat }}"><br>
                    </div>
                </div>
                <button class="btn">Submit</button>
            @endforeach
        </form>
    </div>
    <div class="footer">
        <div class="count1">
            <img src="https://kompaspedia.kompas.id/wp-content/uploads/2020/08/logo_Universitas-Trunojoyo-Madura-thumb.png"
                alt="logo" class="logo">
            <br>
            <span>Jurusan Teknik Informatika</span><br>
            <span>Universitas Trunojoyo Madura</span><br>
            <span class="sub">Jl. Raya Telang Kecamatan Kamal, Bangkalan</span><br>
            <span class="sub">Universitas Trunojoyo Madura</span><br>
        </div>
        <div class="count">
            <p>Contact</p>
            <p class="sub">Telp : 031-3011146</p>
            <p class="sub">Fax : 031-3011506</p>
            <p class="sub">Email : if.ft@trunojoyo.ac.id</p>
        </div>
        <div class="count">
            <p>Layanan</p>
            <p class="sub">Pembayaran UKT</p>
            <p class="sub">Pendaftaran KP</p>
            <p class="sub">Pendaftaran Wisuda</p>
            <p class="sub">Administrasi</p>
        </div>
        <div class="count">

            <p>Resource</p>
            <p class="sub">e-Journal</p>
            <p class="sub">Portal Tugas Akhir</p>
            <p class="sub">Website Resmi Kampus</p>
            <p class="sub">Download Administrasi</p>
        </div>
    </div>
    <style>
        body {
            overflow-x: hidden;
            font-family: 'Open Sans', sans-serif;
        }

        /* Start Nav */

        .count-nav {
            top: 0;
            left: 0;
            position: absolute;
            background-color: #235384;
            width: 100%;
            height: 50px;
            display: flex;
            flex-wrap: wrap;
            flex-direction: row;
            color: white;
        }

        .count-nav-l {
            width: 47%;
            margin: 0 0 0 10px;
        }

        .count-nav-r {
            width: 50%;
            display: flex;
            flex-wrap: wrap;
            flex-direction: row;
        }

        .count-nav-r li {
            padding: 10px;
            display: inline;
            list-style: none;
        }

        .count-nav-r a {
            color: white;
            text-decoration: none;
            transition: 0.5s;
        }

        a.active {
            transition: 0.5s;
            background-color: white;
            padding: 10px;
            border-radius: 50px;
            color: #235384;
        }

        .count-nav-r a:hover {
            transition: 0.5s;
            background-color: white;
            padding: 10px;
            border-radius: 50px;
            color: #235384;
        }

        /* Nav ENd */

        .countiner {
            height: auto;
            margin: 55px 10% 0 10%;
        }

        /* footer start */
        .footer {
            position: absolute;
            top: 120%;
            left: 0;
            background-color: #235384;
            width: 100%;
            height: 30%;
        }

        .countainer-form {
            width: 100%;
            height: 200px;
            display: flex;
            flex-direction: row;
        }

        .countainer-form input {
            width: 80%;
            height: 25px;
            margin: 0 0 30px 0;
        }

        .countainer-form label {
            font-weight: bold;
        }

        .form-spes-l {
            display: inline-block;
            height: 100%;
            width: 50%;
        }

        .sub-judul {
            color: #235384;
        }


        .form-spes-r {
            display: inline-block;
            height: 100%;
            width: 50%;
        }

        .btn {
            background-color: #235384;
            color: white;
            border: none;
            padding: 10px;
            border-radius: 50px;
        }

        .tampil-mage {
            width: 100%;
            height: 300%;
            display: flex;
            flex-direction: row;
            flex-wrap: wrap;
        }

        .countainer-tampil {
            margin: 20px 20px 0 0;
            width: 500px;
            height: 100px;
            border: 2px;
            box-shadow: 1px 1px 6px 2px grey;
            border-radius: 20px;
            border-color: grey;
            display: flex;
            flex-direction: row;
        }

        .m {
            margin: 10px 0 0 30px;
        }

        .tampil-l {
            width: 40%;
        }

        .tampil-l .nama {
            font-size: 15px;
            font-weight: bold;
        }

        .tampil-l .nim,
        .alamat {
            font-size: 12px;
        }

        .tampil-r {
            width: 30%;
        }

        .tampil-r .email {
            font-size: 12px;
        }

        .footer {
            display: flex;
            flex-direction: row;
            color: white;
        }

        .count1 {
            margin: 20px 0 0 0;
            width: 40%;
        }

        .count1 span {
            margin: 0 0 0 30px;
        }

        .footer span.sub {
            font-size: 12px;
        }

        .footer p.sub {
            font-size: 12px;
        }

        .count {
            width: 20%;
        }

        .logo {
            width: 120px;
            height: 70px;
        }
    </style>
</body>

</html>
