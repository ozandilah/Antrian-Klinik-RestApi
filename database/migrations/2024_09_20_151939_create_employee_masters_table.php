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
        Schema::create('employee_masters', function (Blueprint $table) {
            $table->id('idEmp');
            $table->foreignId('idDept')->constrained('department_masters')->references('idDept');
            $table->foreignId('idDiv')->constrained('division_masters')->references('idDiv');
            $table->foreignId('idLevel')->constrained('level_masters')->references('idLevel');
            $table->foreignId('idLine')->constrained('line_masters')->references('idLine');
            $table->foreignId('idCompany')->constrained('company_masters')->references('idCompany');
            $table->string('nik')->unique();
            $table->string('name');
            $table->date('dateOb')->nullable();
            $table->string('empSts')->nullable();

            $table->dateTime('cratedAt')->nullable();
            $table->dateTime('updatedAt')->nullable();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employee_masters');
    }
};
