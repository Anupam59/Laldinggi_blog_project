<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CategoryModel;
use App\Models\SubCategoryModel;
use App\Models\SubSubCategoryModel;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class SubSubCategoryController extends Controller
{
    public function SubSubCategoryIndex(){
        $SubSubCategory = SubSubCategoryModel::join('users as creator_by', 'creator_by.id', '=', 'sub_sub_category.creator')
            ->leftJoin('users as modifier_by', 'modifier_by.id', '=', 'sub_sub_category.modifier')
            ->leftJoin('category', 'category.cat_id', '=', 'sub_sub_category.cat_id')
            ->leftJoin('sub_category', 'sub_category.sub_cat_id', '=', 'sub_sub_category.sub_cat_id')
            ->select(
                'creator_by.name as creator_by',
                'modifier_by.name as modifier_by',
                'category.cat_title',
                'sub_category.sub_cat_title',
                'sub_sub_category.*'
            )
            ->orderBy('sub_sub_cat_id','asc')->paginate(10);

        return view('Admin/Pages/SubSubCategory/SubSubCategoryIndex',compact('SubSubCategory'));
    }

    public function SubSubCategoryCreate(){
        $Category = CategoryModel::where('status',1)->get();
        return view('Admin/Pages/SubSubCategory/SubSubCategoryCreate',compact('Category'));
    }

    public function SubSubCategoryEntry(Request $request){
        $validation = $request->validate([
            'sub_sub_cat_title' => 'required|unique:sub_sub_category',
        ]);

        $data =  array();
        $data['cat_id'] = $request->cat_id;
        $data['sub_cat_id'] = $request->sub_cat_id;

        $data['sub_sub_cat_title'] = $request->sub_sub_cat_title;
        $data['sub_sub_cat_slug'] = Str::slug($request->sub_sub_cat_title, '-');

        $data['sub_sub_cat_en_name'] = $request->sub_sub_cat_en_name;
        $data['sub_sub_cat_bn_name'] = $request->sub_sub_cat_bn_name;

        $data['sub_sub_cat_en_desc'] = $request->sub_sub_cat_en_desc;
        $data['sub_sub_cat_bn_desc'] = $request->sub_sub_cat_bn_desc;

        $data['sub_sub_cat_en_key'] = $request->sub_sub_cat_en_key;
//        $data['sub_sub_cat_bn_key'] = $request->sub_sub_cat_bn_key;

        $data['status'] = 1;
        $data['creator'] = 1;
        $data['modifier'] = 1;
        $data['created_date'] = date("Y-m-d h:i:s");
        $data['modified_date'] = date("Y-m-d h:i:s");

        $res = SubSubCategoryModel::insert($data);


        if ($res){
            return back()->with('success_message','SubSubCategory Add Successfully!');
        }else{
            return back()->with('error_message','SubSubCategory Add Fail!');
        }

    }

    public function SubSubCategoryEdit($id){
        $Category = CategoryModel::where('status',1)->get();
        $SubSubCategory = SubSubCategoryModel::where('sub_sub_cat_id',$id)->first();
        $cat_id = $SubSubCategory->cat_id;
        $SubCategory = SubCategoryModel::where('cat_id',$cat_id)->where('status',1)->get();

        return view('Admin/Pages/SubSubCategory/SubSubCategoryUpdate',compact('Category','SubCategory','SubSubCategory'));
    }

    public function SubSubCategoryUpdate(Request $request, $id){

        $request->validate([
            'sub_sub_cat_title' => 'required|unique:sub_sub_category,sub_sub_cat_title,'. $id .',sub_sub_cat_id'
        ]);

        $data =  array();
        $data['cat_id'] = $request->cat_id;
        $data['sub_cat_id'] = $request->sub_cat_id;
        $data['sub_sub_cat_title'] = $request->sub_sub_cat_title;
        $data['sub_sub_cat_slug'] = Str::slug($request->sub_sub_cat_title, '-');

        $data['sub_sub_cat_en_name'] = $request->sub_sub_cat_en_name;
        $data['sub_sub_cat_bn_name'] = $request->sub_sub_cat_bn_name;

        $data['sub_sub_cat_en_desc'] = $request->sub_sub_cat_en_desc;
        $data['sub_sub_cat_bn_desc'] = $request->sub_sub_cat_bn_desc;

        $data['sub_sub_cat_en_key'] = $request->sub_sub_cat_en_key;
//        $data['sub_sub_cat_bn_key'] = $request->sub_sub_cat_bn_key;

        $data['status'] = $request->status;
        $data['modifier'] = 1;
        $data['modified_date'] = date("Y-m-d h:i:s");

        $res = SubSubCategoryModel::where('sub_sub_cat_id','=',$id)->update($data);


        if ($res){
            return back()->with('success_message','SubSubCategory Update Successfully!');
        }else{
            return back()->with('error_message','SubSubCategory Update Fail!');
        }

    }



}
