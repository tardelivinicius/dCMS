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
                  {{-- <form class="forms-sample">
                    @csrf --}}
                    <div class="form-group">
                      <label for="title">Título</label>
                      <input type="text" class="form-control" id="title" placeholder="Título" value="{{ $new->title ?? '' }}">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail3">Descrição</label>
                      <input type="text" class="form-control" id="shortstory" placeholder="Descrição" value="{{ $new->shortstory ?? '' }}">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword4">Mensagem</label>
                      <textarea rows="4" name="content" id="longstory">
                        {{ $new->longstory ?? '' }}
                      </textarea>
                    </div>
                    <div class="form-group">
                      <label>Imagem de capa:</label>
                      <input type="file" id="image" class="file-upload-default">
                      <div class="input-group col-xs-12">
                        <input type="text" class="form-control file-upload-info" value="{{ $new->image ?? ''}}" placeholder="Upload imagem" disabled>
                        <span class="input-group-append">
                          <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                        </span>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputCity1">Data de publicação</label>
                      <input class="form-control" placeholder="dd/mm/yyyy" id="date" value="{{ date('d/m/Y', $new->date) ?? '' }}"/>
                    </div>
                    <button type="submit" onclick="sendData()" class="btn btn-primary mr-2">Gravar</button>
                    <a href="/housekeeping/news/" class="btn btn-light">Voltar</button>
                  {{-- </form> --}}
                </div>
              </div>
            </div>
          </div>
        </div>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type="text/javascript">
  function sendData() {
      const fd = new FormData()
      fd.append('title', $('#title').val())
      fd.append('shortstory', $('#shortstory').val())
      fd.append('longstory', $('#longstory').val())
      fd.append('image', $('#image').val())
      fd.append('date', $('#date').val())
      if ({{ $new->id }} > 0) {
        axios.put('/housekeeping/new/{{ $new->id }}/update', fd)
          .then(response => {
            console.log('deu erro')
            event.preventDefault();
          })
          .catch(e => {
            console.log(e)
            event.preventDefault();
          })
      } else {
        axios.post('/housekeeping/new/create', fd)
          .then(response => {
          })
          .catch(e => {
            console.log(e)
          })

      } 
  }
</script>
@include('housekeeping/base/footer')
