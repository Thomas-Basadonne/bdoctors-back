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
        Schema::create('user_sponsorship', function (Blueprint $table) {

            $table->unsignedBigInteger('user_id')->nullable();
            $table->unsignedBigInteger('sponsorship_id')->nullable();

            $table->foreign('user_id')->references('user_id')->on('profiles')->cascadeOnDelete();
            $table->foreign('sponsorship_id')->references('id')->on('sponsorships')->cascadeOnDelete();

           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_sponsorship');
    }
};
