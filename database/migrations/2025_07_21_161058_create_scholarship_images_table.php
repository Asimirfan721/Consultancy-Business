<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
   // database/migrations/xxxx_xx_xx_create_scholarship_images_table.php
public function up()
{
    Schema::create('scholarship_images', function (Blueprint $table) {
        $table->id();
        $table->string('file_path');
        $table->string('description')->nullable();
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('scholarship_images');
    }
};
