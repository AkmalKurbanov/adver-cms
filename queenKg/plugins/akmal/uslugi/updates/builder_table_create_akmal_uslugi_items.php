<?php namespace Akmal\Uslugi\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateAkmalUslugiItems extends Migration
{
    public function up()
    {
        Schema::create('akmal_uslugi_items', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('title', 150)->nullable();
            $table->integer('service_id')->nullable()->unsigned();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('akmal_uslugi_items');
    }
}
