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
                        <div class="news-article show" style="background-image:url({{ $new->image }})">
                            <div class="shadow"></div>
                            <div class="news-content">
                                <div class="news-title">{{ $new->title }}</div>
                                <div class="news-short-text">{{ $new->shortstory }}</div>
                            </div>
                            <div class="details-box">
                                <div class="authors-details">
                                    <div class="written-by">
                                        <b>Escrito por:</b>
                                        <span>{{ $new->author }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="png20">
                        <form method="post" action='/change-email'>
                            @csrf
                            <div class="desc" style="margin: 0 0 20px 0">Seu e-mail atual</div>
            
                            <label for="new-email">Novo endereço de E-mail</label>
                            <input type="email" id="email" name="email" onblur="validateEmail()" required>
                            <div class="desc">Digite seu novo endereço de e-mail</div>
                            <span id='message_email'></span><br>
                            <div class="line"></div>
            
                            <button type="submit" class="btn green save">Salvar</button>
                        </form>
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