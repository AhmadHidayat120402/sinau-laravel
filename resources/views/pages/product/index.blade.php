@extends('layouts.app')
@section('content')
<div class="container">
    <h4 class="mb-2">Semua Data Produk</h4>
    <a href="#" class="btn btn-primary px-4">Tambah Data Produk</a>
    <div class="table-responsive mt-5">
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Produk</th>
                    <th>Harga</th>
                    <th>Gambar</th>
                    <th>Deskripsi</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($products as $row)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $row->name }}</td>
                        <td>{{ $row->price }}</td>
                        <td><img src="https://images.unsplash.com/photo-1687851898832-650714860119?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=870&q=80"
                            style="width: 50px; height: 50px; object-fit: cover;" alt="gambar"></td>
                        <td>{{ $row->description }}</td>
                        <td>
                            <a href="#" class="btn btn-warning text-white">Edit</a>
                            <a href="#" class="btn btn-danger">Hapus</a>
                        </td>

                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
