<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NewsSeriesModel extends Model
{
    use HasFactory;
    public $table ='news_series';
    public $primaryKey ='news_series_id';
    public $incrementing =true;
    public $keyType ='int';
    public $timestamps =false;
}
