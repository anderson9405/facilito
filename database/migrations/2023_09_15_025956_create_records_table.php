<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('records', function (Blueprint $table) {
            $table->id();
            $table->float('price');
            $table->integer('quantity');
            
            //foreign keys
            $table->unsignedBigInteger('sale_id');
            $table->foreign('sale_id')->references('id')->on('sales')
                                        ->onUpdate('cascade')
                                        ->constrained();

            $table->unsignedBigInteger('product_id');
            $table->foreign('product_id')->references('id')->on('products')
                                        ->onUpdate('cascade')
                                        ->constrained();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('records');
    }
};
