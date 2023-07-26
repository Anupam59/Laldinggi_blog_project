<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NewsTypeModel extends Model
{
    use HasFactory;
    public $table ='news_type';
    public $primaryKey ='news_type_id';
    public $incrementing =true;
    public $keyType ='int';
    public $timestamps =false;
}
