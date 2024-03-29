<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVehiclesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehicles', function (Blueprint $table) {
            $table->id();
            $table->string('l_plate', 6);
            $table->string('color', 10);
            $table->year('model');
            $table->string('brand', 20);
            $table->foreignId('customer_id')->constrained('customers')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('engine_id')->nullable()->constrained('type_engines')->onUpdate('cascade')->onDelete('set null');
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
        Schema::dropIfExists('vehicles');
    }
}
