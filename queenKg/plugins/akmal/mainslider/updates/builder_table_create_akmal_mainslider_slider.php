<?php namespace Akmal\Mainslider\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateAkmalMainsliderSlider extends Migration
{
    public function up()
    {
        Schema::create('akmal_mainslider_slider', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('title', 250)->nullable();
            $table->integer('order')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('akmal_mainslider_slider');
    }
}
