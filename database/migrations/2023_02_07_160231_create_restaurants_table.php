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
        Schema::create('restaurants', function (Blueprint $table) {
            $table->string('ruc',13)->unique()->primary();
            $table->string('local_name',40);
            $table->string('address',150);
            $table->string('local_email',40)->nullable();
            $table->string('ower',30);
            $table->string('local_tel',7)->nullable();
            $table->string('local_movil',10)->nulleable();
            $table->string('description')->nullable();
            $table->decimal('score_local',3)->nullable();
            $table->timestamps();
            $table->unsignedBigInteger('user_id_fk')->nullable();
            $table->foreign('user_id_fk')
                ->references('user_id')
                ->on('users')
                ->onDelete('set null')
                ->onUpdate('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('restaurants');
    }
};
