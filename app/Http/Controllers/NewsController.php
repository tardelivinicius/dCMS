<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NewsController extends Controller
{
    public function index()
    {   
        $news = DB::table('cms_news')
                    ->get();
        return view('housekeeping/news', ['news' => $news]);
    }

    public function retrieveNew(Request $request)
    {
        if($request->route('id') > 0) {
            $new = DB::table('cms_news as CN')
                        ->where('CN.id', $request->route('id'))
                        ->first();
            return view('housekeeping/new', ['new' => $new]);
        } else {
            return view('housekeeping/new', ['new' => []]);
        }
    }
}
