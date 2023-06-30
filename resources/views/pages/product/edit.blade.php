@extends('layouts.app')
@section('content')
    <div class="container">
        <h4 class="mb-2">Edit Data {{$product->title}}</h4>
        <form action="{{ route('produk.update', $product->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-2">
                <label for="produk">Nama Produk</label>
                <input type="text" class="form-control" id="produk" name="name" required value="{{$product->name}}">
            </div>
            <div class="mb-2">
                <label for="price">Harga Produk</label>
                <input type="number" class="form-control" id="price" name="price" required value="{{$product->price}}">
            </div>
            <div class="mb-2">
                <label for="image">Gambar</label>
                <input type="file" class="form-control" id="image" name="image" accept="image/*"  value="{{$product->image}}">
                <span class="text-secondary">Jika tidak ingin mengganti gambar, jangan diisi</span>
            </div>
            <div class="mb-2">
                <label for="description">Deskripsi Produk</label>
                <textarea name="description" id="description" cols="30" rows="3" class="form-control" required>{{$product->description}}</textarea>
            </div>
            <div class="d-flex align-item-center gap-2">
                <button class="btn btn-warning px-3">Ubah Data</button>
                <a href="{{ route('produk.index') }}" class="btn btn-light px-3">Kembali</a>
            </div>
        </form>
    </div>
@endsection
