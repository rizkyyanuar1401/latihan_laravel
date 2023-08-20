@extends('layout/main')
@section('title', 'Edit Data Murid')
@section('container')`
    <div class="container">
        <div class="row">
            <div class="col-8">
                <h1 class="mt-3">Edit Data Murid</h1>
                <form method="post" action="/students/{{ $student->id }}">
                    @method('patch')
                    @CSRF
                    <div class="form-group mb-3">
                        <label for="nama">Nama</label>
                        <input type="text"
                            class="form-control @error('nama') is-invalid
                            @enderror"
                            id="nama" placeholder="Masukkan Nama" name="nama" value="{{ $student->nama }}">
                        @error('nama')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <label for="nrp">NRP</label>
                        <input type="text"
                            class="form-control @error('nrp') is-invalid
                            @enderror"
                            id="nrp" placeholder="Masukkan NRP" name="nrp" value="{{ $student->nrp }}">
                        @error('nrp')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <label for="email">Email</label>
                        <input type="text"
                            class="form-control @error('email') is-invalid
                            @enderror"
                            id="email" placeholder="Masukkan Email" name="email" value="{{ $student->email }}">
                        @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <label for="jurusan">Jurusan</label>
                        <input type="text"
                            class="form-control @error('jurusan') is-invalid
                            @enderror"
                            id="jurusan" placeholder="Masukkan Jurusan" name="jurusan" value="{{ $student->jurusan }}">
                        @error('jurusan')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <button type="submit" class="btn btn-primary">Edit Data</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
