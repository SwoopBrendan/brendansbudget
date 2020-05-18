<?php

namespace App\Services;

use App\Persistence\Eloquent\Repositories\BudgetRepository;
use Illuminate\Support\Facades\Auth;

class BudgetService extends BaseService
{
    /** @var BudgetRepository */
    protected $repository;

    /**
     * BudgetService constructor.
     * @param BudgetRepository $repository
     */
    public function __construct(BudgetRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * @param $data
     * @return mixed
     */
    public function create($data)
    {
        $data['user_id'] = Auth::id();
        $data['net_income'] = $this->calculateNetIncome($data['gross_income'], $data['other_deductions'], $data['taxes']);
        return parent::create($data);
    }

    /**
     * @param $grossIncome
     * @param $otherDeductions
     * @param $taxes
     * @return mixed
     */
    public function calculateNetIncome($grossIncome, $otherDeductions, $taxes)
    {
        $totalDeductions = $otherDeductions + $taxes;
        return $grossIncome - $totalDeductions;
    }

    /**
     * @return mixed
     */
    public function budgetItems()
    {
        return $this->repository->budgetItems();
    }
}
