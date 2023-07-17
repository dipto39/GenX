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
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('cn');
            $table->string('title');
            $table->string('pe');
            $table->string('se')->nullable(true);
            $table->string('pp');
            $table->string('sp')->nullable(true);
            $table->string('addr')->nullable(true);
            $table->longText('au')->nullable(true);
            $table->string('cu');
            $table->string('cs');
            $table->string('sc')->nullable(true);
            $table->string('vat')->nullable((true));
            $table->string('su');
            $table->string('logo');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('settings');
    }
};
