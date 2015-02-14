<?php namespace Rezgui\NewsLetter;

use System\Classes\PluginBase;

/**
 * NewsLetter Plugin Information File
 */
class Plugin extends PluginBase
{

    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name'        => 'NewsLetter',
            'description' => 'A simple newsletter for October CMS (fork from A simple Subscribe : andradedev/simple-subscribe)',
            'author'      => 'Yacine REZGUI',
            'icon'        => 'icon-leaf'
        ];
    }

}
