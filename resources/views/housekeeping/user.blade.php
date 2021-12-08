@include('housekeeping/base/header')
<div class="container-fluid page-body-wrapper">
@include('housekeeping/base/sidebar')
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          
          <div class="col-md-12">
            <div class="row">
              <div class="col-md-12 grid-margin stretch-card">
                <div class="card newsletter-card bg-gradient-warning">
                  <div class="card-body">
                    <div class="d-flex flex-column align-items-center justify-content-center h-100">
                      <h5 class="mb-3 text-white">AQUI VAI A IMAGEM</h5>
                      <form class="form d-flex flex-column align-items-center justify-content-between w-100">
                        <div class="form-group mb-2 w-100">
                          <input type="text" class="form-control" placeholder="email address">
                        </div>
                        <!-- <button class="btn btn-danger btn-rounded mt-1" type="submit">Subscribe</button> -->
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          
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
                <p class="card-description">Comandos serão enviados para o emulador</p>
                <div class="template-demo">
                  <button type="button" class="btn btn-primary">Mensagem</button>
                  <button type="button" class="btn btn-secondary">Créditos</button>
                  <button type="button" class="btn btn-success">Diamantes</button>
                  <button type="button" class="btn btn-danger">Alertar</button>
                  <!-- <button type="button" class="btn btn-warning">Warning</button> -->
                  <button type="button" class="btn btn-info">Banir</button>
                </div>
              </div>
            </div>
            <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Informações Básicas</h4>
                  <form class="forms-sample">
                    <div class="form-group row">
                      <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Usuário</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" id="exampleInputUsername2" placeholder="Username" value="{{ $user->username }}">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Email</label>
                      <div class="col-sm-9">
                        <input type="email" class="form-control" id="exampleInputEmail2" placeholder="Email" value="{{ $user->mail }}">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="exampleInputMobile" class="col-sm-3 col-form-label">Cargo</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" id="exampleInputMobile" placeholder="Mobile number">
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