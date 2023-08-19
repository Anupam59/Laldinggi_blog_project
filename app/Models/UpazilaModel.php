<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UpazilaModel extends Model
{
    use HasFactory;
    public $table ='upazila';
    public $primaryKey ='upazila_id';
    public $incrementing =true;
    public $keyType ='int';
    public $timestamps =false;
}
