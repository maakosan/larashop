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
            $table->bigIncrements('id');
            $table->string('productno')->unique();
            $table->string('slug');
            $table->string('name');
            $table->text('description')->nullable($value = true);
            $table->text('categoryslug1');
            $table->text('categoryslug2')->nullable($value = true);
            $table->text('categoryslug3')->nullable($value = true);
            $table->string('mainimage');
            $table->string('subimage1')->nullable($value = true);
            $table->string('subimage2')->nullable($value = true);
            $table->string('subimage3')->nullable($value = true);
            $table->integer('price');
            $table->boolean('pickup');
            $table->integer('stock');
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
