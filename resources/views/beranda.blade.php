@extends('layouts.main')
<style>
    body{
        background-image: url({{ asset('assets/img/bg.jpg') }});
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

    <div class="text-white bg ">
        @if (session()->has('success'))
            <div class="fw-boder d-flex justify-content-center alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        <h3 class=" text-center">Selamat datang di Halaman Beasiswaku.id</h3>
        <h4 class="mt-3 text-center">Kami hadir untuk mewujudkan impian Anda! Kami memberikan kesempatan emas bagi para pelajar dan mahasiswa berprestasi untuk menggapai cita-cita akademik dan karier yang gemilang. Dengan Beasiswa Inspirasi, akses pendidikan berkualitas tak lagi menjadi impian belaka, tetapi kenyataan yang dapat dijangkau oleh semua orang.</h4>
        <div class="d-flex justify-content-center mt-4">
            <a href="/daftar" type="button" class="btn btn-outline-light col-md-3">Daftar</a>
        </div>
    </div>
    
@endsection