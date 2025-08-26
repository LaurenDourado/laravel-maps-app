<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('locations', function (Blueprint $table) {
            $table->id();
            $table->string('name');                    // Nome do local
            $table->text('description')->nullable();   // Descrição opcional
            $table->decimal('latitude', 10, 8);        // Latitude
            $table->decimal('longitude', 11, 8);       // Longitude
            $table->string('address')->nullable();     // Endereço opcional
            $table->string('category')->nullable();    // Categoria opcional
            $table->timestamps();                      // created_at e updated_at
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('locations');
    }
};
