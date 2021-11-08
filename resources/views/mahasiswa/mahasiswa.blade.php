@extends('layout.main')


@section('title, mahasiswa ahasiswa')
    
@section('container')

<div class="container">
    <div class="row">
        <div class="col-10">
            <div class="mt-3">Daftar Mahasiswa</div>

            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nama</th>
                        <th scope="col">NRP</th>
                        <th scope="col">Email</th>
                        <th scope="col">Jurusan</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    {{-- looping table untuk menampilkan data db --}}
                    @foreach ($mahasiswa as $mhs)
                        <tr>
                            {{-- loop variabel agar menambahkan data --}}
                            <th scope="row">{{ $loop->iteration}}</th>
                            <td>{{ $mhs->nama }}</td>
                            <td>{{ $mhs->nim }}</td>
                            <td>{{ $mhs->email }}</td>
                            <td>{{ $mhs->jurusan }}</td>
                            <td>
                                <a href="" class="badge badge-success">Edit</a>
                                <a href="" class="badge badge-danger">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                    
                </tbody>

            </table>
        </div>
    </div>
</div>
    
@endsection