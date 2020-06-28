<?php namespace Akmal\Advantages\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableDeleteAkmalProcess extends Migration
{
    public function up()
    {
        Schema::dropIfExists('akmal_process_');
    }
    
    public function down()
    {
        Schema::create('akmal_process_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('title', 150);
            $table->string('description', 250);
            $table->string('icon', 150);
            $table->integer('order');
            $table->timestamp('created_at')->nullable()->default('NULL');
            $table->timestamp('updated_at')->nullable()->default('NULL');
        });
    }
}
