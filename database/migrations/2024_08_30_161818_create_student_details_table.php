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
        Schema::create('studentDetails', function (Blueprint $table) {
            $table->id();
            $table->string('usn');
            $table->string('name');
            $table->date('dob');
            $table->tinyInteger('gender');
            $table->string('province');
            $table->string('district');
            $table->string('city');
            $table->integer('vdcNo');
            $table->string('toleName');
            $table->string('phone');
            $table->string('email');
            $table->date('enrollmentDate');
            $table->string('program');
            $table->string('status');
            $table->string('emergencyContactNo');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('studentDetails');
    }
};
