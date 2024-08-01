@extends('layouts.client.app')

@section('content')
<div class="content-wrapper">
  <div class="container">
    <section class="case-studies mt-5" id="news-section">
        <div class="col-12 text-center pb-5">
            <h2 style="color: #1075B0; font-weight: 600;">Berita Terkini</h2>
        </div>
        <div class="row">
            @foreach($news as $item)
                <div class="col-md-4">
                    <div class="card">
                        <img src="{{ Storage::url($item->image) }}" class="card-img-top" alt="{{ $item->title }}">
                        <div class="card-body d-flex flex-column text-center">
                            <h5 class="card-title">{{ $item->title }}</h5>
                            <p class="card-text">{{ \Illuminate\Support\Str::limit($item->description, 150) }}</p>
                            <div class="mt-auto">
                                <a href="{{ route('client.news.show', $item->id) }}" class="btn btn-primary btn-block">Baca Selengkapnya</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
</div>
<div class="d-flex justify-content-center mt-4">
    {{ $news->links('vendor.pagination.simple-custom') }}
    </div>
@endsection

<style>
  .card {
    border: 1px solid #e0e0e0;
    border-radius: 10px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    margin-bottom: 20px;
    height: 100%; /* Ensure card takes full height available */
    display: flex;
    flex-direction: column;
  }

  .card-body {
    padding: 20px;
    flex-grow: 1; /* Allow the body to grow and fill space */
    display: flex;
    flex-direction: column;
  }

  .card-title {
    margin-bottom: 15px;
  }

  .card-text {
    flex-grow: 1; /* This makes sure the text section grows to fill space */
  }

  .card-body.text-center {
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    align-items: center;
  }

  .btn-primary {
    background-color: #1075B0;
    border: none;
  }

  .btn-primary.btn-block {
    background-color: #1075B0;
    border: none;
    width: 100%;
  }

  .card-img-top {
    height: 200px;
    object-fit: cover;
  }

  .features-overview .col-12.col-md-4 {
    margin-bottom: 20px;
  }

  @media (max-width: 767.98px) {
    .features-overview .col-12.col-md-4 {
      margin-bottom: 30px;
    }
  }

  .font-weight-semibold span {
    color: blue;
  }

  .font-weight-semibold span:last-child {
    color: red;
  }

  .case-studies.mt-5 {
    margin-top: 50px !important;
  }

  hr.my-5 {
    border: 0;
    border-top: 1px solid #e0e0e0;
    margin-top: 50px;
    margin-bottom: 50px;
  }


  .poster img {
    width: 100%;
    height: 250px;
    object-fit: cover;
    transition: transform 0.5s ease;
    gap: 15px;
    margin-bottom: 15px;
    flex: 1 1 calc(50% - 15px);
    flex: 1 1 100%;
  }

  .poster img:hover {
    transform: scale(1.1);
  }
</style>