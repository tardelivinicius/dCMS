<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use App\View\Composers\CmsViewComposer;

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