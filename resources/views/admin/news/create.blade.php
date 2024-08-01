@extends('layouts.admin.app')

@section('content')
<div class="container">
    <center><h2 style="margin-top: 50px; margin-bottom: 20px;">Tambahkan Berita</h2></center>
    <form action="{{ route('admin.news.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="title">Judul</label>
            <input type="text" name="title" id="title" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="description">Deskripsi</label>
            <textarea name="description" id="description" class="form-control" rows="5" required></textarea>
        </div>
        <div class="form-group">
            <label for="image">Gambar</label>
            <input type="file" name="image" id="image" class="form-control" accept="image/*" required>
        </div>
        <div class="form-group">
            <label for="posted_at">Tanggal Posting</label>
            <input type="date" name="posted_at" id="posted_at" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="{{ route('admin.news.index') }}" class="btn btn-danger">Batal</a>
    </form>
</div>
@endsection