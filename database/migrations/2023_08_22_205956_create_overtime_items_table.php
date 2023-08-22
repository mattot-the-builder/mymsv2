<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void {
        Schema::create('overtime_items', function (Blueprint $table) {
            $table->id();
            $table->foreignId('overtime_claim_id')->constrained()->cascadeOnDelete();
            $table->date('date');
            $table->text('details');
            $table->time('start_time');
            $table->time('end_time');
            $table->float('total_hour', 8, 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void {
        Schema::dropIfExists('overtime_items');
    }
};
