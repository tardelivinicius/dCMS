@include('base/header')
	<div class="container">
		<div class="row">
            <div class="col-4">
                <a href="/admin/cms/users" id="settings-navigation-box">
                    <div class="png20">
                        <i class="far fa-users icon"></i>
                        <div class="settings-title">Usuários</div>
                        <div class="settings-desc">Gerencie os usuários do hotel</div>
                    </div>
                    <div class="clear"></div>
                </a>
                <a href="/admin/cms/news" id="settings-navigation-box">
                    <div class="png20">
                        <i class="far fa-newspaper icon"></i>
                        <div class="settings-title">Notícias</div>
                        <div class="settings-desc">Gerencie as notícias para sua comunidade</div>
                    </div>
                    <div class="clear"></div>
                </a>
                <a href="/admin/cms/campaigns" id="settings-navigation-box">
                    <div class="png20">
                        <i class="far fa-bullhorn icon"></i>
                        <div class="settings-title">Campanhas & Eventos</div>
                        <div class="settings-desc">Gerencie o entretenimento em seu hotel</div>
                    </div>
                    <div class="clear"></div>
                </a>
            </div>
            <div class="col-8">
                <div style="display:none" class="alert failed" id="alert_failed"></div>
                <div style="display:none" class="alert success" id="alert_sucess">Suas configurações foram salvas com sucesso!</div>
                <div id="content-box" style="height:auto">
                    <div id="news-content">
                        <div class="news-article show" style="background-image:url(/img/c_images/web_promo/cleanhabbo_newspromo2.png)">
                            <div class="shadow"></div>
                            <div class="news-content">
                                <div class="news-title">Notícias</div>
                                <div class="news-short-text">
                                    @php
                                        echo count($news);
                                    @endphp
                                    notícias publicadas!</div>
                            </div>
                            <div class="details-box">
                                <div class="authors-details">
                                    <div class="details">
                                        <b>Painel - Versão {{ $panel_version }}</b>
                                        Hotel - Versão {{ $system_version }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="data-table">
                        <table id="example" class="table table-striped table-bordered" style="width:100%">
                            <thead>
                                <tr>
                                    <th width="10px">#</th>
                                    <th>Título</th>
                                    <th>Descrição</th>
                                    <th>Autor</th>
                                    <th>Modificada</th>
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
                                        <td><center><a href="/admin/cms/new/{{ $new->id }}"><span><i class="far fa-pencil icon"></i></span></a></center></td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
<script type="text/javascript">
    $(document).ready(function() {
            $('#example').DataTable(
                
                {     

            "aLengthMenu": [[5, 10, 25, -1], [5, 10, 25, "All"]],
                "iDisplayLength": 5
            } 
                );
        } );


        function checkAll(bx) {
        var cbs = document.getElementsByTagName('input');
        for(var i=0; i < cbs.length; i++) {
            if(cbs[i].type == 'checkbox') {
            cbs[i].checked = bx.checked;
            }
        }
    }

</script>

@include('base/footer')