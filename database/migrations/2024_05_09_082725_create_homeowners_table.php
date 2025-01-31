<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHomeownersTable extends Migration
{
    public function up()
    {
        Schema::create('homeowners', function (Blueprint $table) {
            $table->id();
            $table->string('homeOwnerName');
            $table->string('blockAndHouseNo');
            $table->string('address');
            $table->string('phone')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('homeowners');
    }
}
