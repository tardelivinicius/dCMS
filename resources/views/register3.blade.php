<html>
    <head>
        <meta charset="utf-8">

        <title>{{ $hotel_name }}: Cadastro concluído</title>

        <link rel="stylesheet" href="{{ asset('css/registration.css') }}">
        <link rel="stylesheet" href="{{ asset('css/avatargenerate.css') }}">
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
    </head>

    <body>
        <div class="main-step3">
            <div class="logo"></div>

            <div class="content-box" id="step-3">
                <div class="title-box">
                    <div class="title">Cadatro finalizado!</div>
                    <div class="steps">3 / 3</div>
                </div>

                <div class="png20" class="col-lg-16">
                   
                    <p class="desc">Obrigado por realizar o seu cadastro conosco, estamos muito felizes! Acesse o seu endereço de e-mail <strong>{{ session()->get('data')['email'] }}</strong> para confirmação do seu cadastro</p>

                    <div style="clear:both"></div>
                    <a href="/" class="btn green">Fazer login</a>
                    <div style="clear:both"></div>
                    </div>

                   

                </div>
            </div>
        </div>
    </body>
    <script type="text/javascript" src="{{ asset('js/vendor.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/jquery.avatargenerate.js') }}"></script>
</html>