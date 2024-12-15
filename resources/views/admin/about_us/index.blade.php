<x-admin.app>
    <div class="content-wrapper">
        <div class="row">
          <div class="col-md-12 grid-margin">
            <div class="row">
              <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                <h3 class="font-weight-bold">About US</h3>
                <h6 class="font-weight-normal mb-0">Menu About US</h6>
              </div>
            </div>
          </div>
  
        </div>
  
  
        <div class="row">
          <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
  
                  <div class="card-header">
                    <h4>
                        About US
                    </h4>
                    <p class="card-description"> Data <code>About US</code></p>
                </div>
                <div class="card-body">
                  <form action="{{ route('ubah_about', $about->id) }}" method="POST" enctype="multipart/form-data">
                      @csrf
                  <div class="row">
                      <div class="col-md-8">
                          <div class="form-group">
                              <label for="Deskripsi">Judul</label>
                              <input type="text" class="form-control form-control-sm" name="judul" id="judul" value="{{ $about->judul }}">
                          </div>
                          <div class="form-group">
                              <label for="desc">Deskripsi</label>
                              <textarea class="form-control" name="desc" id="desc" rows="50">{{ $about->desc }}</textarea>
                          </div>
                          <div class="form-group">
                              <label for="gambar">Gambar</label>
                              <input type="file" class="form-control form-control-sm" name="gambar" id="gambar">
                              <small class="text-danger">*Pilih Gambar jika ingin mengubah gambar</small>
                            </div>
                            <small class="float-start"> Last Update : {{ $about->updated_at->format('j F Y') }} </small>
                      <div class="col-sm-12 d-flex justify-content-end">
                          <button type="submit" class="btn btn-primary me-1 mb-1">Simpan</button>
                      </div>
                      </div>
                      <div class="col-md-4 text-center mb-4">
                          <label for="gambar">Gambar About Us</label>
                          <img src="{{ asset('storage/' . $about->gambar) }}" alt="" width="100%" height="auto">
                      </div>
  
                          </form>
                  </div>
                </div>
              </div>
          </div>
        </div>
  
      </div>
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
      </script>
</x-admin.app>