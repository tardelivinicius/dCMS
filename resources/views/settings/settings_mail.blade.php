@include('base/header')
	<div class="container">
		<div class="row">
            <div class="col-4">
                <a href="/general-settings" id="settings-navigation-box">
                    <div class="png20">
                        <i class="far fa-cog icon"></i>
                        <div class="settings-title">Configurações gerais</div>
                        <div class="settings-desc">Gerencie suas configurações do Hotel</div>
                    </div>
                    <div class="clear"></div>
                </a>
                <a href="/email-settings" id="settings-navigation-box"  class="selected">
                    <div class="png20">
                        <i class="far fa-envelope icon"></i>
                        <div class="settings-title">Alterar Endereço de E-mail</div>
                        <div class="settings-desc">Altere seu e-mail</div>
                    </div>
                    <div class="clear"></div>
                </a>
                <a href="/password-settings" id="settings-navigation-box">
                    <div class="png20">
                        <i class="far fa-lock-open-alt icon"></i>
                        <div class="settings-title">Alterar Senha</div>
                        <div class="settings-desc">Altere sua senha</div>
                    </div>
                    <div class="clear"></div>
                </a>
        </div>
<div class="col-8">
    <div style="display:none" class="alert failed" id="alert_failed"></div>
    <div style="display:none" class="alert success" id="alert_sucess">Suas configurações foram salvas com sucesso!</div>
    <div id="content-box" style="height:570px">
        <div class="title-box png20">
            <div class="title">Alterar Endereço de E-mail</div>
        </div>

        <div class="png20">
            <form method="post" action='/change-email'>
                @csrf
                <label for="old_email">E-mail Atual</label>
                <input type="email" id="old_email" value="{{ session()->get('email') }}" name="old_email" disabled>
                <div class="desc" style="margin: 0 0 20px 0">Seu e-mail atual</div>

                <label for="new-email">Novo endereço de E-mail</label>
                <input type="email" id="email" name="email" onblur="validateEmail()" required>
                <div class="desc">Digite seu novo endereço de e-mail</div>
                <span id='message_email'></span><br>
                <div class="line"></div>

                <label for="password_confirm">Sua senha</label>
                <input type="password" id="password" name="password" required>
                <div class="desc">Digite sua senha para confirmar a operação</div>

                <button type="submit" class="btn green save">Salvar</button>
            </form>
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