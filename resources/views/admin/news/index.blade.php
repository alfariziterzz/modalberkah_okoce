@extends('layouts.admin.app')

@section('content')
<div class="container">
    <center><h2 style="margin-top: 50px; margin-bottom: 20px;">Kelola Berita</h2></center>
    <a href="{{ route('admin.news.create') }}" class="btn btn-primary">Tambah Berita</a>

    @if(session('success'))
        <div class="alert alert-success mt-2">{{ session('success') }}</div>
    @endif

    <table class="table mt-4">
        <thead>
            <tr>
                <th>Judul</th>
                <th>Deskripsi</th>
                <th>Gambar</th>
                <th>Tanggal Posting</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($news as $item)
                <tr>
                    <td>{{ $item->title }}</td>
                    <td>{{ \Illuminate\Support\Str::limit($item->description, 100) }}</td>
                    <td><img src="{{ Storage::url($item->image) }}" alt="{{ $item->title }}" style="width: 100px;"></td>
                    <td>{{ $item->posted_at }}</td>
                    <td>
                        <a href="{{ route('admin.news.edit', $item) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('admin.news.destroy', $item) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div class="d-flex justify-content-center mt-4">
    {{ $news->links('vendor.pagination.simple-custom') }}
    </div>
</div>
@endsection