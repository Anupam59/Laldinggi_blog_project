<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\NewsSeriesModel;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class NewsSeriesController extends Controller
{
    public function NewsSeriesIndex(){
        $NewsSeries = NewsSeriesModel::join('users as creator_by', 'creator_by.id', '=', 'news_series.creator')
            ->leftJoin('users as modifier_by', 'modifier_by.id', '=', 'news_series.modifier')
            ->select(
                'creator_by.name as creator_by',
                'modifier_by.name as modifier_by',
                'news_series.*'
            )
            ->orderBy('news_series_id','asc')->paginate(1);
        return view('Admin/Pages/NewsSeries/NewsSeriesIndex',compact('NewsSeries'));
    }

    public function NewsSeriesCreate(){
        return view('Admin/Pages/NewsSeries/NewsSeriesCreate');
    }

    public function NewsSeriesEntry(Request $request){
        $validation = $request->validate([
            'news_series_title' => 'required|unique:news_series',
        ]);

        $data =  array();
        $data['news_series_title'] = $request->news_series_title;
        $data['news_series_slug'] = Str::slug($request->news_series_title, '-');

        $data['news_series_en_name'] = $request->news_series_en_name;
        $data['news_series_bn_name'] = $request->news_series_bn_name;

        $data['news_series_en_desc'] = $request->news_series_en_desc;
        $data['news_series_bn_desc'] = $request->news_series_bn_desc;

        $data['news_series_en_key'] = $request->news_series_en_key;
//        $data['news_series_bn_key'] = $request->news_series_bn_key;

        $data['status'] = 1;
        $data['creator'] = 1;
        $data['modifier'] = 1;
        $data['created_date'] = date("Y-m-d h:i:s");
        $data['modified_date'] = date("Y-m-d h:i:s");

        $res = NewsSeriesModel::insert($data);


        if ($res){
            return back()->with('success_message','NewsSeries Add Successfully!');
        }else{
            return back()->with('error_message','NewsSeries Add Fail!');
        }

    }

    public function NewsSeriesEdit($id){
        $NewsSeries = NewsSeriesModel::where('news_series_id',$id)->first();
        return view('Admin/Pages/NewsSeries/NewsSeriesUpdate',compact('NewsSeries'));
    }

    public function NewsSeriesUpdate(Request $request, $id){

        $request->validate([
            'news_series_title' => 'required|unique:news_series,news_series_title,'. $id .',news_series_id'
        ]);

        $data =  array();

        $data['news_series_title'] = $request->news_series_title;
        $data['news_series_slug'] = Str::slug($request->news_series_title, '-');

        $data['news_series_en_name'] = $request->news_series_en_name;
        $data['news_series_bn_name'] = $request->news_series_bn_name;

        $data['news_series_en_desc'] = $request->news_series_en_desc;
        $data['news_series_bn_desc'] = $request->news_series_bn_desc;

        $data['news_series_en_key'] = $request->news_series_en_key;
//        $data['news_series_bn_key'] = $request->news_series_bn_key;

        $data['status'] = $request->status;
        $data['modifier'] = 1;
        $data['modified_date'] = date("Y-m-d h:i:s");

        $res = NewsSeriesModel::where('news_series_id','=',$id)->update($data);


        if ($res){
            return back()->with('success_message','NewsSeries Update Successfully!');
        }else{
            return back()->with('error_message','NewsSeries Update Fail!');
        }

    }
}
