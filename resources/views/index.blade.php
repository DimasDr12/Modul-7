    @extends('layout.main')
    @section('isi')
        <h1 class="sub-judul">Data Mahasiswa</h1>
        <div class="tampil-mage">
            @foreach ($mahasiswa as $mhs)
                <div class="countainer-tampil">

                    <div class="tampil-l m">
                        <span class="nama m">{{ $mhs->nama }}</span><br>
                        <span class="nim m">{{ $mhs->nim }}</span><br>
                        <span class="alamat m">{{ $mhs->alamat }}</span><br>
                    </div>

                    <div class="tampil-r m">
                        <div class="coun-icon">
                            <a href="/edit/{{ $mhs->id }}"><i style='font-size:24px' class='fa fa-edit'></i></a>
                            <a href="/delete/{{ $mhs->id }}">
                                <i class="fa fa-trash-o"style="font-size:20px;color:red"></i>
                            </a>
                        </div>
                        <span class="email">{{ $mhs->email }}</span>
                    </div>

                </div>
            @endforeach

        </div>
    @endsection
