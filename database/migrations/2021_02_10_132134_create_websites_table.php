<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWebsitesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('websites', function (Blueprint $table) {
            $table->id();
            $table->foreignId('cron_settings_id')
                ->constrained()
                ->onDelete('cascade');
            $table->string('domain');
            $table->string('category_selector');
            //title and description are same
            $table->string('title_selector');
            $table->string('image_selector');
            $table->string('price_bgn_selector');
            //pennies are stotinki
            $table->string('price_pennies_selector');
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
        Schema::dropIfExists('websites');
    }
}
