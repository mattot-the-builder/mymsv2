<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class() extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void {
        Schema::create('student_registrations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained();
            $table->string('ic_number');
            $table->string('contact');
            $table->string('company_name');
            $table->string('address');
            $table->boolean('is_sponsored');
            $table->string('competency');
            $table->string('position');
            $table->foreignId('course_id')->constrained();
            $table->string('payment_id')->nullable();
            $table->string('status')->default('pending');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void {
        Schema::dropIfExists('student_registrations');
    }
};
