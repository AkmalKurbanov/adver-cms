<?php namespace Akmal\Portfolio\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAkmalPortfolioWorks13 extends Migration
{
    public function up()
    {
        Schema::table('akmal_portfolio_works', function($table)
        {
            $table->smallInteger('image');
        });
    }
    
    public function down()
    {
        Schema::table('akmal_portfolio_works', function($table)
        {
            $table->dropColumn('image');
        });
    }
}
