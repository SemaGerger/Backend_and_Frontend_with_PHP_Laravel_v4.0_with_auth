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
        Schema::create('exams', function (Blueprint $table) {
            $table->id();
            $table->string('name', 60)->nullable(false);
            $table->text('description')->nullable();
            $table->timestamp('start_date')->nullable(); //sınav başvuru başlangıç tarihi
            $table->timestamp('end_date')->nullable(); //sınav başvuru bitiş tarihi
            $table->timestamp('exam_date')->nullable(); //sınavın yapılacağı tarih
            $table->string('status')->default('active');

            $table->unsignedBigInteger('main_id');
            $table->foreign('main_id')->references('id')->on('mains')->onDelete('cascade'); // burdaki silme diğerlerini de etkiler
     
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('exams');
    }
};
