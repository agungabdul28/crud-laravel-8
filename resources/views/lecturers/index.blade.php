@extends('layout.main')


@section('title, lecturers')
    
@section('container')

<div class="container">
    <div class="row">
        <div class="col-5">
            <div class="mt-3">Daftar Dosen</div>
            <a href="lecturers/create" class="btn btn-primary my-3">Tambah Data Dosen</a>
            @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif
                
            <ul class="list-group mt-3">
                @foreach ( $lecturers as $lecturer)
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    {{$lecturer->nama}}
                    <a href="/lecturers/{{ $lecturer->id}}" class="badge badge-primary">Detail</a>
                  </li>
                @endforeach
                
              </ul>
        </div>
    </div>
</div>
    
@endsection