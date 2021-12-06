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
                        <div class="news-article show" style="background-image:url(/img/c_images/web_promo/webpromo_mansionRB.png)">
                            <div class="shadow"></div>
                            <div class="news-content">
                                <div class="user-box-menu" style="background-image:url(https://www.habbo.com/habbo-imaging/avatarimage?figure={{ $user->look }}&action=wav&direction=2&head_direction=3&gesture=sml&size=large&img_format=png)"></div>
                                <div class="news-title">{{ $user->username }} </div> <!-- TODO Adicionar imagem de email verificado ou nao -->
                                <div class="news-short-text">Créditos: {{ $user->credits }} <img src='/assets/images/wallet/bigcc.png' /></div>
                                <div class="news-short-text">Diamantes: {{ $user->diamonds }} <img src='/assets/images/wallet/bigdia.png'/></div>
                                <div class="news-short-text">Duckets: {{ $user->duckets }} <img src='/assets/images/wallet/bigduck.png' /></div>
                                <div class="news-short-text">HC: {{ $user->duration / 86400 }} dias restantes <img src='/assets/images/wallet/hc.png' /></div>
                            </div>
                            <div class="details-box">
                                <div class="authors-details">
                                    <div class="details">
                                        Missão: {{ $user->motto }}
                                        <b>Cargo: {{ $user->rank_name}}
                                    </div>
                                </div>
                                <a href="#" onclick="sendSocketCommand('')" class="btn settings-ban-slider-btn">Banir</a>
                            </div>
                        </div>
                        <div class="user-avatar-menu" style="background-image:url(https://www.habbo.com/habbo-imaging/avatarimage?figure={{ $user->look }}&action=wav&direction=2&head_direction=3&gesture=sml&size=large&img_format=png)"></div>
                    </div>
                    <div class="png20">
                        {{-- <form method="post" action='/change-email'>
                            @csrf
                            <button type="submit" class="btn green save">Salvar</button>
                        </form> --}}
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
    
    function sendSocketCommand(command){
        let socket = new WebSocket("ws://127.0.0.1:2096");
        socket.onopen = function(event) {
            console.log("Enviando creditos");
            // socket.send("c 7 500"); // Sends data to server.
            // socket.send(":c 7 500"); // Sends data to server.
            // socket.send("credits 7 500"); // Sends data to server.
            // socket.send("c 7 5");
            // socket.send(":c 7 5");
            // socket.send(':credits', '7;500'); // Sends data to server.
            // socket.send(':credits 7 500');
            socket.send(':c75');

        };
    }
</script>

@include('base/footer')