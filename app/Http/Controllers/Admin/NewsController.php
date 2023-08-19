<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CategoryModel;
use App\Models\DistrictModel;
use App\Models\DivisionModel;
use App\Models\NewsPageModel;
use App\Models\NewsStatusModel;
use App\Models\NewsTypeModel;
use Illuminate\Http\Request;

class NewsController extends Controller
{

    public function NewsCreate(){
        $Category = CategoryModel::where('status',1)->get();
        $Division = DivisionModel::where('status',1)->get();
        $NewsPage = NewsPageModel::where('status',1)->get();
        $NewsType = NewsTypeModel::where('status',1)->get();
        $NewsStatus = NewsStatusModel::where('status',1)->get();
        return view('Admin/Pages/News/NewsCreate',compact('Category','Division','NewsPage','NewsType','NewsStatus'));
    }

}
