<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DistrictModel extends Model
{
    use HasFactory;
    public $table ='district';
    public $primaryKey ='district_id';
    public $incrementing =true;
    public $keyType ='int';
    public $timestamps =false;
}
