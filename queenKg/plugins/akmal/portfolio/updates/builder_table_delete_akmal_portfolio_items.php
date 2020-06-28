<?php namespace Akmal\Portfolio\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableDeleteAkmalPortfolioItems extends Migration
{
    public function up()
    {
        Schema::dropIfExists('akmal_portfolio_items');
    }
    
    public function down()
    {
        Schema::create('akmal_portfolio_items', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->integer('work_id')->nullable()->default(NULL);
        });
    }
}
