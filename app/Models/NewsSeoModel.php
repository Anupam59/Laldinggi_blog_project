<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NewsSeoModel extends Model
{
    use HasFactory;
    public $table ='news_seo';
    public $primaryKey ='news_seo_id';
    public $incrementing =true;
    public $keyType ='int';
    public $timestamps =false;
}
