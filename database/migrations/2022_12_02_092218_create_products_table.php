<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->bigIncrements('id');
     $table->bigInteger('category_id')->length(20)->unsigned();          
            $table->foreign('category_id')->references('id')->on('categories');
            $table->bigInteger('subcategory_id')->length(20)->unsigned();          
            $table->foreign('subcategory_id')->references('id')->on('sub__categories'); 
            $table->bigInteger('childcategory_id')->length(20)->unsigned();          
            $table->foreign('childcategory_id')->references('id')->on('child__categories');
            $table->string('total_stock');
            $table->string('tax');
            $table->string('sku');
            $table->string('c_price');
            $table->string('p_price');
            $table->string('name');
            $table->string('slug');
            $table->string('image');
            $table->string('short');
            $table->text('description');            
            $table->string('tags');
            $table->string('brand_id');
            $table->string('type');
            $table->enum('status', ['enabled', 'disabled'])->default('enabled');
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
