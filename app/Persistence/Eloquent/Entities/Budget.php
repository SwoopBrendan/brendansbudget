<?php

namespace App\Persistence\Eloquent\Entities;

use Illuminate\Database\Eloquent\Model;

class Budget extends Model
{
    /**
     * @var array
     */
    protected $fillable = [
        'name',
        'description',
        'gross_income',
        'other_deductions',
        'taxes',
        'net_income',
        'user_id',
    ];

    public function subBudgets()
    {
        return $this->hasMany('App\Persistence\Eloquent\Entities\SubBudget');
    }

    public function budgetItems()
    {
        return $this->hasMany('App\Persistence\Eloquent\Entities\BudgetItem');
    }
}
