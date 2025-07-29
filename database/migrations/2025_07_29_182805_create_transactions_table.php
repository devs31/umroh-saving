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
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('saving_id')->constrained()->onDelete('cascade');
            $table->decimal('amount', 15, 2); // Jumlah yang disetor
            $table->string('proof_of_payment'); // Path ke file bukti transfer
            $table->string('status')->default('pending'); // Contoh: pending, approved, rejected
            $table->text('notes')->nullable(); // Catatan dari admin jika ditolak
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transactions');
    }
};
