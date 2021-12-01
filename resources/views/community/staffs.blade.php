@include('base/header')
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div id="title-headline">CEO</div>
                </div>
            </div>
            <div class="row">
            @foreach ($ceos as $ceo)
                <div class="col-4"> 
                    <a href="/profile?username={{ $ceo->username }}" class="staff-box">
                        <div class="staff-header"><div class="header"></div><div class="overlay"><div class="work">Developer</div><div class="username">{{ $ceo->username }}</div></div></div>
                        <div class="avatarimage" style="background-image:url(https://www.habbo.de/habbo-imaging/avatarimage?figure={{ $ceo->look }}8&size=l)"></div>
                        <div class="clear"></div>
                        <div class="png">
                            @if ($ceo->online == '1')
                                @php
                                    $status = 'online'
                                @endphp
                            @else
                                @php
                                   $status = 'offline'
                                @endphp
                            @endif
                            <div class="motto">{{ $ceo->motto }}</div>
                            <div class="online-status {{ $status }}"><div class="dot"></div></div>
                            <div class="clear"></div>
                        </div>
                        <div class="clear"></div>
                    </a>
                </div>
            @endforeach
            </div>
            <div class="row">
                <div class="col-12">
                    <div id="title-headline">Administradores</div>
                </div>
            </div>
            <div class="row">
            @foreach ($admins as $admin)
                <div class="col-4"> 
                    <a href="/profile?username={{ $admin->username }}" class="staff-box">
                        <div class="staff-header"><div class="header"></div><div class="overlay"><div class="work">Developer</div><div class="username">{{ $admin->username }}</div></div></div>
                        <div class="avatarimage" style="background-image:url(https://www.habbo.de/habbo-imaging/avatarimage?figure={{ $admin->look }}8&size=l)"></div>
                        <div class="clear"></div>
                        <div class="png">
                            @if ($admin->online == '1')
                                @php
                                    $status = 'online'
                                @endphp
                            @else
                                @php
                                   $status = 'offline'
                                @endphp
                            @endif
                            <div class="motto">{{ $admin->motto }}</div>
                            <div class="online-status {{ $status }}"><div class="dot"></div></div>
                            <div class="clear"></div>
                        </div>
                        <div class="clear"></div>
                    </a>
                </div>
            @endforeach
            </div>
			<div class="row">
                <div class="col-12">
                    <div id="title-headline">Moderadores</div>
                </div>
            </div>
            <div class="row">
            @foreach ($mods as $mod)
                <div class="col-4"> 
                    <a href="/profile?username={{ $mod->username }}" class="staff-box">
                        <div class="staff-header"><div class="header"></div><div class="overlay"><div class="work">Developer</div><div class="username">{{ $mod->username }}</div></div></div>
                        <div class="avatarimage" style="background-image:url(https://www.habbo.de/habbo-imaging/avatarimage?figure={{ $mod->look }}8&size=l)"></div>
                        <div class="clear"></div>
                        <div class="png">
                            @if ($mod->online == '1')
                                @php
                                    $status = 'online'
                                @endphp
                            @else
                                @php
                                   $status = 'offline'
                                @endphp
                            @endif
                            <div class="motto">{{ $mod->motto }}</div>
                            <div class="online-status {{ $status }}"><div class="dot"></div></div>
                            <div class="clear"></div>
                        </div>
                        <div class="clear"></div>
                    </a>
                </div>
            @endforeach
            </div>
@include('base/footer')