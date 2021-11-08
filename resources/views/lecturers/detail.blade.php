@extends('layout.main')


@section('title, lectures')
    
@section('container')

<div class="container">
    <div class="row">
        <div class="col-5">
            <div class="mt-3">Detail Dosen</div>

            <div class="card mt-3" style="width: 18rem;">
                <div class="card-body">
                  <h5 class="card-title">{{ $lecturer->nama }}</h5>
                  <h6 class="card-subtitle mb-2 text-muted">{{ $lecturer->nidn }}</h6>
                  <p class="card-text">{{ $lecturer->email }}</p>
                  <p class="card-text">{{ $lecturer->jabatan }}</p>

                  {{-- edit data --}}
                  <a href="/lecturers/{{$lecturer->id}}/edit" class="btn btn-primary" >Edit </a>
                  <form action="{{$lecturer->id}}" method="POST" class="d-inline">
                    @method('delete')
                    @csrf
                    <button class="btn btn-danger" >Delete</button>
                  </form>
                  
                  <a href="/lecturers" style="text-decoration: none" >Kembali</a>
                  
                </div>
              </div>
        </div>
    </div>
</div>
    
@endsection