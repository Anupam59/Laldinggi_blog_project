<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NewsTagModel extends Model
{
    use HasFactory;
    public $table ='news_tag';
    public $primaryKey ='news_tag_id';
    public $incrementing =true;
    public $keyType ='int';
    public $timestamps =false;
}
