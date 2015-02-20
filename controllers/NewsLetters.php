<?php namespace Rezgui\NewsLetter\Controllers;

use BackendMenu;
use Backend\Classes\Controller;

/**
 * NewsLetters Back-end Controller
 */
class NewsLetters extends Controller
{
    public $implement = [
        'Backend.Behaviors.FormController',
        'Backend.Behaviors.ListController'
    ];

    public $formConfig = 'config_form.yaml';
    public $listConfig = 'config_list.yaml';

    public function __construct()
    {
        parent::__construct();

        BackendMenu::setContext('Rezgui.NewsLetter', 'newsletter', 'newsletters');
        $this->addJs('/plugins/rezgui/newsletter/assets/javascript/tableExport.js');
        $this->addJs('/plugins/rezgui/newsletter/assets/javascript/jquery.base64.js');
        $this->addJs('/plugins/rezgui/newsletter/assets/javascript/subscribe-backend-scripts.js');		
    }
}