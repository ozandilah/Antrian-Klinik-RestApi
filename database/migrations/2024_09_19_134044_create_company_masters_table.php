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
        Schema::create('company_masters', function (Blueprint $table) {
            $table->id('idCompany');
            $table->string('name', 250);
            $table->string('code', 5);
            $table->string('initial', 10);
            $table->string('npwp', 15);
            $table->string('city', 100);
            $table->string('address', 250);
            $table->string('createdBy', 50);
            $table->string('lastUpdatedBy', 50);
            $table->timestamp('createdAt')->nullable();
            $table->timestamp('updatedAt')->nullable();

            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('company_masters');
    }
};
