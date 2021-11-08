@extends('layout.main')


@section('title, students')
    
@section('container')

<div class="container">
    <div class="row">
        <div class="col-5">
            <div class="mt-3">Daftar Mahasiswa</div>
            <a href="students/create" class="btn btn-primary my-3">Tambah Data</a>
            @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif
                
            <ul class="list-group mt-3">
                @foreach ($students as $student)
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    {{$student->nama}}
                    <a href="/students/{{ $student->id}}" class="badge badge-primary">Detail</a>
                  </li>
                @endforeach
                
              </ul>
        </div>
    </div>
</div>
    
@endsection