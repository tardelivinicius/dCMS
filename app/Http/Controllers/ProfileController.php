<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProfileController extends Controller
{
    public function show(Request $request){
        if($request->route('username') == '') {
            $userId = session()->get('id');
        } else {
            $userId = DB::table('users')
                        ->select('id')
                        ->where('username', $request->route('username'))
                        ->first()
                        ->id;
        }

        if($userId > 0){
            # Profile - Basic Data
            $userData = DB::table('users')
                            ->select('username', 'motto', 'last_online', 'account_created', 'look')
                            ->where('id', $userId)
                            ->first();
            # Profile - Rooms
            $userRooms = DB::table('rooms')
                            ->join('users', 'rooms.owner_id', '=', 'users.id')
                            ->select('rooms.*')
                            ->where('users.id', $userId)
                            ->get();
            # Profile - User Groups
            $userGroups = DB::table('guilds_members')
                            ->join('guilds', 'guilds_members.guild_id', '=', 'guilds.id')
                            ->join('users', 'guilds_members.user_id', '=', 'users.id')
                            ->select('guilds.name', 'guilds.badge')
                            ->where('users.id', $userId)
                            ->get();
            # Profile - Friends
            $userFriends = DB::table('messenger_friendships')
                            ->join('users as U', 'messenger_friendships.user_one_id', '=', 'U.id')
                            ->join('users as U2', 'messenger_friendships.user_two_id', '=', 'U2.id')
                            ->select('U2.username as username', 'U2.look AS look')
                            ->where('U.id', $userId)
                            ->get();
            return view('profile', ['userData' => $userData, 'userRooms' => $userRooms, 'userGroups' => $userGroups, 'userFriends' => $userFriends]);
        } else {
            return redirect('/me');
        }
    }
}
