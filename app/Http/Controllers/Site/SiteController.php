<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\CategoryModel;
use App\Models\DistrictModel;
use App\Models\DivisionModel;
use App\Models\MenuModel;
use App\Models\NewsModel;
use App\Models\NewsSeoModel;
use App\Models\NewsTagModel;
use App\Models\SiteCommonModel;
use App\Models\SubCategoryModel;
use App\Models\UpazilaModel;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class SiteController extends Controller
{
    public function __construct() {
        $SiteCommon = SiteCommonModel::where('status',1)->first();
        $TopMenu = MenuModel::with('menu_item.menu_sub_item')
            ->where('menu.menu_id', '=',1)
            ->get();
        View::share ( 'SiteCommon', $SiteCommon );
        View::share ( 'TopMenu', $TopMenu);
    }

    //Home Page
    public function TypeGetNews($news_type_id,$limit){
        $News = NewsModel::join('users as creator_by', 'creator_by.id', '=', 'news.creator')
            ->leftJoin('users as modifier_by', 'modifier_by.id', '=', 'news.modifier')
            ->leftJoin('category', 'category.cat_id', '=', 'news.cat_id')
            ->select(
                'creator_by.name as creator_by',
                'modifier_by.name as modifier_by',
                'category.cat_slug','category.cat_en_name','category.cat_bn_name',
                'news.news_id','news.cat_id','news.news_head_title','news.news_slug','news.news_image','news.publish_date','news.created_date','news.modified_date'
            )
            ->where('news.news_type_id', '=',$news_type_id)
            ->orderBy('news_id','desc')
            ->limit($limit)
            ->get();
        return $News;
    }
    public function RecentGetNews($limit){
        $News = NewsModel::join('users as creator_by', 'creator_by.id', '=', 'news.creator')
            ->leftJoin('users as modifier_by', 'modifier_by.id', '=', 'news.modifier')
            ->leftJoin('category', 'category.cat_id', '=', 'news.cat_id')
            ->select(
                'creator_by.name as creator_by',
                'modifier_by.name as modifier_by',
                'category.cat_id','category.cat_slug','category.cat_en_name','category.cat_bn_name',
                'news.news_id','news.news_head_title','news.news_slug','news.news_image','news.publish_date','news.created_date','news.modified_date'
            )
            ->orderBy('news_id','desc')
            ->limit($limit)
            ->get();
        return $News;
    }
    public function ToRecentGetNews($skip,$take){
        $News = NewsModel::join('users as creator_by', 'creator_by.id', '=', 'news.creator')
            ->leftJoin('users as modifier_by', 'modifier_by.id', '=', 'news.modifier')
            ->leftJoin('category', 'category.cat_id', '=', 'news.cat_id')
            ->select(
                'creator_by.name as creator_by',
                'modifier_by.name as modifier_by',
                'category.cat_id','category.cat_slug','category.cat_en_name','category.cat_bn_name',
                'news.news_id','news.news_head_title','news.news_slug','news.publish_date','news.created_date','news.modified_date'
            )
            ->orderBy('news_id','desc')
            ->skip($skip)->take($take)
            ->get();
        return $News;
    }
    public function CategoryGetNews($cat_id,$limit){
        $News = NewsModel::join('users as creator_by', 'creator_by.id', '=', 'news.creator')
            ->leftJoin('users as modifier_by', 'modifier_by.id', '=', 'news.modifier')
            ->leftJoin('category', 'category.cat_id', '=', 'news.cat_id')
            ->select(
                'creator_by.name as creator_by',
                'modifier_by.name as modifier_by',
                'category.cat_id','category.cat_slug','category.cat_en_name','category.cat_bn_name',
                'news.news_id','news.news_head_title','news.news_slug','news.news_image','news.publish_date','news.created_date','news.modified_date'
            )
            ->where('news.cat_id', '=',$cat_id)
            ->orderBy('news_id','desc')
            ->limit($limit)
            ->get();
        return $News;
    }
    public function SubCategoryGetNews($cat_id,$sub_cat_id,$limit){
        $News = NewsModel::join('users as creator_by', 'creator_by.id', '=', 'news.creator')
            ->leftJoin('users as modifier_by', 'modifier_by.id', '=', 'news.modifier')
            ->leftJoin('category', 'category.cat_id', '=', 'news.cat_id')
            ->leftJoin('sub_category', 'sub_category.sub_cat_id', '=', 'news.sub_cat_id')
            ->select(
                'creator_by.name as creator_by',
                'modifier_by.name as modifier_by',
                'category.cat_slug','category.cat_en_name','category.cat_bn_name',
                'sub_category.sub_cat_slug','sub_category.sub_cat_en_name','sub_category.sub_cat_bn_name',
                'news.news_id','news.cat_id','news.sub_cat_id','news.news_head_title','news.news_slug','news.publish_date','news.created_date','news.modified_date'
            )
            ->where('news.cat_id', '=',$cat_id)
            ->where('news.sub_cat_id', '=',$sub_cat_id)
            ->orderBy('news_id','desc')
            ->limit($limit)
            ->get();
        return $News;
    }
    public function getTabData(Request $request){
        $catID = $request->input('catID');
        $limit = $request->input('limit');
        $News = NewsModel::join('users as creator_by', 'creator_by.id', '=', 'news.creator')
            ->leftJoin('users as modifier_by', 'modifier_by.id', '=', 'news.modifier')
            ->leftJoin('category', 'category.cat_id', '=', 'news.cat_id')
            ->select(
                'creator_by.name as creator_by',
                'modifier_by.name as modifier_by',
                'category.cat_id','category.cat_slug','category.cat_en_name','category.cat_bn_name',
                'news.news_id','news.news_head_title','news.news_slug','news.news_image','news.publish_date','news.created_date','news.modified_date'
            )
            ->where('news.cat_id', '=',$catID)
            ->orderBy('news_id','desc')
            ->limit($limit)
            ->get();
        return $News;
    }
    public function MenuData($menuId){
        $News = MenuModel::with('menu_item.menu_sub_item')
            ->where('menu.menu_id', '=',$menuId)
            ->get();
        return $News;
    }

    //Details Page
    public function NewsTag($news_id){
        $newsID = $news_id;
        $NewsTagText = NewsTagModel::where('news_id', '=',$newsID)->first();
        $NewsTag = null;
        if ($NewsTagText){
            $NewsTag = explode(",",$NewsTagText->news_tag_keyword);
        }
        return $NewsTag;
    }
    public function NewsSEO($news_id){
        $newsID = $news_id;
        $NewsSEO = NewsSeoModel::where('news_id', '=',$newsID)->first();
        return $NewsSEO;
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
    public function RecentDNews($limit,$news_id){
        $News = NewsModel::join('users as creator_by', 'creator_by.id', '=', 'news.creator')
            ->leftJoin('users as modifier_by', 'modifier_by.id', '=', 'news.modifier')
            ->leftJoin('category', 'category.cat_id', '=', 'news.cat_id')
            ->select(
                'creator_by.name as creator_by',
                'modifier_by.name as modifier_by',
                'category.cat_id','category.cat_slug','category.cat_en_name','category.cat_bn_name',
                'news.news_id','news.news_head_title','news.news_slug','news.news_image','news.publish_date','news.created_date','news.modified_date'
            )
            ->where('news.news_id', '!=',$news_id)
            ->orderBy('news_id','desc')
            ->limit($limit)
            ->get();
        return $News;
    }

    public function HomePage(){
        $LeadNews = $this->TypeGetNews(1,1);
        $TopNews = $this->TypeGetNews(2,3);
        $SelectiveNews = $this->TypeGetNews(3,4);
        $VideoNews = $this->TypeGetNews(4,3);
        $AudioNews = $this->TypeGetNews(5,3);
        $RecentNews = $this->RecentGetNews(3);

        $PoliticsNews = $this->CategoryGetNews(1,4);
        $BangladeshNews = $this->CategoryGetNews(2,4);
        $EntertainmentNews = $this->CategoryGetNews(3,4);
        $SportsNews = $this->CategoryGetNews(4,6);
        $InternationalNews = $this->CategoryGetNews(5,4);
        $LifestyleNews = $this->CategoryGetNews(6,4);
        $ReligionNews = $this->CategoryGetNews(7,4);
        $BusinessNews = $this->CategoryGetNews(8,4);
        $TabMenu = $this->MenuData(2);
        $ToRecentNews = $this->ToRecentGetNews(1,4);
//        $news = $this->SubCategoryGetNews(2,3,5);
        return view('Site/Page/HomePage',compact(
            'LeadNews', 'TopNews', 'SelectiveNews', 'VideoNews','AudioNews',
            'RecentNews','TabMenu','PoliticsNews','BangladeshNews','InternationalNews','SportsNews'));
    }
    public function NewsTagKeyword($news_tag_keyword){
        $NewsTagKeyword = $news_tag_keyword;
        $NewTagText = NewsTagModel::select('news_tag.news_id')
            ->where('news_tag_keyword', 'like','%'.$news_tag_keyword.'%')
            ->get()->toArray();

        $News = NewsModel::join('users as creator_by', 'creator_by.id', '=', 'news.creator')
            ->leftJoin('users as modifier_by', 'modifier_by.id', '=', 'news.modifier')
            ->leftJoin('category', 'category.cat_id', '=', 'news.cat_id')
            ->select(
                'creator_by.name as creator_by',
                'modifier_by.name as modifier_by',
                'category.cat_slug','category.cat_en_name','category.cat_bn_name',
                'news.news_id','news.cat_id','news.news_head_title','news.news_slug','news.news_image','news.publish_date','news.created_date','news.modified_date'
            )
            ->whereIn('news.news_id', $NewTagText)
            ->orderBy('news_id','desc')
            ->paginate(10);
        return view('Site/Page/NewsTagPage',compact('NewsTagKeyword','News'));
    }

    public function SearchPage(){
        $search = \request('search');
        $division = \request('division');
        $district = \request('district');
        $upazila = \request('upazila');

        $Division = DivisionModel::where('status',1)->get();
        $District = '';
        $Upazila = '';


        $query = NewsModel::join('users as creator_by', 'creator_by.id', '=', 'news.creator')
            ->leftJoin('users as modifier_by', 'modifier_by.id', '=', 'news.modifier')
            ->leftJoin('category', 'category.cat_id', '=', 'news.cat_id')
            ->select(
                'creator_by.name as creator_by',
                'modifier_by.name as modifier_by',
                'category.cat_slug','category.cat_en_name','category.cat_bn_name',
                'news.news_id','news.cat_id','news.news_head_title','news.news_slug','news.news_image','news.publish_date','news.created_date','news.modified_date'
            );
        if ($search){
            $query = $query ->where('news.news_head_title', 'like','%'.$search.'%');
        }
        if ($division){
            $query = $query->where('news.division_id', '=',$division);
            $District = DistrictModel::where('division_id',$division)->where('status',1)->get();
        }
        if ($district){
            $query = $query->where('news.district_id', '=',$district);
            $Upazila = UpazilaModel::where('district_id',$district)->where('status',1)->get();
        }
        if ($upazila){
            $query = $query->where('news.upazila_id', '=',$upazila);
        }

        $News = $query->orderBy('news_id','desc')->paginate(10);
        return view('Site/Page/SearchPage',compact('News','Division','District','Upazila'));
    }

    public function DetailsPage($news_slug){
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
            ->where('news.news_slug', '=',$news_slug)
            ->first();
        $NewsSEOTitle = null;
        $NewsSEODesc = null;
        $NewsSEO = $this->NewsSEO($NewsDetails->news_id);
        if ($NewsSEO){
            $NewsSEOTitle = $NewsSEO->news_seo_title;
            $NewsSEODesc = $NewsSEO->news_seo_description;
        }
        $NewsTag = $this->NewsTag($NewsDetails->news_id);
        $NewsReporter = $this->NewsReporter($NewsDetails->news_reporter);
        $NewsWriter = $this->NewsWriter($NewsDetails->news_writer);
        $CategoryNews = $this->CategoryNews($NewsDetails->cat_id,4,$NewsDetails->news_id);
        $TopNews = $this->RecentDNews(4,$NewsDetails->news_id);

        return view('Site/Page/DetailsPage',compact('NewsDetails','NewsSEOTitle','NewsSEODesc','NewsTag','NewsReporter',
            'NewsWriter','CategoryNews','TopNews'));
    }
    public function CategoryPage($cat_slug){
        $CategoryData = CategoryModel:: select(
            'category.cat_id','category.cat_slug',
            'category.cat_en_name','category.cat_bn_name',
        )->where('cat_slug','=',$cat_slug)->first();

        $SubCategoryAll = SubCategoryModel::select(
            'sub_category.sub_cat_id','sub_category.sub_cat_slug',
            'sub_category.sub_cat_en_name','sub_category.sub_cat_bn_name',
        )->where('cat_id','=',$CategoryData->cat_id)->get();

        $TitleData = [
            "MainBnTitle" => $CategoryData->cat_bn_name,
            "MainTitle" => $CategoryData->cat_en_name,
            "SubTitle" => null,
            "CategorySlug" => $CategoryData->cat_slug
        ];

        $News = NewsModel::join('users as creator_by', 'creator_by.id', '=', 'news.creator')
            ->leftJoin('users as modifier_by', 'modifier_by.id', '=', 'news.modifier')
            ->leftJoin('category', 'category.cat_id', '=', 'news.cat_id')
            ->select(
                'creator_by.name as creator_by',
                'modifier_by.name as modifier_by',
                'category.cat_id','category.cat_slug','category.cat_en_name','category.cat_bn_name',
                'news.news_id','news.news_head_title','news.news_slug','news.news_image','news.publish_date','news.created_date','news.modified_date'
            )
            ->where('news.cat_id', '=',$CategoryData->cat_id)
            ->orderBy('news_id','desc')
            ->paginate(10);

        return view('Site/Page/CategoryPage',compact('TitleData','SubCategoryAll','News'));
    }
    public function SubCategoryPage($cat_slug,$sub_cat_slug){
        $CategoryData = CategoryModel:: select(
            'category.cat_id','category.cat_slug',
            'category.cat_en_name','category.cat_bn_name',
        )->where('cat_slug','=',$cat_slug)->first();

        $SubCategoryData = SubCategoryModel:: select(
            'sub_category.sub_cat_id','sub_category.sub_cat_slug',
            'sub_category.sub_cat_en_name','sub_category.sub_cat_bn_name',
        )->where('sub_cat_slug','=',$sub_cat_slug)->first();

        $SubCategoryAll = SubCategoryModel::select(
            'sub_category.sub_cat_id','sub_category.sub_cat_slug',
            'sub_category.sub_cat_en_name','sub_category.sub_cat_bn_name',
        )->where('cat_id','=',$CategoryData->cat_id)->get();

        $TitleData = [
            "MainBnTitle" => $SubCategoryData->sub_cat_bn_name,
            "MainTitle" => $SubCategoryData->sub_cat_en_name,
            "SubBnTitle" => $CategoryData->cat_bn_name,
            "SubTitle" => $CategoryData->cat_en_name,
            "CategorySlug" => $CategoryData->cat_slug
        ];

        $News = NewsModel::join('users as creator_by', 'creator_by.id', '=', 'news.creator')
            ->leftJoin('users as modifier_by', 'modifier_by.id', '=', 'news.modifier')
            ->leftJoin('category', 'category.cat_id', '=', 'news.cat_id')
            ->select(
                'creator_by.name as creator_by',
                'modifier_by.name as modifier_by',
                'category.cat_id','category.cat_slug','category.cat_en_name','category.cat_bn_name',
                'news.news_id','news.news_head_title','news.news_slug','news.news_image','news.publish_date','news.created_date','news.modified_date'
            )
            ->where('news.cat_id', '=',$CategoryData->cat_id)
            ->where('news.sub_cat_id', '=',$SubCategoryData->sub_cat_id)
            ->orderBy('news_id','desc')
            ->paginate(10);

        return view('Site/Page/CategoryPage',compact('TitleData','SubCategoryAll','News'));
    }
}
