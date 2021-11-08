@extends('layout.main')


@section('title, lecture')
    
@section('container')

<div class="container">
    <div class="row">
        <div class="col-5">
            <div class="mt-3">Detail Mahasiswa</div>

            <div class="card mt-3" style="width: 18rem;">
                <div class="card-body">
                  <h5 class="card-title">{{ $student->nama }}</h5>
                  <h6 class="card-subtitle mb-2 text-muted">{{ $student->nim }}</h6>
                  <p class="card-text">{{ $student->email }}</p>
                  <p class="card-text">{{ $student->jurusan }}</p>

                  {{-- edit data --}}
                  <a href="/students/{{$student->id}}/edit" class="btn btn-primary" >Edit </a>
                  <form action="{{$student->id}}" method="POST" class="d-inline">
                    @method('delete')
                    @csrf
                    <button class="btn btn-danger" >Delete</button>
                  </form>
                  
                  <a href="/students/" style="text-decoration: none" >Kembali</a>

                </div>
              </div>
        </div>
    </div>
</div>
    
@endsection