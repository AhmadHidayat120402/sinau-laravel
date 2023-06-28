@extends('layouts.app')
@section('content')
<div class="container">
    <h4 class="mb-2">Semua Data Produk</h4>
    <a href="{{route('produk.create')}}" class="btn btn-primary px-4">Tambah Data Produk</a>
    <div class="table-responsive mt-5">
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Produk</th>
                    <th>Harga</th>
                    <th>Gambar</th>
                    <th style="width: 100px; !important">Deskripsi</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($products as $row)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $row->name }}</td>
                        <td>Rp {{ number_format($row->price) }}</td>
                        <td><img src="{{url('storage/'. $row->image)}}"
                            style="width: 50px; height: 50px; object-fit: cover;" alt="gambar"></td>
                        <td>{{ $row->description }}</td>
                        <td>
                            <div class="d-flex align-item-center gap-2">
                            <a href="#" class="btn btn-warning text-white">Edit</a>
                            <a href="#" class="btn btn-danger">Hapus</a>
                        </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
