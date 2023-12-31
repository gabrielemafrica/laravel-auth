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
        Schema::create('projects', function (Blueprint $table) {
            $table->id();

            $table -> string("nome", 255);
            $table -> text("descrizione");
            $table -> string("type", 64);
            $table -> string("tecnology", 64);
            $table->string("link", 255)->unique();
            $table->string("repo", 255)->unique();
            $table -> date("data");

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('projects');
    }
};
