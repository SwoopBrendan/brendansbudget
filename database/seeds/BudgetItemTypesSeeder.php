<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BudgetItemTypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('budget_item_types')->insert([
            [
                'name' => "Monthly Debit Order",
                'description' => "Monthly Debit Order",
                'slug' => "monthly-debit-order",
            ],
            [
                'name' => 'Monthly Manual Payment',
                'description' => 'Monthly Manual Payment',
                'slug' => 'monthly-manual-payment',
            ],
            [
                'name' => 'Monthly Allocation',
                'description' => 'Monthly Allocation',
                'slug' => 'monthly-allocation',
            ]
        ]);
    }
}
