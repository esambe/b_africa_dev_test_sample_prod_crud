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
            $table->foreignId('vendor_id')->constrained('users');
            $table->string('title');
            $table->string('slug')->unique();
            $table->double('price');
            $table->string('image')->nullable();
            $table->string('currency')->default('XAF');
            $table->boolean('is_discount')->default(0);
            $table->boolean('is_service')->default(0);
            $table->boolean('in_stock')->default(0);
            $table->boolean('is_published')->default(0);
            $table->text('description')->nullable();
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
