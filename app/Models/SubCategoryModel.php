<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubCategoryModel extends Model
{
    use HasFactory;
    public $table ='sub_category';
    public $primaryKey ='sub_cat_id';
    public $incrementing =true;
    public $keyType ='int';
    public $timestamps =false;
}
