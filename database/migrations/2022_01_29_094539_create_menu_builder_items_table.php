<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMenuBuilderItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menu_builder_items', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->unsignedBigInteger('menu_id');
            $table->string('link_type')->default('static');
            $table->string('url')->nullable();
            $table->mediumText('svg_icon')->nullable();
            $table->string('route')->nullable();
            $table->string('open_in')->default('_self');
            $table->integer('sort')->default(0);
            $table->tinyInteger('active')->defaul(1);
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
        Schema::dropIfExists('menu_builder_items');
    }
}
