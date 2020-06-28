<?php namespace Akmal\Process\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateAkmalProcessProcesses extends Migration
{
    public function up()
    {
        Schema::create('akmal_process_processes', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('title', 150);
            $table->string('description', 250);
            $table->string('icon', 150);
            $table->integer('order');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('akmal_process_processes');
    }
}
