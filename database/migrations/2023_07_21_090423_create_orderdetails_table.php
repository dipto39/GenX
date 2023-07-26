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
        Schema::create('orderdetails', function (Blueprint $table) {
            $table->id();
            $table->string('oid');
            $table->string('phn');
            $table->string('name');
            $table->integer('cid');
            $table->string('state');
            $table->string('zip');
            $table->integer('sipro');
            $table->date('pdate')->nullable();
            $table->time('ptime')->nullable();
            $table->integer('tex');
            $table->integer('charge');
            $table->integer('discount')->default(0);
            $table->integer('subt');
            $table->longText('address');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orderdetails');
    }
};
