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
            $table->unsignedBigInteger('subCategory_id');
            $table->string('SKU');
            $table->string('name');
            $table->string('image')->nullable();
            $table->string('slug')->unique();
            $table->string('short_description')->nullable();
            $table->text('description');
            $table->unsignedInteger('quantity')->default(10);
            $table->decimal('regular_price');
            $table->decimal('sale_price')->nullable();
            $table->enum('stock-status',['instock','outofstock']);
            $table->boolean('featured')->default(false); 
            $table->text('images')->nullable(); 
            $table->string('status',1)->default('0'); 
            $table->foreign('category_id')->on('categories')->references('id')->onDelete('cascade');
            $table->foreign('subCategory_id')->on('subcategories')->references('id')->onDelete('cascade');

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
