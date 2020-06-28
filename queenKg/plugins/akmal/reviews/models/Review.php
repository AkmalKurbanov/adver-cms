<?php namespace Akmal\Reviews\Models;

use Model;

/**
 * Model
 */
class Review extends Model
{
    use \October\Rain\Database\Traits\Validation;
    

    /**
     * @var string The database table used by the model.
     */
    public $table = 'akmal_reviews_reviews';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];



    public $attachOne = [
        'reviewer' => 'System\Models\File'
    ];

}
