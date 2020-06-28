<?php namespace Akmal\Portfolio\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateAkmalPortfolioItems extends Migration
{
    public function up()
    {
        Schema::create('akmal_portfolio_items', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->integer('work_id')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('akmal_portfolio_items');
    }
}
