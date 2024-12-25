<x-admin.app>
    <div class="content-wrapper">
        <div class="row">
          <div class="col-md-12 grid-margin">
            <div class="row">
              <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                <h3 class="font-weight-bold">Jenis Muatan</h3>
                <h6 class="font-weight-normal mb-0">Menu Jenis Muatan</h6>
              </div>
            </div>
          </div>

        </div>


        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">

                    <div class="card-header">
                      <h4>
                        Jenis Muatan

                        {{-- Button off canvas tambah Berita --}}
                        <button class="btn btn-primary btn-rounded btn-fw float-end" type="button" data-bs-toggle="offcanvas" data-bs-target="#tambah_jenismuatan" aria-controls="offcanvasRight">
                            <i class="mdi mdi-plus-box-outline"></i> Tambah Jenis Muatan
                        </button>
                      </h4>
                      <p class="card-description"> Data <code>Jenis Muatan</code></p>
                  </div>
                  {{-- Offcanvas Tambah Berita --}}
                  <div class="offcanvas offcanvas-end" style="width: 700px;" tabindex="-1" id="tambah_jenismuatan" aria-labelledby="offcanvasRightLabel">
                      <div class="offcanvas-header">
                          <h5 id="offcanvasRightLabel">Tambah Jenis Muatan</h5>
                          <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                        </div>
                    <div class="offcanvas-body">
                      <form action="/tambah_jenismuatan" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="card">
                            <div class="card-body">
                              <h4 class="card-title">Tambah Jenis Muatan</h4>

                              <div class="form-group">
                                <label for="judul">Judul</label>
                                <input type="text" class="form-control form-control-sm" id="judul" name="judul" placeholder="judul">
                              </div>
                              <div class="form-group">
                                <label for="desc">Deskripsi</label>
                                <textarea class="form-control" name="desc" id="desc" rows="50"></textarea>
                              </div>
                              <div class="form-group">
                                <label for="icon">Icon</label>
                                <input type="text" class="form-control form-control-sm" id="icon" name="icon" placeholder="Icon">
                                <small class="text-danger">*Contoh : fa fa-truck fa-2x </i> </small>
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
                            <th> Judul </th>
                            <th> Deskripsi </th>
                            <th> Icon </th>
                            <th> Action </th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($jenisMuatan as $no => $value)
                            <tr>
                                <td class="py-1">{{ ++$no }}</td>
                                <td width="10%">{{ $value->judul }}</td>
                                <td>{!! Str::substr($value->desc, 0, 70) !!} ......</td>
                                <td><i class="{{ $value->icon }}"></i></td>
                                <td width="20%">
                                    <button class="btn btn-warning btn-rounded btn-icon" type="button" data-bs-toggle="offcanvas" data-bs-target="#ubah_jenismuatan{{ $value->id }}" aria-controls="offcanvasRight">
                                        <i class="mdi mdi-pencil"></i>
                                    </button>
                                    {{-- Off canvas Ubah Jenis Muatan --}}
                                    <div class="offcanvas offcanvas-end" style="width: 700px;" tabindex="-1" id="ubah_jenismuatan{{ $value->id }}" aria-labelledby="offcanvasRightLabel">

                                        <div class="offcanvas-header">
                                            <h5 id="offcanvasRightLabel">Ubah Jenis Muatan</h5>
                                            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                                        </div>
                                        <div class="offcanvas-body">
                                            <form action="{{ route('ubah_jenismuatan',$value->id) }}" method="POST" enctype="multipart/form-data">
                                                    @csrf
                                                <div class="card">
                                                    <div class="card-body">
                                                        <h4 class="card-title">Ubah Jenis Muatan</h4>
                                                        <div class="form-group">
                                                            <label for="judul">Judul</label>
                                                            <input type="text" class="form-control form-control-sm" id="judul" name="judul" value="{{ $value->judul }}">
                                                          </div>
                                                          <div class="form-group">
                                                            <label for="desc">Deskripsi</label>
                                                            <textarea class="form-control" name="desc" id="desc_ubah" rows="50">{!! $value->desc !!}</textarea>
                                                          </div>
                                                          <div class="form-group">
                                                            <label for="icon">Icon</label>
                                                            <input type="text" class="form-control form-control-sm" id="icon" name="icon" value="{{ $value->icon }}">
                                                            <small class="text-danger">*Contoh : fa fa-truck fa-2x </i> </small>
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
                                                <form action="{{ url('/hapus_jenismuatan/' . $value->id) }}" method="POST" class="d-inline">
                                                    @csrf
                                                    @method('DELETE')

                                                    <div class="modal-content" style="width: 500px;">
                                                        <!-- Modal Header -->
                                                        <div class="modal-header bg-danger">
                                                            <h5 class="modal-title white" id="hapusModalLabel{{ $value->id }}">
                                                                Hapus Data Jenis Muatan
                                                            </h5>
                                                            <button type="button" class="btn-close text-reset" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>

                                                        <!-- Modal Body -->
                                                        <div class="modal-body">
                                                            Apakah kamu yakin ingin menghapus data Jenis Muatan {{ $value->judul }} ini?
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
    <script src="https://cdn.ckeditor.com/ckeditor5/36.0.1/classic/ckeditor.js"></script>
    <script>
       ClassicEditor
            .create(document.querySelector('#desc'), {
                toolbar: {
                    items: [
                        'heading', '|', 'bold', 'italic', 'link', 'bulletedList', 'numberedList','|', 'insertTable', '|', 'undo', 'redo'
                        // Hilangkan 'imageUpload' dari toolbar
                    ],
                },
                heading: {
                    options: [
                        { model: 'paragraph', title: 'Paragraph', class: 'ck-heading_paragraph' },
                        { model: 'heading1', view: 'h1', title: 'Heading 1', class: 'ck-heading_heading1' },
                        { model: 'heading2', view: 'h2', title: 'Heading 2', class: 'ck-heading_heading2' },
                        { model: 'heading3', view: 'h3', title: 'Heading 3', class: 'ck-heading_heading3' },
                        { model: 'heading4', view: 'h4', title: 'Heading 4', class: 'ck-heading_heading4' },
                        { model: 'heading5', view: 'h5', title: 'Heading 5', class: 'ck-heading_heading5' },
                        { model: 'heading6', view: 'h6', title: 'Heading 6', class: 'ck-heading_heading6' },
                    ]
                },
                table: {
                    contentToolbar: [
                        'tableColumn', 'tableRow', 'mergeTableCells'
                    ]
                }
            })
            .catch(error => {
                console.error(error);
            });
      // Ubah
    document.querySelectorAll('textarea[id^="desc_ubah"]').forEach(textarea => {
    ClassicEditor
        .create(textarea, {
            toolbar: {
                items: [
                    'heading', '|', 'bold', 'italic', 'link', 'bulletedList', 'numberedList', '|', 'insertTable', '|', 'undo', 'redo'
                ],
            },
            heading: {
                options: [
                    { model: 'paragraph', title: 'Paragraph', class: 'ck-heading_paragraph' },
                    { model: 'heading1', view: 'h1', title: 'Heading 1', class: 'ck-heading_heading1' },
                    { model: 'heading2', view: 'h2', title: 'Heading 2', class: 'ck-heading_heading2' },
                    { model: 'heading3', view: 'h3', title: 'Heading 3', class: 'ck-heading_heading3' },
                    { model: 'heading4', view: 'h4', title: 'Heading 4', class: 'ck-heading_heading4' },
                    { model: 'heading5', view: 'h5', title: 'Heading 5', class: 'ck-heading_heading5' },
                    { model: 'heading6', view: 'h6', title: 'Heading 6', class: 'ck-heading_heading6' },
                ]
            },
            table: {
                contentToolbar: [
                    'tableColumn', 'tableRow', 'mergeTableCells'
                ]
            }
        })
        .catch(error => {
            console.error(error);
        });
});
    </script>
</x-admin.app>