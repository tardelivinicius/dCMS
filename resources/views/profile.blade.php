@include('base/header')
<div class="container">
		<div class="row">
        <div class="col-6">
            <div id="content-box" class="profile">
                <div class="bg"></div>
                <div class="overlay">
                    <div class="avatar-image" style="background-image:url(http://habbo.com/habbo-imaging/avatarimage?figure={{ $userData->look }}&size=l&head_direction=3&gesture=sml)"></div>

                    <div class="username">{{ $userData->username }}</div>
                    <div class="motto">{{ $userData->motto }}</div>

                    <div class="last-online">Último Login: {{ date('d/m/Y', $userData->last_online) }}</div>
                </div>
                <div style="clear:both"></div>
            </div>

            
            <div class="tease_rooms"></div>
            <div id="content-box">
                <div class="title-box png20">
                    <div class="title">Quartos</div>
                    <div class="desc">Dê uma olhada nos quartos de {{ $userData->username }}</div>
                </div>
                <div class="png20">
                    <div class="popular-rooms">
                        @foreach ($userRooms as $userRoom)
                            <a href="">
                                <div class="rooms">
                                    <div class="icon"></div>
                                    <div class="room-details">
                                        <div class="name">{{ $userRoom->name }}</div>
                                        <div class="desc">{{ $userRoom->description }}</div>
                                        <div class="user-count">{{ $userRoom->users }} <span><i class="fas fa-user"></i></span></div>
                                    </div>
                                </div>
                            </a>
                        @endforeach
                    </div>
                </div>
                <div class="clear"></div>
            </div>
        </div>
        <div class="col-6">
            <div class="tease_friends"></div>
            <div id="content-box">
                <div class="title-box png20">
                    <div class="title">Amigos</div>
                    <div class="desc">Confira a lista de amigos de {{ $userData->username }}</div>
                </div>
                <div class="png20">
                    @foreach ($userFriends as $userFriend)
                        <a href="profile?username={{ $userFriend->username }}" class="friends-head" style="background-image:url(http://habbo.com/habbo-imaging/avatarimage?figure={{ $userFriend->look }}8&size=b&head_direction=3&gesture=sml&headonly=1)"><div class="username">{{ $userFriend->username }}</div></a>
                    @endforeach
                    <div class="clear"></div>
                </div>
            </div>

            <div class="tease_groups"></div>
            <div id="content-box">
                <div class="title-box png20">
                    <div class="title">Grupos</div>
                    <div class="desc">Confira os grupos de {{ $userData->username }}</div>
                </div>
                <div class="png20">
                    @foreach ($userGroups as $userGroup)
                        <div class="group-badge" style="background-image:url(https://www.habbo.de/habbo-imaging/badge/b06094s03175s42174s111171b975e2f5442a16940495a2745449793.gif)"><div class="group-name">{{ $userGroup->name }}</div></div>
                    @endforeach
                    <div class="clear"></div>
                </div>
            </div>
        </div>
        <div class="col-12">
            <div class="created_account">{{ $userData->username }} juntou-se à comunidade em <br><b>{{ date('d/m/Y', $userData->account_created ) }}<b>
        </div>
@include('base/footer')
