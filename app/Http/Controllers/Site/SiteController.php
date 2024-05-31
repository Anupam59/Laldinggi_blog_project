<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\MenuModel;
use App\Models\NewsModel;
use App\Models\NewsTagModel;
use Illuminate\Http\Request;

class SiteController extends Controller
{
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
//        dd($SelectiveNews);
        return view('Site/Page/HomePage',compact(
            'LeadNews', 'TopNews', 'SelectiveNews', 'VideoNews','AudioNews',
            'RecentNews','TabMenu','PoliticsNews','BangladeshNews','InternationalNews','SportsNews'));
    }
    public function NewsTagKeyword($news_tag_keyword){
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
            ->get();
        return $News;
    }
    public function CategoryPage(){
        return view('Site/Page/CategoryPage');
    }
}
