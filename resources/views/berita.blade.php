@extends('layouts.app')

@section('title', 'Berita Terbaru')

@section('content')
<link rel="stylesheet" href="{{ asset('css/berita.css') }}">
    <!-- Hero -->
    <section class="hero-berita">
        <div class="hero-wrapper">
            <h1 class="hero-title">Berita ~ Terbaru dan Terkini</h1>
            <p class="hero-subtitle">Temukan kabar paling hangat seputar dunia film, promo, dan pengalaman sinema terkini hanya di CINETix.</p>
        </div>
    </section>

    <!-- Highlight Berita -->
    <section class="highlight">
        <div class="highlight-img">
            <img src="{{ asset('img/57pem.webp') }}" alt="Jumbo">
        </div>
        <div class="highlight-text">
            <h2>Jumbo: Film Petualangan Tersukses Ke-4 Sepanjang Masa 2025</h2>
            <p class="desc">Film Jumbo sukses memberikan tayangan dengan detail animasi yang ciamik. Selain itu, film ini juga menyimpan pesan yang mendalam tentang bagaimana anak-anak memproses duka melalui imajinasi cerita.</p>
            <p class="meta">12 Mei 2025 Raditya Yusuf Ramadhan</p>
            <p class="more">Film animasi Indonesia Jumbo mencetak sejarah baru di industri perfilman tanah air [...]</p>
        </div>
    </section>

    <!-- Kumpulan Berita -->
    <section class="berita-grid">
        <div class="berita-card">
            <img src="{{ asset('img/young.webp') }}"  alt="">
            <h3>Duta Kampus Unej wakili Indonesia "Youth Exchange" Malaysia-Singapura</h3>
            <p>Jember, Jawa Timur (ANTARA) - Duta Kampus Universitas Jember (Unej) Nadia Noviandra Balkis, mahasiswi Program Studi Pendidikan Matematika Fakultas Keguruan dan Ilmu Pendidikan (FKIP) terpilih mewakili Indonesia dalam ajang pertukaran pemuda dengan Malaysia dan Singapura.</p>
            <a href="#" class="read-more">Read More</a>
        </div>
    </section>
    <section class="berita-grid">
        <div class="berita-card">
            <img src="{{ asset('img/antar.webp') }}"  alt="">
            <h3>Kepri kirim dua perwakilan pertukaran pemuda antarnegara 2024</h3>
            <p>Tanjungpinang (ANTARA) - Dinas Pemuda dan Olahraga (Dispora) Provinsi Kepulauan Riau (Kepri) mengirimkan dua orang perwakilan pertukaran pemuda antarnegara (PPAN) tahun 2024 tujuan Australia dan Jepang.</p>
            <a href="#" class="read-more">Read More</a>
        </div>
    </section>
    <section class="berita-grid">
        <div class="berita-card">
            <img src="{{ asset('img/38prov.webp') }}"  alt="">
            <h3>Utusan 38 provinsi ikuti program Pertukaran Pemuda Nasional di Kaltara</h3>
            <p>Tanjung Selor (ANTARA) - Puluhan pemuda dari 38 provinsi di Indonesia mengikuti Program Pertukaran Pemuda Antar Provinsi (PPAP) 2024 di Kota Tarakan, Provinsi Kalimantan Utara (Kaltara).</p>
            <a href="#" class="read-more">Read More</a>
        </div>
    </section>
    <section class="berita-grid">
        <div class="berita-card">
            <img src="{{ asset('img/gubsul.webp') }}"  alt="">
            <h3>Gubernur Sulbar minta peserta PPAN jaga nama baik Indonesia</h3>
            <p>Mamuju (ANTARA) - Penjabat Gubernur Sulawesi Barat (Sulbar) Bahtiar Baharuddin meminta peserta Pertukaran Pemuda Antar-Negara (PPAN) asal Kabupaten Polewali Mandar agar menjaga nama baik daerah dan Indonesia di negara tujuan penempatan.</p>
            <a href="#" class="read-more">Read More</a>
        </div>
    </section>
    <section class="berita-grid">
        <div class="berita-card">
            <img src="{{ asset('img/348maha.webp') }}"  alt="">
            <h3>348 mahasiswa Unja ikuti program Pertukaran Mahasiswa Merdeka 2024</h3>
            <p>Jambi (ANTARA) - Sebanyak 348 mahasiswa Universitas Jambi (Unja) mengikuti program Pertukaran Mahasiswa Merdeka (PMM) angkatan empat tahun 2024 yang ditempatkan di 66 perguruan tinggi negeri dan swasta yang tersebar di seluruh Indonesia.</p>
            <a href="#" class="read-more">Read More</a>
        </div>
    </section>
    <section class="berita-grid">
        <div class="berita-card">
            <img src="{{ asset('img/jambi.webp') }}"  alt="">
            <h3>Jambi kirim dua mahasiswa ikut Pertukaran Pemuda Antar-Negara 2023</h3>
            <p>Jambi (ANTARA) - Dinas Pemuda dan Olahraga Provinsi Jambi mengirimkan dua mahasiswa ke Singapura dan Australia untuk mengikuti program Pertukaran Pemuda Antara-Negara (PPAN) 2023.</p>
            <a href="#" class="read-more">Read More</a>
        </div>
    </section>

</div>
@endsection
