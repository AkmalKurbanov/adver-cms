<?php namespace Akmal\Process\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateAkmalProcess extends Migration
{
    public function up()
    {
        Schema::create('akmal_process_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('title', 150);
            $table->string('description', 250);
            $table->string('icon', 150);
            $table->integer('order');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('akmal_process_');
    }
}
