<?php namespace Rezgui\NewsLetter\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class CreateNewslettersStatus extends Migration
{

    public function up()
    {
        Schema::table('rezgui_newsletter_news_letters', function($table)
        {
            $table->boolean('status')->default(1)->after('code');
        });
    }

    public function down()
    {
        Schema::table('rezgui_newsletter_news_letters', function($table)
        {
            $table->dropColumn('status');
        });
    }

}
