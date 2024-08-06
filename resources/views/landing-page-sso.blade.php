@extends('layouts.client.app')

@section('content')
<div class="banner">
    <div class="container">
      <div class="row">
        <div class="col-md-6 content">
          <h1 class="font-weight-semibold" style="color: #404040;">MODAL BERKAH</h1>
          <h6 class="justify-text font-weight-normal text-muted pb-3">Melalui program <strong>Modal Berkah</strong> diharapkan bisa membantu perkembangan wirausaha dan UMKM sekitar Masjid karena bersifat tanpa riba dan tanpa embel-embel bagi hasil untuk ketiga belah pihak (OK OCE, Masjid dan UMKM) Merupakan program keumatan berbasis lembaga atau masjid yang bertujuan untuk menghimpun dan menyalurkan infaq dalam bentuk pinjaman dana kepada pelaku UMKM tanpa adanya riba</h6>
          <a href="{{ route('mesjid.register')}}" class="btn btn-custom">Daftarkan Masjid Anda Sekarang!</a>
        </div>
        <div class="col-md-6">
      <img src="{{ asset('assets/img/image-modalberkah.jpg') }}" alt="Banner Image" style="border-radius: 40%; margin-top: 20px;">
      </div>
      </div>
    </div>
  </div>
</div>
<div class="content-wrapper">
  <div class="container">
    <section class="features-overview" id="features-section">
      <div class="content-header text-center">
        <h2 style="color: #1075B0; font-weight: 600;">Program apa yang akan dilakukan?</h2>
        <h6 class="section-subtitle text-muted">Yuk Kita Kenal Lebih Dekat Dengan Modal Berkah</h6>
      </div>
      <div class="row">
        <div class="col-12 col-md-4 d-flex justify-content-center mb-3">
          <div class="features-width text-center">
            <img src="{{ asset('assets/landing-page-sso/images/Group12.svg') }}" alt="" class="img-icons">
            <h5 class="py-3">Membantu Pelaku UMKM Indonesia</h5>
            <p class="text-muted">Program Modal Berkah hadir untuk memberikan bantuan pinjaman modal kepada para pelaku UMKM yang mengalami kesulitan modal dalam menjalankan usaha</p>
          </div>
        </div>
        <div class="col-12 col-md-4 d-flex justify-content-center mb-3">
          <div class="features-width text-center">
            <img src="{{ asset('assets/landing-page-sso/images/Group7.svg') }}" alt="" class="img-icons">
            <h5 class="py-3">Mengentaskan RIBA</h5>
            <p class="text-muted">Modal Berkah memberikan pinjaman modal bagi para UMKM tanpa adanya riba. Hal ini tentu saja menjadi solusi dalam membantu mengentaskan riba di masyarakat yang selama ini tergiur pada dana pinjaman online agar beralih pada Modal Berkah tanpa bunga.</p>
          </div>
        </div>
        <div class="col-12 col-md-4 d-flex justify-content-center mb-3">
          <div class="features-width text-center">
            <img src="{{ asset('assets/landing-page-sso/images/Group5.svg') }}" alt="" class="img-icons">
            <h5 class="py-3">Menjalin Kerjasama dan Silaturahmi</h5>
            <p class="text-muted">Program ini merupakan ajakan untuk bersatu dan berbagi dengan sesama. Ketika masyarakat berpartisipasi dalam Modal Berkah, mereka merasakan kehangatan persaudaraan dan kekuatan solidaritas. Semangat gotong royong dalam menebarkan kebaikan semakin terasa.</p>
          </div>
        </div>
      </div>
    </section>
    <section class="case-studies mt-5" id="gallery-section">
    <div class="container">
          <div class="col-12 text-center pb-5">
            <h2 style="color: #1075B0; font-weight: 600;">Solusi Kemajuan UMKM tanpa Riba, Dimulai Dari Sini</h2>
        </div>
        <div class="row poster-row">
            <div class="col-md-3 col-sm-6 poster">
                <img src="{{ asset('assets/landing-page-sso/images/oke1.jpeg') }}" alt="Gambar 1" class="img-fluid">
            </div>
            <div class="col-md-3 col-sm-6 poster">
                <img src="{{ asset('assets/landing-page-sso/images/foto2.jpeg') }}" alt="Gambar 2" class="img-fluid">
            </div>
            <div class="col-md-3 col-sm-6 poster">
                <img src="{{ asset('assets/landing-page-sso/images/foto3.jpeg') }}" alt="Gambar 3" class="img-fluid">
            </div>
            <div class="col-md-3 col-sm-6 poster">
                <img src="{{ asset('assets/landing-page-sso/images/4.jpeg') }}" alt="Gambar 4" class="img-fluid">
            </div>
        </div>
    </div>
    </section>
    <section class="video-section mt-5">
            <div class="content-header text-center">
            <h2 style="color: #1075B0; font-weight: 600;">Video Penjelasan Program Modal Berkah</h2>
            <h6 class="section-subtitle text-muted">Solusi Modal Usaha Tanpa Riba Bagi UMKM</h6>
            </div>
            <div class="row justify-content-center">
                <div class="col-12 col-lg-8 mt-5">
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/Ty4PuC0Yl_4?si=xrfhM30XSCZVOYn6" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </section>
  </div>
</div>
<div class="modal fade" id="imagemodal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-custom">
    <div class="modal-content w-auto mx-auto">
      <div class="modal-body" style="padding-bottom:20px;padding-top:20px;">
        <img src="" class="imagepreview" style="width: 100%;">
      </div>
    </div>
  </div>
</div>
@endsection

<style>
  .card {
    border: 1px solid #e0e0e0;
    border-radius: 10px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    margin-bottom: 20px;
  }
  .card-body {
    padding: 20px;
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
  .card-body.text-center {
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
  }
  .card-title {
    margin-bottom: 15px;
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
  .justify-text {
  text-align: justify;
  line-height: 2rem;
}
</style>
<script>
    $(function() {
      $('.pop').on('click', function() {
        $('.imagepreview').attr('src', $(this).find('img').attr('src'));
        $('#imagemodal').modal('show');   
      });		
    });
</script>

<style>
.poster img {
  width: 100%; /* Ensure images take full width of the parent */
  height: 250px; /* Set a fixed height */
  object-fit: cover; /* Ensures the images cover the area without distortion */
  transition: transform 0.5s ease; /* Smooth transition for the zoom effect */
  gap: 15px;
  margin-bottom: 15px;
  flex: 1 1 calc(50% - 15px); 
  flex: 1 1 100%;
  border-radius:calc(.25rem - 1px);
}
.poster img:hover {
  transform: scale(1.1); /* Scale the image to 110% on hover */
}
</style>

<style>
    .banner {
      background-color: #f8f9fa;
      padding: 50px 0;
    }
    .banner img {
      width: 100%;
    }
    .banner .content {
      max-width: 600px;
      margin: auto;
    }
    .banner h1 {
      color: 404040; 
      font-size: 3rem;
      font-weight: bold;
    }
    .banner p {
      font-size: 1.2rem;
    }
    .banner .btn-custom {
      background-color: #1075B0;
      color: white;
      font-size: 1.2rem;
      padding: 10px 20px;
      border: none;
    }
    .banner .btn-custom:hover {
      background-color: #0a5b87;
    }
  </style>