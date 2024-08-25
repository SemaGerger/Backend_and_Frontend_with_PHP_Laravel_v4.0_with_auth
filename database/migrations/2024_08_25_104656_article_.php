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
        Schema::create('articles', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug')->unique();
            $table->string('meta_author')->nullable();
            $table->string('meta_keywords')->nullable();
            //$table->foreignId('image_id')->nullable()->constrained('img_paths')->onDelete('set null'); 
            $table->string('image_table')->nullable();
            $table->text('content1');
            $table->text('content2');
            $table->foreignId('main_id')->nullable()->constrained('mains')->onDelete('set null');
            $table->foreignId('exam_id')->nullable()->constrained('exams')->onDelete('set null');
            $table->foreignId('field_id')->nullable()->constrained('fields')->onDelete('set null');
            $table->foreignId('lesson_id')->nullable()->constrained('lessons')->onDelete('set null');
            //subject çok olabilir bu yüzden articleSubject adında pivot tablo var.
            //tag çok olabilir bu yüzden articleTag adında pivot tablo var.
             //$table->foreignId('created_by')->nullable()->constrained('users')->onDelete('set null'); // oluşturan kullanıcı daha sonra eklenebilir
            $table->string('status')->default('active'); //bir de enum var.
            $table->timestamp('published_at')->nullable(); 
            $table->unsignedBigInteger('views')->default(0); //izlenme sayısı
          
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('articles');
    }
};
