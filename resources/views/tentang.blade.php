@extends('layouts.main')

<style>
    body{
        background-image: url({{ asset('assets/img/bg2.jpg') }});
        background-size: cover;
        height: 100vh;
        background-position: center;
    }
    .bg{
        background-color: rgba(0, 0, 0, .4);
        padding: 10px;
        border-radius: 10px;
    }
</style>
    

@section('container')
<div class="fs-4 bg text-white ">
    <h1 class="text-center">Kenapa Memilih Beasiswaku.id?</h1>
    <ul>
        <li>
            <p>Kualitas Pendidikan: Kami percaya pendidikan adalah kunci untuk mencapai masa depan yang cerah. Oleh karena itu, kami menyediakan beasiswa untuk program studi terkemuka di berbagai bidang, yang didukung oleh institusi pendidikan ternama.</p>
        </li>
        <li>
            <p>
                Mentor Terbaik: Selama masa penerimaan beasiswa, Anda akan dibimbing oleh mentor-mentor terbaik yang telah berpengalaman dalam bidangnya. Mereka akan membantu Anda merencanakan langkah-langkah strategis menuju kesuksesan akademik dan karier.
            </p>
        </li>
        <li>
            <p>
                Networking Luas: Bergabunglah dengan jaringan kami yang luas, terdiri dari para pemimpin industri, akademisi, dan alumni sukses. Ini merupakan peluang emas untuk membangun hubungan profesional dan terkoneksi dengan mereka yang telah mencapai puncak kesuksesan.
            </p>
        </li>
        <li>
            <p>
                Pengembangan Diri Holistik: Kami tak hanya peduli dengan pencapaian akademik Anda, tetapi juga mengutamakan perkembangan diri secara holistik. Kami memberikan dukungan untuk pengembangan kepribadian, soft skills, dan penguasaan teknologi terbaru.
            </p>
        </li>
        <li>
            <p>
                Bergabunglah dengan kami dan buktikan bahwa Anda adalah generasi yang akan merubah dunia. Segera daftarkan diri Anda untuk mendapatkan kesempatan berharga ini. Jangan lewatkan momen berharga ini, karena masa depan Anda dimulai dari sini!
            </p>
        </li>
    </ul>
    <div class="d-flex justify-content-center mt-4">
        <a href="/daftar" type="button" class="btn btn-outline-light col-md-3">Daftar</a>
    </div>
</div>
@endsection