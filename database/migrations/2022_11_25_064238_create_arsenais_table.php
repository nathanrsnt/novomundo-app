<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('arsenais', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('arma_principal', 100);
            $table->string('arma_secundaria', 100);
            $table->string('armadura', 100);
            $table->string('escudo', 100);
            $table->string('joia', 100);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('arsenais');
        
    }
};
