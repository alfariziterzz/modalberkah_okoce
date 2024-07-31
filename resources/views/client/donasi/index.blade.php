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
  </div>    
</div>
@endsection