<?php namespace Akmal\Portfolio\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateAkmalPortfolioWorks extends Migration
{
    public function up()
    {
        Schema::create('akmal_portfolio_works', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('akmal_portfolio_works');
    }
}
