<?php namespace Akmal\Portfolio\Models;

use Model;

/**
 * Model
 */
class Work extends Model
{
    use \October\Rain\Database\Traits\Validation;
    

    /**
     * @var string The database table used by the model.
     */
    public $table = 'akmal_portfolio_works';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

public $attachOne = [
    'image' => 'System\Models\File'
];


  
}
