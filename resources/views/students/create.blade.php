@extends('layout.main')


@section('title, Tambah data')
    
@section('container')

<div class="container">
    <div class="container">
      <div class="row">
        <div class="col-6">
          <h1>Form Tambah Data Mahasiswa</h1>

          <form method="POST" action="/students" >
            {{-- untuk menangani white hat --}}
            @csrf
            <div class="form-group">
              <label for="nama">Nama</label>
              {{-- old untuk menangani masalah data yang terefresh --}}
              <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" value="{{ old('nama') }}" placeholder="Nama">
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
              <input type="text" class="form-control @error('nim') is-invalid @enderror" id="nim" name="nim" value="{{ old('nim') }}" placeholder="Nim">
              {{-- menambah pesan error --}}
              @error('nim')
              <div class="invalid-feedback">
                {{$message}}
               </div>
              @enderror
            </div>
            <div class="form-group">
              <label for="email">Email</label>
              <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}" placeholder="Email">
              @error('email')
              <div class="invalid-feedback">
                {{$message}}
               </div>
              @enderror
            </div>
            <div class="form-group">
              <label for="jurusan">Jurusan</label>
              <input type="text" class="form-control @error('jurusan') is-invalid @enderror" id="jurusan" name="jurusan" value="{{ old('jurusan')}}" placeholder="Jurusan">
              @error('email')
              <div class="invalid-feedback">
                {{$message}}
               </div>
              @enderror
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
        </div>
      </div>
    </div>
    
@endsection