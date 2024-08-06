@extends('layouts.admin.app')

@section('content')
<div class="container">
    <center><h2 style="margin-top: 50px; margin-bottom: 20px;">Edit Berita</h2></center>
    <form action="{{ route('admin.news.update', $news) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="title">Judul</label>
            <input type="text" name="title" id="title" class="form-control" value="{{ $news->title }}" required>
        </div>
        <div class="form-group">
            <label for="description">Deskripsi</label>
            <textarea name="description" id="description" class="form-control" rows="5" required>{{ $news->description }}</textarea>
        </div>
        <div class="form-group">
            <label for="image">Gambar</label>
            <input type="file" name="image" id="image" class="form-control" accept="image/*">
            @if($news->image)
                <img src="{{ Storage::url($news->image) }}" alt="{{ $news->title }}" style="width: 100px; margin-top: 10px;">
            @endif
        </div>
        <div class="form-group">
            <label for="posted_at">Tanggal Posting</label>
            <input type="date" name="posted_at" id="posted_at" class="form-control" value="{{ $news->posted_at }}" required>
        </div>
        <center>
        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="{{ route('admin.news.index') }}" class="btn btn-danger">Batal</a>
</center>
    </form>
</div>
@endsection