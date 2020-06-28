<?php namespace Akmal\Customers\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAkmalCustomersCustomers extends Migration
{
    public function up()
    {
        Schema::table('akmal_customers_customers', function($table)
        {
            $table->integer('order');
            $table->string('url');
            $table->dropColumn('created_at');
            $table->dropColumn('updated_at');
        });
    }
    
    public function down()
    {
        Schema::table('akmal_customers_customers', function($table)
        {
            $table->dropColumn('order');
            $table->dropColumn('url');
            $table->timestamp('created_at')->nullable()->default('NULL');
            $table->timestamp('updated_at')->nullable()->default('NULL');
        });
    }
}
