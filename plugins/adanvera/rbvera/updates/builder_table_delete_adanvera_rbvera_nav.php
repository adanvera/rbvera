<?php namespace AdanVera\Rbvera\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableDeleteAdanveraRbveraNav extends Migration
{
    public function up()
{
    Schema::dropIfExists('adanvera_rbvera_nav');
}

public function down()
{
    Schema::create('adanvera_rbvera_nav', function($table)
    {
        $table->engine = 'InnoDB';
        $table->increments('id')->unsigned();
        $table->string('nav_anme', 255);
        $table->timestamp('created_at')->nullable();
        $table->timestamp('updated_at')->nullable();
    });
}
}
