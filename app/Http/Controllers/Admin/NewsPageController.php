<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\NewsPageModel;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class NewsPageController extends Controller
{
    public function NewsPageIndex(){
        $NewsPage = NewsPageModel::join('users as creator_by', 'creator_by.id', '=', 'news_page.creator')
            ->leftJoin('users as modifier_by', 'modifier_by.id', '=', 'news_page.modifier')
            ->select(
                'creator_by.name as creator_by',
                'modifier_by.name as modifier_by',
                'news_page.*'
            )
            ->orderBy('news_page_id','asc')->paginate(10);
        return view('Admin/Pages/NewsPage/NewsPageIndex',compact('NewsPage'));
    }

    public function NewsPageCreate(){
        return view('Admin/Pages/NewsPage/NewsPageCreate');
    }

    public function NewsPageEntry(Request $request){
        $validation = $request->validate([
            'news_page_title' => 'required|unique:news_page',
        ]);

        $data =  array();
        $data['news_page_title'] = $request->news_page_title;
        $data['news_page_slug'] = Str::slug($request->news_page_title, '-');

        $data['news_page_en_name'] = $request->news_page_en_name;
        $data['news_page_bn_name'] = $request->news_page_bn_name;

        $data['news_page_en_desc'] = $request->news_page_en_desc;
        $data['news_page_bn_desc'] = $request->news_page_bn_desc;

        $data['news_page_en_key'] = $request->news_page_en_key;
//        $data['news_page_bn_key'] = $request->news_page_bn_key;

        $data['status'] = 1;
        $data['creator'] = 1;
        $data['modifier'] = 1;
        $data['created_date'] = date("Y-m-d h:i:s");
        $data['modified_date'] = date("Y-m-d h:i:s");

        $res = NewsPageModel::insert($data);


        if ($res){
            return back()->with('success_message','NewsPage Add Successfully!');
        }else{
            return back()->with('error_message','NewsPage Add Fail!');
        }

    }

    public function NewsPageEdit($id){
        $NewsPage = NewsPageModel::where('news_page_id',$id)->first();
        return view('Admin/Pages/NewsPage/NewsPageUpdate',compact('NewsPage'));
    }

    public function NewsPageUpdate(Request $request, $id){

        $request->validate([
            'news_page_title' => 'required|unique:news_page,news_page_title,'. $id .',news_page_id'
        ]);

        $data =  array();

        $data['news_page_title'] = $request->news_page_title;
        $data['news_page_slug'] = Str::slug($request->news_page_title, '-');

        $data['news_page_en_name'] = $request->news_page_en_name;
        $data['news_page_bn_name'] = $request->news_page_bn_name;

        $data['news_page_en_desc'] = $request->news_page_en_desc;
        $data['news_page_bn_desc'] = $request->news_page_bn_desc;

        $data['news_page_en_key'] = $request->news_page_en_key;
//        $data['news_page_bn_key'] = $request->news_page_bn_key;

        $data['status'] = $request->status;
        $data['modifier'] = 1;
        $data['modified_date'] = date("Y-m-d h:i:s");

        $res = NewsPageModel::where('news_page_id','=',$id)->update($data);


        if ($res){
            return back()->with('success_message','NewsPage Update Successfully!');
        }else{
            return back()->with('error_message','NewsPage Update Fail!');
        }

    }
}
