<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBudgetRequest;
use App\Persistence\Eloquent\Entities\Budget;
use App\Services\BudgetService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class BudgetsController extends Controller
{
    /** @var BudgetService */
    protected $budgetService;

    /**
     * BudgetsController constructor
     *
     * @param BudgetService $budgetService
     */
    public function __construct(BudgetService $budgetService)
    {
        $this->budgetService = $budgetService;
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        return view('pages.budget.create');
    }

    /**
     * @param StoreBudgetRequest $request
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(StoreBudgetRequest $request)
    {
        try {
            $this->budgetService->create($request->all());

            return redirect()->route('dashboard')->with('success', 'Budget Saved');
        } catch (\Exception $e) {
            Log::error('Error saving budget. ' . $e->getMessage());

            return redirect()->back()->withErrors('There was an error saving the Budget');
        }
    }

    /**
     * @param Budget $budget
     *
     * @return \Illuminate\View\View
     */
    public function show(Budget $budget)
    {
        return view('pages.budget.show', compact('budget'));
    }

    /**
     * @param Budget $budget
     *
     * @return \Illuminate\View\View
     */
    public function edit(Budget $budget)
    {
        return view('pages.budget.edit', compact('budget'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  Budget  $budget
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Budget $budget)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Budget  $budget
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy(Budget $budget)
    {
        //
    }
}
