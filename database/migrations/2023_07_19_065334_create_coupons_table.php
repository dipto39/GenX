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
        Schema::create('coupons', function (Blueprint $table) {
            $table->id();
            $table->string('cn');
            $table->string('cd');
            $table->integer('vl');
            $table->integer('lm')->nullable(true);
            $table->integer('ms')->nullable(true);
            $table->integer('st')->default(1);
            $table->integer('fs')->default(0);
            $table->date('sd');
            $table->date('ed');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('coupons');
    }
};
