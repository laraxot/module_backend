<?php

namespace Modules\Backend\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Database\Eloquent\Factory;

use Modules\Xot\Providers\XotBaseServiceProvider;

class BackendServiceProvider extends XotBaseServiceProvider{
    public $module_dir=__DIR__;
    public $module_ns=__NAMESPACE__;
    public $module_name='backend';  
}
