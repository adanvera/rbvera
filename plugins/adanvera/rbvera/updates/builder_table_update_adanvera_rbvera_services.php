<?php namespace AdanVera\Rbvera\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAdanveraRbveraServices extends Migration
{
    public function up()
{
    Schema::table('adanvera_rbvera_services', function($table)
    {
        $table->string('slug')->nullable();
    });
}

public function down()
{
    Schema::table('adanvera_rbvera_services', function($table)
    {
        $table->dropColumn('slug');
    });
}
}
