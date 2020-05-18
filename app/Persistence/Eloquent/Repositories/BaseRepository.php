<?php

namespace App\Persistence\Eloquent\Repositories;

/**
 * Class BaseRepository
 * @package App\Persistence\Eloquent\Repositories
 */
class BaseRepository
{
    /**
     * @param $id
     *
     * @return mixed
     */
    public function get($id)
    {
        return $this->entity->findOrFail($id);
    }

    /**
     * @return mixed
     */
    public function all()
    {
        return $this->entity->all();
    }

    public function create($data)
    {
        return $this->entity->create($data);
    }
}
