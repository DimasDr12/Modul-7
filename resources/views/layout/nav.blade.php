<div class="count-nav">
    <div class="count-nav-l">
        <p>Siakad</p>
    </div>
    <div class="count-nav-r">
        <ul>
            <li><a href="/home" class="{{ $tittle === 'home' ? 'active' : '' }}">Data mahasiswa</a></li>
            <li><a href="/tambah" class="{{ $tittle === 'tambah' ? 'active' : '' }}">Input Data</a></li>
            <li><a href="/about" class="{{ $tittle === 'about' ? 'active' : '' }}">About Me</a></li>
        </ul>
    </div>
</div>
@yield('nav')
