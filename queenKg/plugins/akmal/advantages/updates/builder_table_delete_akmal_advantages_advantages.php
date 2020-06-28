<?php namespace Akmal\Advantages\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableDeleteAkmalAdvantagesAdvantages extends Migration
{
    public function up()
    {
        Schema::dropIfExists('akmal_advantages_advantages');
    }
    
    public function down()
    {
        Schema::create('akmal_advantages_advantages', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('title', 250)->nullable()->default('NULL');
            $table->text('description')->nullable()->default('NULL');
            $table->integer('order')->nullable()->default(NULL);
            $table->timestamp('created_at')->nullable()->default('NULL');
            $table->timestamp('updated_at')->nullable()->default('NULL');
        });
    }
}
