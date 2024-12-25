<x-admin.app>
    <div class="content-wrapper">
        <div class="row">
          <div class="col-md-12 grid-margin">
            <div class="row">
              <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                <h3 class="font-weight-bold">Frequently Asked Questions</h3>
                <h6 class="font-weight-normal mb-0">Menu Frequently Asked Questions</h6>
              </div>
            </div>
          </div>

        </div>


        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">

                    <div class="card-header">
                      <h4>
                        Frequently Asked Questions

                        {{-- Button off canvas tambah Berita --}}
                        <button class="btn btn-primary btn-rounded btn-fw float-end" type="button" data-bs-toggle="offcanvas" data-bs-target="#tambah_faq" aria-controls="offcanvasRight">
                            <i class="mdi mdi-plus-box-outline"></i> Tambah Faq
                        </button>
                      </h4>
                      <p class="card-description"> Data <code>Tutorial</code></p>
                  </div>
                  {{-- Offcanvas Tambah Berita --}}
                  <div class="offcanvas offcanvas-end" style="width: 700px;" tabindex="-1" id="tambah_faq" aria-labelledby="offcanvasRightLabel">
                      <div class="offcanvas-header">
                          <h5 id="offcanvasRightLabel">Tambah Frequently Asked Questions</h5>
                          <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                        </div>
                    <div class="offcanvas-body">
                      <form action="/tambah_faq" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="card">
                            <div class="card-body">
                              <h4 class="card-title">Tambah Frequently Asked Questions</h4>

                              <div class="form-group">
                                <label for="pertanyaan">Pertanyaan</label>
                                <input type="text" class="form-control form-control-sm" id="pertanyaan" name="pertanyaan" placeholder="pertanyaan">
                              </div>
                              <div class="form-group">
                                <label for="jawaban">Jawaban</label>
                                <textarea class="form-control" name="jawaban" id="jawaban"></textarea>
                              </div>
                              <div class="form-group">
                                <label for="exampleInputUsername1">Kategori</label>
                                <select name="kategori" id="kategori" class="form-control" required>
                                        <option value="">-- Pilih Kategori --</option>
                                        <option value="General">General</option>
                                        <option value="Kerjasama Perusahaan Pemilik Muatan">Kerjasama Perusahaan Pemilik Muatan</option>
                                        <option value="Kerjasama Perusahaan Pemilik Ekspedisi">Kerjasama Perusahaan Pemilik Ekspedisi</option>
                                </select>
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
                            <th> Pertanyaan </th>
                            <th> Jawaban </th>
                            <th> Kategori </th>
                            <th> Action </th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($faq as $no => $value)
                            <tr>
                                <td class="py-1">{{ ++$no }}</td>
                                <td width="10%">{{ $value->pertanyaan }}</td>
                                <td>{!! Str::substr($value->jawaban, 0, 70) !!} ......</td>
                                <td>{{ $value->kategori }}</td>
                                <td width="20%">
                                    <button class="btn btn-warning btn-rounded btn-icon" type="button" data-bs-toggle="offcanvas" data-bs-target="#ubah_faq{{ $value->id }}" aria-controls="offcanvasRight">
                                        <i class="mdi mdi-pencil"></i>
                                    </button>
                                    {{-- Off canvas Ubah Keunggulan --}}
                                    <div class="offcanvas offcanvas-end" style="width: 700px;" tabindex="-1" id="ubah_faq{{ $value->id }}" aria-labelledby="offcanvasRightLabel">

                                        <div class="offcanvas-header">
                                            <h5 id="offcanvasRightLabel">Ubah Faq</h5>
                                            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                                        </div>
                                        <div class="offcanvas-body">
                                            <form action="{{ route('ubah_faq',$value->id) }}" method="POST" enctype="multipart/form-data">
                                                    @csrf
                                                <div class="card">
                                                    <div class="card-body">
                                                        <h4 class="card-title">Ubah Faq</h4>
                                                        <div class="form-group">
                                                            <label for="pertanyaan">Pertanyaan</label>
                                                            <input type="text" class="form-control form-control-sm" id="pertanyaan" name="pertanyaan" value="{{ $value->pertanyaan }}">
                                                          </div>
                                                          <div class="form-group">
                                                            <label for="jawaban">Jawaban</label>
                                                            <textarea class="form-control" name="jawaban" id="jawaban" >{{ $value->jawaban }}</textarea>
                                                          </div>
                                                          <div class="form-group">
                                                            <label for="exampleInputUsername1">Kategori</label>
                                                            <select name="kategori" id="kategori" class="form-control">
                                                                    <option value="{{ $value->kategori }}">{{ $value->kategori }}</option>
                                                                    <option value="General">General</option>
                                                                    <option value="Kerjasama Perusahaan Pemilik Muatan">Kerjasama Perusahaan Pemilik Muatan</option>
                                                                    <option value="Kerjasama Perusahaan Pemilik Ekspedisi">Kerjasama Perusahaan Pemilik Ekspedisi</option>
                                                            </select>
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

                                     <!-- Button Delete modal -->
                                    <button type="button" class="btn btn-danger btn-rounded btn-icon" data-bs-toggle="modal"
                                    data-bs-target="#hapusModal{{ $value->id }}">
                                    <i class="mdi mdi-trash-can"></i>
                                    </button>

                                    <!-- Modal -->
                                    <div class="modal fade" id="hapusModal{{ $value->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-danger">
                                            <form action="{{ url('/hapus_faq/' . $value->id) }}" method="POST" class="d-inline">
                                                @csrf
                                                @method('DELETE')
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Hapus Data Faq</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <p class="text-wrap">
                                                            Apakah kamu yakin ingin menghapus data Faq {{ $value->pertanyaan }} ini?
                                                        </p>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                        <button type="submit" class="btn btn-danger">Hapus</button>
                                                    </div>
                                                </div>
                                            </form>
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
    {{-- <script>
       ClassicEditor
            .create(document.querySelector('#jawaban'), {
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
    document.querySelectorAll('textarea[id^="jawaban_ubah"]').forEach(textarea => {
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
    </script> --}}
</x-admin.app>
