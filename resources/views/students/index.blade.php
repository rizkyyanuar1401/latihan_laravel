@extends('layout/main')
@section('title', 'Students')
@section('container')`
    <div class="container">
        <div class="row">
            <div class="col-10">
                <h1 class="mt-3">Daftar Murid</h1>
                <a href="/students/create" class="btn btn-primary my-3">Tambah Data Murid</a>
                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif
                <ul class="list-group">
                    @foreach ($students as $stud)
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            {{ $stud->nama }}
                            <a href="/students/{{ $stud->id }}" class="btn btn-info"> Detail</a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
@endsection
