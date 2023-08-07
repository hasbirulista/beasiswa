@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Edit Data</h1>
    </div>

    <div class="col-lg-8">
        <form method="post" action="/dashboard/{{ $mahasiswa->id }}">
            @method('put')
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Nama</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror " id="name" name="name" required disabled value="{{ old('name', $mahasiswa->name) }}">
                
                @error('name')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="text" class="form-control @error('email') is-invalid @enderror " id="email" name="email" required disabled value="{{ old('email', $mahasiswa->email) }}">
                
                @error('email')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="no_hp" class="form-label">No Hp</label>
                <input type="text" class="form-control @error('no_hp') is-invalid @enderror " id="no_hp" name="no_hp" required disabled value="{{ old('no_hp', $mahasiswa->no_hp) }}">
                
                @error('no_hp')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="semester" class="form-label">Semester</label>
                <input type="text" class="form-control @error('semester') is-invalid @enderror " id="semester" name="semester" required disabled value="{{ old('semester', $mahasiswa->semester) }}">
                
                @error('semester')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="ipk" class="form-label">IPK</label>
                <input type="text" class="form-control @error('ipk') is-invalid @enderror " id="ipk" name="ipk" required disabled value="{{ old('ipk', $mahasiswa->ipk) }}">
                
                @error('ipk')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="pilihan" class="form-label">Pilihan Beasiswa</label>
                <input type="text" class="form-control @error('pilihan') is-invalid @enderror " id="pilihan" name="pilihan" required disabled value="{{ old('pilihan', $mahasiswa->pilihan) }}">
                
                @error('pilihan')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="file" class="form-label">File</label>
                <input type="text" class="form-control @error('file') is-invalid @enderror " id="file" name="file" required disabled value="{{ old('file', $mahasiswa->file) }}">
                
                @error('file')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="status_ajuan" class="form-label">Status Ajuan</label>
                <select class="form-select" name="status_ajuan">
                    <option null selected></option>
                    <option value="DITERIMA">DITERIMA</option>
                    <option value="DITOLAK">DITOLAK</option>
                </select>
              </div>

            
            
            <button type="submit" class="btn btn-primary">Update Data</button>
          </form>
    </div>
@endsection