@extends('layouts.app')
@section('title', 'Artikel')
@section('artikel', 'active');

@section('content')
<!-- Page content-->
<div class="container mt-5">
    <div class="row">
        <div class="col-lg-8">
            <!-- Post content-->
            <article>
                <!-- Post header-->
                <header class="mb-4">
                    <!-- Post title-->
                    <h1 class="fw-bolder mb-1">{{ $result->judul }}</h1>
                    <!-- Post meta content-->
                    <div class="text-muted fst-italic mb-2">Posted on January 1, 2022 by Start Bootstrap</div>
                    <!-- Post categories-->
                    <a class="btn btn-primary" href="{{ route('artikel.edit', ['id' => $result->id]) }}">Edit</a>
                    <form action="{{ route('artikel.delete', ['id' => $result->id]) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Hapus</button>
                    </form>
                    <a class="badge bg-secondary text-decoration-none link-light" href="#!">Freebies</a>
                </header>
                <!-- Preview image figure-->
                <figure class="mb-4"><img class="img-fluid rounded" src="{{ url('/storage/uploads/'.$result->gambar) }}" alt="..." /></figure>
                <!-- Post content-->
                <section class="mb-5">
                    <p class="fs-5 mb-4 isi">{{ $result->isi }}</p>
        </div>

        </section>
        </article>
    </div>
</div>



@endsection