<?php

namespace Modules\Backend\Repositories;

//---base
use Modules\Xot\Repositories\XotBaseRepository;

class BackendRepository extends XotBaseRepository {
    /**
     * Specify Model class name.
     *
     * @return string
     */
    protected $model = 'Modules\Backend\Models\Backend';
}
