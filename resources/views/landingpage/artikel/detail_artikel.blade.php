<x-landingpage.app>

    <!-- Hero Start -->
    <div class="container-fluid pt-5 bg-primary hero-header">
        <div class="container pt-5">
            <div class="row g-5 pt-5">
                <div class="col-lg-6 align-self-center text-center text-lg-start mb-lg-5">
                    <h1 class="display-4 text-white mb-4 animated slideInRight">Artikel</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center justify-content-lg-start mb-0">
                            <li class="breadcrumb-item"><a class="text-white" href="/">Home</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">Artikel</li>
                        </ol>
                    </nav>
                </div>
                <div class="col-lg-6 align-self-end text-center text-lg-end">
                    <img class="img-fluid" src="{{ asset('storage/' . $hero->gambar) }}" alt="" width="auto" />
                </div>
            </div>
        </div>
    </div>
    <!-- Hero End -->

    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="mx-auto text-center wow fadeIn" data-wow-delay="0.1s" style="max-width: 500px;">
                <div class="btn btn-sm border rounded-pill text-danger px-3 mb-3">Artikel</div>
                <h1 class="mb-4">Artikel</h1>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-9">
                    <img class="img-fluid" src="{{ asset('storage/' . $artikel->gambar) }}" alt="" style="max-height: auto;">
                </div>
                <div class="col-lg-9">
                    <p class="mb-4">{!! $artikel->desc !!}</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-white-50 footer pt-5" id="footer">
        <div class="container py-5">
          <div class="row g-5">
            <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.1s">
              <a href="/" class="d-inline-block mb-3">
                <h1 class="text-white">Kurirmoo<span class="text-primary">.</span>id</h1>
              </a>
              <p class="mb-0">YOUR DIGITAL LOGISTICS SOLUTION</p>
            </div>
            <div class="col-md-4 col-lg-3 wow fadeIn float-end" data-wow-delay="0.3s">
              <h5 class="text-white mb-4">Informasi</h5>
              <p><i class="fa fa-map-marker-alt me-3"></i>{{ $kontak->alamat }}</p>
              <p><i class="fa fa-phone-alt me-3"></i>{{ $kontak->no_hp }}</p>
              <p><i class="fa fa-envelope me-3"></i>{{ $kontak->email }}</p>
              <div class="d-flex pt-2">
                <a class="btn btn-outline-light btn-social" href="{{ $kontak->youtube }}" target="_blank"><i class="fab fa-youtube"></i></a>
                <a class="btn btn-outline-light btn-social" href="{{ $kontak->instagram }}"><i class="fab fa-instagram"></i></a>
                <a class="btn btn-outline-light btn-social " href="https://wa.me/{{ $kontak->no_hp }}" target="_blank"> <i class="fab fa-whatsapp"></i></a>
              </div>
            </div>
            <div class="col-md-4 col-lg-3 wow fadeIn" data-wow-delay="0.5s">
              <h5 class="text-white mb-4">Popular Link</h5>
              <a class="btn btn-link" href="/#about-us">About Us</a>
              <a class="btn btn-link" href="/privacy-policy" >Privacy Policy</a>
              <a class="btn btn-link" href="/syarat-ketentuan" >Syarat dan Ketentuan</a>
            </div>
            <div class="col-md-4 col-lg-3 wow fadeIn" data-wow-delay="0.5s">
              <img class="img-fluid" src="{{ asset('assets_landingpage/img/logo-footer.png')}}" alt="" width="600px" />
            </div>
          </div>
        </div>
        <div class="container wow fadeIn" data-wow-delay="0.1s">
          <div class="copyright">
            <div class="row">
              <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">&copy; <a class="border-bottom" href="#">Kurirmoo 2024</a></div>
            </div>
          </div>
        </div>
      </div>
      <!-- Footer End -->
    </x-landingpage.app>
