<?php

use Modules\Xot\Traits\RouteTrait;

$namespace = $this->getNamespace();
$pack = class_basename($namespace);
//$pack_low=strtolower($pack);

$item0 = [
    'name' => $pack,
    //'prefix'=>$pack_low,
    //'as'=>$pack_low.'.',
    //'namespace'=>null,
    //'controller' =>  $pack.'Controller'
    'only' => ['index'],
    'subs' => [
        ['name' => 'Upload'],
        ['name' => 'UploadCSV'],
        ['name' => 'Theme'],
        ['name' => 'Metatag'],
        [
            'name' => null,
            'prefix' => '{lang}',
            'as' => null,
            'subs' => [
                [
                    'name' => 'Translation',
                    'param_name' => 'namespace',
                    'namespace' => $pack,
                ], //end sub_n
            ], //end subs
        ], //end sub_n
    ], //end subs
    /*
    'acts'=>[
        [
            'name'=>'Upload',
            'method'=>'POST',
        ],//end act_n
    ],//end acts
    */
];

$areas_prgs = [
    $item0,
];

Route::group(
    [
        'prefix' => 'admin',
        'middleware' => ['web', 'auth'],
        'namespace' => $namespace.'\Controllers'.'\Admin',
    ],
    function () use ($areas_prgs) {
        RouteTrait::dynamic_route($areas_prgs);
    }
);
