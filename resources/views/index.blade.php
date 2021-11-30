<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>{{ $hotel_name }}</title>
        <link rel="stylesheet" href="{{ asset('css/index.css') }}">
        <script src="{{ asset('js/app.js') }}"></script>
        <script src="{{ asset('js/vendor.js') }}"></script>
    </head>

    <body>
        <!-- <div class="error-msg">Die Felder müssen ausgefüllt sein.</div> -->

        <div class="hero">
            <div class="hotel"></div>
        </div>

        <div id="header-content">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="logo"></div>
                        <div class="online-count">{{ $users_online }} {{ $hotel_name }}'s online!<b></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <div class="login-position">
                        <h2>Bem vindo</h2>
                        <form method="post" action="/login">
                            @csrf
                            <label for="login">Digite seu login {{ $hotel_name }} ou e-mail</label>
                            <input type="text" name="username" id="username" required>

                            <label for="password">Senha</label>
                            <input type="password" name="password" id="password" required>
                            <span id='message_login'></span><br>
                            <button class="btn big green login-button">Entrar</button>
                        </form>
                        <div class="clear"></div>
                        <div class="row">
                            <div class="col-md-12">
                                <p>OU</p>
                            </div>
                            <div class="col-md-12">
                                <a href="{{ url('register') }}" class="btn big orange register-button">Registre-se</a>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div id="footer-content">
                                <ul class="footer-links">
                                    <li><a href="">Início</a></li>
                                    <li><a href="">Contato</a></li>
                                </ul>
                                <p class="footer">{{ $hotel_name }} &copy; 2021. All rights reserved.<br />{{ $hotel_name }} não é afiliada com a Sulake Corporation Oy.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="clear"></div>
        </div>
    </body>
</html>