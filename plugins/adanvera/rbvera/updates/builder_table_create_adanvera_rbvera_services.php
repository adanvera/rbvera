<?php namespace AdanVera\Rbvera\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateAdanveraRbveraServices extends Migration
{
    public function up()
{
    Schema::create('adanvera_rbvera_services', function($table)
    {
        $table->engine = 'InnoDB';
        $table->increments('id')->unsigned();
        $table->string('name');
        $table->string('description');
    });
}

public function down()
{
    Schema::dropIfExists('adanvera_rbvera_services');
}
}
