<?php namespace Akmal\Uslugi\Models;

use Model;

/**
 * Model
 */
class Service extends Model
{
    use \October\Rain\Database\Traits\Validation;
    

    /**
     * @var string The database table used by the model.
     */
    public $table = 'akmal_uslugi_services';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];


     public $hasMany = [
        'items' => ['Akmal\Uslugi\Models\Item']
    ];

}
