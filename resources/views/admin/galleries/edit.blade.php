@extends('layouts.admin.app')

@section('content')
<div class="container">
<center><h2 style="margin-top: 50px; margin-bottom: 20px;">Edit Galeri</h2></center>
    <form action="{{ route('admin.galleries.update', $gallery) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" name="title" id="title" class="form-control" value="{{ $gallery->title }}" required>
        </div>
        <div class="form-group">
            <label for="image">Image (Optional)</label>
            <input type="file" name="image" id="image" class="form-control" accept="image/*">
        </div>
        @if($gallery->image)
            <div class="form-group">
                <img src="{{ Storage::url($gallery->image) }}" alt="{{ $gallery->title }}" style="width: 100px;">
            </div>
        @endif
        <center>
        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ route('admin.galleries.index') }}" class="btn btn-danger">Cancel</a>
</center>
    </form>
</div>
@endsection