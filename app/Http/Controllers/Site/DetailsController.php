<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\NewsModel;
use App\Models\NewsTagModel;
use Illuminate\Http\Request;

class DetailsController extends Controller
{
    public function DetailsPage1($cat_slug,$news_slug){
        $News = NewsModel::join('users as creator_by', 'creator_by.id', '=', 'news.creator')
            ->leftJoin('users as modifier_by', 'modifier_by.id', '=', 'news.modifier')
            ->leftJoin('category', 'category.cat_id', '=', 'news.cat_id')
            ->leftJoin('sub_category', 'sub_category.sub_cat_id', '=', 'news.sub_cat_id')
            ->leftJoin('sub_sub_category', 'sub_sub_category.sub_sub_cat_id', '=', 'news.sub_sub_cat_id')
            ->select(
                'creator_by.name as creator_by',
                'modifier_by.name as modifier_by',
                'category.cat_id','category.cat_slug','category.cat_en_name','category.cat_bn_name',
                'news.*'
            )
            ->where('category.cat_slug', '=',$cat_slug)
            ->where('news.news_slug', '=',$news_slug)
            ->first();
        $newsID = $News->news_id;
        $NewTagText = NewsTagModel::where('news_id', '=',$newsID)->first();
        $NewTag = null;
        if ($NewTagText){
            $NewTag = explode(",",$NewTagText->news_tag_keyword);
        }
        return view('Site/Page/DetailsPage',compact('News','NewTag'));
    }
    public function DetailsPage2($cat_slug,$sub_cat_slug,$news_slug){
        $News = NewsModel::join('users as creator_by', 'creator_by.id', '=', 'news.creator')
            ->leftJoin('users as modifier_by', 'modifier_by.id', '=', 'news.modifier')
            ->leftJoin('category', 'category.cat_id', '=', 'news.cat_id')
            ->leftJoin('sub_category', 'sub_category.sub_cat_id', '=', 'news.sub_cat_id')
            ->leftJoin('sub_sub_category', 'sub_sub_category.sub_sub_cat_id', '=', 'news.sub_sub_cat_id')
            ->select(
                'creator_by.name as creator_by',
                'modifier_by.name as modifier_by',
                'category.cat_id','category.cat_slug','category.cat_en_name','category.cat_bn_name',
                'sub_category.sub_cat_id','sub_category.sub_cat_slug','sub_category.sub_cat_en_name','sub_category.sub_cat_bn_name',
                'news.*'
            )
            ->where('category.cat_slug', '=',$cat_slug)
            ->where('sub_category.sub_cat_slug', '=',$sub_cat_slug)
            ->where('news.news_slug', '=',$news_slug)
            ->first();
        return view('Site/Page/DetailsPage',compact('News'));
    }
    public function DetailsPage3($cat_slug,$sub_cat_slug,$sub_sub_cat_slug,$news_slug){
        $News = NewsModel::join('users as creator_by', 'creator_by.id', '=', 'news.creator')
            ->leftJoin('users as modifier_by', 'modifier_by.id', '=', 'news.modifier')
            ->leftJoin('category', 'category.cat_id', '=', 'news.cat_id')
            ->leftJoin('sub_category', 'sub_category.sub_cat_id', '=', 'news.sub_cat_id')
            ->leftJoin('sub_sub_category', 'sub_sub_category.sub_sub_cat_id', '=', 'news.sub_sub_cat_id')
            ->select(
                'creator_by.name as creator_by',
                'modifier_by.name as modifier_by',
                'category.cat_id','category.cat_slug','category.cat_en_name','category.cat_bn_name',
                'sub_category.sub_cat_id','sub_category.sub_cat_slug','sub_category.sub_cat_en_name','sub_category.sub_cat_bn_name',
                'sub_sub_category.sub_sub_cat_id','sub_sub_category.sub_sub_cat_slug','sub_sub_category.sub_sub_cat_en_name','sub_sub_category.sub_sub_cat_bn_name',
                'news.*'
            )
            ->where('category.cat_slug', '=',$cat_slug)
            ->where('news.sub_cat_slug', '=',$sub_cat_slug)
            ->where('news.sub_sub_cat_slug', '=',$sub_sub_cat_slug)
            ->where('news.news_slug', '=',$news_slug)
            ->first();

        return view('Site/Page/DetailsPage',compact('News'));
    }
}
