<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CategoryModel;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    public function CategoryIndex(){
        $Category = CategoryModel::join('users as creator_by', 'creator_by.id', '=', 'category.creator')
            ->leftJoin('users as modifier_by', 'modifier_by.id', '=', 'category.modifier')
            ->select(
                'creator_by.name as creator_by',
                'modifier_by.name as modifier_by',
                'category.*'
            )
            ->orderBy('cat_id','asc')->paginate(1);
        return view('Admin/Pages/Category/CategoryIndex',compact('Category'));
    }

    public function CategoryCreate(){
        return view('Admin/Pages/Category/CategoryCreate');
    }

    public function CategoryEntry(Request $request){
        $validation = $request->validate([
            'cat_title' => 'required|unique:category',
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

        $data['status'] = 1;
        $data['creator'] = 1;
        $data['modifier'] = 1;
        $data['created_date'] = date("Y-m-d h:i:s");
        $data['modified_date'] = date("Y-m-d h:i:s");

        $res = CategoryModel::insert($data);


        if ($res){
            return back()->with('success_message','Category Add Successfully!');
        }else{
            return back()->with('error_message','Category Add Fail!');
        }

    }

    public function CategoryEdit($id){
        $Category = CategoryModel::where('cat_id',$id)->first();
        return view('Admin/Pages/Category/CategoryUpdate',compact('Category'));
    }

    public function CategoryUpdate(Request $request, $id){

        $request->validate([
            'cat_title' => 'required|unique:category,cat_title,'. $id .',cat_id'
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

        $res = CategoryModel::where('cat_id','=',$id)->update($data);


        if ($res){
            return back()->with('success_message','Category Update Successfully!');
        }else{
            return back()->with('error_message','Category Update Fail!');
        }

    }

}
