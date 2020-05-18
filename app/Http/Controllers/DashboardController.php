<?php

namespace App\Http\Controllers;

use App\Services\BudgetService;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /** @var BudgetService */
    protected $budgetService;

    /**
     * DashboardController constructor.
     * @param BudgetService $budgetService
     */
    public function __construct(BudgetService $budgetService)
    {
        $this->budgetService = $budgetService;
    }

    /**
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $budgets = $this->budgetService->all();

        return view('pages.dashboard', compact('budgets'));
    }
}
