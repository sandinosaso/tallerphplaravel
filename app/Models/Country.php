<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Country
 * @package App\Models
 * @version September 5, 2017, 9:39 pm UTC
 *
 * @property string code
 * @property string name
 * @property string img_flag
 */
class Country extends Model
{
    use SoftDeletes;

    public $table = 'countries';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'code',
        'name',
        'img_flag'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'code' => 'string',
        'name' => 'string',
        'img_flag' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
