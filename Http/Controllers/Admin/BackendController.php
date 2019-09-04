<?php
namespace Modules\Backend\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
//--- services
use Modules\Theme\Services\ThemeService;
//--- traits 
use Modules\Xot\Traits\ArtisanTrait;

use Modules\Xot\Services\ArtisanService;

class BackendController extends Controller{

    public function index(Request $request){
        if ($request->act=='routelist') {
            return ArtisanTrait::exe('route:list');
        }
        if (1 == $request->dusk) {
            //   \Artisan::queue('command:dusk');
            return ArtisanTrait::exe('dusk');
        }
        return ThemeService::view();
    }

    public function dashboard(Request $request){
        $out=ArtisanService::act($request->act);
        if($out!='') return $out;
        return ThemeService::view('adm_theme::admin.dashboard');
    }
}
