<?php

namespace App\Services;

class BaseService
{
    public function all()
    {
        return $this->repository->all();
    }

    public function create($data)
    {
        return $this->repository->create($data);
    }
}
