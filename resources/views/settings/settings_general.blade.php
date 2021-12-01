@include('base/header')
    <div class="container">
		<div class="row">
        <div class="col-4">
            <a href="/general-settings" id="settings-navigation-box" class="selected">
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
            <div style="display:none" class="alert success" id="alert_sucess">Suas configurações foram salvas com sucesso!</div>

            <div id="content-box" style="height:380px">
                <div class="title-box png20">
                    <div class="title">Configurações gerais</div>
                </div>
                <div class="png20">
                    <form method="post" action="/save-general-settings">
                        @csrf
                        <label>Seguir-me</label>
                        <div class="desc">Deseja que outros {{ $hotel_name }} possam te seguir?</div>
                        <div class="btnset">
                            @if ($userGeneralConfigs->block_following == 0)
                                @php
                                    $checked = 'checked';
                                    $unchecked = '';
                                @endphp
                            @else
                                @php
                                    $checked = '';
                                    $unchecked = 'checked';
                                @endphp
                            @endif
                            <input type="radio" value="0"  {{ $checked }} id="btnset_following1" name="block_following"><label for="btnset_following1">Sim</label>
                            <input type="radio" value="1" {{ $unchecked }} id="btnset_following3" name="block_following"><label for="btnset_following3">Não</label>
                        </div>

                        <label>Solicitações de Amizade</label>
                        <div class="desc">Deseja que outros {{ $hotel_name }} possam enviar solicitação de amizade?</div>
                        <div class="btnset">
                            @if ($userGeneralConfigs->block_friendrequests == 0)
                                @php
                                    $checked = 'checked';
                                    $unchecked = '';
                                @endphp
                            @else
                                @php
                                    $checked = '';
                                    $unchecked = 'checked';
                                @endphp
                            @endif
                            <input type="radio" value="0" {{ $checked }} id="btnset_requests1" name="block_friendrequests" checked><label for="btnset_requests1">Sim</label>
                            <input type="radio" value="1" {{ $unchecked }} id="btnset_requests3" name="block_friendrequests"><label for="btnset_requests3">Não</label>
                        </div>

                        <label>Online Status</label>
                        <div class="desc">Deseja que outros {{ $hotel_name }} vejam que você está online?</div>
                        <div class="btnset">
                            @if ($userGeneralConfigs->block_roominvites == 0)
                                @php
                                    $checked = 'checked';
                                    $unchecked = '';
                                @endphp
                            @else
                                @php
                                    $checked = '';
                                    $unchecked = 'checked';
                                @endphp
                            @endif
                            <input type="radio" value="0" {{ $checked }} id="btnset_online1" name="block_roominvites" checked><label for="btnset_online1">Sim</label>
                            <input type="radio" value="1" {{ $unchecked }} id="btnset_online3" name="block_roominvites"><label for="btnset_online3">Não</label>
                        </div>

                        <button type="submit" class="btn green save">Salvar</button>
                    </form>
                </div>
            </div>
        </div>
        {{-- <script type="text/javascript">
            $(document).ready(function() {
                $('form').on('submit', function(event) {
                event.preventDefault();
                $.ajax({
                    url: 'save_settings',
                    method: "POST",
                    data: $(this).serialize(),
                    async: false,
                    success: function(result) {
                        console.log('ok')
                        $('#alert_sucess').show();
                        setTimeout(function() { window.location.href = 'settings'}, 1000)
                    },
                    error: function() {
                        console.log('erro')
                    }
                });
            })
        })
        </script> --}}
@include('base/footer')