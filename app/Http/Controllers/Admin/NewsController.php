<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CategoryModel;
use App\Models\DistrictModel;
use App\Models\DivisionModel;
use App\Models\NewsModel;
use App\Models\NewsPageModel;
use App\Models\NewsSeoModel;
use App\Models\NewsSeriesModel;
use App\Models\NewsStatusModel;
use App\Models\NewsTagModel;
use App\Models\NewsTypeModel;
use App\Models\SubCategoryModel;
use App\Models\SubSubCategoryModel;
use App\Models\UpazilaModel;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;

class NewsController extends Controller
{
    public function NewsIndex(){
        $cat_id = \request('cat_id');
        $sub_cat_id = \request('sub_cat_id');
        $sub_sub_cat_id = \request('sub_sub_cat_id');
        $division_id = \request('division_id');
        $district_id = \request('district_id');
        $upazila_id = \request('upazila_id');
        $news_page_id = \request('news_page_id');
        $news_type_id = \request('news_type_id');
        $news_status_id = \request('news_status_id');


        $Category = CategoryModel::where('status',1)->get();
        $SubCategory = '';
        $SubSubCategory = '';
        $Division = DivisionModel::where('status',1)->get();
        $District = '';
        $Upazila = '';
        $NewsPage = NewsPageModel::where('status',1)->get();
        $NewsType = NewsTypeModel::where('status',1)->get();
        $NewsSeries = NewsSeriesModel::where('status',1)->get();
        $NewsStatus = NewsStatusModel::where('status',1)->get();
        $User = User::where('status',1)->get();

        $query = NewsModel::join('users as creator_by', 'creator_by.id', '=', 'news.creator')
            ->leftJoin('users as modifier_by', 'modifier_by.id', '=', 'news.modifier')
            ->select(
                'creator_by.name as creator_by',
                'modifier_by.name as modifier_by',
                'news.*'
            );

        if ($cat_id){
            $query = $query->where('news.cat_id', '=',$cat_id);
            $SubCategory = SubCategoryModel::where('cat_id',$cat_id)->where('status',1)->get();
        }
        if ($sub_cat_id){
            $query = $query->where('news.sub_cat_id', '=',$sub_cat_id);
            $SubSubCategory = SubSubCategoryModel::where('sub_cat_id',$sub_cat_id)->where('status',1)->get();
        }
        if ($sub_sub_cat_id){
            $query = $query->where('news.sub_sub_cat_id', '=',$sub_sub_cat_id);
        }
        if ($division_id){
            $query = $query->where('news.division_id', '=',$division_id);
            $District = DistrictModel::where('division_id',$division_id)->where('status',1)->get();
        }
        if ($district_id){
            $query = $query->where('news.district_id', '=',$district_id);
            $Upazila = UpazilaModel::where('district_id',$district_id)->where('status',1)->get();
        }
        if ($upazila_id){
            $query = $query->where('news.upazila_id', '=',$upazila_id);
        }
        if ($news_page_id){
            $query = $query->where('news.news_page_id', '=',$news_page_id);
        }
        if ($news_type_id){
            $query = $query->where('news.news_type_id', '=',$news_type_id);
        }
        if ($news_status_id){
            $query = $query->where('news.news_status_id', '=',$news_status_id);
        }

        $News = $query->orderBy('news_id','asc')->paginate(10);
        return view('Admin/Pages/News/NewsIndex',compact('Category','SubCategory','SubSubCategory','Division','District','Upazila','NewsPage','NewsType','NewsSeries','NewsStatus','User','News'));
    }

    public function NewsCreate(){
        $Category = CategoryModel::where('status',1)->get();
        $Division = DivisionModel::where('status',1)->get();
        $NewsPage = NewsPageModel::where('status',1)->get();
        $NewsType = NewsTypeModel::where('status',1)->get();
        $NewsSeries = NewsSeriesModel::where('status',1)->get();
        $NewsStatus = NewsStatusModel::where('status',1)->get();
        $User = User::where('status',1)->get();
        return view('Admin/Pages/News/NewsCreate',compact('Category','Division','NewsPage','NewsType','NewsSeries','NewsStatus','User'));
    }

    public function NewsEntry(Request $request){

        $validation = $request->validate([
            'news_head_title' => 'required',
            'cat_id' => 'required',
        ]);
        $data =  array();
        $data['news_head_title'] = $request->news_head_title;
        $data['news_slug'] = Str::slug($request->news_head_title, '-');
        $data['news_head_caption_tag'] = $request->news_head_caption_tag;
        $data['news_details_brief'] = $request->news_details_brief;
        $data['news_details'] = $request->news_details;

        $news_image =  $request->file('news_image');
        if ($news_image){
            $ImageName =time().".".$news_image->getClientOriginalExtension();
            $Path = "Images/news-img/";
            $ResizeImage = Image::make($news_image)->resize(640,427);
            $url = $Path.$ImageName;
            $url_database = "/".$Path.$ImageName;
            $ResizeImage ->save($url);
            $data['news_image'] = $url_database;
        }

        $data['news_image_caption'] = $request->news_image_caption;
        $data['news_vidos'] = $request->news_vidos;
        $data['news_vidos_caption'] = $request->news_vidos_caption;
        $data['news_audio'] = $request->news_audio;
        $data['news_audio_caption'] = $request->news_audio_caption;
        $data['news_source'] = $request->news_source;
        $data['news_source_link'] = $request->news_source_link;
        $data['news_zone'] = $request->news_zone;
        $data['division_id'] = $request->division_id;
        $data['district_id'] = $request->district_id;
        $data['upazila_id'] = $request->upazila_id;
        $data['news_writer'] = $request->news_writer;
        $news_reporter = $request->news_reporter;
        if ($news_reporter){
            $data['news_reporter'] = implode(",",$request->news_reporter);
        }
        $data['cat_id'] = $request->cat_id;
        $data['sub_cat_id'] = $request->sub_cat_id;
        $data['sub_sub_cat_id'] = $request->sub_sub_cat_id;
        $data['news_page_id'] = $request->news_page_id;
        $data['news_type_id'] = $request->news_type_id;
        $data['news_series_id'] = $request->news_series_id;
        $data['news_status_id'] = $request->news_status_id;
        $data['status'] = 1;
        $data['approver'] = $request->approver;
        $data['creator'] = 1;
        $data['modifier'] = 1;
        $data['publish_date'] = $request->publish_date;
        $data['created_date'] = date("Y-m-d h:i:s");
        $data['modified_date'] = date("Y-m-d h:i:s");

        $res = NewsModel::insertGetId($data);

        if($res){
            $news_seo_title = $request->news_seo_title;
            $news_seo_description = $request->news_seo_description;
            if($news_seo_title){
                $data1 =  array();
                $data1['news_id'] = $res;
                $data1['news_seo_title'] = $news_seo_title;
                $data1['news_seo_description'] = $news_seo_description;
                NewsSeoModel::insert($data1);
            }

            $news_tag_keyword = $request->news_tag_keyword;
            if($news_tag_keyword){
                $data2 =  array();
                $data2['news_id'] = $res;
                $data2['news_tag_keyword'] = $news_tag_keyword;
                NewsTagModel::insert($data2);
            }
        }




        if ($res){
            return back()->with('success_message','News Add Successfully!');
        }else{
            return back()->with('error_message','News Add Fail!');
        }

    }

    public function NewsEdit($id){
        $Category = CategoryModel::where('status',1)->get();
        $SubCategory = '';
        $SubSubCategory = '';
        $Division = DivisionModel::where('status',1)->get();
        $District = '';
        $Upazila = '';
        $NewsPage = NewsPageModel::where('status',1)->get();
        $NewsType = NewsTypeModel::where('status',1)->get();
        $NewsStatus = NewsStatusModel::where('status',1)->get();
        $NewsSeries = NewsSeriesModel::where('status',1)->get();
        $User = User::where('status',1)->get();
        $News = NewsModel::where('news_id',$id)->first();
        $NewsTag = NewsTagModel::where('news_id',$id)->first();
        $NewsSeo = NewsSeoModel::where('news_id',$id)->first();

        $cat_id = $News->cat_id;
        $sub_cat_id = $News->sub_cat_id;
        $division_id = $News->division_id;
        $district_id = $News->district_id;

        if ($cat_id){
            $SubCategory = SubCategoryModel::where('cat_id',$cat_id)->where('status',1)->get();
        }
        if ($sub_cat_id){
            $SubSubCategory = SubSubCategoryModel::where('sub_cat_id',$sub_cat_id)->where('status',1)->get();
        }
        if ($division_id){
            $District = DistrictModel::where('division_id',$division_id)->where('status',1)->get();
        }
        if ($district_id){
            $Upazila = UpazilaModel::where('district_id',$district_id)->where('status',1)->get();
        }


        return view('Admin/Pages/News/NewsUpdate',compact('News','NewsTag','NewsSeo','Category','SubCategory','SubSubCategory','Division','District','Upazila','NewsPage','NewsType','NewsSeries','NewsStatus','User'));
    }

    public function NewsStatus($id){
        $NewsStatus = NewsStatusModel::where('status',1)->get();
        $News = NewsModel::where('news_id',$id)->select(
            'news_id',
            'news_head_title',
            'news_status_id',
            'publish_date',
            'status',
        )->first();
        return view('Admin/Pages/News/NewsStatus',compact('News','NewsStatus'));
    }

    public function NewsUpdate(Request $request, $id){

//        $NewsTag = NewsTagModel::where('news_id',$id)->first();
//        dd($NewsTag);


        $request->validate([
            'news_head_title' => 'required',
            'cat_id' => 'required',
        ]);

        $data =  array();
        $data['news_head_title'] = $request->news_head_title;
        $data['news_slug'] = Str::slug($request->news_head_title, '-');
        $data['news_head_caption_tag'] = $request->news_head_caption_tag;
        $data['news_details_brief'] = $request->news_details_brief;
        $data['news_details'] = $request->news_details;

        $news_image =  $request->file('news_image');
        if ($news_image){
            $ImageName =time().'.'.$news_image->getClientOriginalExtension();
            $Path = "Images/news-img/";
            $ResizeImage = Image::make($news_image)->resize(640,427);
            $url = $Path.$ImageName;
            $url_database = "/".$Path.$ImageName;
            $ResizeImage ->save($url);
            $OldData = NewsModel::where('news_id','=',$id)->select('news_image')->first();
            $OldImage = $OldData->news_image;
            $OldImageUrl = substr($OldImage, 1);
            if ($OldImage){
                if (file_exists($OldImageUrl)){
                    unlink($OldImageUrl);
                    $data['news_image'] = $url_database;
                }else{
                    $data['news_image'] = $url_database;
                }
            }else{
                $data['news_image'] = $url_database;
            }
        }

        $data['news_image_caption'] = $request->news_image_caption;
        $data['news_vidos'] = $request->news_vidos;
        $data['news_vidos_caption'] = $request->news_vidos_caption;
        $data['news_audio'] = $request->news_audio;
        $data['news_audio_caption'] = $request->news_audio_caption;
        $data['news_source'] = $request->news_source;
        $data['news_source_link'] = $request->news_source_link;
        $data['news_zone'] = $request->news_zone;
        $data['division_id'] = $request->division_id;
        $data['district_id'] = $request->district_id;
        $data['upazila_id'] = $request->upazila_id;
        $data['news_writer'] = $request->news_writer;
        $news_reporter = $request->news_reporter;
        if ($news_reporter){
            $data['news_reporter'] = implode(",",$request->news_reporter);
        }
        $data['cat_id'] = $request->cat_id;
        $data['sub_cat_id'] = $request->sub_cat_id;
        $data['sub_sub_cat_id'] = $request->sub_sub_cat_id;
        $data['news_page_id'] = $request->news_page_id;
        $data['news_type_id'] = $request->news_type_id;
        $data['news_series_id'] = $request->news_series_id;
        $data['news_status_id'] = $request->news_status_id;
        $data['status'] = 1;
        $data['approver'] = $request->approver;
        $data['modifier'] = 1;
        $data['publish_date'] = $request->publish_date;
        $data['modified_date'] = date("Y-m-d h:i:s");
        $res = NewsModel::where('news_id','=',$id)->update($data);

        $news_seo_title = $request->news_seo_title;
        $news_seo_description = $request->news_seo_description;
        if($news_seo_title){
            $data1 =  array();
            $data1['news_seo_title'] = $news_seo_title;
            $data1['news_seo_description'] = $news_seo_description;
            NewsSeoModel::where('news_id','=',$id)->update($data1);
        }

        $news_tag_keyword = $request->news_tag_keyword;
        if($news_tag_keyword){
            $data2 =  array();
            $data2['news_tag_keyword'] = $news_tag_keyword;
            $NewsTag = NewsTagModel::where('news_id',$id)->first();
            if($NewsTag){
                NewsTagModel::where('news_id','=',$id)->update($data2);
            }
            if($NewsTag==null){
                $data2['news_id'] = $id;
                NewsTagModel::insert($data2);
            }

        }

        if ($res){
            return back()->with('success_message','News Update Successfully!');
        }else{
            return back()->with('error_message','News Update Fail!');
        }

    }


}
