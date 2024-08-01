@extends('layouts.admin.app')

@section('content')
<div class="container">
<center><h2 style="margin-top: 50px; margin-bottom: 20px;">Kelola Galeri</h2></center>
    <a href="{{ route('admin.galleries.create') }}" class="btn btn-primary">Tambahkan Galeri</a>

    @if(session('success'))
        <div class="alert alert-success mt-2">{{ session('success') }}</div>
    @endif

    <table class="table mt-4">
        <thead>
            <tr>
                <th>Title</th>
                <th>Image</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($galleries as $gallery)
                <tr>
                    <td>{{ $gallery->title }}</td>
                    <td><img src="{{ Storage::url($gallery->image) }}" alt="{{ $gallery->title }}" style="width: 100px;"></td>
                    <td>
                        <a href="{{ route('admin.galleries.edit', $gallery) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('admin.galleries.destroy', $gallery) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection