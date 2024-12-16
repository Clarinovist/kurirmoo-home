<x-admin.app>
    <div class="content-wrapper">
        <div class="row">
          <div class="col-md-12 grid-margin">
            <div class="row">
              <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                <h3 class="font-weight-bold">Tutorial</h3>
                <h6 class="font-weight-normal mb-0">Menu Tutorial</h6>
              </div>
            </div>
          </div>

        </div>


        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">

                    <div class="card-header">
                      <h4>
                        Tutorial

                        {{-- Button off canvas tambah Berita --}}
                        <button class="btn btn-primary btn-rounded btn-fw float-end" type="button" data-bs-toggle="offcanvas" data-bs-target="#tambah_tutorial" aria-controls="offcanvasRight">
                            <i class="mdi mdi-plus-box-outline"></i> Tambah Tutorial
                        </button>
                      </h4>
                      <p class="card-description"> Data <code>Tutorial</code></p>
                  </div>
                  {{-- Offcanvas Tambah Berita --}}
                  <div class="offcanvas offcanvas-end" style="width: 700px;" tabindex="-1" id="tambah_tutorial" aria-labelledby="offcanvasRightLabel">
                      <div class="offcanvas-header">
                          <h5 id="offcanvasRightLabel">Tambah Tutorial</h5>
                          <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                        </div>
                    <div class="offcanvas-body">
                      <form action="/tambah_tutorial" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="card">
                            <div class="card-body">
                              <h4 class="card-title">Tambah Tutorial</h4>

                              <div class="form-group">
                                <label for="nama">Nama</label>
                                <input type="text" class="form-control form-control-sm" id="nama" name="nama" placeholder="Nama">
                              </div>
                              <div class="form-group">
                                <label for="link_youtube">Link Youtube</label>
                                <input type="text" class="form-control form-control-sm" id="link_youtube" name="link_youtube" placeholder="Link Youtube">
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
                            <th> Link Youtube </th>
                            <th> Action </th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($tutorial as $no => $value)
                            <tr>
                                <td class="py-1">{{ ++$no }}</td>
                                <td width="10%">{{ $value->nama }}</td>
                                <td>{{ $value->link_youtube }}</td>
                                <td width="20%">
                                    <button class="btn btn-warning btn-rounded btn-icon" type="button" data-bs-toggle="offcanvas" data-bs-target="#ubah_tutorial{{ $value->id }}" aria-controls="offcanvasRight">
                                        <i class="mdi mdi-pencil"></i>
                                    </button>
                                    {{-- Off canvas Ubah Keunggulan --}}
                                    <div class="offcanvas offcanvas-end" style="width: 700px;" tabindex="-1" id="ubah_tutorial{{ $value->id }}" aria-labelledby="offcanvasRightLabel">

                                        <div class="offcanvas-header">
                                            <h5 id="offcanvasRightLabel">Ubah Tutorial</h5>
                                            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                                        </div>
                                        <div class="offcanvas-body">
                                            <form action="{{ route('ubah_tutorial',$value->id) }}" method="POST" enctype="multipart/form-data">
                                                    @csrf
                                                <div class="card">
                                                    <div class="card-body">
                                                        <h4 class="card-title">Ubah Tutorial</h4>
                                                        <div class="form-group">
                                                            <label for="nama">Nama</label>
                                                            <input type="text" class="form-control form-control-sm" id="nama" name="nama" value="{{ $value->nama }}">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="link_youtube">Link Youtube</label>
                                                            <input type="text" class="form-control form-control-sm" id="link_youtube" name="link_youtube" value="{{ $value->link_youtube }}">
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
                                                <form action="{{ url('/hapus_tutorial/' . $value->id) }}" method="POST" class="d-inline">
                                                    @csrf
                                                    @method('DELETE')

                                                    <div class="modal-content" style="width: 500px;">
                                                        <!-- Modal Header -->
                                                        <div class="modal-header bg-danger">
                                                            <h5 class="modal-title white" id="hapusModalLabel{{ $value->id }}">
                                                                Hapus Data Tutorial
                                                            </h5>
                                                            <button type="button" class="btn-close text-reset" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>

                                                        <!-- Modal Body -->
                                                        <div class="modal-body">
                                                            Apakah kamu yakin ingin menghapus data Tutorial {{ $value->nama }} ini?
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
