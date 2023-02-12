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
        Schema::create('foods', function (Blueprint $table) {
            $table->id('food_id');
            $table->string('food_name',40);
            $table->decimal('cost',5);
            $table->string('time',2)->nullable();
            $table->boolean('visibility');
            $table->unsignedBigInteger('ruc_fk');
            $table->foreign('ruc_fk')
                ->references('ruc')
                ->on('restaurants')
                ->onDelete('cascade')
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
        Schema::dropIfExists('foods');
    }
};
