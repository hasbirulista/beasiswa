@extends('layouts.main')
<style>
  body{
      background-image: url({{ asset('assets/img/bg3.jpg') }});
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
<script>
  function myFunction(){
    var ipk = document.getElementById('ipk').value;
    var nilai = parseFloat(ipk);
    if (ipk < 3) {
      submit.disabled = true;
      pilihan.disabled = true;
      file.disabled = true;
    } else {
      submit.disabled = false;
      pilihan.disabled = false;
      file.disabled = false;
    }
  }
</script>
<div class="row justify-content-center">
  <div class="col-md-5">
    <main class="form-registration w-100 m-auto">
      <h1 class="h3 mb-3 fw-normal text-center">Formulir Pendaftaran</h1>
      
      <form action="/daftar" method="post">
        @csrf
        <div class="form-floating">
          <input type="text" name="name" class="form-control rounded-top @error('name') is-invalid @enderror" id="name" placeholder="Name" required value="{{ old('name') }}">
          <label for="name">Nama</label>
          @error('name')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
          @enderror
        </div>
        
        <div class="form-floating">
          <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="name@example.com" required value="{{ old('email') }}">
          <label for="email">Email</label>
          @error('email')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
          @enderror
        </div>

        <div class="form-floating">
          <input type="tel" name="no_hp" class="form-control @error('no_hp') is-invalid @enderror" id="no_hp" placeholder="No Hp" required value="{{ old('no_hp') }}">
          <label for="no-hp">No Hp</label>
          @error('no_hp')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
          @enderror
        </div>
        
        
        <div class="form-floating">
            <select name="semester" class="form-select @error('semester') is-invalid @enderror rounded-bottom" id="semester">
                <option selected></option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
            </select>
            <label for="semester">Semester</label>
            @error('semester')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
            @enderror
          </div>

        <div class="form-floating">
          <input onchange="myFunction()" type="text" name="ipk" class="form-control rounded-bottom @error('ipk') is-invalid @enderror" id="ipk" placeholder="IPK" required value="{{ old('ipk') }}">
          <label for="ipk">IPK Terakhir</label>
          @error('ipk')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
          @enderror
        </div>

        <div class="form-floating">
            <select name="pilihan" class="form-select @error('pilihan') is-invalid @enderror rounded-bottom" id="pilihan">
                <option selected></option>
                <option value="Akademik">Akademik</option>
                <option value="Non Akademik">Non Akademik</option>
            </select>
            <label for="pilihan">Pilihan Beasiswa</label>
            @error('pilihan')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
            @enderror
          </div>
          
          <div>
            <label class="form-label ">Masukan Document Pendukung</label>
            <input class="form-control form-control-lg @error('pilihan') is-invalid @enderror" id="file" type="file" name="file" id="file">
          </div>
        <button class="btn btn-primary w-100 py-2 mt-3" type="submit" id="submit">Daftar</button>
        
      </form>
    </main>
  </div>
</div>

@endsection
