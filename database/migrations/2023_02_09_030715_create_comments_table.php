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
        Schema::create('comments', function (Blueprint $table) {
            $table->id('comment_id');
            $table->string('commentary');
            $table->unsignedBigInteger('user_id_pk');
            $table->string('ruc_pk',13);
            $table->foreign('user_id_pk')
                ->references('user_id')
                ->on('users')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->foreign('ruc_pk')
                ->references('ruc')
                ->on('restaurants')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->timestamps();
            $table->index(['user_id_pk','ruc_pk']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comments');
    }
};
