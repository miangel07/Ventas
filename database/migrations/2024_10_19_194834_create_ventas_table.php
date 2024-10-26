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
        Schema::create('ventas', function (Blueprint $table) {
            $table->id();
            $table->float('TotalVentas');
            $table->enum('tipoVenta', ['detal', 'mayorista']);
            $table->date('fecha')->default(
                now()->format('Y-m-d') 
            );
            $table->enum('metodosPagos',['pse','efectivo']);
            $table->enum('estado',['pendiente','cancelado']);
            $table->date('fecha_fin');
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ventas');
    }
};
