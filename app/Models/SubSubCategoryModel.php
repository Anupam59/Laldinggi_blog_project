<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubSubCategoryModel extends Model
{
    use HasFactory;
    public $table ='sub_sub_category';
    public $primaryKey ='sub_sub_cat_id';
    public $incrementing =true;
    public $keyType ='int';
    public $timestamps =false;
}
