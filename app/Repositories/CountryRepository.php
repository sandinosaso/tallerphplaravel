<?php

namespace App\Repositories;

use App\Models\Country;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class CountryRepository
 * @package App\Repositories
 * @version September 5, 2017, 9:39 pm UTC
 *
 * @method Country findWithoutFail($id, $columns = ['*'])
 * @method Country find($id, $columns = ['*'])
 * @method Country first($columns = ['*'])
*/
class CountryRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'code',
        'name',
        'img_flag'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Country::class;
    }
}
