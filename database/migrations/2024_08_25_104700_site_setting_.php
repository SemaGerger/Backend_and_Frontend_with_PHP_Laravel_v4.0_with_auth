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
        Schema::create('site_settings', function (Blueprint $table) {
            $table->id(); 
            $table->string('meta_keywords')->nullable();
            $table->string('meta_author')->nullable();
            $table->string('favicon_path')->nullable();
            $table->string('site_title')->nullable();
            $table->text('site_description')->nullable();
      
            $table->string('logo_image_table')->nullable();
            $table->string('banner_image_table')->nullable();
            $table->string('footer_image_table')->nullable();

            $table->string('google_analytics_id')->nullable();
            $table->boolean('maintenance_mode')->default(false); 
            
            $table->text('site_text')->nullable();
            $table->string('copyright_text')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('site_settings');
    }
};
