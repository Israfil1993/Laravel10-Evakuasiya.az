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
        Schema::create('customer_testimonials', function (Blueprint $table) {
            $table->id();
            $table->string('fullname_az');
            $table->text('feedback_az');
            $table->string('fullname_en')->nullable();
            $table->text('feedback_en')->nullable();
            $table->string('fullname_ru')->nullable();
            $table->text('feedback_ru')->nullable();
            $table->string('image')->nullable();
            $table->tinyInteger('status')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customer__testimonials');
    }
};
