<?php

namespace App\Providers;

use App\View\Composers\CMSViewComposer;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class ComposerProvider extends ServiceProvider
{
    public function boot()
    {
        // Using class based composers...
        View::composer([
            '*'
        ], CMSViewComposer::class);
    }
}