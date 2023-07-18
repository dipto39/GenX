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
        Schema::create('products', function (Blueprint $table) {
            $table->id('pid');
            $table->string('name');
            $table->string('sku')->nullable(true);
            $table->string('model')->nullable(true);
            $table->integer('brand');
            $table->integer('ct');
            $table->integer('unit')->nullable((true));
            $table->integer('uq')->nullable(true);
            $table->integer('sq');
            $table->integer('saq')->nullable(true);
            $table->longText('sdes')->nullable(true);
            $table->longText('des');
            $table->float('price');
            $table->integer('dis')->nullable(true);
            $table->date('sdis')->nullable(true);
            $table->date('edis')->nullable(true);
            $table->integer('stock')->nullable(true);
            $table->integer('status')->default(1);
            $table->string('pimg');
            $table->string('ptham')->nullable(true);
            $table->string('g1')->nullable(true);
            $table->string('g2')->nullable(true);
            $table->string('g3')->nullable(true);
            $table->string('g4')->nullable(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
