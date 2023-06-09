<?php namespace AdanVera\Rbvera\Models;

use Model;

/**
 * Model
 */
class Service extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;


    /**
     * @var string The database table used by the model.
     */
    public $table = 'adanvera_rbvera_services';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    /**Relations */

    public $attachOne= [
        'imageservice' => 'System\Models\File'
    ];


}
