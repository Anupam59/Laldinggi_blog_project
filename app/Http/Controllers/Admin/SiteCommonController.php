<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\SiteCommonModel;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class SiteCommonController extends Controller
{
    public function AboutEdit(){
        $id = 1;
        $SiteCommon = SiteCommonModel::where('site_common_id',$id)
            ->select(
                'site_about_title',
                'site_about_bn_title',
                'site_about_description',
                'site_about_bn_description',
                'site_about_img',
            )->first();

        return view('Admin/Pages/SiteCommon/About',compact('SiteCommon'));
    }

    public function AboutUpdate(Request $request){
        $id = 1;
        $data =  array();
        $data['site_about_title'] = $request->site_about_title;
        $data['site_about_bn_title'] = $request->site_about_bn_title;
        $data['site_about_description'] = $request->site_about_description;
        $data['site_about_bn_description'] = $request->site_about_bn_description;
        $data['modifier'] = 1;
        $data['modified_date'] = date("Y-m-d h:i:s");

        $img =  $request->file('site_about_img');
        if ($img){
            $ImageName ='about_img.'.$img->getClientOriginalExtension();
            $Path = "Images/site-info/";
            $ResizeImage = Image::make($img)->resize(490,380);
            $url = $Path.$ImageName;
            $url_database = "/".$Path.$ImageName;
            $ResizeImage ->save($url);
            $OldData = SiteCommonModel::where('site_common_id','=',$id)->select('site_about_img')->first();
            $OldImage = $OldData->site_about_img;
            $OldImageUrl = substr($OldImage, 1);
            if ($OldImage){
                unlink($OldImageUrl);
                $data['site_about_img'] = $url_database;
            }else{
                $data['site_about_img'] = $url_database;
            }
        }

        $res = SiteCommonModel::where('site_common_id','=',$id)->update($data);


        if ($res){
            return back()->with('success_message','About Update Successfully!');
        }else{
            return back()->with('error_message','About Update Fail!');
        }

    }

    public function CommunicationEdit(){
        $id = 1;
        $SiteCommon = SiteCommonModel::where('site_common_id',$id)
            ->select(
                'site_fb_link',
                'site_tw_link',
                'site_yt_link',
                'site_ig_link',
                'site_in_link',
                'site_spe_link',
                'site_communication',
                'site_bn_communication',
            )->first();
        return view('Admin/Pages/SiteCommon/Communication',compact('SiteCommon'));
    }

    public function CommunicationUpdate(Request $request){
        $id = 1;
        $data =  array();
        $data['site_fb_link'] = $request->site_fb_link;
        $data['site_tw_link'] = $request->site_tw_link;
        $data['site_yt_link'] = $request->site_yt_link;
        $data['site_ig_link'] = $request->site_ig_link;
        $data['site_in_link'] = $request->site_in_link;
        $data['site_spe_link'] = $request->site_spe_link;
        $data['site_communication'] = $request->site_communication;
        $data['site_bn_communication'] = $request->site_bn_communication;

        $data['modifier'] = 1;
        $data['modified_date'] = date("Y-m-d h:i:s");

        $res = SiteCommonModel::where('site_common_id','=',$id)->update($data);

        if ($res){
            return back()->with('success_message','About Update Successfully!');
        }else{
            return back()->with('error_message','About Update Fail!');
        }

    }

    public function PolicyEdit(){
        $id = 1;
        $SiteCommon = SiteCommonModel::where('site_common_id',$id)
            ->select(
                'site_privacy_policy',
                'site_bn_privacy_policy',
            )->first();
        return view('Admin/Pages/SiteCommon/Policy',compact('SiteCommon'));
    }

    public function PolicyUpdate(Request $request){
        $id = 1;
        $data =  array();
        $data['site_privacy_policy'] = $request->site_privacy_policy;
        $data['site_bn_privacy_policy'] = $request->site_bn_privacy_policy;

        $data['modifier'] = 1;
        $data['modified_date'] = date("Y-m-d h:i:s");

        $res = SiteCommonModel::where('site_common_id','=',$id)->update($data);

        if ($res){
            return back()->with('success_message','About Update Successfully!');
        }else{
            return back()->with('error_message','About Update Fail!');
        }

    }

    public function TermsEdit(){
        $id = 1;
        $SiteCommon = SiteCommonModel::where('site_common_id',$id)
            ->select(
                'site_terms',
                'site_bn_terms',
            )->first();
        return view('Admin/Pages/SiteCommon/Terms',compact('SiteCommon'));
    }

    public function TermsUpdate(Request $request){
        $id = 1;
        $data =  array();
        $data['site_terms'] = $request->site_terms;
        $data['site_bn_terms'] = $request->site_bn_terms;

        $data['modifier'] = 1;
        $data['modified_date'] = date("Y-m-d h:i:s");

        $res = SiteCommonModel::where('site_common_id','=',$id)->update($data);

        if ($res){
            return back()->with('success_message','About Update Successfully!');
        }else{
            return back()->with('error_message','About Update Fail!');
        }

    }

    public function InfoEdit(){
        $id = 1;
        $SiteCommon = SiteCommonModel::where('site_common_id',$id)
            ->select(
                'time_zone',
                'site_name',
                'site_email',
                'site_contact',
                'site_bn_contact',

                'site_title',
                'site_keyword',
                'site_description',

                'site_link',
                'site_address',
                'site_bn_address',

                'site_logo',
                'site_logo_big',
                'site_favicon',
                'site_default_img',
            )->first();
        return view('Admin/Pages/SiteCommon/Info',compact('SiteCommon'));
    }

    public function InfoUpdate(Request $request){
        $id = 1;
        $data =  array();
        $data['time_zone'] = $request->time_zone;
        $data['site_name'] = $request->site_name;
        $data['site_email'] = $request->site_email;
        $data['site_contact'] = $request->site_contact;
        $data['site_bn_contact'] = $request->site_bn_contact;

        $data['site_title'] = $request->site_title;
        $data['site_keyword'] = $request->site_keyword;
        $data['site_description'] = $request->site_description;

        $data['site_link'] = $request->site_link;
        $data['site_address'] = $request->site_address;
        $data['site_bn_address'] = $request->site_bn_address;

        $data['modifier'] = 1;
        $data['modified_date'] = date("Y-m-d h:i:s");

        $site_logo =  $request->file('site_logo');
        if ($site_logo){
            $ImageName = 'logo.'.$site_logo->getClientOriginalExtension();
            $Path = "Images/site-info/";
            $ResizeImage = Image::make($site_logo)->resize(490,380);
            $url = $Path.$ImageName;
            $url_database = "/".$Path.$ImageName;
            $ResizeImage ->save($url);
            $OldData = SiteCommonModel::where('site_common_id','=',$id)->select('site_logo')->first();
            $OldImage = $OldData->site_logo;
            $OldImageUrl = substr($OldImage, 1);
            if ($OldImage){
                unlink($OldImageUrl);
                $data['site_logo'] = $url_database;
            }else{
                $data['site_logo'] = $url_database;
            }
        }



        $site_logo_big =  $request->file('site_logo_big');
        if ($site_logo_big){
            $ImageName ='logo_big.'.$site_logo_big->getClientOriginalExtension();
            $Path = "Images/site-info/";
            $ResizeImage = Image::make($site_logo_big)->resize(490,380);
            $url = $Path.$ImageName;
            $url_database = "/".$Path.$ImageName;
            $ResizeImage ->save($url);
            $OldData = SiteCommonModel::where('site_common_id','=',$id)->select('site_logo_big')->first();
            $OldImage = $OldData->site_logo_big;
            $OldImageUrl = substr($OldImage, 1);
            if ($OldImage){
                unlink($OldImageUrl);
                $data['site_logo_big'] = $url_database;
            }else{
                $data['site_logo_big'] = $url_database;
            }
        }



        $site_favicon =  $request->file('site_favicon');
        if ($site_favicon){
            $ImageName ='favicon.'.$site_favicon->getClientOriginalExtension();
            $Path = "Images/site-info/";
            $ResizeImage = Image::make($site_favicon)->resize(490,380);
            $url = $Path.$ImageName;
            $url_database = "/".$Path.$ImageName;
            $ResizeImage ->save($url);
            $OldData = SiteCommonModel::where('site_common_id','=',$id)->select('site_favicon')->first();
            $OldImage = $OldData->site_favicon;
            $OldImageUrl = substr($OldImage, 1);
            if ($OldImage){
                unlink($OldImageUrl);
                $data['site_favicon'] = $url_database;
            }else{
                $data['site_favicon'] = $url_database;
            }
        }



        $site_default_img =  $request->file('site_default_img');
        if ($site_default_img){
            $ImageName ='default_img.'.$site_default_img->getClientOriginalExtension();
            $Path = "Images/site-info/";
            $ResizeImage = Image::make($site_default_img)->resize(490,380);
            $url = $Path.$ImageName;
            $url_database = "/".$Path.$ImageName;
            $ResizeImage ->save($url);
            $OldData = SiteCommonModel::where('site_common_id','=',$id)->select('site_default_img')->first();
            $OldImage = $OldData->site_default_img;
            $OldImageUrl = substr($OldImage, 1);
            if ($OldImage){
                unlink($OldImageUrl);
                $data['site_default_img'] = $url_database;
            }else{
                $data['site_default_img'] = $url_database;
            }
        }




        $res = SiteCommonModel::where('site_common_id','=',$id)->update($data);
        if ($res){
            return back()->with('success_message','About Update Successfully!');
        }else{
            return back()->with('error_message','About Update Fail!');
        }

    }

}
