<x-admin.app>
    <div class="content-wrapper">
        <div class="row">
          <div class="col-md-12 grid-margin">
            <div class="row">
              <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                <h3 class="font-weight-bold">Kontak</h3>
                <h6 class="font-weight-normal mb-0">Menu Kontak</h6>
              </div>
            </div>
          </div>
  
        </div>
  
  
        <div class="row">
          <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
  
                  <div class="card-header">
                    <h4>
                        Kontak
                    </h4>
                    <p class="card-description"> Data <code>Kontak</code></p>
                </div>
                <div class="card-body">
                  <form action="{{ route('ubah_kontak', $kontak->id) }}" method="POST" enctype="multipart/form-data">
                      @csrf
                  <div class="row">
                      <div class="col-md-12">
                          <div class="form-group">
                              <label for="alamat">Alamat</label>
                              <input type="text" class="form-control form-control-sm" name="alamat" id="alamat" value="{{ $kontak->alamat }}">
                          </div>
                          <div class="form-group">
                              <label for="no_hp">No handphone</label>
                              <input type="number" class="form-control form-control-sm" name="no_hp" id="no_hp" value="{{ $kontak->no_hp }}">
                              <small class="text-danger">Contoh : 6289342492839</small>
                          </div>
                          <div class="form-group">
                              <label for="instagram">Link Instagram</label>
                              <input type="text" class="form-control form-control-sm" name="instagram" id="instagram" value="{{ $kontak->instagram }}">
                          </div>
                          <div class="form-group">
                              <label for="youtube">Link Youtube</label>
                              <input type="text" class="form-control form-control-sm" name="youtube" id="youtube" value="{{ $kontak->youtube }}">
                          </div>
                          <div class="form-group">
                              <label for="email">Email</label>
                              <input type="email" class="form-control form-control-sm" name="email" id="email" value="{{ $kontak->email }}">
                          </div>
                          <div class="form-group">
                              <label for="playstore">Link Playstore</label>
                              <input type="text" class="form-control form-control-sm" name="playstore" id="playstore" value="{{ $kontak->playstore }}">
                          </div>
                         
                            <small class="float-start"> Last Update : {{ $kontak->updated_at->format('j F Y') }} </small>
                            <div class="col-sm-12 d-flex justify-content-end">
                                <button type="submit" class="btn btn-primary me-1 mb-1">Simpan</button>
                            </div>
                    </div>
  
                    </form>
                  </div>
                </div>
              </div>
          </div>
        </div>
  
      </div>
</x-admin.app>