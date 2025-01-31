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
        Schema::create('registers', function (Blueprint $table) {
            $table->id();
            $table->timestamp('registered_at')->nullable(); // วันที่ลงทะเบียน
            $table->enum('status', ['pending', 'confirmed', 'cancelled'])->default('pending'); // สถานะ
            $table->boolean('fee_paid')->default(false); // สถานะการจ่ายเงิน
            $table->timestamps();

            $table->foreignId('student_id')
            ->constrained('students')
            ->onDelete('cascade');
            $table->foreignId('course_id')
            ->constrained('courses')
            ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('registers');
    }
};
