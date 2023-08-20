@extends('layout/main')
@section('title', 'Student Detail')
@section('container')`
    <div class="container">
        <div class="row">
            <div class="col-6">
                <h1 class="mt-3">Detail Murid</h1>
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">{{ $student->nama }}</h5>
                        <h6 class="card-subtitle mb-2 text-muted">{{ $student->nrp }}</h6>
                        <p class="card-text">{{ $student->email }}</p>
                        <p class="card-text">{{ $student->jurusan }}</p>
                        <a href="{{ $student->id }}/edit" class="btn btn-primary">Edit</a>
                        <form action="{{ $student->id }}" method="post" class="d-inline">
                            @method('delete')
                            @csrf
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                        <button type="submit" class="btn btn-warning"><a href="/students" class="card-link">Back</a></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
