<?php namespace Modules\Course\Repositories;


use Prettus\Repository\Eloquent\BaseRepository;
use Modules\Course\Entities\Module;

class ModuleRepository extends BaseRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Module::class;
    }

}