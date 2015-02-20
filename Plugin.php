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
            'description' => 'A simple NewsLetter Plugin for October CMS (fork from andradedev/simple-subscribe)',
            'author'      => 'Yacine REZGUI',
            'icon'        => 'icon-leaf'
        ];
    }

    public function registerComponents()
    {
        return [
            'Rezgui\NewsLetter\Components\Subscriber'       => 'formSubscribe',
            'Rezgui\NewsLetter\Components\Unsubscribe'       => 'formUnsubscribe',
        ];
    }

    public function registerPermissions()
    {
        return [
            'rezgui.newsLetter.newsLetters'       => ['tab' => 'NewsLetter', 'label' => 'Access NewsLetters'],
        ];
    }

    public function registerNavigation()
    {
        return [
            'newsLetter' => [
                'label'       => 'NewsLetters',
                'url'         => \Backend::url('rezgui/newsLetter/newsLetters'),
                'icon'        => 'icon-rss',
                'permissions' => ['rezgui.newsLetter.*'],
                'order'       => 500,

                'sideMenu' => [
                    'subscribers' => [
                        'label'       => 'NewsLetters',
                        'icon'        => 'icon-rss',
                        'url'         => \Backend::url('rezgui/newsLetter/newsLetters'),
                        'permissions' => ['rezgui.newsLetter.access_newsLetters'],
                    ]
                ]

            ]
        ];
    }

    public function registerMailTemplates()
    {
        return [
            'rezgui.newsLetter::mail.subscribe' => 'Welcome message for subscriber',
            'rezgui.newsLetter::mail.unsubscribe' => 'Good bye message for subscriber'
        ];
    }
}