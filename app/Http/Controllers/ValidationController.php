<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class ValidationController extends Controller
{
    public function check_email_exists(Request $request){
        $email = $request->get('email');
        if ($email == null){
            return response('', 404);
        }
        $users = DB::table('users')->select('mail')->where('mail', $email)->first();
        if ($users == null){
            return response('', 202);
        } else {
            return response('', 404);
        }
    }

    public function check_username_exists(Request $request){
        $username = $request->get('username');
        if ($username == null){
            return response('', 404);
        }
        $users = DB::table('users')->select('username')->where('username', $username)->first();
        if ($users == null){
            return response('', 202);
        } else {
            return response('', 404);
        }
    }
}
