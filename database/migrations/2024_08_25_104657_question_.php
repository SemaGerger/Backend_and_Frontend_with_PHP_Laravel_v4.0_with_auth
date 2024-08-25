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
        Schema::create('questions', function (Blueprint $table) {
            $table->id();
            $table->string('code', 15)->unique();
            $table->unsignedInteger('year');
            $table->string('question_image_table')->nullable();
         
            $table->text('question');
            $table->text('question2')->nullable();
            $table->text('question3')->nullable();
            $table->text('optionA');
            $table->text('optionB');
            $table->text('optionC');
            $table->text('optionD');
            $table->text('optionE');
            $table->string('correctAnswer', 8);
            $table->text('explanation');
            $table->string('status')->default('active');
            
            //subject çok olabilir: questionSubject
          
            $table->timestamps();
            $table->index('year');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('questions');
    }
};
