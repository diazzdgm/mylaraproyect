<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void {
        Schema::create('superheroes', function (Blueprint $table) {
            $table->id(); // AUTO_INCREMENT PRIMARY KEY
            $table->string('nombre', 100);
            $table->string('alias', 100)->nullable();
            $table->enum('universo', ['Marvel', 'DC']);
            $table->text('poderes')->nullable();
            $table->year('debut')->nullable();
            $table->string('creador', 100)->nullable();
            $table->string('imagen_url', 255)->nullable();
            $table->enum('sexo', ['Masculino', 'Femenino', 'Otro'])->nullable();
            $table->smallInteger('altura_cm')->nullable();
            $table->decimal('peso_kg', 5, 2)->nullable();
            $table->string('raza', 50)->nullable();
            $table->string('afiliacion', 100)->nullable();
            $table->string('origen', 255)->nullable();
            $table->timestamps(); // created_at y updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void {
        Schema::dropIfExists('superheroes');
    }
};
