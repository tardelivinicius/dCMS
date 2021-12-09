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
                  <div class="float: right;">
                    <a href="/housekeeping/new" class="btn btn-info btn-rounded btn-fw" style="float: right; margin-right: 20px;">Nova</a>
                  </div>
                  <table class="table table-striped project-orders-table">
                    <thead>
                      <tr>
                        <th class="ml-5">#</th>
                        <th>Título</th>
                        <th>Descrição</th>
                        <th>Autor</th>
                        <th>Atualizada?</th>
                        <th>Data de publicação</th>
                        <th>Ações</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach($news as $new)
                      <tr>
                        <td>{{ $new->id }}</td>
                        <td>{{ $new->title }}</td>
                        <td>{{ $new->shortstory }}</td>
                        <td>{{ $new->author }}</td>
                        <td>{{ $new->updated ? 'Sim' : 'Não' }}</td>
                        <td>{{ date('d/m/y - H:m', $new->date) }}</td>
                        <td>
                          <div class="d-flex align-items-center">
                            <a href="/housekeeping/new/{{ $new->id }}" class="btn btn-success btn-sm btn-icon-text mr-3">Editar <i class="typcn typcn-edit btn-icon-append"></i></a>
                            <a href="#" class="btn btn-danger btn-sm btn-icon-text">Excluir <i class="typcn typcn-delete-outline btn-icon-append"></i></a>
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