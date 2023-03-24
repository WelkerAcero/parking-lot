<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->foreignId('doctype_id')
                ->nullable()
                ->constrained('doc_types')
                ->onUpdate('cascade')
                ->onDelete('set null');
            $table->string('ci', 10)->unique();
            $table->string('name', 20);
            $table->string('lastname', 20)->nullable();
            $table->string('email', 30)->nullable()->unique();
            $table->string('cellphone', 10);
            $table->string('url')->unique();
            $table->foreignId('charge_id')
                ->nullable()
                ->constrained('charges')
                ->onUpdate('cascade')
                ->onDelete('set null');
            $table->foreignId('created_by')
                ->constrained('users')
                ->onUpdate('cascade')
                ->onDelete('cascade');
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
        Schema::dropIfExists('customers');
    }
}
