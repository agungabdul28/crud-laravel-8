
{{-- memanggil page paa folder layout --}}
@extends('layout.main')

{{-- mengisi title emnggunakan page main --}}
@section('title','ABOUT AGUNG')

    

{{-- mengisi conatiner mnggunakan page main --}}
@section('container')
<div class="container">
  <div class="row">
      <div class="col-10">
          <h1 class="mt-2">Hello, {{$nama}} </h1>
      </div>
  </div>
</div>
@endsection
