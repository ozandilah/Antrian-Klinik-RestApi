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
        Schema::create('clinic_transactions', function (Blueprint $table) {
            $table->id('QueId');
            $table->foreignId('idEmp')->constrained('employee_masters')->references('idEmp');
            $table->foreignId('idDept')->constrained('department_masters')->references('idDept');
            $table->foreignId('idClinic')->constrained('clinic_masters')->references('idClinic');
            $table->foreignId('idCompany')->constrained('company_masters')->references('idCompany');
            $table->string('IPaddr')->nullable();
            $table->string('UsrPhone')->nullable();
            $table->integer('QueNum');
            $table->dateTime('QueDT');
            $table->dateTime('QueBgn');
            $table->dateTime('QueCls');
            $table->boolean('QueSTS')->default(0);
            $table->boolean('QueSkip')->default(0);

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
        Schema::dropIfExists('clinic_transactions');
    }
};
