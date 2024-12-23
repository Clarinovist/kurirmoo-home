<x-landingpage.app >
     <!-- Hero Start -->

     {{-- <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Embed YouTube Video Responsif</title>
        <style>
            .video-container {
                position: relative;
                width: 100%;
                padding-bottom: 56.25%; /* 16:9 aspect ratio */
                height: 0;
                overflow: hidden;
            }
            .video-container iframe {
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
            }
        </style>
    </head> --}}



    <!-- Hero Start -->
  <div class="container-fluid pt-5 bg-primary hero-header mb-5">
    <div class="container pt-5">
      <div class="row g-5 pt-5">
        <div class="col-lg-4 align-self-center text-center text-lg-start mb-lg-5">
          <div class="btn btn-sm border rounded-pill text-white px-3 mb-3 animated slideInRight">Kurirmoo</div>
          <h1 class="display-4 text-white mb-4 animated slideInRight">{{ $hero->judul }}<span class="text-dark">.</span></h1>
          {{-- <p class="text-white mb-4 animated slideInRight">{!! $hero->desc !!}</p> --}}
          <h5 class="text-white mb-4">{!! $hero->desc !!}</h5>
          <a href="#about-us" class="btn btn-light py-sm-3 px-sm-5 rounded-pill me-3 animated slideInRight">Tentang kami</a>
          <a href="https://wa.me/{{$kontak->no_hp}}" target="_blank" class="btn btn-outline-light py-sm-3 px-sm-5 rounded-pill animated slideInRight">Contact Us</a>
        </div>
        <div class="col-lg-8 align-self-end text-center text-lg-end">
          <img class="img-fluid" src="{{ asset('storage/' . $hero->gambar) }}" alt="" width="auto" />
        </div>
      </div>
    </div>
  </div>
  <!-- Hero End -->

  <!-- Full Screen Search Start -->
  <!-- <div class="modal fade" id="searchModal" tabindex="-1">
      <div class="modal-dialog modal-fullscreen">
        <div class="modal-content" style="background: rgba(20, 24, 62, 0.7)">
          <div class="modal-header border-0">
            <button type="button" class="btn btn-square bg-white btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body d-flex align-items-center justify-content-center">
            <div class="input-group" style="max-width: 600px">
              <input type="text" class="form-control bg-transparent border-light p-3" placeholder="Type search keyword" />
              <button class="btn btn-light px-4"><i class="bi bi-search"></i></button>
            </div>
          </div>
        </div>
      </div>
    </div> -->
  <!-- Full Screen Search End -->

  <!-- Iklan Start -->
  <div class="container-xxl py-5">
    <div class="container py-5">
      <div class="row g-5">
      </div>
      <div class="col-lg-12 wow fadeIn" data-wow-delay="0.5s">
        <div class="owl-carousel testimonial-carousel border-start border-danger">
        @foreach ($iklan as $no => $valueIklan)
          <div class="testimonial-item ps-5">
            <div class="d-flex align-items-center">
                <a href="{{ $valueIklan->link }}">
                    <img src="{{ asset('storage/' . $valueIklan->gambar) }}" class="d-block w-100" alt="..." width="auto" height="auto">
                </a>
            </div>
          </div>
          @endforeach
          {{-- <div class="testimonial-item ps-5">
            <div class="d-flex align-items-center">
              <img src="{{ asset('assets_landingpage/img/iklan/iklan.jpg')}}" class="d-block w-100" alt="..." width="auto" height="600px">
            </div>
          </div> --}}
        </div>
      </div>
    </div>
  </div>
  </div>
  </div>
  <!-- Iklan End -->

  <!-- Tentang Kami Start -->
  <div class="container-fluid py-5" id="about-us">
    <div class="container">
      <div class="row g-5 align-items-center">
        <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
          <div class="about-img">
            <img class="img-fluid" src="{{ asset('storage/' . $about->gambar) }}" />
          </div>
        </div>
        <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
          <div class="btn btn-sm border rounded-pill text-danger px-3 mb-3">About Us</div>
          <h1 class="mb-4">{{ $about->judul }}</h1>
          <p class="mb-4">
            {!! $about->desc !!}
          </p>
          <div class="row g-3">
            <div class="col-sm-6">
              <h6 class="mb-3"><i class="fa fa-check text-danger me-2"></i>Inovasi Berbasis Teknologi</h6>
              <h6 class="mb-0"><i class="fa fa-check text-danger me-2"></i>Keamanan dan Transparansi Total</h6>
            </div>
            <div class="col-sm-6">
              <h6 class="mb-3"><i class="fa fa-check text-danger me-2"></i>Dedicated Enterprise Support</h6>
              <h6 class="mb-0"><i class="fa fa-check text-danger me-2"></i>Dukungan Pelanggan Kelas Satu</h6>
            </div>
          </div>
          <div class="d-flex align-items-center mt-4">
            <!-- <a class="btn btn-danger rounded-pill px-4 me-3" href="">Read More</a> -->
            <a class="btn btn-outline-danger btn-square me-3" href="#" target="_blank"><i class="fab fa-instagram"></i></a>
            <a class="btn btn-outline-danger btn-square me-3" href="{{ $kontak->youtube }}" target="_blank"><i class="fab fa-youtube"></i></a>
            <a class="btn btn-outline-danger btn-square me-3" href="mailto:{{ $kontak->email }}"><i class="fa fa-envelope"></i></a>
            <a class="btn btn-outline-danger btn-square " href="https://wa.me/{{ $kontak->no_wa }}"><i class="fab fa-whatsapp"></i></a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Tentang Kami End -->

   <!-- Keunggulan Start -->
   <div class="container-fluid bg-light mt-5 py-5" id="Keunggulan">
    <div class="container py-5">
      <div class="row g-5 align-items-center">
        <div class="mx-auto text-center wow fadeIn" data-wow-delay="0.1s" style="max-width: 500px">
          <div class="btn btn-sm border rounded-pill text-danger px-3 mb-3">Keunggulan</div>
          <h1 class="mb-4">Keunggulan Kurirmoo</h1>
        </div>
        <div class="col-lg-12">
          <div class="row g-4 justify-content-center">
            @foreach ($keunggulan as $no => $valueKeunggulan)
            <div class="col-md-3">
              <div class="row g-4">
                <div class="col-12 wow fadeIn" data-wow-delay="0.1s">
                  <div class="service-item d-flex flex-column justify-content-center text-start rounded">
                    <div class="service-icon btn-square">
                      <i class="{{ $valueKeunggulan->icon }}"></i>
                    </div>
                    <h3 class="mb-3">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne{{ $valueKeunggulan->id }}" aria-expanded="false" aria-controls="collapseOne{{ $valueKeunggulan->id }}" style="font-size: 17px;">{{ $valueKeunggulan->nama }}
                      </button>
                    </h3>
                    <div id="collapseOne{{ $valueKeunggulan->id }}" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#collapseOne{{ $valueKeunggulan->id }}" >
                      <div class="accordion-body"  style="color: white;">
                        {!! $valueKeunggulan->desc !!}
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            @endforeach

          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Keunggulan End -->

  <!-- Jenis Muatan -->
  <div class="container-fluid mt-5 py-5">
    <div class="container py-5">
      <div class="row g-5 align-items-center">
        <div class="mx-auto text-center wow fadeIn" data-wow-delay="0.1s" style="max-width: 500px">
          <div class="btn btn-sm border rounded-pill text-danger px-3 mb-3">Jenis Muatan</div>
          <h1 class="mb-4">Jenis Muatan</h1>
        </div>
        <div class="col-lg-12">
          <div class="row g-4 justify-content-center">
            <div class="col-md-3">
              <div class="row g-4">
                <div class="col-12 wow fadeIn" data-wow-delay="0.1s">
                  <div class="service-item d-flex flex-column justify-content-center text-start rounded">
                    <div class="service-icon btn-square">
                      <i class="bi bi-box fa-2x"></i>
                    </div>
                    <h3 class="mb-3">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#kardus" aria-expanded="false" aria-controls="kardus" style="font-size: 17px;">Kardus
                      </button>
                    </h3>
                    <div id="kardus" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionFAQ1" style="background-color: white;">
                      <div class="accordion-body">
                        Muatan berbentuk karung, seperti beras, biji-bijian, pupuk, atau bahan curah lainnya, ideal untuk pengangkutan skala kecil hingga besar.
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="row g-4">
                <div class="col-12 wow fadeIn" data-wow-delay="0.1s">
                  <div class="service-item d-flex flex-column justify-content-center text-start rounded">
                    <div class="service-icon btn-square">
                        <i class="bi bi-archive fa-2x"></i>
                    </div>
                    <h3 class="mb-3">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#karung" aria-expanded="false" aria-controls="karung" style="font-size: 17px;">Karung
                      </button>
                    </h3>
                    <div id="karung" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionFAQ1" style="background-color: white;">
                      <div class="accordion-body">
                        Digunakan untuk mengangkut barang-barang dalam kemasan praktis seperti produk ritel, pakaian, buku, atau barang pecah belah dengan pelindung tambahan.
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="row g-4">
                <div class="col-12 wow fadeIn" data-wow-delay="0.1s">
                  <div class="service-item d-flex flex-column justify-content-center text-start rounded">
                    <div class="service-icon btn-square">
                      <i class="bi bi-box fa-2x"></i>
                    </div>
                    <h3 class="mb-3">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#peti" aria-expanded="false" aria-controls="peti" style="font-size: 17px;">Peti
                      </button>
                    </h3>
                    <div id="peti" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionFAQ1" style="background-color: white;">
                      <div class="accordion-body">
                        Muatan dalam peti kayu atau plastik, cocok untuk barang berat, barang rapuh, atau barang dengan dimensi khusus seperti mesin kecil atau suku cadang.
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="row g-4">
                <div class="col-12 wow fadeIn" data-wow-delay="0.1s">
                  <div class="service-item d-flex flex-column justify-content-center text-start rounded">
                    <div class="service-icon btn-square">
                      <i class="bi bi-arrow-down-right-circle fa-2x"></i>
                    </div>
                    <h3 class="mb-3">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#Curah" aria-expanded="false" aria-controls="Curah" style="font-size: 17px;">Curah
                      </button>
                    </h3>
                    <div id="Curah" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionFAQ1" style="background-color: white;">
                      <div class="accordion-body">
                        Barang tanpa kemasan khusus, seperti pasir, batu, biji-bijian, atau bahan mentah lainnya yang diangkut secara langsung dalam truk atau kontainer.
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="row g-4">
                <div class="col-12 wow fadeIn" data-wow-delay="0.1s">
                  <div class="service-item d-flex flex-column justify-content-center text-start rounded">
                    <div class="service-icon btn-square">
                      <i class="bi bi-house fa-2x"></i>
                    </div>
                    <h3 class="mb-3">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#Pindahan" aria-expanded="false" aria-controls="Pindahan" style="font-size: 17px;">Pindahan Rumah
                      </button>
                    </h3>
                    <div id="Pindahan" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionFAQ1" style="background-color: white;">
                      <div class="accordion-body">
                        Layanan untuk memindahkan seluruh isi rumah, termasuk perabotan besar, elektronik, dan barang-barang lainnya dalam skala besar.
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="row g-4">
                <div class="col-12 wow fadeIn" data-wow-delay="0.1s">
                  <div class="service-item d-flex flex-column justify-content-center text-start rounded">
                    <div class="service-icon btn-square">
                      <i class="bi bi-align-start fa-2x"></i>
                    </div>
                    <h3 class="mb-3">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#Furniture" aria-expanded="false" aria-controls="Furniture" style="font-size: 17px;">Furniture
                      </button>
                    </h3>
                    <div id="Furniture" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionFAQ1" style="background-color: white;">
                      <div class="accordion-body">
                        Pengangkutan berbagai jenis perabot, seperti meja, kursi, lemari, atau sofa, dengan perlindungan khusus untuk menghindari kerusakan.
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="row g-4">
                <div class="col-12 wow fadeIn" data-wow-delay="0.1s">
                  <div class="service-item d-flex flex-column justify-content-center text-start rounded">
                    <div class="service-icon btn-square">
                      <i class="bi bi-flower1 fa-2x"></i>
                    </div>
                    <h3 class="mb-3">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#Tanaman" aria-expanded="false" aria-controls="Tanaman" style="font-size: 17px;">Tanaman
                      </button>
                    </h3>
                    <div id="Tanaman" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionFAQ1" style="background-color: white;">
                      <div class="accordion-body">
                        Layanan untuk mengangkut tanaman hias atau pertanian dengan perlakuan hati-hati untuk menjaga keutuhan dan kesehatan tanaman.
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="row g-4">
                <div class="col-12 wow fadeIn" data-wow-delay="0.1s">
                  <div class="service-item d-flex flex-column justify-content-center text-start rounded">
                    <div class="service-icon btn-square">
                      <i class="bi bi-asterisk fa-2x"></i>
                    </div>
                    <h3 class="mb-3">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#Segar" aria-expanded="false" aria-controls="Segar" style="font-size: 17px;">Produk Segar
                      </button>
                    </h3>
                    <div id="Segar" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionFAQ1" style="background-color: white;">
                      <div class="accordion-body">
                        Pengangkutan bahan makanan seperti buah, sayur, atau produk pertanian lainnya, dengan opsi kontrol suhu jika diperlukan.
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="row g-4">
                <div class="col-12 wow fadeIn" data-wow-delay="0.1s">
                  <div class="service-item d-flex flex-column justify-content-center text-start rounded">
                    <div class="service-icon btn-square">
                      <i class="fa fa-location-arrow fa-2x"></i>
                      <i class="bi bi-backpack3 fa-2x"></i> </i>
                    </div>
                    <h3 class="mb-3">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#Kebutuhan" aria-expanded="false" aria-controls="Kebutuhan" style="font-size: 17px;">Kebutuhan Rumah Tangga
                      </button>
                    </h3>
                    <div id="Kebutuhan" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionFAQ1" style="background-color: white;">
                      <div class="accordion-body">
                        Barang-barang seperti alat masak, peralatan kebersihan, atau kebutuhan harian lainnya, dikemas untuk memudahkan pengiriman.
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
  </div>
  </div>
  <!-- Jenis Muatan -->

   <!-- Artikel Slide -->
   <div class="container-fluid bg-light py-5">
    <div class="container py-5">
      <div class="row g-5">
        <div class="col-lg-8 wow fadeIn" data-wow-delay="0.5s">
          <div class="owl-carousel testimonial-carousel border-start border-primary">
            <div class="testimonial-item ps-5" style="background-image: url('{{ asset('assets_landingpage/img/iklan/iklan.jpg')}}'); background-size: cover; background-repeat: no-repeat; background-position: center;">
              <i class="fa fa-quote-left fa-2x text-danger mb-3"></i>
              <p class="fs-4">Artikel 1</p>
              <div class="d-flex align-items-center">
                <div class="ps-3">
                  <a class="btn btn-danger rounded-pill px-4" href="#">Read More</a>
                </div>
              </div>
            </div>
            <div class="testimonial-item ps-5" style="background-image: url('{{ asset('assets_landingpage/img/iklan/iklan.jpg')}}'); background-size: cover; background-repeat: no-repeat; background-position: center;">
              <i class="fa fa-quote-left fa-2x text-danger mb-3"></i>
              <p class="fs-4">Artikel 2</p>
              <div class="d-flex align-items-center">
                <div class="ps-3">
                  <a class="btn btn-danger rounded-pill px-4" href="#">Read More</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 wow fadeIn" data-wow-delay="0.1s">
          <div class="btn btn-sm border rounded-pill text-danger px-3 mb-3">Artikel</div>
          <h1 class="mb-4">Artikel</h1>
          <p class="mb-4">Beberapa Artikel Kurirmoo</p>

        </div>

      </div>
    </div>
  </div>
  <!-- Artikel Slide -->

  <!-- jangkauan Area Start -->
  <div class="container-fluid feature pt-5 text-center" style="background-color: #c50303;">
    <div class="container mb-2">
      <div class="row g-5">
        <div class="mx-auto text-center wow fadeIn" data-wow-delay="0.1s">
          <div class="btn btn-sm border rounded-pill text-white px-3 mb-3">Jangkauan Area Layanan</div>
          <h1 class="mb-4 text-white">Jangkauan Area</h1>
        </div>
        <div class="col-lg-4 wow fadeIn mb-2" data-wow-delay="0.3s">
          {{-- <h2 class="text-dark mb-4">Jawa Timur</h2>
          <div class="text-white mb-2">Surabaya</div>
          <div class="text-white mb-2">Kediri</div>
          <div class="text-white mb-2">Malang</div>
          <div class="text-white mb-2">Mojokerto</div> --}}
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>

        </div>
      </div>
    </div>
  </div>
  <!-- jangkauan Area End -->

  <!-- Armada Start -->
  <div class="container-fluid bg-light mt-5 py-5" id="armada">
    <div class="container py-5">
      <div class="row g-5 align-items-center">
        <div class="mx-auto text-center wow fadeIn" data-wow-delay="0.1s" style="max-width: 500px">
          <div class="btn btn-sm border rounded-pill text-danger px-3 mb-3">Armada</div>
          <h1 class="mb-4">Armada Kurirmoo</h1>
        </div>
        <div class="col-lg-12">
          <div class="row g-4">

            <!-- Pickup L300 Bak -->
            @foreach ($armada as $no => $valueArmada)
            <div class="col-md-3">
              <div class="row g-4">
                <div class="col-12 wow fadeIn" data-wow-delay="0.1s">
                  <div class="service-item d-flex flex-column justify-content-center text-start rounded">
                    <div class="service-icon btn-square">
                        <img src="{{ asset('storage/' . $valueArmada->gambar) }}" alt="" width="250%" height="auto">
                        {{-- {{ asset('storage/' . $valueArmada->gambar) }} --}}
                      {{-- <i class="fa fa-truck fa-3x"></i> --}}
                    </div>
                    <h3 class="mb-3 text-center">
                      <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#Pickup">
                        {{ $valueArmada->nama }}
                      </button>
                    </h3>
                    <div class="modal fade" id="Pickup" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="text-dark">{{ $valueArmada->nama }}</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">
                            <div class="table-responsive">
                            <table class="table">
                              <thead>
                                <tr>
                                  <th scope="col">Ukuran Karoseri</th>
                                  <th scope="col">Berat</th>
                                  <th scope="col">Ukuran Mobil</th>
                                  <th scope="col">Mesin</th>
                                  <th scope="col">Roda dan Ban</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <td scope="row">{{ $valueArmada->ukuran_karoseri }}</td>
                                  <td>{{ $valueArmada->berat }}</td>
                                  <td>{{ $valueArmada->ukuran_mobil }}</td>
                                  <td>{{ $valueArmada->mesin }}</td>
                                  <td>{{ $valueArmada->roda }}</td>
                                </tr>
                              </tbody>
                            </table>
                          </div>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-dark" data-bs-dismiss="modal">Close</button>
                          </div>
                        </div>
                      </div>
                    </div>

                  </div>
                </div>
              </div>
            </div>
            @endforeach

            <!-- Colt Diesel Double Box -->
            <div class="col-md-3">
              <div class="row g-4">
                <div class="col-12 wow fadeIn" data-wow-delay="1.0s">
                  <div class="service-item d-flex flex-column justify-content-center text-start rounded">
                    <div class="service-icon btn-square">
                      <i class="fa fa-truck fa-3x"></i>
                    </div>
                    <h3 class="mb-3 text-center">
                      <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#ColtdieselDoubleBak">
                        Colt Diesel Double Box
                      </button>
                    </h3>

                    <div class="modal fade" id="ColtdieselDoubleBak" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="text-dark">Colt Diesel Double Box</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">
                            <div class="table-responsive">
                            <table class="table">
                              <thead>
                                <tr>
                                  <th scope="col">Ukuran Karoseri</th>
                                  <th scope="col">Berat</th>
                                  <th scope="col">Ukuran Mobil</th>
                                  <th scope="col">Mesin</th>
                                  <th scope="col">Roda dan Ban</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <th scope="row">Panjang : 560 cm, Lebar : 200 cm, Tinggi : 220 cm</th>
                                  <td>Berat Kosong : 2,3 Ton, Berat Maksimal : 7,5 Ton</td>
                                  <td>Panjang : 670 cm, Lebar : 200 cm, Tinggi : 220 cm</td>
                                  <td>Model : 4D34-2AT7, Kapasitas Silinder : 3.908</td>
                                  <td>Ukuran Roda: 7.50-16-14PR</td>
                                </tr>
                              </tbody>
                            </table>
                          </div>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-dark" data-bs-dismiss="modal">Close</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Colt Diesel Double Terbuka -->
            <div class="col-md-3">
              <div class="row g-4">
                <div class="col-12 wow fadeIn" data-wow-delay="1.1s">
                  <div class="service-item d-flex flex-column justify-content-center text-start rounded">
                    <div class="service-icon btn-square">
                      <i class="fa fa-truck fa-3x"></i>
                    </div>
                    <h3 class="mb-3 text-center">
                      <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#ColtdieselDoubleTerbuka">
                        Colt Diesel Double Terbuka
                      </button>
                    </h3>
                    <div class="modal fade" id="ColtdieselDoubleTerbuka" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="text-dark">Colt Diesel Double Terbuka</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">
                            <div class="table-responsive">
                            <table class="table">
                              <thead>
                                <tr>
                                  <th scope="col">Ukuran Karoseri</th>
                                  <th scope="col">Berat</th>
                                  <th scope="col">Ukuran Mobil</th>
                                  <th scope="col">Mesin</th>
                                  <th scope="col">Roda dan Ban</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <th scope="row">Panjang : 560 cm, Lebar : 200 cm</th>
                                  <td>Berat Kosong : 2,3 Ton, Berat Maksimal : 8 Ton</td>
                                  <td>Panjang : 670 cm, Lebar : 200 cm, Tinggi : 220 cm</td>
                                  <td>Model : 4D34-2AT7, Kapasitas Silinder : 3.908</td>
                                  <td>Ukuran Roda: 7.50-16-14PR</td>
                                </tr>
                              </tbody>
                            </table>
                          </div>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-dark" data-bs-dismiss="modal">Close</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Colt Diesel Double Refeer Box -->
            <div class="col-md-3">
              <div class="row g-4">
                <div class="col-12 wow fadeIn" data-wow-delay="1.2s">
                  <div class="service-item d-flex flex-column justify-content-center text-start rounded">
                    <div class="service-icon btn-square">
                      <i class="fa fa-truck fa-3x"></i>
                    </div>
                    <h3 class="mb-3 text-center">
                      <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#ColtdieselDoubleRefeer">
                        Colt Diesel Double Refeer Box
                      </button>
                    </h3>
                    <div class="modal fade" id="ColtdieselDoubleRefeer" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="text-dark">Colt Diesel Double Refeer Box</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">
                            <div class="table-responsive">
                            <table class="table">
                              <thead>
                                <tr>
                                  <th scope="col">Ukuran Karoseri</th>
                                  <th scope="col">Berat</th>
                                  <th scope="col">Ukuran Mobil</th>
                                  <th scope="col">Mesin</th>
                                  <th scope="col">Roda dan Ban</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <th scope="row">Panjang : 560 cm, Lebar : 200 cm, Tinggi : 220 cm</th>
                                  <td>Berat Kosong : 2,5 Ton, Berat Maksimal : 8 Ton</td>
                                  <td>Panjang : 670 cm, Lebar : 200 cm, Tinggi : 220 cm</td>
                                  <td>Model : 4D34-2AT7, Kapasitas Silinder : 3.908</td>
                                  <td>Ukuran Roda: 7.50-16-14PR</td>
                                </tr>
                              </tbody>
                            </table>
                          </div>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-dark" data-bs-dismiss="modal">Close</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Colt Diesel Double Bak -->
            <div class="col-md-3">
              <div class="row g-4">
                <div class="col-12 wow fadeIn" data-wow-delay="1.3s">
                  <div class="service-item d-flex flex-column justify-content-center text-start rounded">
                    <div class="service-icon btn-square">
                      <i class="fa fa-truck fa-3x"></i>
                    </div>
                    <h3 class="mb-3 text-center">
                      <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#ColtdieselDoubleBax">
                        Colt Diesel Double Bak
                      </button>
                    </h3>
                    <div class="modal fade" id="ColtdieselDoubleRefeer" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="text-dark">Colt Diesel Double Bak</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">
                            <div class="table-responsive">
                            <table class="table">
                              <thead>
                                <tr>
                                  <th scope="col">Ukuran Karoseri</th>
                                  <th scope="col">Berat</th>
                                  <th scope="col">Ukuran Mobil</th>
                                  <th scope="col">Mesin</th>
                                  <th scope="col">Roda dan Ban</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <th scope="row">Panjang : 560 cm, Lebar : 200 cm, Tinggi : 220 cm</th>
                                  <td>Berat Kosong : 2,3 Ton, Berat Maksimal : 7,5 Ton</td>
                                  <td>Panjang : 670 cm, Lebar : 200 cm, Tinggi : 220 cm</td>
                                  <td>Model : 4D34-2AT7, Kapasitas Silinder : 3.908</td>
                                  <td>Ukuran Roda: 7.50-16-14PR</td>
                                </tr>
                              </tbody>
                            </table>
                          </div>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-dark" data-bs-dismiss="modal">Close</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Colt Diesel Double Long Box -->
            <div class="col-md-3">
              <div class="row g-4">
                <div class="col-12 wow fadeIn" data-wow-delay="1.4s">
                  <div class="service-item d-flex flex-column justify-content-center text-start rounded">
                    <div class="service-icon btn-square">
                      <i class="fa fa-truck fa-3x"></i>
                    </div>
                    <h3 class="mb-3 text-center">
                      <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#ColtdieselDoublelongBax">
                        Colt Diesel Double Long Box
                      </button>
                    </h3>
                    <div class="modal fade" id="ColtdieselDoublelongBax" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="text-dark">Colt Diesel Double Long Bak</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">
                            <div class="table-responsive">
                            <table class="table">
                              <thead>
                                <tr>
                                  <th scope="col">Ukuran Karoseri</th>
                                  <th scope="col">Berat</th>
                                  <th scope="col">Ukuran Mobil</th>
                                  <th scope="col">Mesin</th>
                                  <th scope="col">Roda dan Ban</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <th scope="row">Panjang : 720 cm, Lebar : 230 cm, Tinggi : 250 cm</th>
                                  <td>Berat Kosong : 4 Ton, Berat Maksimal : 14 Ton</td>
                                  <td>Panjang : 940 cm, Lebar : 240 cm, Tinggi : 270 cm</td>
                                  <td>Model : 6D16-3AT2, Kapasitas Silinder : 7.545 CC</td>
                                  <td>Ukuran Roda: 10.00-20-16PR</td>
                                </tr>
                              </tbody>
                            </table>
                          </div>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-dark" data-bs-dismiss="modal">Close</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Colt Diesel Double Long Terbuka -->
            <div class="col-md-3">
              <div class="row g-4">
                <div class="col-12 wow fadeIn" data-wow-delay="1.5s">
                  <div class="service-item d-flex flex-column justify-content-center text-start rounded">
                    <div class="service-icon btn-square">
                      <i class="fa fa-truck fa-3x"></i>
                    </div>
                    <h3 class="mb-3 text-center">
                      <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#ColtdieselDoublelongTerbuka">
                        Colt Diesel Double Long Terbuka
                      </button>
                    </h3>
                    <div class="modal fade" id="ColtdieselDoublelongTerbuka" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="text-dark">Colt Diesel Double Long Terbuka</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">
                            <div class="table-responsive">
                            <table class="table">
                              <thead>
                                <tr>
                                  <th scope="col">Ukuran Karoseri</th>
                                  <th scope="col">Berat</th>
                                  <th scope="col">Ukuran Mobil</th>
                                  <th scope="col">Mesin</th>
                                  <th scope="col">Roda dan Ban</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <th scope="row">Panjang : 560 cm, Lebar : 200 cm</th>
                                  <td>Berat Kosong : 2,5 Ton, Berat Maksimal : 8 Ton</td>
                                  <td>Panjang : 670 cm, Lebar : 200 cm, Tinggi : 220 cm</td>
                                  <td>Model : 4D34-2AT8, Kapasitas Silinder : 3.908 CC</td>
                                  <td>Ukuran Roda: 7.50 – 16 – 14PR</td>
                                </tr>
                              </tbody>
                            </table>
                          </div>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-dark" data-bs-dismiss="modal">Close</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Fuso Box -->
            <!-- <div class="col-md-3">
              <div class="row g-4">
                <div class="col-12 wow fadeIn" data-wow-delay="1.6s">
                  <div class="service-item d-flex flex-column justify-content-center text-start rounded">
                    <div class="service-icon btn-square">
                      <i class="fa fa-truck fa-2x"></i>
                    </div>
                    <h3 class="mb-3">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse16" aria-expanded="false" aria-controls="collapse16">
                        Fuso Box
                      </button>
                    </h3>
                    <div id="collapse16" class="accordion-collapse collapse" aria-labelledby="headingSixteen" data-bs-parent="#accordionFAQ1" style="background-color: white;">
                      <div class="accordion-body">
                        Detail
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div> -->

            <!-- Fuso Terbuka -->
            <!-- <div class="col-md-3">
              <div class="row g-4">
                <div class="col-12 wow fadeIn" data-wow-delay="1.7s">
                  <div class="service-item d-flex flex-column justify-content-center text-start rounded">
                    <div class="service-icon btn-square">
                      <i class="fa fa-truck fa-2x"></i>
                    </div>
                    <h3 class="mb-3">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse17" aria-expanded="false" aria-controls="collapse17">
                        Fuso Terbuka
                      </button>
                    </h3>
                    <div id="collapse17" class="accordion-collapse collapse" aria-labelledby="headingSeventeen" data-bs-parent="#accordionFAQ1" style="background-color: white;">
                      <div class="accordion-body">
                        Detail
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div> -->

            <!-- Tronton Box -->
            <!-- <div class="col-md-3">
              <div class="row g-4">
                <div class="col-12 wow fadeIn" data-wow-delay="1.8s">
                  <div class="service-item d-flex flex-column justify-content-center text-start rounded">
                    <div class="service-icon btn-square">
                      <i class="fa fa-truck fa-2x"></i>
                    </div>
                    <h3 class="mb-3">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse18" aria-expanded="false" aria-controls="collapse18">
                        Tronton Box
                      </button>
                    </h3>
                    <div id="collapse18" class="accordion-collapse collapse" aria-labelledby="headingEighteen" data-bs-parent="#accordionFAQ1" style="background-color: white;">
                      <div class="accordion-body">
                        Detail
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div> -->

            <!-- Tronton Terbuka -->
            <!-- <div class="col-md-3">
              <div class="row g-4">
                <div class="col-12 wow fadeIn" data-wow-delay="1.9s">
                  <div class="service-item d-flex flex-column justify-content-center text-start rounded">
                    <div class="service-icon btn-square">
                      <i class="fa fa-truck fa-2x"></i>
                    </div>
                    <h3 class="mb-3">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse19" aria-expanded="false" aria-controls="collapse19">
                        Tronton Terbuka
                      </button>
                    </h3>
                    <div id="collapse19" class="accordion-collapse collapse" aria-labelledby="headingNineteen" data-bs-parent="#accordionFAQ1" style="background-color: white;">
                      <div class="accordion-body">
                        Detail
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div> -->

            <!-- Tronton Car Carrier -->
            <!-- <div class="col-md-3">
              <div class="row g-4">
                <div class="col-12 wow fadeIn" data-wow-delay="2.0s">
                  <div class="service-item d-flex flex-column justify-content-center text-start rounded">
                    <div class="service-icon btn-square">
                      <i class="fa fa-truck fa-2x"></i>
                    </div>
                    <h3 class="mb-3">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse20" aria-expanded="false" aria-controls="collapse20">
                        Tronton Car Carrier
                      </button>
                    </h3>
                    <div id="collapse20" class="accordion-collapse collapse" aria-labelledby="headingTwenty" data-bs-parent="#accordionFAQ1" style="background-color: white;">
                      <div class="accordion-body">
                        Detail
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div> -->

            <!-- Tronton Refeer -->
            <!-- <div class="col-md-3">
              <div class="row g-4">
                <div class="col-12 wow fadeIn" data-wow-delay="2.1s">
                  <div class="service-item d-flex flex-column justify-content-center text-start rounded">
                    <div class="service-icon btn-square">
                      <i class="fa fa-truck fa-2x"></i>
                    </div>
                    <h3 class="mb-3">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse21" aria-expanded="false" aria-controls="collapse21">
                        Tronton Refeer
                      </button>
                    </h3>
                    <div id="collapse21" class="accordion-collapse collapse" aria-labelledby="headingTwentyOne" data-bs-parent="#accordionFAQ1" style="background-color: white;">
                      <div class="accordion-body">
                        Detail
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div> -->

            <!-- Tronton Wingbox -->
            <!-- <div class="col-md-3">
              <div class="row g-4">
                <div class="col-12 wow fadeIn" data-wow-delay="2.2s">
                  <div class="service-item d-flex flex-column justify-content-center text-start rounded">
                    <div class="service-icon btn-square">
                      <i class="fa fa-truck fa-2x"></i>
                    </div>
                    <h3 class="mb-3">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse22" aria-expanded="false" aria-controls="collapse22">
                        Tronton Wingbox
                      </button>
                    </h3>
                    <div id="collapse22" class="accordion-collapse collapse" aria-labelledby="headingTwentyTwo" data-bs-parent="#accordionFAQ1" style="background-color: white;">
                      <div class="accordion-body">
                        Detail
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div> -->

            <!-- Tronton Bak -->
            <!-- <div class="col-md-3">
              <div class="row g-4">
                <div class="col-12 wow fadeIn" data-wow-delay="2.3s">
                  <div class="service-item d-flex flex-column justify-content-center text-start rounded">
                    <div class="service-icon btn-square">
                      <i class="fa fa-truck fa-2x"></i>
                    </div>
                    <h3 class="mb-3">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse23" aria-expanded="false" aria-controls="collapse23">
                        Tronton Bak
                      </button>
                    </h3>
                    <div id="collapse23" class="accordion-collapse collapse" aria-labelledby="headingTwentyThree" data-bs-parent="#accordionFAQ1" style="background-color: white;">
                      <div class="accordion-body">
                        Detail
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div> -->

            <!-- Tronton Box 500 Ranger -->
            <!-- <div class="col-md-3">
              <div class="row g-4">
                <div class="col-12 wow fadeIn" data-wow-delay="2.4s">
                  <div class="service-item d-flex flex-column justify-content-center text-start rounded">
                    <div class="service-icon btn-square">
                      <i class="fa fa-truck fa-2x"></i>
                    </div>
                    <h3 class="mb-3">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse24" aria-expanded="false" aria-controls="collapse24">
                        Tronton Box 500 Ranger
                      </button>
                    </h3>
                    <div id="collapse24" class="accordion-collapse collapse" aria-labelledby="headingTwentyFour" data-bs-parent="#accordionFAQ1" style="background-color: white;">
                      <div class="accordion-body">
                        Detail
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div> -->

            <!-- Trailer Short Chassis Losbak -->
            <!-- <div class="col-md-3">
              <div class="row g-4">
                <div class="col-12 wow fadeIn" data-wow-delay="2.5s">
                  <div class="service-item d-flex flex-column justify-content-center text-start rounded">
                    <div class="service-icon btn-square">
                      <i class="fa fa-truck fa-2x"></i>
                    </div>
                    <h3 class="mb-3">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse25" aria-expanded="false" aria-controls="collapse25">
                        Trailer Short Chassis Losbak
                      </button>
                    </h3>
                    <div id="collapse25" class="accordion-collapse collapse" aria-labelledby="headingTwentyFive" data-bs-parent="#accordionFAQ1" style="background-color: white;">
                      <div class="accordion-body">
                        Detail
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div> -->

            <!-- Trailer Box 20 Feet -->
            <!-- <div class="col-md-3">
              <div class="row g-4">
                <div class="col-12 wow fadeIn" data-wow-delay="2.6s">
                  <div class="service-item d-flex flex-column justify-content-center text-start rounded">
                    <div class="service-icon btn-square">
                      <i class="fa fa-truck fa-2x"></i>
                    </div>
                    <h3 class="mb-3">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse26" aria-expanded="false" aria-controls="collapse26">
                        Trailer Box 20 Feet
                      </button>
                    </h3>
                    <div id="collapse26" class="accordion-collapse collapse" aria-labelledby="headingTwentySix" data-bs-parent="#accordionFAQ1" style="background-color: white;">
                      <div class="accordion-body">
                        Detail
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div> -->

            <!-- Trailer Box 40 Feet -->
            <!-- <div class="col-md-3">
              <div class="row g-4">
                <div class="col-12 wow fadeIn" data-wow-delay="2.7s">
                  <div class="service-item d-flex flex-column justify-content-center text-start rounded">
                    <div class="service-icon btn-square">
                      <i class="fa fa-truck fa-2x"></i>
                    </div>
                    <h3 class="mb-3">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse27" aria-expanded="false" aria-controls="collapse27">
                        Trailer Box 40 Feet
                      </button>
                    </h3>
                    <div id="collapse27" class="accordion-collapse collapse" aria-labelledby="headingTwentySeven" data-bs-parent="#accordionFAQ1" style="background-color: white;">
                      <div class="accordion-body">
                        Detail
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div> -->

            <!-- Trailer Combo Chassis -->
            <!-- <div class="col-md-3">
              <div class="row g-4">
                <div class="col-12 wow fadeIn" data-wow-delay="2.8s">
                  <div class="service-item d-flex flex-column justify-content-center text-start rounded">
                    <div class="service-icon btn-square">
                      <i class="fa fa-truck fa-2x"></i>
                    </div>
                    <h3 class="mb-3">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse28" aria-expanded="false" aria-controls="collapse28">
                        Trailer Combo Chassis
                      </button>
                    </h3>
                    <div id="collapse28" class="accordion-collapse collapse" aria-labelledby="headingTwentyEight" data-bs-parent="#accordionFAQ1" style="background-color: white;">
                      <div class="accordion-body">
                        Detail
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div> -->

            <!-- Trailer Lowbed -->
            <!-- <div class="col-md-3">
              <div class="row g-4">
                <div class="col-12 wow fadeIn" data-wow-delay="2.9s">
                  <div class="service-item d-flex flex-column justify-content-center text-start rounded">
                    <div class="service-icon btn-square">
                      <i class="fa fa-truck fa-2x"></i>
                    </div>
                    <h3 class="mb-3">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse29" aria-expanded="false" aria-controls="collapse29">
                        Trailer Lowbed
                      </button>
                    </h3>
                    <div id="collapse29" class="accordion-collapse collapse" aria-labelledby="headingTwentyNine" data-bs-parent="#accordionFAQ1" style="background-color: white;">
                      <div class="accordion-body">
                        Detail
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div> -->

            <!-- Trailer Car Carrier -->
            <!-- <div class="col-md-3">
              <div class="row g-4">
                <div class="col-12 wow fadeIn" data-wow-delay="3.0s">
                  <div class="service-item d-flex flex-column justify-content-center text-start rounded">
                    <div class="service-icon btn-square">
                      <i class="fa fa-truck fa-2x"></i>
                    </div>
                    <h3 class="mb-3">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse30" aria-expanded="false" aria-controls="collapse30">
                        Trailer Car Carrier
                      </button>
                    </h3>
                    <div id="collapse30" class="accordion-collapse collapse" aria-labelledby="headingThirty" data-bs-parent="#accordionFAQ1" style="background-color: white;">
                      <div class="accordion-body">
                        Detail
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div> -->

            <!-- Trailer Container -->
            <!-- <div class="col-md-3">
              <div class="row g-4">
                <div class="col-12 wow fadeIn" data-wow-delay="3.1s">
                  <div class="service-item d-flex flex-column justify-content-center text-start rounded">
                    <div class="service-icon btn-square">
                      <i class="fa fa-truck fa-2x"></i>
                    </div>
                    <h3 class="mb-3">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse31" aria-expanded="false" aria-controls="collapse31">
                        Trailer Container
                      </button>
                    </h3>
                    <div id="collapse31" class="accordion-collapse collapse" aria-labelledby="headingThirtyOne" data-bs-parent="#accordionFAQ1" style="background-color: white;">
                      <div class="accordion-body">
                        Detail
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div> -->


          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Armada End -->


  <!-- FAQs  -->
  <div class="container-fluid py-5">
    <div class="container py-5">
      <div class="mx-auto text-center wow fadeIn" data-wow-delay="0.1s" style="max-width: 500px">
        <div class="btn btn-sm border rounded-pill text-danger px-3 mb-3">Popular FAQs</div>
        <h1 class="mb-4">Frequently Asked Questions</h1>
      </div>
      <div class="row">
        <div class="col-lg-12">
          <div class="accordion" id="accordionFAQ1">
            @foreach ($faqgeneral as $no => $valueGeneral)
            <div class="accordion-item wow fadeIn" data-wow-delay="0.1s">
              <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne{{ $valueGeneral->id }}" aria-expanded="false" aria-controls="collapseOne">{{ $valueGeneral->pertanyaan }}</button>
              </h2>
              <div id="collapseOne{{ $valueGeneral->id }}" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionFAQ1">
                <div class="accordion-body">
                    {!! $valueGeneral->jawaban !!}
                </div>
              </div>
            </div>
            @endforeach
          </div>
        </div>
      </div>


      <div class="mx-auto text-center wow fadeIn" data-wow-delay="0.1s" style="max-width: 500px">
        <div class="btn btn-sm border rounded-pill text-danger px-3 mb-3">Kerjasama Perusahaan Pemilik Muatan</div>
        <br>
      </div>
      <div class="row">
        <div class="col-lg-12">

          <div class="accordion" id="accordionFAQ1">

            @foreach ($faqmuatan as $no => $valueMuatan)
            <div class="accordion-item wow fadeIn" data-wow-delay="0.1s">
              <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne{{ $valueMuatan->id }}" aria-expanded="false" aria-controls="collapseOne">{{ $valueMuatan->pertanyaan }}</button>
              </h2>
              <div id="collapseOne{{ $valueMuatan->id }}" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionFAQ1">
                <div class="accordion-body">
                    {!! $valueMuatan->jawaban !!}
                </div>
              </div>
            </div>
            @endforeach

          </div>

        </div>
      </div>

      <div class="mx-auto text-center wow fadeIn" data-wow-delay="0.1s" style="max-width: 500px">
        <div class="btn btn-sm border rounded-pill text-danger px-3 mb-3">Kerjasama Perusahaan Pemilik Ekspedisi</div>
        <br>
      </div>
      <div class="row">
        <div class="col-lg-12">
          <div class="accordion" id="accordionFAQ1">

            @foreach ($faqekspedisi as $no => $valueEkspedisi)
            <div class="accordion-item wow fadeIn" data-wow-delay="0.1s">
              <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne{{ $valueEkspedisi->id }}" aria-expanded="false" aria-controls="collapseOne">{{ $valueEkspedisi->pertanyaan }}</button>
              </h2>
              <div id="collapseOne{{ $valueEkspedisi->id }}" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionFAQ1">
                <div class="accordion-body">
                    {!! $valueEkspedisi->jawaban !!}
                </div>
              </div>
            </div>
            @endforeach

          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- FAQs  -->

  <!-- Aplikasi Kami -->
  <div class="container-fluid bg-dark newsletter py-5">
    <div class="container">
      <div class="row g-5 align-items-center">
        <div class="col-md-6 ps-lg-0 pt-5 pt-md-0 text-start wow fadeIn" data-wow-delay="0.3s">
          <img class="img-fluid" src="{{ asset('assets_landingpage/img/car.png')}}" alt="" />
        </div>
        <div class="col-md-6 py-5 wow fadeIn text-center" data-wow-delay="0.5s">
          <div class="btn btn-sm border rounded-pill text-white px-3 mb-3">Aplikasi</div>
          <h1 class="text-white mb-4">Download Aplikasi Kurirmoo!!</h1>
          <div class="position-relative w-100 mt-3 mb-2 justify-content-center">
            <div class="container">
              <!-- App Store button -->
              <!-- <a href="/" target="_blank" class="market-btn apple-btn" role="button">
                  <span class="market-button-subtitle">Download on the</span>
                  <span class="market-button-title">App Store</span>
                </a>
                <br />
                <br /> -->
              <!-- Google Play button -->
              <a href="/" target="_blank" class="market-btn google-btn" role="button">
                <span class="market-button-subtitle">Download on the</span>
                <span class="market-button-title">Google Play</span>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Aplikasi Kami -->


  <!-- Tutorial Aplikasi -->
  <div class="container-fluid py-5 bg-light" id="tutor_aplikasi">
    <div class="container">
      <div class="mx-auto text-center wow fadeIn" data-wow-delay="0.1s" style="max-width: 500px">
        <div class="btn btn-sm border rounded-pill text-danger px-3 mb-3">Aplikasi</div>
        <h1 class="mb-4">Tutorial Aplikasi Kurirmoo</h1>
      </div>
      <div class="row justify-content-center">
        @foreach ($tutorial as $no => $valueTutorial)
        <div class="col-lg-4 mb-4">
          <div class="video-container">
            <iframe src="{{ $valueTutorial->link_youtube }}" frameborder="0" width="460" height="215" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </div>
        </div>
        @endforeach

        {{-- <div class="col-lg-4 mb-4">
          <div class="video-container">
            <iframe src="https://www.youtube.com/embed/vD-m0VkxeHg?si=ufk2coZiA3EnisHt" frameborder="0" width="460" height="215" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </div>
        </div>
        <div class="col-lg-4 mb-4">
          <div class="video-container">
            <iframe src="https://www.youtube.com/embed/ygx4VDWAoB8?si=XPdtyZ6Z8chFZkS4" frameborder="0" width="460" height="215" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </div>
        </div>
        <div class="col-lg-4 mb-4">
          <div class="video-container">
            <iframe src="https://www.youtube.com/embed/_2kqIksilJU?si=Yw9zfiIPjFoqUIIR" frameborder="0" width="460" height="215" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </div>
        </div>
        <div class="col-lg-4 mb-4">
          <div class="video-container">
            <iframe src="https://www.youtube.com/embed/EO2niaXWW0Y?si=tzPdiw5Pyf3WAuJs" frameborder="0" width="460" height="215" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </div>
        </div> --}}
      </div>
    </div>
  </div>
  </div>
  <!-- Tutorial Aplikasi -->


  <!-- Form Start -->
  <div class="container-fluid py-5">
    <div class="container py-5">
      <div class="mx-auto text-center wow fadeIn" data-wow-delay="0.1s" style="max-width: 500px">
        <div class="btn btn-sm border rounded-pill text-danger px-3 mb-3">Form Kerjasama</div>
        <h1 class="mb-4">Kerjasama</h1>
      </div>
      <div class="row justify-content-center">

        <div class="col-lg-12">
          <iframe src="https://docs.google.com/forms/d/e/1FAIpQLSc2F2xRcFHHF12djcGouFzDCrN14WcMt6REtAOFggzhVdDjrQ/viewform?embedded=true" width="100%" height="1566" frameborder="0" marginheight="0" marginwidth="0">Loading…</iframe>
        </div>
        {{-- <div class="col-lg-7">
          <p class="text-center mb-4">Formulir untuk kerjasama dengan Kurirmoo.</p>
          <div class="wow fadeIn" data-wow-delay="0.3s">
            <form>
              <div class="row g-3">
                <div class="col-md-6">
                  <div class="form-floating">
                    <input type="text" class="form-control" id="name" placeholder="Your Name" />
                    <label for="name">Your Name</label>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-floating">
                    <input type="email" class="form-control" id="email" placeholder="Your Email" />
                    <label for="email">Your Email</label>
                  </div>
                </div>
                <div class="col-12">
                  <div class="form-floating">
                    <input type="text" class="form-control" id="subject" placeholder="Subject" />
                    <label for="subject">Subject</label>
                  </div>
                </div>
                <div class="col-12">
                  <div class="form-floating">
                    <textarea class="form-control" placeholder="Leave a message here" id="message" style="height: 150px"></textarea>
                    <label for="message">Message</label>
                  </div>
                </div>
                <div class="col-12">
                  <button class="btn btn-danger w-100 py-3" type="submit">Send Message</button>
                </div>
              </div>
            </form>
          </div>
        </div> --}}
      </div>
    </div>
  </div>
  <!-- Form End -->

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
          <a class="btn btn-link" href="#about-us">About Us</a>
          <a class="btn btn-link" href="/privacy-policy" >Privacy Policy</a>
          <a class="btn btn-link" href="/syarat-ketentuan" >Syarat dan Ketentuan</a>
        </div>
        <div class="col-md-4 col-lg-3 wow fadeIn" data-wow-delay="0.5s">
          <img class="img-fluid" src="{{ asset('assets_landingpage/img/logo-footer.jpg')}}" alt="" width="600px" />
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

