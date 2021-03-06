<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CommunityStaffController extends Controller
{
    public function show()
    {
        # Staff - CEO
        $ceos = DB::table('users')
                    ->join('ranks', 'ranks.id', '=', 'users.rank')
                    ->select('users.username', 'users.motto', 'users.look', 'users.online')
                    ->where('rank', 9)
                    ->get();


        # Staff - Administração
        $admins = DB::table('users')
                    ->join('ranks', 'ranks.id', '=', 'users.rank')
                    ->select('users.username', 'users.motto', 'users.look', 'users.online')
                    ->where('rank', 8)
                    ->get();
        # Staff - Moderação
        $mods = DB::table('users')
                    ->join('ranks', 'ranks.id', '=', 'users.rank')
                    ->select('users.username', 'users.motto', 'users.look', 'users.online')
                    ->where('rank', 7)
                    ->get();
        return view('community/staffs', ['ceos' => $ceos, 'admins' => $admins, 'mods' => $mods]);
    }
}
