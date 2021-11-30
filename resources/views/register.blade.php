<html>
    <head>
        <meta charset="utf-8">

        <title>{{ $hotel_name }}: Preenche seu dados básicos</title>

        <link rel="stylesheet" href="{{ asset('css/registration.css') }}">
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>

    </head>

    <body>
        <div class="main" style="margin-top: 100px">
            <div class="logo"></div>

            <div class="content-box" id="step-1">
                <div class="title-box">
                    <div class="title">Informações Pessoais</div>
                    <div class="steps">1 / 3</div>
                </div>

                <div class="png20">
                    <form action="/register-step2" method="POST">
                        @csrf
                        <!-- Email -->
                        <label for="mail">Digite seu e-mail</label>
                        <input type="text" id="email" name="email" onblur="validateEmail()" required>
                        <span id='message_email'></span><br>

                        <!-- Nome do Usuário -->
                        <label for="username">Escolha um nick</label>
                        <input type="text" id="username" name="username" onblur="validateUsername()" required>
                        <span id='message_username'></span><br>

                        <!-- Senha -->
                        <label for="password">Senha</label>
                        <input type="password" id="password" name="password" required>
                        {{-- <!-- <p class="desc">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.</p> -->

                        <!-- <div class="alert">Die angebenen Passwörter stimmen nicht überein!</div> --> --}}

                        <label for="password-confirm">Confirme a senha</label>
                        <input type="password" id="password-confirm" name="password-confirm" onblur="confirmPassword()" required>

                        <span id='message'></span>
                        <!-- <p class="desc">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.</p> -->
                        
                        <input type="hidden" id="gender" name="gender" value="">

                        <div class="alert">Escolha seu gênero</div>

                        <div class="genders">
                            <label for="male" onclick="$('#gender').val('M')"><div class="male" style="background-image:url(https://www.habbo.de/habbo-imaging/avatarimage?figure=hd-180-1.hr-893-45.lg-280-64.sh-300-64.fa-1201-0.ch-255-62&size=l&headonly=1)"></div></label>

                            <label for="female" onclick="$('#gender').val('F')"><div class="female" style="background-image:url(https://www.habbo.de/habbo-imaging/avatarimage?figure=hd-600-1.hr-540-45.lg-695-62.sh-905-62.ch-660-62&size=l&head_direction=4&headonly=1)"></div></label>
                        </div>

                        <p class="desc">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.</p>

                        <div style="clear:both"></div>

                        <a href="/" class="btn red back-register">Voltar</a>
                        <button type="submit" class="btn green next-register" name="next-step">Avançar</button>

                        <div style="clear:both"></div>
                    </form>
                </div>
            </div>
        </div>
    </body>
    <script type="text/javascript" src="{{ asset('js/vendor.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
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
                        console.log(e)
                    })
                }
            }
        
        function validateUsername() {
            if ($('#username').val().length > 0) {
                const fd = new FormData()
                fd.append('username', $('#username').val())
                axios.post('/check-username-exists', fd)
                    .then(response => {
                        document.getElementById('message_username').style.color = 'green';
                        document.getElementById('message_username').innerHTML = 'Usuário disponível para cadastro';
                    })
                    .catch(e => {
                        document.getElementById('message_username').style.color = 'red';
                        document.getElementById('message_username').innerHTML = 'Usuário já cadastrado para outro usuário';
                        console.log(e)
                    })
                }
            }
        function confirmPassword() {
            var password = $('#password').val()
            var confirm_password = $('#password-confirm').val()
            if (confirm_password != password) {
                document.getElementById('message').style.color = 'red';
                document.getElementById('message').innerHTML = 'As senhas não combinam, tente novamente';
            } else {
                document.getElementById('message').innerHTML = null;
                document.getElementById('next-step').disabled = false;
            }
        }
        </script>
</html>