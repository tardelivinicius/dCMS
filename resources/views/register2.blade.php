<html>
    <head>
        <meta charset="utf-8">

        <title>{{ $hotel_name }}: Escolha seu avatar!</title>

        <link rel="stylesheet" href="{{ asset('css/registration.css') }}">
        <link rel="stylesheet" href="{{ asset('css/avatargenerate.css') }}">
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
    </head>

    <body>
        <div class="main-step3">
            <div class="logo"></div>

            <div class="content-box" id="step-3">
                <div class="title-box">
                    <div class="title">Escolha seu Visual e sua missão</div>
                    <div class="steps">2 / 3</div>
                </div>

                <div class="png20" class="col-lg-8">
                    <form action="/finish-register" method="POST">
                        @csrf
                        <div class="form-group">
                            <div style="width: 0%;" class="col-lg-8">
                                <div id="avatarSelector" class="builder-viewport">
                                    <div class="main-navigation">
                                        <ul>
                                            <li class="active">
                                                <a href="#" data-navigate="hd" data-subnav="gender"><img src="{{ asset('img/avatarreg/body.png') }}"/></a>
                                            </li>
                                            <li>
                                                <a href="#" data-navigate="hr" data-subnav="hair"><img src="{{ asset('img/avatarreg/hair.png') }}"/></a>
                                            </li>
                                            <li>
                                                <a href="#" data-navigate="ch" data-subnav="tops"><img src="{{ asset('img/avatarreg/tops.png') }}" /></a>
                                            </li>
                                            <li>
                                                <a href="#" data-navigate="lg" data-subnav="bottoms"><img src="{{ asset('img/avatarreg/bottoms.png') }}" /></a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="sub-navigation">
                                        <ul id="gender" class="display">
                                            <li>
                                                <a href="#" class="male nav-selected" data-gender="M"></a>
                                            </li>
                                            <li>
                                                <a href="#" class="female" data-gender="F"></a>
                                            </li>
                                        </ul>
                                        <ul id="hair" class="hidden">
                                            <li>
                                                <a href="#" class="hair nav-selected" data-navigate="hr"></a>
                                            </li>
                                            <li>
                                                <a href="#" class="hats" data-navigate="ha"></a>
                                            </li>
                                            <li>
                                                <a href="#" class="hair-accessories" data-navigate="he"></a>
                                            </li>
                                            <li>
                                                <a href="#" class="glasses" data-navigate="ea"></a>
                                            </li>
                                            <li>
                                                <a href="#" class="moustaches" data-navigate="fa"></a>
                                            </li>
                                        </ul>
                                        <ul id="tops" class="hidden">
                                            <li>
                                                <a href="#" class="tops nav-selected" data-navigate="ch"></a>
                                            </li>
                                            <li>
                                                <a href="#" class="chest" data-navigate="cp"></a>
                                            </li>
                                            <li>
                                                <a href="#" class="jackets" data-navigate="cc"></a>
                                            </li>
                                            <li>
                                                <a href="#" class="accessories" data-navigate="ca"></a>
                                            </li>
                                        </ul>
                                        <ul id="bottoms" class="hidden">
                                            <li>
                                                <a href="#" class="bottoms nav-selected" data-navigate="lg"></a>
                                            </li>
                                            <li>
                                                <a href="#" class="shoes" data-navigate="sh"></a>
                                            </li>
                                            <li>
                                                <a href="#" class="belts" data-navigate="wa"></a>
                                            </li>
                                        </ul>
                                    </div> 
                                    <div id="clothes-colors">
                                        <div id="clothes"></div>
                                        <div id="colors"></div>
                                    </div>
                                    <div id="avatar">
                                        <img id="myHabbo" value="" src="" alt="My Habbo" title="My Habbo" />
                                        <input type="hidden" name="avatar_code" id="avatar_code">
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div style="clear:both"></div>

                        <a href="/register/?step=2" class="btn red back-register">Voltar</a>
                        <button type="submit" class="btn green next-register">Criar</button>
                    </form>
                    <div style="clear:both"></div>

                </div>
            </div>
        </div>
    </body>
    <script type="text/javascript" src="{{ asset('js/vendor.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/jquery.avatargenerate.js') }}"></script>
</html>