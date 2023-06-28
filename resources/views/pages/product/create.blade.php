@extends('layouts.app')
@section('content')
    <div class="container">
        <h4 class="mb-2">Tambah Data Produk</h4>
        <form action="{{ route('produk.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="mb-2">
                <label for="produk">Nama Produk</label>
                <input type="text" class="form-control" id="produk" name="name" required>
            </div>
            <div class="mb-2">
                <label for="price">Harga Produk</label>
                <input type="number" class="form-control" id="price" name="price" required>
            </div>
            <div class="mb-2">
                <label for="image">Gambar</label>
                <input type="file" class="form-control" id="image" name="image" accept="image/*" required>
            </div>
            <div class="mb-2">
                <label for="description">Deskripsi Produk</label>
                <textarea name="description" id="description" cols="30" rows="3" class="form-control" required></textarea>
            </div>
            <div class="d-flex align-item-center gap-2">
                <button class="btn btn-primary px-3">Simpan Data</button>
                <a href="{{ route('produk.index') }}" class="btn btn-light px-3">Kembali</a>
            </div>
        </form>
    </div>
@endsection
