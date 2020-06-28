<?php namespace Akmal\Advantages\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateAkmalAdvantages extends Migration
{
    public function up()
    {
        Schema::create('akmal_advantages_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('title', 250)->nullable();
            $table->text('description')->nullable();
            $table->integer('order')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('akmal_advantages_');
    }
}
