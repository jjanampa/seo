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
        Schema::create('keyword', function (Blueprint $table) {
            $table->string('name')->index();
        });

        Schema::create('texts', function (Blueprint $table) {
            $table->string('name')->index();
            $table->integer('quantity');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('keyword');
        Schema::dropIfExists('texts');
    }
};
