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
        Schema::create('productos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre',100);
            $table->float('precioDetal');
            $table->float('precioMayor');
            $table->unsignedBigInteger('cantidad');
            $table->date('fecha_vencimento')->nullable();
            $table->enum('estado', ['disponible', 'agotado'])->default('disponible');
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->enum('metodPago',['pse','efectivo']);
            $table->string('imagen');
            $table->unsignedBigInteger('codigo');
            $table->float('ValorCompraUnidad');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('productos');
    }
};
