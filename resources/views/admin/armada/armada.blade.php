<x-admin.app>
    <div class="content-wrapper">
        <div class="row">
          <div class="col-md-12 grid-margin">
            <div class="row">
              <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                <h3 class="font-weight-bold">Armada</h3>
                <h6 class="font-weight-normal mb-0">Menu Armada</h6>
              </div>
            </div>
          </div>

        </div>


        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">

                    <div class="card-header">
                      <h4>
                        Armada

                        {{-- Button off canvas tambah Armada --}}
                        <button class="btn btn-primary btn-rounded btn-fw float-end" type="button" data-bs-toggle="offcanvas" data-bs-target="#tambah_armada" aria-controls="offcanvasRight">
                            <i class="mdi mdi-plus-box-outline"></i> Tambah Armada
                        </button>
                      </h4>
                      <p class="card-description"> Data <code>Armada</code></p>
                  </div>
                  {{-- Offcanvas Tambah Armada --}}
                  <div class="offcanvas offcanvas-end" style="width: 700px;" tabindex="-1" id="tambah_armada" aria-labelledby="offcanvasRightLabel">
                      <div class="offcanvas-header">
                          <h5 id="offcanvasRightLabel">Tambah Armada</h5>
                          <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                        </div>
                    <div class="offcanvas-body">
                      <form action="/tambah_armada" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="card">
                            <div class="card-body">
                              <h4 class="card-title">Tambah Armada</h4>

                              <div class="form-group">
                                <label for="nama">Nama</label>
                                <input type="text" class="form-control form-control-sm" id="nama" name="nama" placeholder="Nama">
                              </div>
                              <div class="form-group">
                                <label for="gambar">Gambar</label>
                                <input type="file" class="form-control form-control-sm" id="gambar" name="gambar">
                              </div>
                              <div class="form-group">
                                <label for="ukuran_karoseri">Ukuran Karoseri</label>
                                <input type="text" class="form-control form-control-sm" id="ukuran_karoseri" name="ukuran_karoseri" placeholder="Ukuran Karoseri">
                              </div>
                              <div class="form-group">
                                <label for="berat">Berat</label>
                                <input type="text" class="form-control form-control-sm" id="berat" name="berat" placeholder="Berat">
                              </div>
                              <div class="form-group">
                                <label for="ukuran_mobil">Ukuran Mobil</label>
                                <input type="text" class="form-control form-control-sm" id="ukuran_mobil" name="ukuran_mobil" placeholder="Ukuran Mobil">
                              </div>
                              <div class="form-group">
                                <label for="mesin">Mesin</label>
                                <input type="text" class="form-control form-control-sm" id="mesin" name="mesin" placeholder="Mesin">
                              </div>
                              <div class="form-group">
                                <label for="roda">Roda</label>
                                <input type="text" class="form-control form-control-sm" id="roda" name="roda" placeholder="Roda">
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
                            <th> Nama </th>
                            <th> Gambar </th>
                            <th> Detail </th>
                            <th> Action </th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($armada as $no => $value)
                            <tr>
                                <td class="py-1">{{ ++$no }}</td>
                                <td width="10%">{{ $value->nama }}</td>
                                <td>
                                    <button type="button" class="btn btn-primary btn-rounded btn-icon" data-bs-toggle="modal" data-bs-target="#gambar{{ $value->id }}">
                                        <i class="mdi mdi-eye-settings"></i>
                                    </button>
                                    <div class="modal fade" id="gambar{{ $value->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="exampleModalLabel">Gambar [{{ $value->nama }}]</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <img src="{{ asset('storage/' . $value->gambar) }}" alt="Foto Pengaduan" style="width: 100%; height: auto; border-radius: 0;">
                                            </div>
                                            <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                        </div>
                                    </div>

                                </td>
                                <td>
                                    <button type="button" class="btn btn-success btn-rounded btn-icon" data-bs-toggle="modal" data-bs-target="#detailArmada{{ $value->id }}">
                                        <i class="mdi mdi-details"></i>
                                    </button>
                                    <div class="modal fade" id="detailArmada{{ $value->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-lg">
                                          <div class="modal-content">
                                            <div class="modal-header">
                                              <h5 class="text-dark">{{ $value->nama }}</h5>
                                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                              <div class="table-responsive">
                                              <table class="table table-striped">
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
                                                    <td scope="row">{{ $value->ukuran_karoseri }}</td>
                                                    <td scope="row">{{ $value->berat }}</td>
                                                    <td scope="row">{{ $value->ukuran_mobil }}</td>
                                                    <td scope="row">{{ $value->mesin }}</td>
                                                    <td scope="row">{{ $value->roda }}</td>
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
                                </td>
                                <td width="20%">
                                    <button class="btn btn-warning btn-rounded btn-icon" type="button" data-bs-toggle="offcanvas" data-bs-target="#ubah_armada{{ $value->id }}" aria-controls="offcanvasRight">
                                        <i class="mdi mdi-pencil"></i>
                                    </button>
                                    {{-- Off canvas Ubah Keunggulan --}}
                                    <div class="offcanvas offcanvas-end" style="width: 700px;" tabindex="-1" id="ubah_armada{{ $value->id }}" aria-labelledby="offcanvasRightLabel">

                                        <div class="offcanvas-header">
                                            <h5 id="offcanvasRightLabel">Ubah Armada</h5>
                                            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                                        </div>
                                        <div class="offcanvas-body">
                                            <form action="{{ route('ubah_armada',$value->id) }}" method="POST" enctype="multipart/form-data">
                                                    @csrf
                                                <div class="card">
                                                    <div class="card-body">
                                                        <h4 class="card-title">Ubah Armada</h4>
                                                        <div class="form-group">
                                                            <label for="nama">Nama</label>
                                                            <input type="text" class="form-control form-control-sm" id="nama" name="nama" value="{{ $value->nama }}">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="gambar">Gambar</label>
                                                            <input type="file" class="form-control form-control-sm" id="gambar" name="gambar">
                                                            <small class="text-danger">*Pilih gambar jika ingin mengubah</small>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="ukuran_karoseri">Ukuran Karoseri</label>
                                                            <input type="text" class="form-control form-control-sm" id="ukuran_karoseri" name="ukuran_karoseri" value="{{ $value->ukuran_karoseri }}">
                                                          </div>
                                                          <div class="form-group">
                                                            <label for="berat">Berat</label>
                                                            <input type="text" class="form-control form-control-sm" id="berat" name="berat" value="{{ $value->berat }}">
                                                          </div>
                                                          <div class="form-group">
                                                            <label for="ukuran_mobil">Ukuran Mobil</label>
                                                            <input type="text" class="form-control form-control-sm" id="ukuran_mobil" name="ukuran_mobil" value="{{ $value->ukuran_mobil }}">
                                                          </div>
                                                          <div class="form-group">
                                                            <label for="mesin">Mesin</label>
                                                            <input type="text" class="form-control form-control-sm" id="mesin" name="mesin" value="{{ $value->mesin }}">
                                                          </div>
                                                          <div class="form-group">
                                                            <label for="roda">Roda</label>
                                                            <input type="text" class="form-control form-control-sm" id="roda" name="roda" value="{{ $value->roda }}">
                                                          </div>
                                                    </div>
                                                </div>

                                                    <div class="col-sm-12 d-flex justify-content-end">
                                                        <button type="submit" class="btn btn-primary me-1 mb-1">Simpan</button>
                                                    </div>
                                            </form>
                                        </div>
                                    </div>
                                     {{-- Off canvas Ubah Keunggulan end --}}


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
                                                <form action="{{ url('/hapus_armada/' . $value->id) }}" method="POST" class="d-inline">
                                                    @csrf
                                                    @method('DELETE')

                                                    <div class="modal-content" style="width: 500px;">
                                                        <!-- Modal Header -->
                                                        <div class="modal-header bg-danger">
                                                            <h5 class="modal-title white" id="hapusModalLabel{{ $value->id }}">
                                                                Hapus Data Armada
                                                            </h5>
                                                            <button type="button" class="btn-close text-reset" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>

                                                        <!-- Modal Body -->
                                                        <div class="modal-body">
                                                            Apakah kamu yakin ingin menghapus data Armada {{ $value->nama }} ini?
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
