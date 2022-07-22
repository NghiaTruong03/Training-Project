<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('category_id');
            $table->foreign('category_id')->references('id')->on('categories');
            $table->string('pro_name', 255)->unique();
            $table->float('pro_price',12);
            $table->float('pro_sale_price',12)->nullable()->default(0);
            $table->integer('pro_quantity')->default(0);
            $table->longText('pro_description')->nullable();
            $table->string('pro_image', 255)->nullable();
            $table->tinyInteger('pro_status')->default(1);
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
        Schema::dropIfExists('products');
    }
}
