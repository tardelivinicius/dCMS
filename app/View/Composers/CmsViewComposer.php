<?php

namespace App\View\Composers;

use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class CMSViewComposer
{
    protected $hotel_name;
    protected $users_online;

    public function __construct()
    {
        // Dependencies are automatically resolved by the service container...
        $this->hotel_name = DB::table('cms_settings')->select('hotel_name')->first()->hotel_name;
        $this->users_online = DB::table('users')->select('online')->where('online', '=', '1')->count();
    }

    /**
     * Bind data to the view.
     *
     * @param  \Illuminate\View\View  $view
     * @return void
     */
    public function compose(View $view)
    {   
        $view->with('hotel_name', $this->hotel_name);
        $view->with('users_online', $this->users_online);
    }
}