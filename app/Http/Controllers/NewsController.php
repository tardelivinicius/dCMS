<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Symfony\Component\Console\Input\Input;

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
    public function create(Request $request)
    {   

        if($request->title == null){
            return response('É necessário preencher o título', 404);
        }
        # E-mail validation
        if($request->shortstory == null){
            return response('É necessário preencher a descrição', 404);
        } 
        # E-mail validation
        if($request->longstory == null){
            return response('É necessário preencher a história', 404);
        }

        # E-mail validation
        if($request->date == null){
            return response('É necessário preencher a data', 404);
        } 
        
        DB::table('cms_news')
            ->insert([
                'title' => $request->title,
                'shortstory' => $request->shortstory,
                'longstory' => $request->longstory,
                'date' => $request->date,
                'author' => session()->get('username')
            ]);
        return redirect('housekeeping/news');   
    }

    public function update(Request $request)
    {   
        print_r($request->get('title'));
        print_r($request->input('title'));
        if($request->get('title') == null){
            return response('É necessário preencher o título', 404);
        }
        # E-mail validation
        if($request->shortstory == null){
            return response('É necessário preencher a descrição', 404);
        } 
        # E-mail validation
        if($request->longstory == null){
            return response('É necessário preencher a história', 404);
        }

        # E-mail validation
        if($request->date == null){
            return response('É necessário preencher a data', 404);
        } 
        print_r($request);
        error;
        DB::table('cms_news')
            ->where('id', $request->route('id'))
            ->update([
                'title' => $request->title,
                'shortstory' => $request->shortstory,
                'longstory' => $request->longstory,
                'date' => $request->date,
                'author' => session()->get('username')
            ]);
        return redirect('housekeeping/news');   
    }
}
