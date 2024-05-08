<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\NewsTypeModel;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class NewsTypeController extends Controller
{
    public function NewsTypeIndex(){
        $NewsType = NewsTypeModel::join('users as creator_by', 'creator_by.id', '=', 'news_type.creator')
            ->leftJoin('users as modifier_by', 'modifier_by.id', '=', 'news_type.modifier')
            ->select(
                'creator_by.name as creator_by',
                'modifier_by.name as modifier_by',
                'news_type.*'
            )
            ->orderBy('news_type_id','asc')->paginate(10);
        return view('Admin/Pages/NewsType/NewsTypeIndex',compact('NewsType'));
    }

    public function NewsTypeCreate(){
        return view('Admin/Pages/NewsType/NewsTypeCreate');
    }

    public function NewsTypeEntry(Request $request){
        $validation = $request->validate([
            'news_type_title' => 'required|unique:news_type',
        ]);

        $data =  array();
        $data['news_type_title'] = $request->news_type_title;
        $data['news_type_slug'] = Str::slug($request->news_type_title, '-');

        $data['news_type_en_name'] = $request->news_type_en_name;
        $data['news_type_bn_name'] = $request->news_type_bn_name;

        $data['news_type_en_desc'] = $request->news_type_en_desc;
        $data['news_type_bn_desc'] = $request->news_type_bn_desc;

        $data['news_type_en_key'] = $request->news_type_en_key;
//        $data['news_type_bn_key'] = $request->news_type_bn_key;

        $data['status'] = 1;
        $data['creator'] = 1;
        $data['modifier'] = 1;
        $data['created_date'] = date("Y-m-d h:i:s");
        $data['modified_date'] = date("Y-m-d h:i:s");

        $res = NewsTypeModel::insert($data);


        if ($res){
            return back()->with('success_message','News Type Add Successfully!');
        }else{
            return back()->with('error_message','News Type Add Fail!');
        }

    }

    public function NewsTypeEdit($id){
        $NewsType = NewsTypeModel::where('news_type_id',$id)->first();
        return view('Admin/Pages/NewsType/NewsTypeUpdate',compact('NewsType'));
    }

    public function NewsTypeUpdate(Request $request, $id){

        $request->validate([
            'news_type_title' => 'required|unique:news_type,news_type_title,'. $id .',news_type_id'
        ]);

        $data =  array();

        $data['news_type_title'] = $request->news_type_title;
        $data['news_type_slug'] = Str::slug($request->news_type_title, '-');

        $data['news_type_en_name'] = $request->news_type_en_name;
        $data['news_type_bn_name'] = $request->news_type_bn_name;

        $data['news_type_en_desc'] = $request->news_type_en_desc;
        $data['news_type_bn_desc'] = $request->news_type_bn_desc;

        $data['news_type_en_key'] = $request->news_type_en_key;
//        $data['news_type_bn_key'] = $request->news_type_bn_key;

        $data['status'] = $request->status;
        $data['modifier'] = 1;
        $data['modified_date'] = date("Y-m-d h:i:s");

        $res = NewsTypeModel::where('news_type_id','=',$id)->update($data);


        if ($res){
            return back()->with('success_message','News Type Update Successfully!');
        }else{
            return back()->with('error_message','News Type Update Fail!');
        }

    }
}
