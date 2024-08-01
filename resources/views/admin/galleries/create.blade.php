@extends('layouts.admin.app')

@section('content')
<style>
    .btn-save {
        background-color: #1075B0;
        border-color: #1075B0;
        color: white; /* Warna teks tombol */
    }
</style>

<div class="container">
    <center><h2 style="margin-top: 50px; margin-bottom: 20px;">Tambah Galeri</h2></center>
    <form action="{{ route('admin.galleries.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" name="title" id="title" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="image">Image</label>
            <input type="file" name="image" id="image" class="form-control" accept="image/*" required>
        </div>
        <center>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Save</button>
                <a href="{{ route('admin.galleries.index') }}" class="btn btn-danger">Cancel</a>
            </div>
        </center>
    </form>
</div>
@endsection