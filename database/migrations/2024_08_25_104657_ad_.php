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
        Schema::create('ads', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->text('content')->nullable();
      
            $table->string('ad_image_table')->nullable();
            $table->string('link');
            $table->string('status')->default('active'); //reklamın durumu
            $table->timestamp('expires_at')->nullable(); // bitiş tarihi
            $table->integer('priority')->default(0); //öncelik seviyesi
            $table->unsignedInteger('views')->default(0); // görüntülenme sayısı
            $table->unsignedInteger('clicks')->default(0); // tıklanma sayısı
            //$table->foreignId('user_id')->nullable()->constrained('users')->onDelete('set null'); // Daha sonra reklamı oluşturan kullanıcı ekleyebilrisn 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ads');
    }
};
