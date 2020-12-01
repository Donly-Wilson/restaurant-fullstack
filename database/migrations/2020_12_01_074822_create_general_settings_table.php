<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGeneralSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('general_settings', function (Blueprint $table) {
            $table->id();
            $table->string('site_title');
            $table->text('logo_image_url');
            $table->string('address_1'); //234 Main st
            $table->string('address_2')->nullable();
            $table->string('city'); //gros islet
            $table->string('state'); //rodney bay
            $table->string('zipcode'); //11747
            $table->string('phone_number'); //integer is only used if calculation is being made
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
        Schema::dropIfExists('general_settings');
    }
}
