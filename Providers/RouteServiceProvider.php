<?php

namespace Modules\Backend\Providers;

use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;

//--- bases ---
use Modules\Xot\Providers\XotBaseRouteServiceProvider;

class RouteServiceProvider extends XotBaseRouteServiceProvider
{
    protected $moduleNamespace = 'Modules\Backend\Http\Controllers';
    protected $module_dir= __DIR__;
    protected $module_ns=__NAMESPACE__;

}
