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
        Schema::create('job_applications', function (Blueprint $table) {
            $table->id();
            $table->string('job_title');
            $table->string(column: 'company_name');
            $table->string('platform');
            $table->string('job_link');
            $table->string('salary');
            $table->string('location');
            $table->string('status');
            $table->string('application_date');
            $table->string('interview_date');
            $table->string('decline_date');
            $table->string('accept_date');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('job_applications');
    }
};
