<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void {
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('student_registration_id')->constrained();
            $table->string('payment_method');
            $table->string('transaction_id');
            $table->string('transaction_date');
            $table->string('remarks');
            $table->string('amount');
            $table->string('status')->default('pending');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void {
        Schema::dropIfExists('payments');
    }
};
