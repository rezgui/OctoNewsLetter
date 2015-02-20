<?php namespace Rezgui\NewslLetter\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class CreateNewslettersTable extends Migration
{

    public function up()
    {
        Schema::create('rezgui_newsletter_news_letters', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('email')->unique();
            $table->date('sdate')->default(date("Y-m-d H:i:s"));			
            $table->string('latitude')->nullable();
            $table->string('longitude')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('rezgui_newsletter_news_letters');
    }

}
