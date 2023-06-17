<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\MenuModel;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function MenuIndex(){

        $Menu = MenuModel::join('users as creator_by', 'creator_by.id', '=', 'menu.creator')
            ->leftJoin('users as modifier_by', 'modifier_by.id', '=', 'menu.modifier')
            ->select(
                'creator_by.name as creator_by',
                'modifier_by.name as modifier_by',
                'menu.*'
            )
            ->orderBy('menu_id','asc')->paginate(1);
        return view('Admin/Pages/Menu/MenuIndex',compact('Menu'));
    }



    public function MenuCreate(){
        return view('Admin/Pages/Menu/MenuCreate');
    }

    public function MenuEntry(Request $request){
        $validation = $request->validate([
            'menu_title' => 'required|unique:menu',
        ]);

        $data =  array();
        $data['menu_title'] = $request->menu_title;

        $data['status'] = 1;
        $data['creator'] = 1;
        $data['modifier'] = 1;
        $data['created_date'] = date("Y-m-d h:i:s");
        $data['modified_date'] = date("Y-m-d h:i:s");

        $res = MenuModel::insert($data);


        if ($res){
            return back()->with('success_message','Menu Add Successfully!');
        }else{
            return back()->with('error_message','Menu Add Fail!');
        }

    }



    public function MenuEdit($id){
        $Menu = MenuModel::where('cat_id',$id)->first();
        return view('Admin/Pages/Menu/MenuUpdate',compact('Menu'));
    }


    public function MenuUpdate(Request $request, $id){

        $request->validate([
            'cat_title' => 'required|unique:menu,cat_title,'. $id .',cat_id'
        ]);

        $data =  array();

        $data['cat_title'] = $request->cat_title;
        $data['cat_slug'] = Str::slug($request->cat_title, '-');

        $data['cat_en_name'] = $request->cat_en_name;
        $data['cat_bn_name'] = $request->cat_bn_name;

        $data['cat_en_desc'] = $request->cat_en_desc;
        $data['cat_bn_desc'] = $request->cat_bn_desc;

        $data['cat_en_key'] = $request->cat_en_key;
//        $data['cat_bn_key'] = $request->cat_bn_key;

        $data['status'] = $request->status;
        $data['modifier'] = 1;
        $data['modified_date'] = date("Y-m-d h:i:s");

        $res = MenuModel::where('cat_id','=',$id)->update($data);


        if ($res){
            return back()->with('success_message','Menu Update Successfully!');
        }else{
            return back()->with('error_message','Menu Update Fail!');
        }

    }
}
