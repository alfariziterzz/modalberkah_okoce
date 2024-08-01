{{-- resources/views/client/galleries/index.blade.php --}}

@extends('layouts.client.app')

@section('content')
<div class="container">
<center><h2 style="margin-top: 50px; margin-bottom: 50px; color: grey; font-weight: 600;">GALERI <span style="color: #E3242B; font-weight: 600;">MODAL </span> <span style="color: #1075B0; font-weight: 600;">BERKAH</span></h2></center>


    <div class="row">
        @foreach($galleries as $gallery)
            <div class="col-md-4 col-sm-6 mb-4">
                <div class="card">
                    <div class="card-img-container">
                        <img src="{{ Storage::url($gallery->image) }}" class="card-img-top img-cropped" alt="{{ $gallery->title }}">
                        <div class="overlay">
                            <div class="overlay-text">{{ $gallery->title }}</div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    <div class="d-flex justify-content-center mt-4">
    {{ $galleries->links('vendor.pagination.simple-custom') }}
    </div>
</div>
@endsection
<style>
    /* Tambahkan ke file CSS Anda atau di dalam <style> tag */

.card-img-container {
    position: relative;
    width: 100%;
    padding-top: 75%; /* 4:3 aspect ratio */
    overflow: hidden;
    border-radius: 5px; 
}

.img-cropped {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    object-fit: cover; /* Crop and maintain aspect ratio */
    transition: filter 0.3s ease; /* Smooth transition for blur effect */
}

.overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.6); /* Semi-transparent black background */
    color: white;
    display: flex;
    justify-content: center;
    align-items: center;
    opacity: 0;
    transition: opacity 0.3s ease; /* Smooth transition for overlay */
}

.overlay-text {
    font-size: 1.5rem;
    text-align: center;
}

.card-img-container:hover .img-cropped {
    filter: blur(5px); /* Apply blur effect on hover */
}

.card-img-container:hover .overlay {
    opacity: 1; /* Show overlay on hover */
}
</style>