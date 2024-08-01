@extends('layouts.client.app')

@section('content')
<div class="container">
    <div class="mb-4">
    </div>
    <h1 class="mt-4">{{ $newsItem->title }}</h1>
    <p>
        <small>
            <i class="fas fa-calendar-alt"></i> {{ $newsItem->posted_at->format('d M Y') }}
        </small>
    </p>
    <center><img src="{{ Storage::url($newsItem->image) }}" alt="{{ $newsItem->title }}" class="img-fluid"></center>
    <div class="mt-4">
        {!! nl2br(e($newsItem->description)) !!}
    </div>
</div>
<center><a href="{{ url()->previous() }}" class="btn btn-primary" style="margin-top: 20px;">
            <i class="fas fa-arrow-left"></i> Kembali
        </a></center>
@endsection
