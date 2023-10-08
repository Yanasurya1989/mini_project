<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('purchase_details', function (Blueprint $table) {
            $table->unsignedBigInteger('purchase_id')->required();
            $table->foreign('purchase_id')->references('id')->on('purchase_details');

            $table->unsignedBigInteger('inventory_id')->required();
            $table->foreign('inventory_id')->references('id')->on('purchase_details');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('purchase_details', function (Blueprint $table) {
            $table->dropColumn('purchase_id');
            $table->dropColumn('inventory_id');
        });
    }
};
