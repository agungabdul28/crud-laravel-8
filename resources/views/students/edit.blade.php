@extends('layout.main')


@section('title, Ubah data')
    
@section('container')

<div class="container">
    <div class="container">
      <div class="row">
        <div class="col-6">
          <h1>Form Ubah Data Mahasiswa</h1>

          <form method="POST" action="/students/{{ $student->id }}" >
            {{-- untuk menangani metod edit dengan patch --}}
            @method('patch')
            {{-- untuk menangani white hat --}}
            @csrf
            <div class="form-group">
              <label for="nama">Nama</label>
              {{-- old untuk menangani masalah data yang terefresh --}}
              {{-- $student->nama contoh untuk mengambil untk menmpilkan data --}}
              <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" value="{{ $student->nama }}" placeholder="Nama">
              @error('nama')
              <div class="invalid-feedback">
                {{$message}}
               </div>
              @enderror
              
              <div class="valid-feedback">
                Looks good!
              </div>
            </div>
            <div class="form-group">
              <label for="nim">Nim</label>
              <input type="text" class="form-control @error('nim') is-invalid @enderror" id="nim" name="nim" value="{{ $student->nim }}" placeholder="Nim">
              {{-- menambah pesan error --}}
              @error('nim')
              <div class="invalid-feedback">
                {{$message}}
               </div>
              @enderror
            </div>
            <div class="form-group">
              <label for="email">Email</label>
              <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ $student->email }}" placeholder="Email">
              @error('email')
              <div class="invalid-feedback">
                {{$message}}
               </div>
              @enderror
            </div>
            <div class="form-group">
              <label for="jurusan">Jurusan</label>
              <input type="text" class="form-control @error('jurusan') is-invalid @enderror" id="jurusan" name="jurusan" value="{{ $student->jurusan}}" placeholder="Jurusan">
              @error('email')
              <div class="invalid-feedback">
                {{$message}}
               </div>
              @enderror
            </div>
            <button type="submit" class="btn btn-primary">Ubah</button>
          </form>
        </div>
      </div>
    </div>
    
@endsection