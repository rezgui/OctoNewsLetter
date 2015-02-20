<?php namespace Rezgui\NewsLetter\Updates;

use Schema;
use Str;
use October\Rain\Database\Updates\Migration;

class UpdateCodeColumnSubscriber extends Migration
{

    public function up()
    {
        \DB::update("update rezgui_newsletter_news_letters set code = '".Str::random(20)."', status = 1 ");
    }

    public function down()
    {
        Schema::table('rezgui_newsletter_news_letters', function($table)
        {
            $table->dropColumn('code');
        });
    }

}