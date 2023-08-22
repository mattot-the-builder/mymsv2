<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void {
        Schema::create('staff', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->cascadeOnDelete();
            $table->string('staff_status')->nullable();
            $table->string('front_ic')->nullable();
            $table->string('back_ic')->nullable();
            $table->string('ic_number')->nullable();
            $table->integer('age')->nullable();
            $table->string('gender')->nullable();
            $table->text('address')->nullable();
            $table->string('contact')->nullable();
            $table->date('dob')->nullable();
            $table->string('pob')->nullable();
            $table->string('position')->nullable();
            $table->string('marital_status')->nullable();
            $table->date('start_date_working')->nullable();
            $table->string('spouse_name')->nullable();
            $table->string('spouse_contact')->nullable();
            $table->string('spouse_position')->nullable();
            $table->string('spouse_company')->nullable();
            $table->string('emergency_contact')->nullable();
            $table->string('emergency_contact_relationship')->nullable();
            $table->string('education')->nullable();
            $table->string('vehicle_registration')->nullable();
            $table->string('vehicle_type')->nullable();
            $table->string('vehicle_model')->nullable();
            $table->boolean('is_approved')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void {
        Schema::dropIfExists('staff');
    }
};
