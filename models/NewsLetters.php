<?php namespace Rezgui\NewsLetter\Models;

use Model;

/**
 * NewsLetters Model
 */
class NewsLetters extends Model
{

    /**
     * @var string The database table used by the model.
     */
    public $table = 'rezgui_newsletter_news_letters';

    /**
     * @var array Guarded fields
     */
    protected $guarded = ['*'];

    /**
     * @var array Fillable fields
     */
    protected $fillable = ['email', 'latitude', 'longitude', 'sdate','code'];

    /**
     * @var array Relations
     */
    public $hasOne = [];
    public $hasMany = [];
    public $belongsTo = [];
    public $belongsToMany = [];
    public $morphTo = [];
    public $morphOne = [];
    public $morphMany = [];
    public $attachOne = [];
    public $attachMany = [];

}