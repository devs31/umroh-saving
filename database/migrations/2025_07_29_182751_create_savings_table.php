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
        Schema::create('savings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->foreignId('umroh_package_id')->constrained()->onDelete('cascade');
            $table->decimal('target_amount', 15, 2); // Target sesuai harga paket
            $table->decimal('current_balance', 15, 2)->default(0); // Saldo saat ini
            $table->string('status')->default('active'); // Contoh: active, completed
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('savings');
    }
};
