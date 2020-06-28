<?php namespace Akmal\Advantages\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateAkmalAdvantagesItem extends Migration
{
    public function up()
    {
        Schema::create('akmal_advantages_item', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('title', 150);
            $table->string('description', 250);
            $table->string('icon', 150);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('akmal_advantages_item');
    }
}
