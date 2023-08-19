<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DivisionModel extends Model
{
    use HasFactory;
    public $table ='division';
    public $primaryKey ='division_id';
    public $incrementing =true;
    public $keyType ='int';
    public $timestamps =false;
}
