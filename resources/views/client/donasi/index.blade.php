@extends('layouts.client.app')

@section('content')
<div class="content-wrapper">
  <div class="container">
    <!-- Features Overview Section -->
    <div id="features-section" class="features-overview">
      <div class="content-header text-center">
        <h2>Tunaikan dan Salurkan</h2>
        <h2 style="color: #1075B0;">ZAKAT, INFAQ, SEDEKAH, WAKAF dan DANA SOSIAL</h2>
        <h2 style="color: #E3242B"><i>Melalui</i></h2>
        <h2 style="color: #E3242B;" >OK <span style="color: #1075B0;">OCE KEMANUSIAAN</span></h2>
      </div>
    </div>

    <!-- Zakat Section -->
    <div id="zakat" class="mb-10">
      <div class="container">
        <center>
          <img src="{{ asset('assets/img/zakat.jpeg') }}" width="50%" class="img-fluid">
        </center>
        <br>
      </div>
    </div>
    <br>
    <center><h2 style="color: #1075B0; font-weight: 600;">DONASI LAIN</h2></center>
    <br>
    <!-- Cards Section -->
    <div id="cards-section" class="mb-10">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="card">
              <img src="{{ asset('assets/img/donasi-okoceindonesia.png') }}" class="card-img" alt="Card 1">
              <div class="card-body">
              <center><h2 style="color: #1075B0; font-weight: 600;">OK OCE INDONESIA</h2></center>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="card">
              <img src="{{ asset('assets/img/donasi-okocewakaf.png') }}" class="card-img" alt="Card 2">
              <div class="card-body">
              <center><h2 style="color: #1075B0; font-weight: 600;">OK OCE WAKAF</h2></center>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>    
</div>
@endsection
<style>
  /* Styles for the card section */
.card {
  border-radius: 15px; /* Rounded corners */
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); /* Shadow effect */
  overflow: hidden; /* Ensure the shadow is visible */
  margin-bottom: 20px; /* Space below each card */
  gap: 15px;
}

.card-img {
  width: 100%; /* Full width image */
  height: auto; /* Maintain aspect ratio */
  border-bottom: 1px solid #ddd; /* Border between image and text */
}

.card-body {
  padding: 15px; /* Space inside the card */
}

.card-text {
  margin: 0; /* Remove default margin */
}

/* Responsive design for cards */
@media (max-width: 767px) {
  .card {
    margin-bottom: 15px; /* Reduce space between cards on mobile */
  }
}
</style>