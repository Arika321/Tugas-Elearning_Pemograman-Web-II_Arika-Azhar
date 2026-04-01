@extends('layouts.app')

@section('title', 'Perpustakaan')

@section('content')

<style>
.card-hover {
    transition: all 0.3s ease;
}
.card-hover:hover {
    transform: translateY(-6px);
    box-shadow: 0 10px 20px rgba(0,0,0,0.2);
}

.img-hover {
    transition: 0.3s;
}
.img-hover:hover {
    transform: scale(1.05);
}

.banner-text {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    color: white;
}
</style>

<!-- HEADER -->
<div class="text-center mb-3">
    <h3 class="fw-bold">📚 Sistem Informasi Perpustakaan</h3>
    <small class="text-muted">Kelola buku & anggota dengan mudah</small>
</div>

<!-- BANNER (compact, cocok screenshot) -->
<div class="mb-3 position-relative">
    <img src="https://images.unsplash.com/photo-1524995997946-a1c2e315a42f"
         class="img-fluid rounded shadow"
         style="width:100%; height:180px; object-fit:cover; filter:brightness(70%);">

    <div class="banner-text text-center">
        <h6 class="fw-bold">Ayo Membaca 📖</h6>
        <small>Buku adalah jendela dunia</small>
    </div>
</div>

<!-- AJAKAN -->
<div class="alert alert-primary text-center p-2 mb-3">
    <small>📖 Membaca membantu meningkatkan ilmu dan wawasan kita.</small>
</div>

<!-- CARD FITUR (KECIL & RAPI) -->
<!-- ROW ATAS -->
<div class="row text-center g-2">

    <div class="col-md-4">
        <div class="card card-hover p-2">
            <img src="https://images.unsplash.com/photo-1512820790803-83ca734da794"
                 style="height:90px; object-fit:cover;" class="rounded mb-1">
            <small class="fw-bold">📖 Buku</small><br>
            <a href="/buku" class="btn btn-sm btn-primary mt-1">Kelola</a>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card card-hover p-2">
            <img src="https://images.unsplash.com/photo-1521737604893-d14cc237f11d"
                 style="height:90px; object-fit:cover;" class="rounded mb-1">
            <small class="fw-bold">👤 Anggota</small><br>
            <a href="/anggota" class="btn btn-sm btn-primary mt-1">Lihat</a>
        </div>
    </div>

    <!-- ADMIN DI SEBELAH ANGGOTA -->
    <div class="col-md-4">
        <div class="card card-hover p-2 border-dark">
            <img src="https://images.unsplash.com/photo-1555066931-4365d14bab8c"
                 style="height:90px; object-fit:cover;" class="rounded mb-1">
            <small class="fw-bold">⚙️ Admin</small><br>
            <a href="/dashboard" class="btn btn-sm btn-dark mt-1">Dashboard</a>
        </div>
    </div>

</div>

<!-- ROW BAWAH (TENGAH) -->
<div class="row justify-content-center mt-2">
    <div class="col-md-4 text-center">
        <div class="card card-hover p-2">
            <img src="https://images.unsplash.com/photo-1507842217343-583bb7270b66"
                 style="height:90px; object-fit:cover;" class="rounded mb-1">
            <small class="fw-bold">🔄 Peminjaman</small><br>
            <a href="#" class="btn btn-sm btn-primary mt-1">Masuk</a>
        </div>
    </div>
</div>

<!-- BUKU TERBARU -->
<div class="mt-3">
    <h6 class="mb-2">📚 Buku Terbaru</h6>

    <div class="row g-2">
        @foreach($buku as $i => $b)
        <div class="col-md-4">
            <div class="card card-hover">

                <img src="{{ $b['gambar'] }}"
                     class="img-hover"
                     style="height:110px; width:100%; object-fit:cover;">

                <div class="p-2">
                    <small class="fw-bold">{{ $b['judul'] }}</small><br>

                    <!-- BUTTON EDIT -->
                    <a href="/buku/edit/{{ $i }}" class="btn btn-sm btn-warning mt-1">Edit</a>
                </div>

            </div>
        </div>
        @endforeach
    </div>
</div>

@endsection