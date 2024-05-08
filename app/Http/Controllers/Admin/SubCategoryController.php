<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CategoryModel;
use App\Models\SubCategoryModel;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class SubCategoryController extends Controller
{
    public function SubCategoryIndex(){

        $SubCategory = SubCategoryModel::join('users as creator_by', 'creator_by.id', '=', 'sub_category.creator')
            ->leftJoin('users as modifier_by', 'modifier_by.id', '=', 'sub_category.modifier')
            ->select(
                'creator_by.name as creator_by',
                'modifier_by.name as modifier_by',
                'sub_category.*'
            )
            ->orderBy('sub_cat_id','asc')->paginate(20);
        return view('Admin/Pages/SubCategory/SubCategoryIndex',compact('SubCategory'));
    }

    public function SubCategoryCreate(){
        $Category = CategoryModel::where('status',1)->get();
        return view('Admin/Pages/SubCategory/SubCategoryCreate',compact('Category'));
    }

    public function SubCategoryEntry(Request $request){
        $validation = $request->validate([
            'sub_cat_title' => 'required|unique:sub_category',
        ]);

        $data =  array();
        $data['cat_id'] = $request->cat_id;

        $data['sub_cat_title'] = $request->sub_cat_title;
        $data['sub_cat_slug'] = Str::slug($request->sub_cat_title, '-');

        $data['sub_cat_en_name'] = $request->sub_cat_en_name;
        $data['sub_cat_bn_name'] = $request->sub_cat_bn_name;

        $data['sub_cat_en_desc'] = $request->sub_cat_en_desc;
        $data['sub_cat_bn_desc'] = $request->sub_cat_bn_desc;

        $data['sub_cat_en_key'] = $request->sub_cat_en_key;
//        $data['sub_cat_bn_key'] = $request->sub_cat_bn_key;

        $data['status'] = 1;
        $data['creator'] = 1;
        $data['modifier'] = 1;
        $data['created_date'] = date("Y-m-d h:i:s");
        $data['modified_date'] = date("Y-m-d h:i:s");

        $res = SubCategoryModel::insert($data);


        if ($res){
            return back()->with('success_message','SubCategory Add Successfully!');
        }else{
            return back()->with('error_message','SubCategory Add Fail!');
        }

    }

    public function SubCategoryEdit($id){
        $Category = CategoryModel::where('status',1)->get();
        $SubCategory = SubCategoryModel::where('sub_cat_id',$id)->first();
        return view('Admin/Pages/SubCategory/SubCategoryUpdate',compact('SubCategory','Category'));
    }

    public function SubCategoryUpdate(Request $request, $id){

        $request->validate([
            'sub_cat_title' => 'required|unique:sub_category,sub_cat_title,'. $id .',sub_cat_id'
        ]);

        $data =  array();
        $data['cat_id'] = $request->cat_id;
        $data['sub_cat_title'] = $request->sub_cat_title;
        $data['sub_cat_slug'] = Str::slug($request->sub_cat_title, '-');

        $data['sub_cat_en_name'] = $request->sub_cat_en_name;
        $data['sub_cat_bn_name'] = $request->sub_cat_bn_name;

        $data['sub_cat_en_desc'] = $request->sub_cat_en_desc;
        $data['sub_cat_bn_desc'] = $request->sub_cat_bn_desc;

        $data['sub_cat_en_key'] = $request->sub_cat_en_key;
//        $data['sub_cat_bn_key'] = $request->sub_cat_bn_key;

        $data['status'] = $request->status;
        $data['modifier'] = 1;
        $data['modified_date'] = date("Y-m-d h:i:s");

        $res = SubCategoryModel::where('sub_cat_id','=',$id)->update($data);


        if ($res){
            return back()->with('success_message','SubCategory Update Successfully!');
        }else{
            return back()->with('error_message','SubCategory Update Fail!');
        }

    }

}
