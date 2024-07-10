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
        Schema::table('cart_items', function (Blueprint $table) {
            $table->string('order_number')->nullable();
            $table->string('email')->nullable();
            $table->string('status')->nullable();
            $table->decimal('total', 8,2);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('cart_items', function (Blueprint $table) {
            $table->dropColumn('order_number');
            $table->dropColumn('email');
            $table->dropColumn('status');
            $table->dropColumn('total');
        });
    }
};