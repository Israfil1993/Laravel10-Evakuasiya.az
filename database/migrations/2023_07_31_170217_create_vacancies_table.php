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
        Schema::create('vacancies', function (Blueprint $table) {
            $table->id();
            $table->string('title_az');
            $table->integer('salary_min',)->nullable();
            $table->integer('salary_max',)->nullable();
            $table->text('responsibilities_az')->nullable();
            $table->text('requirements_az')->nullable();
            $table->date('sharing_date')->nullable();
            $table->integer('duration')->nullable();
            $table->string('age_limit')->nullable();
            $table->string('education_level_az')->nullable();
            $table->string('work_schedule_az')->nullable();
            $table->string('contract_type_az')->nullable();
            $table->string('application_email_az')->nullable();
            $table->string('title_en')->nullable();
            $table->text('responsibilities_en')->nullable();
            $table->text('requirements_en')->nullable();
            $table->string('education_level_en')->nullable();
            $table->string('work_schedule_en')->nullable();
            $table->string('contract_type_en')->nullable();
            $table->string('application_email_en')->nullable();
            $table->string('title_ru')->nullable();
            $table->text('responsibilities_ru')->nullable();
            $table->text('requirements_ru')->nullable();
            $table->string('education_level_ru')->nullable();
            $table->string('work_schedule_ru')->nullable();
            $table->string('contract_type_ru')->nullable();
            $table->string('application_email_ru')->nullable();
            $table->tinyInteger('status')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vacancies');
    }
};
