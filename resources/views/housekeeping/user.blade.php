@include('housekeeping/base/header')
<div class="container-fluid page-body-wrapper">
@include('housekeeping/base/sidebar')
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
         
          <div class="row">
            <div class="col-md-4 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <div class="col-md-12 stretch-card">
                    <div class="card profile-card bg-gradient-primary">
                      <div class="card-body">
                        <div class="row align-items-center h-100">
                          <div class="col-md-3">
                            {{-- <figure class="avatar mx-auto mb-4 mb-md-0"> --}}
                              <img src="https://www.habbo.com/habbo-imaging/avatarimage?figure={{ $user->look }}&action=wav&direction=2&head_direction=3&gesture=sml&size=large&img_format=png" alt="avatar">
                            {{-- </figure> --}}
                          </div>
                          <div class="col-md-9">
                            <h5 class="text-white text-center text-md-left">{{ $user->username }}</h5>
                            <p class="text-white text-center text-md-left">{{ $user->mail }}</p>
                            <div class="d-flex align-items-center justify-content-between info pt-2">
                              <div>
                                <p class="text-white font-weight-bold">Cargo:</p>
                                <p class="text-white font-weight-bold">Data de cadastro:</p>
                              </div>
                              <div>
                                <p class="text-white">{{ $user->rank_name }} </p>
                                <p class="text-white">{{ date('d/m/Y', $user->account_created) }}</p>
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
            <div class="col-md-6">
              <div class="card-body">
                <h4 class="card-title">Ações</h4>
                <p class="card-description">Comandos serão enviados para o emulador (Beta)</p>
                <div class="template-demo">
                  {{-- <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal" data-whatever="alertuser">Alertar</button>
                  <button type="button" class="btn btn-info"    data-toggle="modal" data-target="#exampleModal" data-whatever="credits">Créditos</button>
                  <button type="button" class="btn btn-secondary" disabled>Diamantes</button>
                  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="muteuser">Mutar</button>
                  <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal" data-whatever="banuser">Banir</button> --}}
                </div>
              </div>
            </div>
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">New message</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <form>
                      <div class="form-group" id="duration">
                        <label for="duration" class="col-form-label">Duração (Em segundos):</label>
                        <input type="text" class="form-control" id="duration">
                      </div>
                      <div class="form-group" id="credits">
                        <label for="duration" class="col-form-label">Quantidade de créditos:</label>
                        <input type="text" class="form-control" id="credits">
                      </div>
                      <div class="form-group" id="message">
                        <label for="message" class="col-form-label">Mensagem:</label>
                        <textarea class="form-control" id="message" rows="3"></textarea>
                      </div>
                    </form>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                    <button type="button" onclick="sendCommand()" class="btn btn-primary">Enviar</button>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Informações Básicas</h4>
                  <form class="forms-sample" method="POST" action="/housekeeping/user/{{ $user->id }}/save/">
                    @csrf
                    <div class="form-group row">
                      <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Usuário</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" name="username" placeholder="Username" value="{{ $user->username }}">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Email</label>
                      <div class="col-sm-9">
                        <input type="email" class="form-control" name="email"  placeholder="Email" value="{{ $user->mail }}">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="exampleInputMobile" class="col-sm-3 col-form-label">Cargo</label>
                      <div class="col-sm-9">
                        <select name="rank_id" id="cat" class="form-control input-lg">
                          @foreach ($ranks as $rank)
                              @if ($user->rank_id == $rank->id)
                                  <option value={{$rank->id}} selected>{{ $rank->name }}</option>
                              @else
                                  <option value={{$rank->id}} >{{ $rank->name }}</option>
                              @endif
                          @endforeach
                        </select>
                      </div>
                    </div>
                    <button type="submit" class="btn btn-success mr-2">Salvar</button>
                    <!-- <button class="btn btn-light">Cancel</button> -->
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
@include('housekeeping/base/footer')
<script>
  // $('#exampleModal').on('show.bs.modal', function (event) {
  // var button = $(event.relatedTarget) // Button that triggered the modal
  // var command_type = button.data('whatever') // Extract info from data-* attributes
  // var modal = $(this)
  // const fd = new FormData()
  // if (command_type == 'credits') {
  //   modal.find('.modal-title').text('Enviar créditos para ' + '{{ $user->username }}')
  //     $("#duration").hide();
  //     $("#message").hide();
  //     $("#credits").show();
  //     fd.append('credits', $('#credits').val())
  //     console.log($('#credits').val());
  // } else if (command_type == 'alertuser') {
  //   modal.find('.modal-title').text('Alertar ' + '{{ $user->username }}')
  //     $("#message").show();
  //     $("#duration").hide();
  //     $("#credits").hide();
  //     fd.append('message', $('#message').val())
  // } else if (command_type == 'muteuser') {
  //   modal.find('.modal-title').text('Mutar ' + '{{ $user->username }}')
  //     $("#duration").show();
  //     $("#credits").hide();
  //     $("#message").hide();
  //     fd.append('duration', $('#duration').val())
  // } else if (command_type == 'banuser') {
  //   modal.find('.modal-title').text('Banir ' + '{{ $user->username }}')
  //     $("#duration").show();
  //     $("#credits").hide();
  //     $("#message").hide();
  //     fd.append('duration', $('#duration').val())
  // }})

  // function sendCommand() {
  //   const fd = new FormData()
  //   if (command_type == 'credits') {
  //     fd.append('credits', $('#credits').val())
  //     console.log($('#credits').val());
  //   } else if (command_type == 'alertuser') {
  //       fd.append('message', $('#message').val())
  //   } else if (command_type == 'muteuser') {
  //       fd.append('duration', $('#duration').val())
  //   } else if (command_type == 'banuser') {
  //     modal.find('.modal-title').text('Banir ' + '{{ $user->username }}')
  //       fd.append('duration', $('#duration').val())
  //   }
  //   axios.post('/housekeeping/user/{{ $user->username }}/command/', fd)
  //     .then(response => {
  //         document.getElementById('message_username').style.color = 'green';
  //         document.getElementById('message_username').innerHTML = 'Usuário disponível para cadastro';
  //     })
  //     .catch(e => {
  //         document.getElementById('message_username').style.color = 'red';
  //         document.getElementById('message_username').innerHTML = 'Usuário já cadastrado para outro usuário';
  //         console.log(e)
  //     })
  }
</script>