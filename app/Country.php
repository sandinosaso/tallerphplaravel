<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class Country extends Model
{
  use Sortable;

  protected $table = 'country';

  protected $fillable = [ 'code', 'name' ];

  public $sortable = ['id', 'code', 'name', 'population'];
}