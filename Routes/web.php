<?php

use Modules\Extend\Services\RouteService;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
/*
Route::prefix('backend')->group(function() {
    Route::get('/', 'BackendController@index');
});
*/

$namespace = '\Modules\Backend';//$this->getNamespace();
$pack = class_basename($namespace);
$middleware = ['web', 'auth'/*,'verified'*/];
$prefix = 'admin';

$areas_prgs = [
    [
        'name' => 'profile',
    ],
];
Route::group(
    [
    'prefix' => $prefix,
    'middleware' => $middleware,
    'namespace' => $namespace.'\Http\Controllers\Admin',
    ],
    function () use ($areas_prgs) {
        Route::get('/', 'BackendController@dashboard');
        //RouteTrait::dynamic_route($areas_prgs);
    }
);
//require_once(__DIR__.'/../../../Blog/src/routes/web_admin_blog.php');