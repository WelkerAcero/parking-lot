<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAuthorizationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('authorizations', function (Blueprint $table) {
            $table->id();
            $table->string('l_plate', 6);
            $table->string('customer_ci', 10);
            $table->string('customer_name', 50);
            $table->foreignId('vehicle_id')->nullable()->constrained('vehicles')->onUpdate('cascade')->onDelete('set null');
            $table->foreignId('authorized_by')->nullable()->constrained('users')->onUpdate('cascade')->onDelete('set null');
            $table->string('authorization_type', 10);
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
        Schema::dropIfExists('authorizations');
    }
}
