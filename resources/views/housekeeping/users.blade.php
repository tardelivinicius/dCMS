@include('housekeeping/base/header')
<div class="container-fluid page-body-wrapper">
@include('housekeeping/base/sidebar')
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">

          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="table-responsive pt-3">
                  <table class="table table-striped project-orders-table">
                    <thead>
                      <tr>
                        <th class="ml-5">#</th>
                        <th>Usuário</th>
                        <th>E-mail</th>
                        <th>Rank</th>
                        <th>Missão</th>
                        <th>Moedas</th>
                        <th>Ações</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach($users as $user)
                      <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->username }}</td>
                        <td>{{ $user->mail }}</td>
                        <td>{{ $user->rank_name }}</td>
                        <td>{{ $user->motto }}</td>
                        <td>{{ $user->credits }}</td>
                        <td>
                          <div class="d-flex align-items-center">
                            <a href="/housekeeping/user/{{ $user->id }}" class="btn btn-success btn-sm btn-icon-text mr-3">Editar <i class="typcn typcn-edit btn-icon-append"></i></a>
                            <a href="#" class="btn btn-danger btn-sm btn-icon-text">Banir <i class="typcn typcn-delete-outline btn-icon-append"></i></a>
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
@include('housekeeping/base/footer')