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
            {!! Str::substr($about->desc, 0, 400) !!} ...
            {{-- {!! $about->desc !!} --}}
          </p>
          <a class="btn btn-danger rounded-pill px-4 me-3 mb-5" href="/detail-about-us">Read More</a>
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
            <a class="btn btn-outline-danger btn-square me-3" href="{{ $kontak->instagram }}" target="_blank"><i class="fab fa-instagram"></i></a>
            <a class="btn btn-outline-danger btn-square me-3" href="{{ $kontak->youtube }}" target="_blank"><i class="fab fa-youtube"></i></a>
            <a class="btn btn-outline-danger btn-square me-3" href="mailto:{{ $kontak->email }}"><i class="fa fa-envelope"></i></a>
            <a class="btn btn-outline-danger btn-square " href="https://wa.me/{{ $kontak->no_hp }}"><i class="fab fa-whatsapp"></i></a>
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
            @foreach ($jenismuatan as $no => $valueJenismuatan)
            <div class="col-md-3">
              <div class="row g-4">
                <div class="col-12 wow fadeIn" data-wow-delay="0.1s">
                  <div class="service-item d-flex flex-column justify-content-center text-start rounded">
                    <div class="service-icon btn-square">
                      <i class="{{ $valueJenismuatan->icon }}"></i>
                    </div>
                    <h3 class="mb-3">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#data{{ $valueJenismuatan->id }}" aria-expanded="false" aria-controls="kardus" style="font-size: 17px;">{{ $valueJenismuatan->judul }}
                      </button>
                    </h3>
                    {{-- <div id="data{{ $valueJenismuatan->id }}" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionFAQ1" style="background-color: white;">
                      <div class="accordion-body">
                        {!! $valueJenismuatan->desc !!}
                      </div>
                    </div> --}}
                    <div id="data{{ $valueJenismuatan->id }}" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionFAQ1" >
                        <div class="accordion-body"  style="color: white;">
                          {!! $valueJenismuatan->desc !!}
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
  </div>
  </div>
  <!-- Jenis Muatan -->

   <!-- Artikel Slide -->
   <div class="container-fluid bg-light py-5">
    <div class="container py-5">
      <div class="row g-5">
        <div class="col-lg-8 wow fadeIn" data-wow-delay="0.5s">
          <div class="owl-carousel testimonial-carousel border-start border-primary">
            @foreach ($artikel as $no => $valueArtikel)
            <div class="testimonial-item ps-5" >
              <i class="fa fa-quote-left fa-2x text-danger mb-3"></i>
              <h4 class="fs-4">{{ $valueArtikel->judul }}</h4>
            <div class="d-flex align-items-center">
                <div class="ps-3">
                      <img src="{{ asset('storage/' . $valueArtikel->gambar) }}" class="d-block w-100" alt="..." width="auto" height="auto">
                      <p class="mb-4">{!! Str::substr($valueArtikel->desc, 0, 50) !!} ...</p>
                  <a class="btn btn-danger rounded-pill px-4" href="/artikel/{{ $valueArtikel->id }}">Read More</a>
                </div>
              </div>
            </div>
            @endforeach

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
          <h1 class="mb-4 text-white">Jangkauan Area Seluruh Indonesia</h1>
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
          <div class="row g-4 justify-content-center">

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
          <img class="img-fluid" src="{{ asset('assets_landingpage/img/car.png')}}" alt="" width="900px"/>
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
              <a href="{{ $kontak->playstore }}" target="_blank" class="market-btn google-btn" role="button">
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

