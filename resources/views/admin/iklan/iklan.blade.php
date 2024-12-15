<x-admin.app>
    <div class="content-wrapper">
        <div class="row">
          <div class="col-md-12 grid-margin">
            <div class="row">
              <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                <h3 class="font-weight-bold">Iklan</h3>
                <h6 class="font-weight-normal mb-0">Menu Iklan</h6>
              </div>
            </div>
          </div>
  
        </div>


        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
    
                    <div class="card-header">
                      <h4>
                        Iklan
    
                        {{-- Button off canvas tambah Berita --}}
                        <button class="btn btn-primary btn-rounded btn-fw float-end" type="button" data-bs-toggle="offcanvas" data-bs-target="#tambah_iklan" aria-controls="offcanvasRight">
                            <i class="mdi mdi-plus-box-outline"></i> Tambah Iklan
                        </button>
                      </h4>
                      <p class="card-description"> Data <code>Iklan</code></p>
                  </div>
                  {{-- Offcanvas Tambah Berita --}}
                  <div class="offcanvas offcanvas-end" style="width: 700px;" tabindex="-1" id="tambah_iklan" aria-labelledby="offcanvasRightLabel">
                      <div class="offcanvas-header">
                          <h5 id="offcanvasRightLabel">Tambah Berita</h5>
                          <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                        </div>
                    <div class="offcanvas-body">
                      <form action="{{ route('tambahIklan') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="card">
                            <div class="card-body">
                              <h4 class="card-title">Tambah Iklan</h4>
    
                              <div class="form-group">
                                  <label for="gambar">Foto</label>
                                  <input type="file" class="form-control form-control-sm" name="gambar" id="gambar" placeholder="Password" >
                                </div>
                                <div class="form-group">
                                  <label for="link">Link</label>
                                  <input type="text" class="form-control form-control-sm" id="link" name="link" placeholder="Link Iklan">
                                </div>
                            </div>
                            </div>
    
                            <div class="col-sm-12 d-flex justify-content-end">
                                <button type="submit" class="btn btn-primary me-1 mb-1">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
                {{-- Offcanvas Tambah Users End --}}
    
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-striped" id="example">
                        <thead>
                          <tr>
                            <th> No </th>
                            <th> Foto </th>
                            <th> link </th>
                            <th> Action </th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($iklan as $no => $value)
                            <tr>
                                <td class="py-1">{{ ++$no }}</td>
                                <td width="20%">
                                    <button type="button" class="btn btn-primary btn-rounded btn-icon" data-bs-toggle="modal" data-bs-target="#foto{{ $value->id }}">
                                        <i class="mdi mdi-eye-settings"></i>
                                    </button>
                                    <div class="modal fade" id="foto{{ $value->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="exampleModalLabel">Foto Iklan</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <img src="{{ asset('storage/' . $value->gambar) }}" class="img-fluid rounded-0" alt="Foto Berita" style="width: 100%; height: auto;">
                                            </div>
                                            <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                </td>
                                <td>{{ $value->link }}</td>
                                <td width="10%">
                                    <button class="btn btn-warning btn-rounded btn-icon" type="button" data-bs-toggle="offcanvas" data-bs-target="#ubah_iklan{{ $value->id }}" aria-controls="offcanvasRight">
                                        <i class="mdi mdi-pencil"></i>
                                    </button>
                                    {{-- Off canvas Ubah Iklan --}}
                                    <div class="offcanvas offcanvas-end" style="width: 700px;" tabindex="-1" id="ubah_iklan{{ $value->id }}" aria-labelledby="offcanvasRightLabel">
                                        <div class="offcanvas-header">
                                            <h5 id="offcanvasRightLabel">Ubah Iklan</h5>
                                            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                                        </div>
                                            <div class="offcanvas-body">
                                                <form action="{{url('ubah_iklan/'.$value->id)}}" method="POST" enctype="multipart/form-data">
                                                @csrf
                                                <div class="card">
                                                    <div class="card-body">
                                                        <h4 class="card-title">Ubah Iklan</h4>
                                                        <div class="form-group">
                                                            <label for="gambar">Gambar</label>
                                                            <input type="file" class="form-control form-control-sm" name="gambar" id="gambar" placeholder="Gambar Iklan" >
                                                        </div>
                                                        <small class="text-danger">*Pilih Gambar jika ingin mengubah gambar</small>
                                                        <div class="form-group">
                                                            <label for="link">Link</label>
                                                            <input type="text" class="form-control form-control-sm" id="link" name="link" value="{{ $value->link }}">
                                                        </div>
                                                    </div>
                                                </div>

                                                    <div class="col-sm-12 d-flex justify-content-end">
                                                        <button type="submit" class="btn btn-primary me-1 mb-1">Simpan</button>
                                                    </div>
                                                </form>
                                            </div>
                                    </div>
                                     {{-- Off canvas Ubah Iklan end --}}

                                     <!-- Button modal trigger modal Hapus-->
                                     <div class="modal-danger me-1 mb-1 d-inline-block">
                                        <!-- Trigger Button -->
                                        <button type="button" class="btn btn-danger btn-rounded btn-icon" data-bs-toggle="modal"
                                            data-bs-target="#hapusModal{{ $value->id }}">
                                            <i class="mdi mdi-trash-can"></i>
                                        </button>
                                    
                                        <!-- Modal -->
                                        <div class="modal fade text-left" id="hapusModal{{ $value->id }}" tabindex="-1" role="dialog"
                                            aria-labelledby="hapusModalLabel{{ $value->id }}" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
                                                <form action="{{ url('/hapus_keunggulan/' . $value->id) }}" method="POST" class="d-inline">
                                                    @csrf
                                                    @method('DELETE')
                                    
                                                    <div class="modal-content" style="width: 500px;">
                                                        <!-- Modal Header -->
                                                        <div class="modal-header bg-danger">
                                                            <h5 class="modal-title white" id="hapusModalLabel{{ $value->id }}">
                                                                Hapus Data Iklan
                                                            </h5>
                                                            <button type="button" class="btn-close text-reset" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                    
                                                        <!-- Modal Body -->
                                                        <div class="modal-body">
                                                            Apakah kamu yakin ingin menghapus data Iklan ini?
                                                        </div>
                                    
                                                        <!-- Modal Footer -->
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-light-secondary" data-bs-dismiss="modal">
                                                                <span class="d-none d-sm-block">Close</span>
                                                            </button>
                                                            <button type="submit" class="btn btn-danger ms-1">
                                                                <span class="d-none d-sm-block">Hapus</span>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
            </div>
        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
        <script src="https://cdn.datatables.net/2.1.6/js/dataTables.js"></script>
        <script src="https://cdn.datatables.net/2.1.6/js/dataTables.bootstrap5.js"></script>
    <script>
        new DataTable('#example');
    </script>
</x-admin.app>