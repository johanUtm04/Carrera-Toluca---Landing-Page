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
    Schema::table('users', function (Blueprint $table) {
        // 1. Tracks transactional states: e.g., 'pending', 'paid', 'failed'
        $table->string('payment_status')->default('pending')->after('role');
        
        // 2. reference tokens Stripe/Mercado Pago something like that (9b7a3e21c8d5f40e3b2a1c7d6e5f4a3b)
        $table->string('payment_id')->nullable()->after('payment_status');
        
        // 3. Holds the physical race bib number assigned after successful payment verification
        $table->string('bib_number')->nullable()->after('payment_id');
    });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn(['payment_status', 'payment_id', 'bib_number']);
        });
    }
};
