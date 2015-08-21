<?php namespace Modules\Dashboard\Repositories;


use Modules\Dashboard\Entities\Dashboard;
use Prettus\Repository\Eloquent\BaseRepository;

class DashboardRepository extends BaseRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Dashboard::class;
    }


}