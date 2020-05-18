<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBudgetItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('budget_items', function (Blueprint $table) {
            $table->id();
            $table->string('name', 255);
            $table->string('description', 255)->nullable();
            $table->float('allocated_amount')->default(0)->nullable();
            $table->float('spent_amount')->nullable();
            $table->timestamps();
            $table->unsignedBigInteger('budget_id');
            $table->unsignedBigInteger('budget_item_type_id');
            $table->foreign('budget_id')->references('id')->on('budgets');
            $table->foreign('budget_item_type_id')->references('id')->on('budget_item_types');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('budget_items');
    }
}
