<?php namespace Akmal\Customers\Models;

use Model;

/**
 * Model
 */
class Customer extends Model
{
    use \October\Rain\Database\Traits\Validation;
    

    /**
     * @var string The database table used by the model.
     */
    public $table = 'akmal_customers_customers';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];



    public $attachOne = [
        'customer' => 'System\Models\File'
    ];
}
