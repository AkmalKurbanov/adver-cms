<?php namespace Akmal\Portfolio\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAkmalPortfolioWorks2 extends Migration
{
    public function up()
    {
        Schema::table('akmal_portfolio_works', function($table)
        {
            $table->integer('order');
            $table->dropColumn('created_at');
            $table->dropColumn('updated_at');
        });
    }
    
    public function down()
    {
        Schema::table('akmal_portfolio_works', function($table)
        {
            $table->dropColumn('order');
            $table->timestamp('created_at')->nullable()->default('NULL');
            $table->timestamp('updated_at')->nullable()->default('NULL');
        });
    }
}
