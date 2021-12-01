<html>
<head>
    <meta charset="utf-8">

    <title>{{ $hotel_name }}: {{ session()->get('username') }}</title>
	<link rel="stylesheet" href="{{ asset('css/style.css') }}">
	<link rel="stylesheet" href="{{ asset('css/profile.css') }}">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
</head>

<body>
	<div id="header-content">
		<div class="container">
			<div class="row">
				<div class="col-xl">
					<div class="hotel"></div>
					<div class="online-count-box"><b>{{ $users_online }}</b>{{ $hotel_name }}'s online</div>
					<a href="/client" class="btn green big check-in-header" target="_blank">Jogar</a>
				</div>
			</div>
		</div>
	</div>
	<div id="header-menu">
		<div class="container">
			<div class="row">
				<div class="col-5">
					<input type="motto" class="rounded" name="motto" id="motto" onblur="changeMotto()" value="{{ session()->get('motto') }}"/>
					<ul class="user-menu">
						<li>
							<a href="/account/me">
								<div class="user-avatar-menu" style="background-image:url(http://habbo.com/habbo-imaging/avatarimage?figure={{ session()->get('look') }}8&head_direction=3&gesture=sml)"></div>{{ session()->get('username') }}<span><i class="far fa-angle-down"></i></span>
							</a>

							<ul class="user-subnavi">
								<li><a href="/profile">Meu Perfil</a></li>
								<li><a href="/general-settings">Configurações</a></li>
								<li><a href="/logout" class="logout">Sair</a></li>
							</ul>
						</li>
					</ul>
				</div>
				
				
				<div class="col-2">
					<a href="\" class="logo"></a>
				</div>
				<div class="col-5">
					<ul class="navigation">
						<li>
							<a href="#">Comunidade<span><i class="far fa-angle-down"></i></span></a>
							<ul class="subnavi">
								<li><a href="/community/news">Notícias</a></li>
								<li><a href="/community/staffs">Equipe</a></li>
							</ul>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<link type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.css" rel="stylesheet">
	<link rel="stylesheet" href="{{ asset('css/settings.css') }}">