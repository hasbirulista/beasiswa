@extends('dashboard.layouts.main')


@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        
        <h1 class="h2">Welcome back, {{ auth()->user()->name }}</h1>
    </div>
    <table class="table table-dark table-sm">
        @if (session()->has('success'))
          <div class="alert alert-success" role="alert">
            {{ session('success') }}
          </div>
        @endif
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama</th>
                <th scope="col">Semester</th>
                <th scope="col">Pilihan Beasiswa</th>
                <th scope="col">Status Ajuan</th>
                <th scope="col">Action</th>
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
                <td>
                    <a href="/dashboard/data/{{ $mahasiswa->id }}" class="badge bg-info"><span data-feather="eye"></span></a>
  
                    <a href="/dashboard/data/{{ $mahasiswa->id }}/edit" class="badge bg-warning"><span data-feather="edit"></span></a>
  
                    <form action="/dashboard/data/{{ $mahasiswa->id }}" method="post" class="d-inline">
                      @method('delete')
                      @csrf
                      <button class="badge bg-danger border-0" onclick="return confirm('Hapus Data {{ $mahasiswa->name }}?')"><span data-feather="x-circle"></span></button>
                    </form>
                </td> 
            </tr>
            @endforeach 
        </tbody>
      </table>
@endsection