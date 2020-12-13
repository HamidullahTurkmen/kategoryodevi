<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Products extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {

            $table->increments('id');
            $table->integer('category_id')->unsigned();
            $table->string('productName')->comment('product_name');
            $table->decimal('price',5,2);
            $table->string('photo',250)->nullable();
            $table->text('description')->nullable();
            $table->Integer('created_by')->unsigned();
            $table->timestamps();
            $table->foreign('created_by')->references('id')->on('users')
            ->cascadeOnDelete()->cascadeOnUpdate();

            $table->foreign('category_id')->references('id')
                ->on('categories')->cascadeOnDelete()->cascadeOnUpdate();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
