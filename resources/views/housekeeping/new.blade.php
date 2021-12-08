@include('housekeeping/base/header')
<div class="container-fluid page-body-wrapper">
@include('housekeeping/base/sidebar')
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
         
          <div class="row">
            <div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <form class="forms-sample" action="/housekeeping/news/save">
                    @csrf
                    <div class="form-group">
                      <label for="exampleInputName1">Título</label>
                      <input type="text" class="form-control" id="exampleInputName1" placeholder="Título" value="{{ $new->title }}">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail3">Descrição</label>
                      <input type="email" class="form-control" id="exampleInputEmail3" placeholder="Email" value="{{ $new->shortstory }}">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword4">Password</label>
                      <textarea rows="4" name="content" id="editor">
                        {{ $new->longstory }}
                      </textarea>
                    </div>
                    <div class="form-group">
                      <label>Imagem de capa:</label>
                      <input type="file" name="img[]" class="file-upload-default">
                      <div class="input-group col-xs-12">
                        <input type="file" class="form-control file-upload-info" placeholder="Upload Image">
                        {{-- <span class="input-group-append">
                          <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                        </span> --}}
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputCity1">Data de publicação</label>
                      <input class="form-control" placeholder="dd/mm/yyyy"/>
                    </div>
                    <button type="submit" class="btn btn-primary mr-2">Gravar</button>
                    <button class="btn btn-light">Cancelar</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
@include('housekeeping/base/footer')