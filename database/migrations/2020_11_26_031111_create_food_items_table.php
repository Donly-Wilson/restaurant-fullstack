<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFoodItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('food_items', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description');
            $table->text('image_url');
            $table->float('price', 8, 2);
            $table->bigInteger('category_id')->unsigned()->nullable();
            $table->timestamps();
        });

        //references table: uses category_id as a refrence id in food_category and sets to null on delete
        Schema::table('food_items', function (Blueprint $table) {
            $table->foreign('category_id')->references('id')->on('food_categories')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('food_items');
    }
}
