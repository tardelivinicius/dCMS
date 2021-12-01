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
                <a href="/email-settings" id="settings-navigation-box">
                    <div class="png20">
                        <i class="far fa-envelope icon"></i>
                        <div class="settings-title">Alterar Endereço de E-mail</div>
                        <div class="settings-desc">Altere seu e-mail</div>
                    </div>
                    <div class="clear"></div>
                </a>
                <a href="/password-settings" id="settings-navigation-box" class="selected">
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
            <div class="title">Alterar Senha</div>
        </div>

        <div class="png20">
            <form method="post">
                <label for="old_password">Senha Atual</label>
                <input type="password" id="old_password" name="old_password" required>
                <div class="desc" style="margin: 0 0 20px 0">Precisamos disso para garantir que você é o proprietário da conta</div>
                <div class="line"></div>

                <label for="new_password">Nova Senha</label>
                <input type="password" id="new_password" name="new_password" required>
                <div class="desc">Sua nova senha deve conter mais de 8 caractéres</div>

                <label for="email_confirm">E-mail Atual</label>
                <input type="email" id="email_confirm" name="email_confirm" required>
                <div class="desc">Digite o seu e-mail para confirmar a operação</div>

                <button type="submit" class="btn green save">Salvar</button>
            </form>
        </div>
    </div>
</div>
<script type="text/javascript">
    $(document).ready(function() {
        $('form').on('submit', function(event) {
        $(':disabled').each(function(e) {
            $(this).removeAttr('disabled');
        })
        event.preventDefault();
        $.ajax({
            url: 'save_settings_password',
            method: "POST",
            data: $(this).serialize(),
            async: false,
            success: function(result) {
                $('#alert_sucess').show();
                setTimeout(function() { window.location.href = 'settings?step=password'}, 1000)
            },
            error: function(result) {
                var $messageDiv = $('#alert_failed')
                $messageDiv.show().html(result.responseText)
            }
        });
    })
})
</script>

@include('base/footer')