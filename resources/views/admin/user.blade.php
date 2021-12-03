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
                        <div class="news-article show" style="background-image:url(/img/c_images/web_promo/stories_juninas_postit_promo.png)">
                            <div class="shadow"></div>
                            <div class="news-content">
                                <div class="news-title">Usuários</div>
                                <div class="news-short-text">32554 {{ $hotel_name }}'s registrados! <br> Painel - Versão 1.0.0 <br> {{ $hotel_name }} Versão 1.0.0</div>
                            </div>
                        </div>
                    </div>
                    <div class="png20">
                    
                    </div>
                </div>
            </div>
        </div>
    </div>
<script type="text/javascript">
    function validateEmail() {
        if ($('#email').val().length > 0) {
            const fd = new FormData()
            fd.append('email', $('#email').val())
            axios.post('/check-email-exists', fd)
                .then(response => {
                    document.getElementById('message_email').style.color = 'green';
                    document.getElementById('message_email').innerHTML = 'E-mail disponível para cadastro';    
                })
                .catch(e => {
                    document.getElementById('message_email').style.color = 'red';
                    document.getElementById('message_email').innerHTML = 'E-mail já cadastrado para outro usuário';
                })
            }
        }
</script>

@include('base/footer')