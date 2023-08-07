<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NewsStatusModel extends Model
{
    use HasFactory;

    public $table ='news_status';
    public $primaryKey ='news_status_id';
    public $incrementing =true;
    public $keyType ='int';
    public $timestamps =false;
}
