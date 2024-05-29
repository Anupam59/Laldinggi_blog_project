<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MenuItemModel extends Model
{
    use HasFactory;
    public $table ='menu_item';
    public $primaryKey ='menu_item_id';
    public $incrementing =true;
    public $keyType ='int';
    public $timestamps =false;

    public function menu(){
        return $this->belongsTo(MenuModel::class);
    }

    public function menu_sub_item(){
        return $this->hasMany(MenuSubItemModel::class,'menu_item_id','menu_item_id');
    }


}
