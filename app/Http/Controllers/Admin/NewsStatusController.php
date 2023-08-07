<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\NewsStatusModel;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class NewsStatusController extends Controller
{
    public function NewsStatusIndex(){
        $NewsStatus = NewsStatusModel::join('users as creator_by', 'creator_by.id', '=', 'news_status.creator')
            ->leftJoin('users as modifier_by', 'modifier_by.id', '=', 'news_status.modifier')
            ->select(
                'creator_by.name as creator_by',
                'modifier_by.name as modifier_by',
                'news_status.*'
            )
            ->orderBy('news_status_id','asc')->paginate(10);
        return view('Admin/Pages/NewsStatus/NewsStatusIndex',compact('NewsStatus'));
    }

    public function NewsStatusCreate(){
        return view('Admin/Pages/NewsStatus/NewsStatusCreate');
    }

    public function NewsStatusEntry(Request $request){
        $validation = $request->validate([
            'news_status_title' => 'required|unique:news_status',
        ]);

        $data =  array();
        $data['news_status_title'] = $request->news_status_title;
        $data['news_status_slug'] = Str::slug($request->news_status_title, '-');

        $data['status'] = 1;
        $data['creator'] = 1;
        $data['modifier'] = 1;
        $data['created_date'] = date("Y-m-d h:i:s");
        $data['modified_date'] = date("Y-m-d h:i:s");

        $res = NewsStatusModel::insert($data);

        if ($res){
            return back()->with('success_message','NewsStatus Add Successfully!');
        }else{
            return back()->with('error_message','NewsStatus Add Fail!');
        }

    }

    public function NewsStatusEdit($id){
        $NewsStatus = NewsStatusModel::where('news_status_id',$id)->first();
        return view('Admin/Pages/NewsStatus/NewsStatusUpdate',compact('NewsStatus'));
    }

    public function NewsStatusUpdate(Request $request, $id){
        $request->validate([
            'news_status_title' => 'required|unique:news_status,news_status_title,'. $id .',news_status_id'
        ]);
        $data =  array();
        $data['news_status_title'] = $request->news_status_title;
        $data['news_status_slug'] = Str::slug($request->news_status_title, '-');

        $data['status'] = $request->status;
        $data['modifier'] = 1;
        $data['modified_date'] = date("Y-m-d h:i:s");

        $res = NewsStatusModel::where('news_status_id','=',$id)->update($data);


        if ($res){
            return back()->with('success_message','NewsStatus Update Successfully!');
        }else{
            return back()->with('error_message','NewsStatus Update Fail!');
        }

    }

}
