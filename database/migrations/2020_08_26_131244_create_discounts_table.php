<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDiscountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('discounts', function (Blueprint $table) {
            $table->id();
            $table->int('shop_id');
            $table->bigInteger('product_id');
            $table->bigInteger('price_rule_id');
            $table->bigInteger('collection_id');
            $table->string('discount_title');
            $table->string('value_type');
            $table->string('value')->nullable();
            $table->string('quantity_range')->nullable();
            $table->string('description')->nullable();
            $table->string('product_type')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('discounts');
    }
}
