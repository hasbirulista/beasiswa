@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Data Mahasiswa</h1>
        
    </div>
  <div class="table-responsive col-md-3">
      <a href="/dashboard" class="btn btn-success mb-2"><span data-feather="arrow-left"></span>Kembali</a>

      <a href="/dashboard/data/{{ $mahasiswa->id }}/edit" class="btn btn-warning mb-2"><span data-feather="edit"></span> Edit</a>

      <form action="/dashboard/data/{{ $mahasiswa->id }}" method="post" class="d-inline">
        @method('delete')
        @csrf
        <button class="btn btn-danger mb-2" onclick="return confirm('Hapus Data {{ $mahasiswa->name }}?')"><span data-feather="x-circle"></span> Delete</button>
      </form>

      <table class="table table-striped table-md">
      <thead>
        <tr>
             <th scope="col">Nama</th>
             <td>: {{ $mahasiswa->name }}</td>
        </tr>
        <tr>
            <th scope="col">email</th>
            <td>: {{ $mahasiswa->email }}</td>
        </tr>
        <tr>
            <th scope="col">No HP</th>
            <td>: {{ $mahasiswa->no_hp }}</td>
        </tr>
        <tr>
            <th scope="col">Semester</th>
            <td>: {{ $mahasiswa->semester }}</td>
        </tr>
        <tr>
            <th scope="col">ipk</th>
            <td>: {{ $mahasiswa->ipk }}</td>
        </tr>
        <tr>
            <th scope="col">Pilihan Beasiswa</th>
            <td>: {{ $mahasiswa->pilihan }}</td>
        </tr>
        <tr>
            <th scope="col">File</th>
            <td>: {{ $mahasiswa->file }}</td>
        </tr>
        <tr>
            <th>Status Ajuan</th>
            <td>
              <?php if($mahasiswa->status_ajuan == null) : ?>
                <p>: belum terverifikasi</p>
              <?php else : ?>
                : {{ $mahasiswa->status_ajuan }}
              <?php endif; ?>
            </td>
          
        </tr>
      </thead>
    </table>
  </div>
@endsection