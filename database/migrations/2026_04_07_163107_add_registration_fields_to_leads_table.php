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
            $table->string('registration_package')->nullable()->after('country');
            $table->string('billing_type')->nullable()->after('registration_package');
            $table->string('billing_name')->nullable()->after('billing_type');
            $table->string('billing_tax_number')->nullable()->after('billing_name');
            $table->string('billing_tax_office')->nullable()->after('billing_tax_number');
            $table->text('billing_address')->nullable()->after('billing_tax_office');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('leads', function (Blueprint $table) {
            $table->dropColumn([
                'registration_package',
                'billing_type',
                'billing_name',
                'billing_tax_number',
                'billing_tax_office',
                'billing_address',
            ]);
        });
    }
};
