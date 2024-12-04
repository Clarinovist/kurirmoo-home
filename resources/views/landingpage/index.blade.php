<x-landingpage.app>
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
          <h1 class="display-4 text-white mb-4 animated slideInRight" style="font-size: 100px;">Kurirmoo<span class="text-dark">.</span></h1>
          <h3 class="text-white mb-4 animated slideInRight">YOUR DIGITAL LOGISTICS SOLUTION</h3>
          <a href="#about-us" class="btn btn-light py-sm-3 px-sm-5 rounded-pill me-3 animated slideInRight">Tentang kami</a>
          <a href="#" class="btn btn-outline-light py-sm-3 px-sm-5 rounded-pill animated slideInRight">Contact Us</a>
        </div>
        <div class="col-lg-8 align-self-end text-center text-lg-end">
          <img class="img-fluid" src="{{ asset('assets_landingpage/img/img-hero.png')}}" alt="" width="auto" />
        </div>
      </div>
    </div>

    <!-- <div class="icon-boxes position-relative mb-5" data-aos="fade-up" data-aos-delay="200">
        <div class="container position-relative">
          <div class="row gy-4 mt-5">
            <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="10000">
                  <div class="icon-box">
                    <div class="icon"><i class="bi bi-gem"></i></div>
                    <h4 class="title"><a href="#" class="stretched-link">Inovasi Berbasis Teknologi</a></h4>
                  </div>
                </div>
                <div class="carousel-item" data-bs-interval="2000">
                  <div class="icon-box">
                    <div class="icon"><i class="bi bi-gem"></i></div>
                    <h4 class="title"><a href="#" class="stretched-link">Keamanan dan Transparansi Total</a></h4>
                  </div>
                </div>
                <div class="carousel-item">
                  <div class="icon-box">
                    <div class="icon"><i class="bi bi-gem"></i></div>
                    <h4 class="title"><a href="#" class="stretched-link">Dedicated Enterprise Support</a></h4>
                  </div>
                </div>
                <div class="carousel-item">
                  <div class="icon-box">
                    <div class="icon"><i class="bi bi-gem"></i></div>
                    <h4 class="title"><a href="#" class="stretched-link">Dukungan Pelanggan Kelas Satu</a></h4>
                  </div>
                </div>
              </div>
              <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
            </div>
          </div>
        </div>
      </div> -->
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

  <!-- Testimonial Start -->
  <div class="container-xxl py-5">
    <div class="container py-5">
      <div class="row g-5">
      </div>
      <div class="col-lg-12 wow fadeIn" data-wow-delay="0.5s">
        <div class="owl-carousel testimonial-carousel border-start border-danger">
          <div class="testimonial-item ps-5">
            <div class="d-flex align-items-center">
              <img src="{{ asset('assets_landingpage/img/iklan/iklan1.png')}}" class="d-block w-100" alt="..." width="auto" height="400px">
            </div>
          </div>
          <div class="testimonial-item ps-5">
            <div class="d-flex align-items-center">
              <img src="{{ asset('assets_landingpage/img/iklan/iklan2.png')}}" class="d-block w-100" alt="..." width="auto" height="400px">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
  </div>
  <!-- Testimonial End -->

  <!-- Tentang Kami Start -->
  <div class="container-fluid py-5" id="about-us">
    <div class="container">
      <div class="row g-5 align-items-center">
        <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
          <div class="about-img">
            <img class="img-fluid" src="{{ asset('assets_landingpage/img/about.jpg')}}" />
          </div>
        </div>
        <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
          <div class="btn btn-sm border rounded-pill text-danger px-3 mb-3">About Us</div>
          <h1 class="mb-4">KURIRMOO</h1>
          <p class="mb-4">
            Menjadi perusahaan logistik digital terdepan di Indonesia yang berkomitmen untuk mentransformasi bisnis melalui solusi logistik yang cepat, transparan, dan berteknologi tinggi memberikan kemudahan bagi setiap bisnis untuk
            berkembang dengan dukungan layanan logistik yang dapat diandalkan dan inovatif.
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
            <a class="btn btn-outline-danger btn-square me-3" href="https://www.youtube.com/channel/UCAFM4e005bvMjJnNPevSBeA" target="_blank"><i class="fab fa-youtube"></i></a>
            <a class="btn btn-outline-danger btn-square me-3" href=""><i class="fab fa-google"></i></a>
            <a class="btn btn-outline-danger btn-square " href=""><i class="fab fa-whatsapp"></i></a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Tentang Kami End -->

  <!-- Jenis Muatan -->
  <div class="container-fluid bg-light mt-5 py-5">
    <div class="container py-5">
      <div class="row g-5 align-items-center">
        <div class="mx-auto text-center wow fadeIn" data-wow-delay="0.1s" style="max-width: 500px">
          <div class="btn btn-sm border rounded-pill text-danger px-3 mb-3">Jenis Muatan</div>
          <h1 class="mb-4">Jenis Muatan</h1>
        </div>
        <div class="col-lg-12">
          <div class="row g-4">
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
                      <i class="bi bi-box fa-2x"></i>
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

  <!-- jangkauan Area Start -->
  <div class="container-fluid feature pt-5 text-center" style="background-color: #c50303;">
    <div class="container mb-2">
      <div class="row g-5">
        <div class="mx-auto text-center wow fadeIn" data-wow-delay="0.1s">
          <div class="btn btn-sm border rounded-pill text-white px-3 mb-3">Jangkauan Area Layanan</div>
          <h1 class="mb-4 text-white">Jangkauan Area</h1>
        </div>
        <div class="col-lg-4 wow fadeIn mb-2" data-wow-delay="0.3s">
          <h2 class="text-dark mb-4">Jawa Timur</h2>
          <div class="text-white mb-2">Surabaya</div>
          <div class="text-white mb-2">Kediri</div>
          <div class="text-white mb-2">Malang</div>
          <div class="text-white mb-2">Mojokerto</div>
        </div>
        <div class="col-lg-4 wow fadeIn mb-2" data-wow-delay="0.3s">
          <h2 class="text-dark mb-4">Jawa Tengah</h2>
          <div class="text-white mb-2">Solo</div>
          <div class="text-white mb-2">Semarang</div>
          <div class="text-white mb-2">Blora</div>
        </div>
        <div class="col-lg-4 wow fadeIn mb-2" data-wow-delay="0.3s">
          <h2 class="text-dark mb-4">Jawa Barat</h2>
          <div class="text-white mb-2">Bandung</div>
          <div class="text-white mb-2">Cirebon</div>
          <div class="text-white mb-2">Purwakarta</div>
        </div>
      </div>
    </div>
  </div>
  <!-- jangkauan Area End -->

  <!-- Keunggulan Start -->
  <div class="container-fluid bg-light mt-5 py-5" id="Keunggulan">
    <div class="container py-5">
      <div class="row g-5 align-items-center">
        <div class="mx-auto text-center wow fadeIn" data-wow-delay="0.1s" style="max-width: 500px">
          <div class="btn btn-sm border rounded-pill text-danger px-3 mb-3">Keunggulan</div>
          <h1 class="mb-4">Keunggulan Kurirmoo</h1>
        </div>
        <div class="col-lg-12">
          <div class="row g-4">
            <div class="col-md-3">
              <div class="row g-4">
                <div class="col-12 wow fadeIn" data-wow-delay="0.1s">
                  <div class="service-item d-flex flex-column justify-content-center text-start rounded">
                    <div class="service-icon btn-square">
                      <i class="fa fa-truck fa-2x"></i>
                    </div>
                    <h3 class="mb-3">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne" style="font-size: 17px;">Beragam armada pengiriman
                      </button>
                    </h3>
                    <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionFAQ1" style="background-color: white;">
                      <div class="accordion-body">
                        Kami menyediakan berbagai macam armada yang dirancang untuk memenuhi kebutuhan logistik Anda dengan efisien dan terpercaya. Mulai dari  pick-up dan truk untuk muatan sedang, hingga armada besar seperti truk box dan kontainer untuk barang berukuran besar. Armada kami siap mendukung pengiriman Anda dengan standar keamanan tinggi dan dilengkapi teknologi GPS untuk memastikan ketepatan waktu.
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
                    </div>
                    <h3 class="mb-3">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2" aria-expanded="false" aria-controls="collapse2" style="font-size: 17px;">Real-Time Tracking & Digital Delivery
                      </button>
                    </h3>
                    <div id="collapse2" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionFAQ1" style="background-color: white;">
                      <div class="accordion-body">
                        Dapatkan akses penuh ke setiap pengiriman di mana saja dan kapan saja melalui platform kami yang dilengkapi teknologi pelacakan real-time. Transparansi dan akurasi adalah prioritas kami, memberi pelanggan ketenangan dalam proses pengiriman mereka.
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
                      <i class="fa fa-sort fa-2x"></i>
                    </div>
                    <h3 class="mb-3">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse3" aria-expanded="false" aria-controls="collapse3" style="font-size: 17px;">Seamless Logistics Platform
                      </button>
                    </h3>
                    <div id="collapse3" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionFAQ1" style="background-color: white;">
                      <div class="accordion-body">
                        Melalui aplikasi Kurirmoo, atur pengiriman, pilih rute, dan lacak semua kebutuhan logistik Anda hanya dalam beberapa klik. Kami menyediakan satu platform yang mengintegrasikan semua layanan, mulai dari manajemen armada hingga laporan analitik.
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
                      <i class="bi bi-graph-up fa-2x"></i>
                    </div>
                    <h3 class="mb-3">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse4" aria-expanded="false" aria-controls="collapse4" style="font-size: 17px;">Logistics Advisory & Analytics
                      </button>
                    </h3>
                    <div id="collapse4" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionFAQ1" style="background-color: white;">
                      <div class="accordion-body">
                        Kami membantu Anda membuat keputusan berbasis data untuk setiap aspek rantai pasok. Layanan konsultasi kami memberikan wawasan strategis yang membantu bisnis Anda memaksimalkan efisiensi dan mengoptimalkan biaya.
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
  <!-- Keunggulan End -->

  <!-- Armada Start -->
  <div class="container-fluid mt-5 py-5" id="armada">
    <div class="container py-5">
      <div class="row g-5 align-items-center">
        <div class="mx-auto text-center wow fadeIn" data-wow-delay="0.1s" style="max-width: 500px">
          <div class="btn btn-sm border rounded-pill text-danger px-3 mb-3">Armada</div>
          <h1 class="mb-4">Armada Kurirmoo</h1>
        </div>
        <div class="col-lg-12">
          <div class="row g-4">

            <!-- Pickup L300 Bak -->
            <div class="col-md-3">
              <div class="row g-4">
                <div class="col-12 wow fadeIn" data-wow-delay="0.1s">
                  <div class="service-item d-flex flex-column justify-content-center text-start rounded">
                    <div class="service-icon btn-square">

                      <i class="fa fa-truck fa-3x"></i>
                    </div>
                    <h3 class="mb-3 text-center">
                      <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#Pickup">
                        Pickup L300  Bak
                      </button>
                    </h3>
                    <div class="modal fade" id="Pickup" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="text-dark">Pickup L300 Bak</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">
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
                                  <th scope="row">Panjang : 242 cm, Lebar : 144 cm, Tinggi : 30 cm, Dimensi : 6 CBM</th>
                                  <td>Berat Kosong : 800 Kg, Berat Kosong : 800 Kg</td>
                                  <td>Panjang : 372 cm, Lebar : 183 cm, Tinggi : 182 cm</td>
                                  <td>Model : G15A, Kapasitas Silinder : 1493 cc, Tenaga Maksimum (PS/rpm) : 78,8/5500</td>
                                  <td>Ukuran Ban: 165R 13C 94/92R 8PR, </td>
                                </tr>
                              </tbody>
                            </table>
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

            <!-- Pickup Box -->
            <div class="col-md-3">
              <div class="row g-4">
                <div class="col-12 wow fadeIn" data-wow-delay="0.2s">
                  <div class="service-item d-flex flex-column justify-content-center text-start rounded">
                    <div class="service-icon btn-square">
                      <i class="fa fa-truck fa-3x"></i>
                    </div>
                    <h3 class="mb-3 text-center">
                      <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#PickupBox">
                        Pickup Bak
                      </button>
                    </h3>
                    <div class="modal fade" id="PickupBox" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="text-dark">Pickup Bak</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">
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
                                  <th scope="row">Panjang : 237 cm, Lebar : 155 cm, Tinggi : 129 cm, Dimensi : 4 CBM</th>
                                  <td>Berat Kosong : 1 Ton, Berat Maksimal : 1,5 Ton</td>
                                  <td>Panjang : 428 cm, Lebar : 167 cm, Tinggi : 207 cm</td>
                                  <td>Model : 3SZ - VE, DOHC VVTi berpendingin air, Kapasitas Silinder : 1298 cc, Tenaga Maksimum (PS/rpm) : 88/6000</td>
                                  <td>Ukuran Ban: 175 R13 - 8PR</td>
                                </tr>
                              </tbody>
                            </table>
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

            <!-- Pickup Refeer -->
            <div class="col-md-3">
              <div class="row g-4">
                <div class="col-12 wow fadeIn" data-wow-delay="0.3s">
                  <div class="service-item d-flex flex-column justify-content-center text-start rounded">
                    <div class="service-icon btn-square">
                      <i class="fa fa-truck fa-3x"></i>
                    </div>
                    <h3 class="mb-3 text-center">
                      <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#PickupRefeer">
                        Pickup Refeer
                      </button>
                    </h3>
                    <div class="modal fade" id="PickupRefeer" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="text-dark">Pickup Refeer</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">
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
                                  <th scope="row">Panjang : 237 cm, Lebar : 155 cm, Tinggi : 129 cm, Dimensi : 4 CBM, Suhu Maksimum : -20 Derajat</th>
                                  <td>Berat Kosong : 1 Ton, Berat Maksimal : 1,5 Ton</td>
                                  <td>Panjang : 428 cm, Lebar : 167 cm, Tinggi : 207 cm</td>
                                  <td>Model : 3SZ - VE, DOHC VVTi berpendingin air, Kapasitas Silinder : 1298 cc, Tenaga Maksimum (PS/rpm) : 88/6000</td>
                                  <td>Ukuran Ban: 175 R13 - 8PR</td>
                                </tr>
                              </tbody>
                            </table>
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

            <!-- Granmax Box -->
            <div class="col-md-3">
              <div class="row g-4">
                <div class="col-12 wow fadeIn" data-wow-delay="0.4s">
                  <div class="service-item d-flex flex-column justify-content-center text-start rounded">
                    <div class="service-icon btn-square">
                      <i class="fa fa-truck fa-3x"></i>
                    </div>
                    <h3 class="mb-3 text-center">
                      <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#Granmax">
                        Granmax Box
                      </button>
                    </h3>
                    <div class="modal fade" id="Granmax" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="text-dark">Granmax Box</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">
                            <table class="table">
                              <thead>
                                <tr>
                                  <th scope="col">Berat</th>
                                  <th scope="col">Ukuran Mobil</th>
                                  <th scope="col">Mesin</th>
                                  <th scope="col">Roda dan Ban</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <th scope="row">Berat Kosong : 2 Ton, Berat Maksimal : 3 Ton</th>
                                  <td>BPanjang : 150 cm, Lebar : 160 cm, Tinggi : 108 cm</td>
                                  <td>Model : K3 - DE, DOHC, Kapasitas Silinder : 1298 cc</td>
                                  <td>Ukuran Ban : 165 R13 - C</td>
                                </tr>
                              </tbody>
                            </table>
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

            <!-- Granmax Blindvan -->
            <div class="col-md-3">
              <div class="row g-4">
                <div class="col-12 wow fadeIn" data-wow-delay="0.4s">
                  <div class="service-item d-flex flex-column justify-content-center text-start rounded">
                    <div class="service-icon btn-square">
                      <i class="fa fa-truck fa-3x"></i>
                    </div>
                    <h3 class="mb-3 text-center">
                      <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#GranmaxBlin">
                        Granmax Blindvan
                      </button>
                    </h3>
                    <div class="modal fade" id="GranmaxBlin" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="text-dark"> Granmax Blindvan</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">
                            <table class="table">
                              <thead>
                                <tr>
                                  <th scope="col">Berat</th>
                                  <th scope="col">Ukuran Mobil</th>
                                  <th scope="col">Mesin</th>
                                  <th scope="col">Roda dan Ban</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <th scope="row">Berat Kosong : 2 Ton, Berat Maksimal : 3 Ton</th>
                                  <td>BPanjang : 150 cm, Lebar : 160 cm, Tinggi : 108 cm</td>
                                  <td>Model : K3 - DE, DOHC, Kapasitas Silinder : 1298 cc</td>
                                  <td>Ukuran Ban : 165 R13 - C</td>
                                </tr>
                              </tbody>
                            </table>
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


            <!-- Colt Diesel Engkel Box -->
            <div class="col-md-3">
              <div class="row g-4">
                <div class="col-12 wow fadeIn" data-wow-delay="0.6s">
                  <div class="service-item d-flex flex-column justify-content-center text-start rounded">
                    <div class="service-icon btn-square">
                      <i class="fa fa-truck fa-3x"></i>
                    </div>
                      <h3 class="mb-3 text-center">
                        <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#Coltengkel">
                          Colt Diesel Engkel Box
                        </button>
                      </h3>
                      <div class="modal fade" id="Coltengkel" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="text-dark">Colt Diesel Engkel Box</h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
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
                                    <th scope="row">Panjang : 350 cm, Lebar : 160 cm, Tinggi : 80 cm</th>
                                    <td>Berat Kosong : 1,5 Ton, Berat Maksimal : 5,1 Ton</td>
                                    <td>Panjang : 459 cm, Lebar : 169 cm, Tinggi : 212 cm</td>
                                    <td>Model : 4JB1-TC, Kapasitas Silinder : 2,771, Tenaga Maksimum (PS/rpm) : 100 / 3,400</td>
                                    <td>Ukuran Ban: 7.50 - 15 - 10PR</td>
                                  </tr>
                                </tbody>
                              </table>
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

            <!-- Colt Diesel Engkel Terbuka -->
            <div class="col-md-3">
              <div class="row g-4">
                <div class="col-12 wow fadeIn" data-wow-delay="0.7s">
                  <div class="service-item d-flex flex-column justify-content-center text-start rounded">
                    <div class="service-icon btn-square">
                      <i class="fa fa-truck fa-3x"></i>
                    </div>
                      <h3 class="mb-3 text-center">
                        <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#ColtengkelTerbuka">
                          Colt Diesel Engkel Terbuka
                        </button>
                      </h3>
                      <div class="modal fade" id="ColtengkelTerbuka" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="text-dark">Colt Diesel Engkel Terbuka</h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
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
                                    <th scope="row">Panjang : 350 cm, Lebar : 173 cm, Dimensi : 11 CBM</th>
                                    <td>Berat Kosong : 1,8 Ton, Berat Maksimal : 5 Ton</td>
                                    <td>Panjang : 473 cm, Lebar : 175 cm, Tinggi : 205 cm</td>
                                    <td>Model : 4D34-2AT5, Kapasitas Silinder : 3.908, Tenaga Maksimum (PS/rpm) : 110/2.900</td>
                                    <td>-</td>
                                  </tr>
                                </tbody>
                              </table>
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

            <!-- Colt Diesel Engkel Refeer Box -->
            <div class="col-md-3">
              <div class="row g-4">
                <div class="col-12 wow fadeIn" data-wow-delay="0.8s">
                  <div class="service-item d-flex flex-column justify-content-center text-start rounded">
                    <div class="service-icon btn-square">
                      <i class="fa fa-truck fa-3x"></i>
                    </div>
                    <h3 class="mb-3 text-center">
                      <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#ColtengkelRefeer">
                        Colt Diesel Engkel Refeer Box
                      </button>
                    </h3>
                    <div class="modal fade" id="ColtengkelRefeer" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="text-dark">Colt Diesel Engkel Refeer Box</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">
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
                                  <th scope="row">Panjang : 350 cm, Lebar : 173 cm, Tinggi : 200 cm, Dimensi : 9 CBM</th>
                                  <td>Berat Kosong : 1,8 Ton, Berat Maksimal : 5 Ton</td>
                                  <td>Panjang : 473 cm, Lebar : 175 cm</td>
                                  <td>Model : 4D34-2AT5, Kapasitas Silinder : 3.908</td>
                                  <td>-</td>
                                </tr>
                              </tbody>
                            </table>
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

            <!-- Colt Diesel Engkel Bak -->
            <div class="col-md-3">
              <div class="row g-4">
                <div class="col-12 wow fadeIn" data-wow-delay="0.9s">
                  <div class="service-item d-flex flex-column justify-content-center text-start rounded">
                    <div class="service-icon btn-square">
                      <i class="fa fa-truck fa-3x"></i>
                    </div>
                    <h3 class="mb-3 text-center">
                      <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#ColtengkelBak">
                        Colt Diesel Engkel Bak
                      </button>
                    </h3>
                    <div class="modal fade" id="ColtengkelBak" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="text-dark">Colt Diesel Engkel Bak</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">
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
                                  <th scope="row">Panjang : 350 cm, Lebar : 160 cm, Tinggi : 80 cm</th>
                                  <td>Berat Kosong : 1,5 Ton, Berat Maksimal : 5,1 Ton</td>
                                  <td>Panjang : 459 cm, Lebar : 169 cm</td>
                                  <td>Model : 4JB1-TC, Kapasitas Silinder : 2,771</td>
                                  <td>Ukuran Ban: 7.50 - 15 - 10PR</td>
                                </tr>
                              </tbody>
                            </table>
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

  <!-- Artikel Slide -->
  <div class="container-xxl py-5">
    <div class="container py-5">
      <div class="row g-5">
        <div class="col-lg-8 wow fadeIn" data-wow-delay="0.5s">
          <div class="owl-carousel testimonial-carousel border-start border-primary">
            <div class="testimonial-item ps-5" style="background-image: url('{{ asset('assets_landingpage/img/iklan/iklan1.png')}}'); background-size: cover; background-repeat: no-repeat; background-position: center;">
              <i class="fa fa-quote-left fa-2x text-danger mb-3"></i>
              <p class="fs-4">Artikel 1</p>
              <div class="d-flex align-items-center">
                <div class="ps-3">
                  <a class="btn btn-danger rounded-pill px-4" href="#">Read More</a>
                </div>
              </div>
            </div>
            <div class="testimonial-item ps-5" style="background-image: url('{{ asset('assets_landingpage/img/iklan/iklan2.png')}}'); background-size: cover; background-repeat: no-repeat; background-position: center;">
              <i class="fa fa-quote-left fa-2x text-danger mb-3"></i>
              <p class="fs-4">Artikel 2</p>
              <div class="d-flex align-items-center">
                <div class="ps-3">
                  <a class="btn btn-danger rounded-pill px-4" href="#">Read More</a>
                </div>
              </div>
            </div>
            <div class="testimonial-item ps-5" style="background-image: url('{{ asset('assets_landingpage/img/iklan/iklan1.png')}}'); background-size: cover; background-repeat: no-repeat; background-position: center;">
              <i class="fa fa-quote-left fa-2x text-danger mb-3"></i>
              <p class="fs-4">Artikel 3</p>
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
            <div class="accordion-item wow fadeIn" data-wow-delay="0.1s">
              <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">Apa itu Kurirmoo?</button>
              </h2>
              <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionFAQ1">
                <div class="accordion-body">
                  Kurirmoo adalah aplikasi digital logistik yang menawarkan layanan ekspedisi dan pengiriman barang dengan berbagai pilihan armada, mulai dari motor hingga truk besar. Kami memberikan solusi logistik cepat, aman, dan terpercaya.
                </div>
              </div>
            </div>
            <div class="accordion-item wow fadeIn" data-wow-delay="0.2s">
              <h2 class="accordion-header" id="headingTwo">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">Layanan apa saja yang tersedia di Kurirmoo?</button>
              </h2>
              <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionFAQ1">
                <div class="accordion-body">
                  Kami menyediakan layanan pengiriman barang untuk kebutuhan individu maupun bisnis, pengangkutan muatan besar, layanan antar-jemput barang, dan pelacakan pengiriman secara real-time melalui GPS.
                </div>
              </div>
            </div>
            <div class="accordion-item wow fadeIn" data-wow-delay="0.2s">
              <h2 class="accordion-header" id="heading3">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse3" aria-expanded="false" aria-controls="collapse3">Bagaimana cara menggunakan layanan Kurirmoo?</button>
              </h2>
              <div id="collapse3" class="accordion-collapse collapse" aria-labelledby="heading3" data-bs-parent="#accordionFAQ1">
                <div class="accordion-body">
                  Anda cukup mengunduh aplikasi Kurirmoo, membuat akun, memilih layanan yang sesuai, memasukkan detail pengiriman, dan tim kami akan segera memproses permintaan Anda.
                </div>
              </div>
            </div>
            <div class="accordion-item wow fadeIn" data-wow-delay="0.2s">
              <h2 class="accordion-header" id="heading4">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse4" aria-expanded="false" aria-controls="collapse4">Jenis barang apa saja yang bisa dikirim melalui Kurirmoo?</button>
              </h2>
              <div id="collapse4" class="accordion-collapse collapse" aria-labelledby="heading4" data-bs-parent="#accordionFAQ1">
                <div class="accordion-body">
                  Kami melayani pengiriman berbagai jenis barang, kecuali barang berbahaya, ilegal, atau barang yang melanggar aturan hukum yang berlaku.
                </div>
              </div>
            </div>
            <div class="accordion-item wow fadeIn" data-wow-delay="0.2s">
              <h2 class="accordion-header" id="heading5">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse5" aria-expanded="false" aria-controls="collapse5">Apakah barang yang dikirim melalui Kurirmoo diasuransikan?</button>
              </h2>
              <div id="collapse5" class="accordion-collapse collapse" aria-labelledby="heading5" data-bs-parent="#accordionFAQ1">
                <div class="accordion-body">
                  Ya, kami menawarkan opsi asuransi pengiriman untuk memastikan keamanan barang Anda. Nilai dan syarat asuransi akan disesuaikan berdasarkan kesepakatan.
                </div>
              </div>
            </div>
            <div class="accordion-item wow fadeIn" data-wow-delay="0.2s">
              <h2 class="accordion-header" id="heading6">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse6" aria-expanded="false" aria-controls="heading3">Apakah Kurirmoo melayani pengiriman di luar kota atau antar pulau?</button>
              </h2>
              <div id="collapse6" class="accordion-collapse collapse" aria-labelledby="heading6" data-bs-parent="#accordionFAQ1">
                <div class="accordion-body">
                  Ya, kami melayani pengiriman ke berbagai daerah, termasuk antar kota dan antar pulau, dengan pilihan armada yang sesuai dengan kebutuhan Anda.
                </div>
              </div>
            </div>
            <div class="accordion-item wow fadeIn" data-wow-delay="0.2s">
              <h2 class="accordion-header" id="heading7">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse7" aria-expanded="false" aria-controls="collapse3">Bagaimana cara melacak pengiriman saya?</button>
              </h2>
              <div id="collapse7" class="accordion-collapse collapse" aria-labelledby="heading7" data-bs-parent="#accordionFAQ1">
                <div class="accordion-body">
                  Anda dapat melacak pengiriman secara real-time melalui aplikasi Kurirmoo. Informasi pelacakan akan tersedia di halaman pengiriman Anda.
                </div>
              </div>
            </div>
            <div class="accordion-item wow fadeIn" data-wow-delay="0.2s">
              <h2 class="accordion-header" id="heading8">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse8" aria-expanded="false" aria-controls="collapse3">Apakah Kurirmoo menyediakan layanan untuk mitra bisnis?</button>
              </h2>
              <div id="collapse8" class="accordion-collapse collapse" aria-labelledby="heading8" data-bs-parent="#accordionFAQ1">
                <div class="accordion-body">
                  Tentu! Kami memiliki program kerja sama dengan mitra bisnis untuk memenuhi kebutuhan logistik skala besar, termasuk layanan khusus dan laporan pengiriman berkala. Hubungi kami untuk informasi lebih lanjut.
                </div>
              </div>
            </div>
            <div class="accordion-item wow fadeIn" data-wow-delay="0.2s">
              <h2 class="accordion-header" id="heading9">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse9" aria-expanded="false" aria-controls="collapse3">Bagaimana cara melaporkan masalah atau keluhan?</button>
              </h2>
              <div id="collapse9" class="accordion-collapse collapse" aria-labelledby="heading9" data-bs-parent="#accordionFAQ1">
                <div class="accordion-body">
                  Jika Anda mengalami masalah, Anda dapat menghubungi tim kami melalui email di admin@kurirmoo.com atau melalui formulir kontak yang tersedia di website dan aplikasi kami.
                </div>
              </div>
            </div>
            <div class="accordion-item wow fadeIn" data-wow-delay="0.2s">
              <h2 class="accordion-header" id="heading10">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse10" aria-expanded="false" aria-controls="collapse3">Apa keunggulan Kurirmoo dibanding layanan logistik lainnya?</button>
              </h2>
              <div id="collapse10" class="accordion-collapse collapse" aria-labelledby="heading10" data-bs-parent="#accordionFAQ1">
                <div class="accordion-body">
                  Kurirmoo menawarkan fleksibilitas armada, pengiriman cepat, layanan pelanggan responsif, dan pelacakan real-time. Melalui aplikasi Kurirmoo, atur pengiriman, pilih rute, dan lacak semua kebutuhan logistik Anda hanya dalam beberapa klik. Semuanya dirancang untuk memberikan pengalaman logistik terbaik bagi pelanggan.
                </div>
              </div>
            </div>
            <div class="accordion-item wow fadeIn" data-wow-delay="0.2s">
              <h2 class="accordion-header" id="heading11">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse11" aria-expanded="false" aria-controls="collapse3">Bagaimana cara mendaftar sebagai mitra pengemudi di Kurirmoo?</button>
              </h2>
              <div id="collapse11" class="accordion-collapse collapse" aria-labelledby="heading11" data-bs-parent="#accordionFAQ1">
                <div class="accordion-body">
                  Untuk menjadi mitra pengemudi, Anda dapat mendaftar melalui aplikasi atau website kami. Lengkapi dokumen yang diperlukan, dan tim kami akan memproses aplikasi Anda secepatnya.
                </div>
              </div>
            </div>
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
            <div class="accordion-item wow fadeIn" data-wow-delay="0.1s">
              <h2 class="accordion-header" id="headingmuatan1">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#muatan1" aria-expanded="false" aria-controls="collapse3">Apa saja jenis kerja sama yang ditawarkan Kurirmoo kepada perusahaan besar??</button>
              </h2>
              <div id="muatan1" class="accordion-collapse collapse" aria-labelledby="headingmuatan1" data-bs-parent="#accordionFAQ1">
                <div class="accordion-body">
                  Kurirmoo menawarkan layanan kerja sama logistik, termasuk pengangkutan muatan reguler, layanan ekspedisi khusus, laporan pengiriman berkala, dan pengelolaan logistik terintegrasi untuk mendukung kebutuhan operasional perusahaan.
                </div>
              </div>
            </div>
          </div>
          <div class="accordion" id="accordionFAQ1">
            <div class="accordion-item wow fadeIn" data-wow-delay="0.1s">
              <h2 class="accordion-header" id="headingmuatan2">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#muatan2" aria-expanded="false" aria-controls="collapse3">2.	Apa keunggulan bekerja sama dengan Kurirmoo?</button>
              </h2>
              <div id="muatan2" class="accordion-collapse collapse" aria-labelledby="headingmuatan2" data-bs-parent="#accordionFAQ1">
                <div class="accordion-body">
                  Kami menawarkan armada yang beragam, pengiriman cepat dan aman, fleksibilitas jadwal, laporan pengiriman yang transparan, serta teknologi pelacakan real-time melalui GPS dan aplikasi.
                </div>
              </div>
            </div>
          </div>
          <div class="accordion" id="accordionFAQ1">
            <div class="accordion-item wow fadeIn" data-wow-delay="0.1s">
              <h2 class="accordion-header" id="headingmuatan3">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#muatan3" aria-expanded="false" aria-controls="collapse3">3.	Bagaimana cara memulai kerja sama dengan Kurirmoo?</button>
              </h2>
              <div id="muatan3" class="accordion-collapse collapse" aria-labelledby="headingmuatan3" data-bs-parent="#accordionFAQ1">
                <div class="accordion-body">
                  Hubungi tim kami melalui email di admin@kurirmoo.com atau formulir kontak di website untuk mendiskusikan kebutuhan Anda. Setelah diskusi awal, kami akan menyediakan dokumen kerja sama dan memulai perjanjian resmi.
                </div>
              </div>
            </div>
          </div>
          <div class="accordion" id="accordionFAQ1">
            <div class="accordion-item wow fadeIn" data-wow-delay="0.1s">
              <h2 class="accordion-header" id="headingmuatan4">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#muatan4" aria-expanded="false" aria-controls="collapse3">4.	Berapa lama jangka waktu kerja sama yang ditawarkan?</button>
              </h2>
              <div id="muatan4" class="accordion-collapse collapse" aria-labelledby="headingmuatan4" data-bs-parent="#accordionFAQ1">
                <div class="accordion-body">
                  Standar jangka waktu kerja sama kami adalah 6 bulan, namun durasi dapat disesuaikan berdasarkan kebutuhan perusahaan Anda.
                </div>
              </div>
            </div>
          </div>
          <div class="accordion" id="accordionFAQ1">
            <div class="accordion-item wow fadeIn" data-wow-delay="0.1s">
              <h2 class="accordion-header" id="headingmuatan5">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#muatan5" aria-expanded="false" aria-controls="collapse3">5.	Apakah Kurirmoo memberikan layanan eksklusif untuk mitra perusahaan?</button>
              </h2>
              <div id="muatan5" class="accordion-collapse collapse" aria-labelledby="headingmuatan5" data-bs-parent="#accordionFAQ1">
                <div class="accordion-body">
                  Ya, kami menyediakan layanan eksklusif untuk mitra perusahaan, termasuk armada khusus, jadwal yang disesuaikan, dan prioritas layanan.
                </div>
              </div>
            </div>
          </div>
          <div class="accordion" id="accordionFAQ1">
            <div class="accordion-item wow fadeIn" data-wow-delay="0.1s">
              <h2 class="accordion-header" id="headingmuatan1">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#muatan6" aria-expanded="false" aria-controls="collapse6">6.	Bagaimana sistem pembayaran untuk layanan kerja sama ini?</button>
              </h2>
              <div id="muatan6" class="accordion-collapse collapse" aria-labelledby="headingmuatan6" data-bs-parent="#accordionFAQ1">
                <div class="accordion-body">
                  Sistem pembayaran dilakukan 10 hari setelah invoice diterima. Ketentuan ini dapat dinegosiasikan lebih lanjut sesuai kebutuhan perusahaan Anda.
                </div>
              </div>
            </div>
          </div>
          <div class="accordion" id="accordionFAQ1">
            <div class="accordion-item wow fadeIn" data-wow-delay="0.1s">
              <h2 class="accordion-header" id="headingmuatan7">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#muatan7" aria-expanded="false" aria-controls="collapse3">7.	Apakah Kurirmoo menyediakan asuransi untuk barang yang dikirim?</button>
              </h2>
              <div id="muatan7" class="accordion-collapse collapse" aria-labelledby="headingmuatan7" data-bs-parent="#accordionFAQ1">
                <div class="accordion-body">
                  Ya, kami menyediakan opsi asuransi barang yang nilainya akan disesuaikan dengan kesepakatan antara Kurirmoo dan perusahaan mitra.
                </div>
              </div>
            </div>
          </div>
          <div class="accordion" id="accordionFAQ1">
            <div class="accordion-item wow fadeIn" data-wow-delay="0.1s">
              <h2 class="accordion-header" id="headingmuatan8">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#muatan8" aria-expanded="false" aria-controls="collapse3">8.	Bagaimana mekanisme pelaporan pengiriman untuk mitra perusahaan?</button>
              </h2>
              <div id="muatan8" class="accordion-collapse collapse" aria-labelledby="headingmuatan8" data-bs-parent="#accordionFAQ1">
                <div class="accordion-body">
                  Kami menyediakan laporan pengiriman secara berkala atau berdasarkan permintaan pemilik muatan. Laporan ini mencakup informasi lengkap tentang status pengiriman dan dokumentasi terkait.
                </div>
              </div>
            </div>
          </div>
          <div class="accordion" id="accordionFAQ1">
            <div class="accordion-item wow fadeIn" data-wow-delay="0.1s">
              <h2 class="accordion-header" id="headingmuatan9">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#muatan9" aria-expanded="false" aria-controls="collapse3">Bagaimana Kurirmoo menangani kondisi force majeure atau keterlambatan pengiriman?</button>
              </h2>
              <div id="muatan9" class="accordion-collapse collapse" aria-labelledby="headingmuatan9" data-bs-parent="#accordionFAQ1">
                <div class="accordion-body">
                  Dalam kondisi di luar kendali, seperti force majeure, kami akan berkoordinasi langsung dengan perusahaan mitra untuk mencari solusi terbaik sesuai kesepakatan.
                </div>
              </div>
            </div>
          </div>
          <div class="accordion" id="accordionFAQ1">
            <div class="accordion-item wow fadeIn" data-wow-delay="0.1s">
              <h2 class="accordion-header" id="headingmuatan10">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#muatan10" aria-expanded="false" aria-controls="collapse3">Apa jenis barang yang dapat diangkut oleh Kurirmoo dalam kerja sama ini?</button>
              </h2>
              <div id="muatan10" class="accordion-collapse collapse" aria-labelledby="headingmuatan10" data-bs-parent="#accordionFAQ1">
                <div class="accordion-body">
                  Kami melayani pengangkutan berbagai jenis barang kecuali barang berbahaya atau yang melanggar hukum. Jenis barang yang spesifik dapat dibahas lebih lanjut dalam perjanjian kerja sama.
                </div>
              </div>
            </div>
          </div>
          <div class="accordion" id="accordionFAQ1">
            <div class="accordion-item wow fadeIn" data-wow-delay="0.1s">
              <h2 class="accordion-header" id="headingmuatan11">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#muatan11" aria-expanded="false" aria-controls="collapse3">Apakah Kurirmoo menyediakan layanan antar jemput barang?</button>
              </h2>
              <div id="muatan11" class="accordion-collapse collapse" aria-labelledby="headingmuatan11" data-bs-parent="#accordionFAQ1">
                <div class="accordion-body">
                  Ya, layanan antar jemput disesuaikan dengan jadwal dan lokasi yang disepakati bersama dengan pemilik muatan.
                </div>
              </div>
            </div>
          </div>
          <div class="accordion" id="accordionFAQ1">
            <div class="accordion-item wow fadeIn" data-wow-delay="0.1s">
              <h2 class="accordion-header" id="headingmuatan12">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#muatan12" aria-expanded="false" aria-controls="collapse4">Bagaimana data sensitif perusahaan mitra dikelola oleh Kurirmoo?</button>
              </h2>
              <div id="muatan12" class="accordion-collapse collapse" aria-labelledby="headingmuatan12" data-bs-parent="#accordionFAQ1">
                <div class="accordion-body">
                  Data sensitif perusahaan akan dikelola dengan standar keamanan tinggi dan sesuai kesepakatan yang ditentukan dalam perjanjian kerja sama.
                </div>
              </div>
            </div>
          </div>
          <div class="accordion" id="accordionFAQ1">
            <div class="accordion-item wow fadeIn" data-wow-delay="0.1s">
              <h2 class="accordion-header" id="headingmuatan13">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#muatan13" aria-expanded="false" aria-controls="collapse3">Apakah ada klausul tambahan dalam perjanjian kerja sama?</button>
              </h2>
              <div id="muatan13" class="accordion-collapse collapse" aria-labelledby="headingmuatan13" data-bs-parent="#accordionFAQ1">
                <div class="accordion-body">
                  Ya, klausul tambahan seperti kebijakan penggantian barang, pengelolaan data sensitif, dan penanganan situasi khusus akan dibahas secara mendetail dalam perjanjian.
                </div>
              </div>
            </div>
          </div>
          <div class="accordion" id="accordionFAQ1">
            <div class="accordion-item wow fadeIn" data-wow-delay="0.1s">
              <h2 class="accordion-header" id="headingmuatan14">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#muatan14" aria-expanded="false" aria-controls="collapse3">Bagaimana perusahaan mitra dapat menghubungi tim logistik Kurirmoo?</button>
              </h2>
              <div id="muatan14" class="accordion-collapse collapse" aria-labelledby="headingmuatan14" data-bs-parent="#accordionFAQ1">
                <div class="accordion-body">
                  Perusahaan mitra dapat menghubungi tim logistik kami melalui email, telepon, atau melalui kanal komunikasi yang telah disepakati dalam perjanjian.
                </div>
              </div>
            </div>
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
            <div class="accordion-item wow fadeIn" data-wow-delay="0.1s">
              <h2 class="accordion-header" id="ekspedisi1">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#ekspedisi1" aria-expanded="false" aria-controls="collapseOne">Apa jenis kerja sama yang ditawarkan Kurirmoo kepada pemilik ekspedisi?</button>
              </h2>
              <div id="ekspedisi1" class="accordion-collapse collapse" aria-labelledby="ekspedisi1" data-bs-parent="#accordionFAQ1">
                <div class="accordion-body">
                  Kami menawarkan kerja sama berupa pengisian muatan kosong, optimalisasi rute, serta integrasi layanan logistik melalui platform Kurirmoo untuk meningkatkan efisiensi operasional.
                </div>
              </div>
            </div>
            <div class="accordion-item wow fadeIn" data-wow-delay="0.1s">
              <h2 class="accordion-header" id="ekspedisi2">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#ekspedisi2" aria-expanded="false" aria-controls="collapseOne">Bagaimana cara memulai kerja sama dengan Kurirmoo?</button>
              </h2>
              <div id="ekspedisi2" class="accordion-collapse collapse" aria-labelledby="ekspedisi2" data-bs-parent="#accordionFAQ1">
                <div class="accordion-body">
                  Hubungi kami melalui email di admin@kurirmoo.com atau isi formulir kontak di website kami. Tim kami akan menjadwalkan pertemuan untuk memahami kebutuhan Anda dan mempersiapkan perjanjian kerja sama.
                </div>
              </div>
            </div>
            <div class="accordion-item wow fadeIn" data-wow-delay="0.1s">
              <h2 class="accordion-header" id="ekspedisi3">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#ekspedisi3" aria-expanded="false" aria-controls="collapseOne">Apa keuntungan bekerja sama dengan Kurirmoo bagi pemilik ekspedisi?</button>
              </h2>
              <div id="ekspedisi3" class="accordion-collapse collapse" aria-labelledby="ekspedisi3" data-bs-parent="#accordionFAQ1">
                <div class="accordion-body">
                  Kurirmoo akan memberikan muatan sesuai dengan armada yang dimiliki, serta menyediakan teknologi pelacakan real-time untuk transparansi pengiriman.
                </div>
              </div>
            </div>
            <div class="accordion-item wow fadeIn" data-wow-delay="0.1s">
              <h2 class="accordion-header" id="ekspedisi4">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#ekspedisi4" aria-expanded="false" aria-controls="collapseOne">Apakah Kurirmoo menyediakan layanan pengelolaan armada?</button>
              </h2>
              <div id="ekspedisi4" class="accordion-collapse collapse" aria-labelledby="ekspedisi4" data-bs-parent="#accordionFAQ1">
                <div class="accordion-body">
                  Ya, kami dapat membantu mengelola armada Anda dengan menyediakan sistem pencatatan pengiriman, pelacakan GPS, serta laporan operasional secara berkala.
                </div>
              </div>
            </div>
            <div class="accordion-item wow fadeIn" data-wow-delay="0.1s">
              <h2 class="accordion-header" id="ekspedisi5">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#ekspedisi5" aria-expanded="false" aria-controls="collapseOne">Bagaimana sistem pembayaran kerja sama dengan Kurirmoo?</button>
              </h2>
              <div id="ekspedisi5" class="accordion-collapse collapse" aria-labelledby="ekspedisi5" data-bs-parent="#accordionFAQ1">
                <div class="accordion-body">
                  Pembayaran dilakukan dua minggu setelah invoice diterima. Sistem ini dapat disesuaikan sesuai kesepakatan dalam perjanjian kerja sama.
                </div>
              </div>
            </div>
            <div class="accordion-item wow fadeIn" data-wow-delay="0.1s">
              <h2 class="accordion-header" id="ekspedisi6">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#ekspedisi6" aria-expanded="false" aria-controls="collapseOne">Apakah ada biaya bergabung bagi pemilik ekspedisi?</button>
              </h2>
              <div id="ekspedisi6" class="accordion-collapse collapse" aria-labelledby="ekspedisi6" data-bs-parent="#accordionFAQ1">
                <div class="accordion-body">
                  Tidak ada biaya bergabung. Namun, kami memiliki struktur biaya berbasis layanan yang akan dibahas lebih lanjut dalam perjanjian kerja sama.
                </div>
              </div>
            </div>
            <div class="accordion-item wow fadeIn" data-wow-delay="0.1s">
              <h2 class="accordion-header" id="ekspedisi7">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#ekspedisi7" aria-expanded="false" aria-controls="collapseOne">Apakah Kurirmoo membantu mencarikan pelanggan untuk pemilik ekspedisi?</button>
              </h2>
              <div id="ekspedisi7" class="accordion-collapse collapse" aria-labelledby="ekspedisi7" data-bs-parent="#accordionFAQ1">
                <div class="accordion-body">
                  Pasti, kami akan memprioritaskan distribusi muatan kepada ekspedisi yang telah bergabung dalam jaringan kami, memastikan peluang pengiriman lebih besar dan layanan yang saling menguntungkan.
                </div>
              </div>
            </div>
            <div class="accordion-item wow fadeIn" data-wow-delay="0.1s">
              <h2 class="accordion-header" id="ekspedisi8">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#ekspedisi8" aria-expanded="false" aria-controls="collapseOne">Bagaimana pengaturan jadwal dan rute pengiriman?</button>
              </h2>
              <div id="ekspedisi8" class="accordion-collapse collapse" aria-labelledby="ekspedisi8" data-bs-parent="#accordionFAQ1">
                <div class="accordion-body">
                  Jadwal dan rute pengiriman akan diatur berdasarkan kesepakatan antara pemilik ekspedisi, Kurirmoo, dan pelanggan untuk memastikan efisiensi dan ketepatan waktu.
                </div>
              </div>
            </div>
            <div class="accordion-item wow fadeIn" data-wow-delay="0.1s">
              <h2 class="accordion-header" id="ekspedisi9">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#ekspedisi9" aria-expanded="false" aria-controls="collapseOne">Apakah barang yang diangkut melalui kerja sama ini diasuransikan?</button>
              </h2>
              <div id="ekspedisi9" class="accordion-collapse collapse" aria-labelledby="ekspedisi9" data-bs-parent="#accordionFAQ1">
                <div class="accordion-body">
                  Kurirmoo menyediakan opsi asuransi untuk barang yang diangkut, dengan nilai asuransi yang disesuaikan berdasarkan kesepakatan bersama.
                </div>
              </div>
            </div>
            <div class="accordion-item wow fadeIn" data-wow-delay="0.1s">
              <h2 class="accordion-header" id="ekspedisi10">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#ekspedisi10" aria-expanded="false" aria-controls="collapseOne">Apakah Kurirmoo memberikan laporan operasional?</button>
              </h2>
              <div id="ekspedisi10" class="accordion-collapse collapse" aria-labelledby="ekspedisi10" data-bs-parent="#accordionFAQ1">
                <div class="accordion-body">
                  Ya, kami menyediakan laporan operasional secara berkala, termasuk detail pengiriman, performa armada, dan analisis data untuk membantu meningkatkan efisiensi ekspedisi Anda.
                </div>
              </div>
            </div>
            <div class="accordion-item wow fadeIn" data-wow-delay="0.1s">
              <h2 class="accordion-header" id="ekspedisi11">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#ekspedisi11" aria-expanded="false" aria-controls="collapseOne">Bagaimana Kurirmoo menangani kondisi force majeure dalam kerja sama ini?</button>
              </h2>
              <div id="ekspedisi11" class="accordion-collapse collapse" aria-labelledby="ekspedisi11" data-bs-parent="#accordionFAQ1">
                <div class="accordion-body">
                  Dalam situasi force majeure, kami akan berkoordinasi dengan pemilik ekspedisi dan pelanggan untuk mencari solusi terbaik sesuai kesepakatan dalam perjanjian.
                </div>
              </div>
            </div>
            <div class="accordion-item wow fadeIn" data-wow-delay="0.1s">
              <h2 class="accordion-header" id="ekspedisi12">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#ekspedisi12" aria-expanded="false" aria-controls="collapseOne">Apakah pemilik ekspedisi dapat menggunakan teknologi pelacakan Kurirmoo?</button>
              </h2>
              <div id="ekspedisi12" class="accordion-collapse collapse" aria-labelledby="ekspedisi12" data-bs-parent="#accordionFAQ1">
                <div class="accordion-body">
                  Ya, mitra pemilik ekspedisi akan mendapatkan akses ke teknologi pelacakan yang terpasang diaplikasi kami untuk memantau armada dan barang yang diangkut secara real-time.
                </div>
              </div>
            </div>
            <div class="accordion-item wow fadeIn" data-wow-delay="0.1s">
              <h2 class="accordion-header" id="ekspedisi13">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#ekspedisi13" aria-expanded="false" aria-controls="collapseOne">Bagaimana perlindungan data mitra ekspedisi di Kurirmoo?</button>
              </h2>
              <div id="ekspedisi13" class="accordion-collapse collapse" aria-labelledby="ekspedisi13" data-bs-parent="#accordionFAQ1">
                <div class="accordion-body">
                  Data mitra ekspedisi dikelola dengan standar keamanan tinggi dan hanya digunakan untuk tujuan operasional sesuai dengan perjanjian kerja sama.
                </div>
              </div>
            </div>
            <div class="accordion-item wow fadeIn" data-wow-delay="0.1s">
              <h2 class="accordion-header" id="ekspedisi14">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#ekspedisi14" aria-expanded="false" aria-controls="collapseOne">Apa jenis barang yang dapat diangkut melalui kerja sama ini?</button>
              </h2>
              <div id="ekspedisi14" class="accordion-collapse collapse" aria-labelledby="ekspedisi14" data-bs-parent="#accordionFAQ1">
                <div class="accordion-body">
                  Kami melayani pengangkutan barang yang sesuai dengan peraturan hukum yang berlaku. Barang berbahaya atau ilegal tidak diperbolehkan.
                </div>
              </div>
            </div>
            <div class="accordion-item wow fadeIn" data-wow-delay="0.1s">
              <h2 class="accordion-header" id="ekspedisi15">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#ekspedisi15" aria-expanded="false" aria-controls="collapseOne">Bagaimana jika terjadi kerusakan atau kehilangan barang selama pengiriman?</button>
              </h2>
              <div id="ekspedisi15" class="accordion-collapse collapse" aria-labelledby="ekspedisi15" data-bs-parent="#accordionFAQ1">
                <div class="accordion-body">
                  Kebijakan penggantian barang akan ditentukan berdasarkan perjanjian yang disepakati antara pemilik ekspedisi, Kurirmoo, dan pelanggan.
                </div>
              </div>
            </div>
            <div class="accordion-item wow fadeIn" data-wow-delay="0.1s">
              <h2 class="accordion-header" id="ekspedisi16">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#ekspedisi16" aria-expanded="false" aria-controls="collapseOne">Apakah ada dukungan pelanggan khusus untuk mitra ekspedisi?</button>
              </h2>
              <div id="ekspedisi16" class="accordion-collapse collapse" aria-labelledby="ekspedisi16" data-bs-parent="#accordionFAQ1">
                <div class="accordion-body">
                  Ya, mitra ekspedisi akan mendapatkan dukungan khusus dari tim Kurirmoo untuk memastikan kelancaran operasional dan menangani setiap kendala yang mungkin terjadi.
                </div>
              </div>
            </div>
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
        <div class="col-lg-4 mb-4">
          <div class="video-container">
            <iframe src="https://www.youtube.com/embed/hoe1J55ZpN0?si=l6Gjvc2KJs_58fXx" frameborder="0" width="460" height="215" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </div>
        </div>
        <div class="col-lg-4 mb-4">
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
        </div>
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
          <iframe src="https://docs.google.com/forms/d/e/1FAIpQLSc2F2xRcFHHF12djcGouFzDCrN14WcMt6REtAOFggzhVdDjrQ/viewform?embedded=true" width="1200" height="1566" frameborder="0" marginheight="0" marginwidth="0">Loading…</iframe>
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

</x-landingpage.app>
