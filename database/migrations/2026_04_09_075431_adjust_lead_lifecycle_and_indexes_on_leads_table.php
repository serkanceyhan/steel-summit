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
        Schema::table('leads', function (Blueprint $table) {
            $table->enum('status', ['draft', 'submitted', 'payment_pending', 'payment_failed', 'converted'])
                ->default('draft')
                ->after('lead_type');
            $table->string('payment_reference')->nullable()->after('phone');
            $table->timestamp('converted_at')->nullable()->after('payment_reference');

            $table->dropUnique('leads_email_unique');
            $table->unique(['lead_type', 'email'], 'leads_lead_type_email_unique');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('leads', function (Blueprint $table) {
            $table->dropUnique('leads_lead_type_email_unique');
            $table->unique('email', 'leads_email_unique');

            $table->dropColumn(['status', 'payment_reference', 'converted_at']);
        });
    }
};
