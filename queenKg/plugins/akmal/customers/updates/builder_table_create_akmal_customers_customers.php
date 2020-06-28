<?php namespace Akmal\Customers\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateAkmalCustomersCustomers extends Migration
{
    public function up()
    {
        Schema::create('akmal_customers_customers', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('akmal_customers_customers');
    }
}
