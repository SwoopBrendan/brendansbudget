<?php

namespace App\Persistence\Eloquent\Repositories;

use App\Persistence\Eloquent\Entities\Budget;

class BudgetRepository extends BaseRepository
{
    /** @var Budget */
    protected $entity;

    /**
     * BudgetRepository constructor.
     * @param Budget $entity
     */
    public function __construct(Budget $entity)
    {
        $this->entity = $entity;
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function budgetItems()
    {
        return $this->entity->budgetItems();
    }
}
