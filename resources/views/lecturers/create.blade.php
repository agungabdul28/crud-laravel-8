@extends('layout.main')


@section('title, Tambah data Dosen')
    
@section('container')

<div class="container">
    <div class="container">
      <div class="row">
        <div class="col-6">
          <h1>Form Tambah Data Dosen</h1>

          <form method="POST" action="/lecturers" >
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
              <label for="nidn">Nidn</label>
              <input type="text" class="form-control @error('nidn') is-invalid @enderror" id="nidn" name="nidn" value="{{ old('nidn') }}" placeholder="nidn">
              {{-- menambah pesan error --}}
              @error('nidn')
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
                <label for="prodi">prodi</label>
                <input type="text" class="form-control @error('prodi') is-invalid @enderror" id="prodi" name="prodi" value="{{ old('prodi')}}" placeholder="Prodi">
                @error('prodi')
                <div class="invalid-feedback">
                  {{$message}}
                 </div>
                @enderror
              </div>
            <div class="form-group">
              <label for="jabatan">jabatan</label>
              <input type="text" class="form-control @error('jabatan') is-invalid @enderror" id="jabatan" name="jabatan" value="{{ old('jabatan')}}" placeholder="jabatan">
              @error('jabatan')
              <div class="invalid-feedback">
                {{$message}}
               </div>
              @enderror
            </div>
            <div class="form-group">
                <label for="slug">slug</label>
                <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug" name="slug" value="{{ old('slug')}}" placeholder="slug">
                @error('slug')
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