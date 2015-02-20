<?php namespace Rezgui\NewsLetter\Updates;

use Schema;
use Str;
use October\Rain\Database\Updates\Migration;

class CreateNewslettersCode extends Migration
{

    public function up()
    {
        Schema::table('rezgui_newsletter_news_letters', function($table)
        {
            $table->string('code')->nullable()->after('longitude');
        });

        \DB::update("update rezgui_newsletter_news_letters set code = '{Str::random(20)}' ");
    }

    public function down()
    {
        Schema::table('rezgui_newsletter_news_letters', function($table)
        {
            $table->dropColumn('code');
        });
    }

}