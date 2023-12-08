@extends('layouts.app')
@section('article2', 'active')
@section('title','Artikel')
@section('content')

<div class="container">
    @if(Session::has('message'))
    <div class="aler alert-success">
        {{ Session::get('message') }}
    </div>
    @endif

    <form action="{{ route('artikel.store') }}" method="post" enctype="multipart/form-data">

        @csrf
        <div class="mb-3 row">
            <label for="judul" class="col-md-3 col-form-label text-md-end">
                Masukan Judul</label>
            <div class="col-md-6">
                <textarea class="form-control" id="judul" name="judul" placeholder=""></textarea>
                @error('judul')
                <div class="text-danger">{{ $message }}</div>
                @enderror

            </div>
        </div>
        <div class="mb-3 row">
            <label for="isi" class="col-md-3 col-form-label text-md-end">
                Masukan Artikel</label>
            <div class="col-md-6">
                <textarea class="form-control txtarea" id="isi" name="isi" placeholder=""></textarea>

                @error('isi')
                <div class="text-danger">{{ $message }}</div>
                @enderror

        <div class="mb-3 row">
             <label for="created_by" class="col-md-3 col-form-label text-md-end">
                Created By</label>
             <div class="col-md-6">
                 <textarea class="form-control " id="created_by" name="created_by" placeholder=""></textarea>
        
                @error('created_by')
                 <div class="text-danger">{{ $message }}</div>
                @enderror


            </div>
        </div>
        <div class="mb-3 row">
            <label for="gambar" class="col-md-3 col-form-label text-md-end">
                Gambar</label>
            <div class="col-md-6">

                <input type="file" id="gambar" name="gambar" accept="image/*" class="form-control @error('gambar') is-invalid @enderror">

            </div>
        </div>
        <div class="mb-3 row mb-0">
            <div class="col-md-6 offset-md-3">
                <button type="submit" class="btn btn-primary px-4">Create</button>

            </div>
        </div>
    </form>
</div>
@endsection