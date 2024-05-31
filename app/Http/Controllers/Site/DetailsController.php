<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\NewsModel;
use App\Models\NewsTagModel;
use App\Models\User;
use Illuminate\Http\Request;

class DetailsController extends Controller
{
    public function NewsTag($news_id){
        $newsID = $news_id;
        $NewsTagText = NewsTagModel::where('news_id', '=',$newsID)->first();
        $NewsTag = null;
        if ($NewsTagText){
            $NewsTag = explode(",",$NewsTagText->news_tag_keyword);
        }
        return $NewsTag;
    }
    public function NewsReporter($news_reporter){
        $newsReporterId = $news_reporter;
        $NewsReporter = null;
        if ($newsReporterId){
            $newsReporterArray = explode(",",$newsReporterId);
            $NewsReporter = User::select('users.id','users.name')
                ->whereIn('id', $newsReporterArray)->get();
        }
        return $NewsReporter;
    }
    public function NewsWriter($news_writer){
        $newsWriterId = $news_writer;
        $NewsWriter = null;
        if ($newsWriterId){
            $newsWriterArray = explode(",",$newsWriterId);
            $NewsWriter = $newsWriterArray;
        }
        return $NewsWriter;
    }
    public function CategoryNews($cat_id,$limit,$news_id){
        $News = NewsModel::join('users as creator_by', 'creator_by.id', '=', 'news.creator')
            ->leftJoin('users as modifier_by', 'modifier_by.id', '=', 'news.modifier')
            ->leftJoin('category', 'category.cat_id', '=', 'news.cat_id')
            ->select(
                'creator_by.name as creator_by',
                'modifier_by.name as modifier_by',
                'category.cat_id','category.cat_slug','category.cat_en_name','category.cat_bn_name',
                'news.news_id','news.news_head_title','news.news_slug','news.news_image','news.publish_date','news.created_date','news.modified_date'
            )
            ->where('news.news_id','!=',$news_id)
            ->where('news.cat_id', '=',$cat_id)
            ->orderBy('news_id','desc')
            ->limit($limit)
            ->get();
        return $News;
    }


    public function DetailsPage1($cat_slug,$news_slug){
        $NewsDetails = NewsModel::join('users as creator_by', 'creator_by.id', '=', 'news.creator')
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

        $NewsTag = $this->NewsTag($NewsDetails->news_id);
        $NewsReporter = $this->NewsReporter($NewsDetails->news_reporter);
        $NewsWriter = $this->NewsWriter($NewsDetails->news_writer);
        $CategoryNews = $this->CategoryNews($NewsDetails->cat_id,4,$NewsDetails->news_id);

//        dd($News);



        return view('Site/Page/DetailsPage',compact('NewsDetails','NewsTag','NewsReporter',
            'NewsWriter','CategoryNews'));
    }



    public function DetailsPage11($cat_slug,$news_slug){
        $NewsDetails = NewsModel::join('users as creator_by', 'creator_by.id', '=', 'news.creator')
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

        $newsID = $NewsDetails->news_id;
        $NewTagText = NewsTagModel::where('news_id', '=',$newsID)->first();
        $NewTag = null;
        if ($NewTagText){
            $NewTag = explode(",",$NewTagText->news_tag_keyword);
        }

        $newsReporterId = $NewsDetails->news_reporter;
        $NewReporter = null;
        if ($newsReporterId){
            $newsReporterArray = explode(",",$NewsDetails->news_reporter);
            $NewReporter = User::select('users.id','users.name')
            ->whereIn('id', $newsReporterArray)->get();
        }

        $newsWriterId = $NewsDetails->news_writer;
        $NewWriter = null;
        if ($newsWriterId){
            $newsWriterArray = explode(",",$NewsDetails->news_writer);
            $NewWriter = $newsWriterArray;
        }

        $cat_id = $NewsDetails->cat_id;
        $limit = 4;
        $News = NewsModel::join('users as creator_by', 'creator_by.id', '=', 'news.creator')
            ->leftJoin('users as modifier_by', 'modifier_by.id', '=', 'news.modifier')
            ->leftJoin('category', 'category.cat_id', '=', 'news.cat_id')
            ->select(
                'creator_by.name as creator_by',
                'modifier_by.name as modifier_by',
                'category.cat_id','category.cat_slug','category.cat_en_name','category.cat_bn_name',
                'news.news_id','news.news_head_title','news.news_slug','news.news_image','news.publish_date','news.created_date','news.modified_date'
            )
            ->where('news.news_id', '!=',$newsID)
            ->where('news.cat_id', '=',$cat_id)
            ->orderBy('news_id','desc')
            ->limit($limit)
            ->get();


        dd($News);



        return view('Site/Page/DetailsPage',compact('NewsDetails','NewTag','NewReporter',
        'NewWriter'));
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
