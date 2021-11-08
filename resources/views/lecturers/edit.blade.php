@extends('layout.main')


@section('title, Ubah data Dosen')
    
@section('container')

<div class="container">
    <div class="container">
      <div class="row">
        <div class="col-6">
          <h1>Form Ubah Data Mahasiswa</h1>

          <form method="POST" action="/lecturer/{{ $lecturer->id }}" >
            {{-- untuk menangani metod edit dengan patch --}}
            @method('patch')
            {{-- untuk menangani white hat --}}
            @csrf
            <div class="form-group">
              <label for="nama">Nama</label>
              {{-- old untuk menangani masalah data yang terefresh --}}
              {{-- $student->nama contoh untuk mengambil untk menmpilkan data --}}
              <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" value="{{ $lecturer->nama }}" placeholder="Nama">
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
              <label for="nidn">Nidn</label>
              <input type="text" class="form-control @error('nidn') is-invalid @enderror" id="nidn" name="nidn" value="{{ $lecturer->nidn }}" placeholder="nidn">
              {{-- menambah pesan error --}}
              @error('nidn')
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
              <label for="jabatan">Jurusan</label>
              <input type="text" class="form-control @error('jabatan') is-invalid @enderror" id="jabatan" name="jabatan" value="{{ $lecturer->jabatan}}" placeholder="Jabatan">
              @error('jabatan')
              <div class="invalid-feedback">
                {{$message}}
               </div>
              @enderror
            </div>
            <div class="form-group">
              <label for="prodi">Prodi</label>
              <input type="text" class="form-control @error('prodi') is-invalid @enderror" id="prodi" name="prodi" value="{{ $lecturer->prodi}}" placeholder="Jabatan">
              @error('prodi')
              <div class="invalid-feedback">
                {{$message}}
               </div>
              @enderror
            </div>
            <div class="form-group">
              <label for="slug">Jurusan</label>
              <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug" name="slug" value="{{ $lecturer->slug}}" placeholder="Slug">
              @error('slug')
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