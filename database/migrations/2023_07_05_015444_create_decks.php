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
        Schema::create('decks', function (Blueprint $table) {
            $table->id();
            $table->string('name', 50);
            $table->string('card_type', 30);
            $table->string('card_sub_type', 30);
            $table->string('attribute', 30)->nullable();
            $table->string('monster_type', 30)->nullable();
            $table->string('class', 30)->nullable();
            $table->integer('level')->nullable();
            $table->integer('atk')->nullable();
            $table->integer('def')->nullable();
            $table->string('card_text');
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent()->useCurrentOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('decks');
    }
};
