<?php

namespace App\Persistence\Eloquent\Entities;

use Illuminate\Database\Eloquent\Model;

class BudgetItem extends Model
{
    public function budgetItemType()
    {
        return $this->hasOne('App\Persistence\Eloquent\Entities\BudgetItemType');
    }
}
