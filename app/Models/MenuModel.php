<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MenuModel extends Model
{
    use HasFactory;
    public $table ='menu';
    public $primaryKey ='menu_id';
    public $incrementing =true;
    public $keyType ='int';
    public $timestamps =false;

    public function menu_item(){
        return $this->hasMany(MenuItemModel::class,'menu_id','menu_id');
    }

}
