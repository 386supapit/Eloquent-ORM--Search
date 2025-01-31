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
        Schema::create('order_details', function (Blueprint $table) {
            $table->id();
            $table->string('product_code', 13);
            $table->timestamps();
            $table->foreignId('order_id')
            ->constrained('orders')
            ->onDelete('cascade');
            $table->foreign('product_code')
            ->references('product_code')
            ->on('products')
            ->onDelete('cascade');;
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order_details');
    }
};
