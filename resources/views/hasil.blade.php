@extends('layouts.main')
<style>
    body{
        background-image: url({{ asset('assets/img/bg1.jpg') }});
        background-size: cover;
        height: 100vh;
        background-position: center;
    }
    .bg{
        padding: 10px;
    }
</style>
@section('container')

    <div class="text-white bg ">
        <h3 class=" text-center">Susah Mencari Data Anda? Gunakan Fitur Search Kami!</h3>
        
        <div class="row justify-content-center mt-3">
            <div class="col-md-6">
                <form action="/hasil">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Search" name="search" value="{{ request('search') }}">
                        <button class="btn btn-secondary" type="submit" id="search">Search</button>
                      </div>
                </form>
            </div>
        </div>
        <table class="table table-dark table-sm">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Semester</th>
                    <th scope="col">Pilihan Beasiswa</th>
                    <th scope="col">Status Ajuan</th>
                  </tr>
            </thead>
            <tbody>
                @foreach ($mahasiswas as $mahasiswa)
                
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $mahasiswa->name }}</td>
                    <td>{{ $mahasiswa->semester }}</td>
                    <td>{{ $mahasiswa->pilihan }}</td>
                    <td>
                        <?php if($mahasiswa->status_ajuan == null) : ?>
                            <p>belum terverifikasi</p>
                        <?php else : ?>
                            {{ $mahasiswa->status_ajuan }}
                        <?php endif; ?>
                        
                    </td>
                </tr>
                @endforeach 
            </tbody>
          </table>
    </div>

@endsection