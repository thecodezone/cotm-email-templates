<?php

namespace Cotm\EmailTemplates;

use Illuminate\Support\ServiceProvider;

class EmailTemplatesServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/../source/_layouts', 'email:templates');
        $this->loadViewsFrom(__DIR__.'/../source/_components', 'email:components');
        $this->loadViewsFrom(__DIR__.'/../source/_partials', 'email:partials');
    }
}