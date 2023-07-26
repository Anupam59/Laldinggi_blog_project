<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NewsPageModel extends Model
{
    use HasFactory;
    public $table ='news_page';
    public $primaryKey ='news_page_id';
    public $incrementing =true;
    public $keyType ='int';
    public $timestamps =false;
}
