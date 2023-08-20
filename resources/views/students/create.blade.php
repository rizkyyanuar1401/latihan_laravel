@extends('layout/main')
@section('title', 'Tambah Murid')
@section('container')`
    <div class="container">
        <div class="row">
            <div class="col-8">
                <h1 class="mt-3">Tambah Murid</h1>
                <form method="post" action="/students">
                    @CSRF
                    <div class="form-group mb-3">
                        <label for="nama">Nama</label>
                        <input type="text"
                            class="form-control @error('nama') is-invalid
                            @enderror"
                            id="nama" placeholder="Masukkan Nama" name="nama" value="{{ old('nama') }}">
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
                            id="nrp" placeholder="Masukkan NRP" name="nrp" value="{{ old('nrp') }}">
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
                            id="email" placeholder="Masukkan Email" name="email" value="{{ old('email') }}">
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
                            id="jurusan" placeholder="Masukkan Jurusan" name="jurusan" value="{{ old('jurusan') }}">
                        @error('jurusan')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <button type="submit" class="btn btn-primary">Masukkan Data</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
