<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsI18nTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products_i18n', function (Blueprint $table) {
            $table->id();
            $table->integer('product_id');
            $table->string('locale')->default('ru');
            $table->longText('title');
            $table->longText('subtitle');
            $table->longText('description');
            $table->string('amount');
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
        Schema::dropIfExists('products_i18n');
    }
}
