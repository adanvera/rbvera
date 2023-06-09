<?php namespace AdanVera\Rbvera\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateAdanveraRbveraNav extends Migration
{
    public function up()
{
    Schema::create('adanvera_rbvera_nav', function($table)
    {
        $table->engine = 'InnoDB';
        $table->increments('id');
        $table->string('nav_anme');
        $table->timestamp('created_at')->nullable();
        $table->timestamp('updated_at')->nullable();
    });
}

public function down()
{
    Schema::dropIfExists('adanvera_rbvera_nav');
}
}
